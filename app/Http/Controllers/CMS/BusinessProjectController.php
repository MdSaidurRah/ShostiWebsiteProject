<?php

namespace App\Http\Controllers\CMS;

use Illuminate\Routing\Controller;
use App\LibraryFunctions\accesslogger;
use App\LibraryFunctions\crudlib;
use App\LibraryFunctions\imagelib;
use App\Models\BlogCategory;
use App\Models\BusinessProject;
use App\Models\WebsitePage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;

class BusinessProjectController extends Controller
{
    public $accessLogger;
    public $crudObject;
    public $imageObject;
    public $userId;

    public function __construct()
    {
        $this->accessLogger = new accesslogger();
        $this->crudObject   = new crudlib();
        $this->imageObject  = new imagelib();
        $this->userId       = Session::get('userId');
        // $this->middleware('checkPermission');
    }

    /** ✅ List all pages */
    public function index()
    {
        $pages = WebsitePage::latest()->get();
        return view('cms.projects.index', compact('pages'));
    }

    /** ✅ Show form to create a page */
    public function create()
    {
        $blog_categories = DB::table('blog_categories')
            ->select('*')
            ->orderBy('id','DESC')
            ->get();

        return view('cms.projects.create')
            ->with('blog_categories', $blog_categories);
    }

    /** ✅ Store a new page */
    public function store(Request $request)
    {

        $userId = Session::get('userId');

        $request->validate([
            'project_title'       => 'required|string|max:255',
            'project_description' => 'required|string',
            'status'              => 'required|string',
            'project_photo'         => 'nullable|file|mimes:jpg,jpeg,png|max:2048'
        ]);

        // Check for duplicate project
        if (BusinessProject::where('project_title', $request->project_title)->exists()) {
            flash()->addError('Sorry, Duplicate Found, Business Project save operation has been failed.');
            return Redirect::back();
        }

        $photoPath = '';
        if ($request->project_photo) {
            $uploadedPath = 'uploads/project-cover/';
            $storagePath  = 'uploads/project-cover/';
            $parent       = "project-cover";

            $photoUrl  = $this->imageObject->photoUpload(
                $request,
                'project_photo',
                $uploadedPath,
                $storagePath,
                $parent,
                $userId
            );

            $photoPath = $photoUrl;
        }



        $project = BusinessProject::create([
            'name'                  => $request->name,
            'slug'                => generateSlug($request->name),
            'project_description' => $request->project_description,
            'project_type'        => $request->project_type,
            'project_category'    => $request->project_category,
            'project_visibility' => $request->project_visibility,
            'status'              => $request->status,
            'project_photo'         => $photoPath,
            'created_by'          => $userId,
        ]);

        if ($project) {
            $this->accessLogger->logEntry($userId, 'Business Project Submit.', 'Business Project', '', '');
            flash()->addSuccess('Business Project save operation has been successful.');
            return Redirect::back();
        } else {
            flash()->addError('Sorry, Business Project save operation has been failed.');
            return Redirect::back();
        }

        
    }


    public function edit($id)
    {

        $keyId = Crypt::decryptString($id);
        $project  = BusinessProject::findOrFail($keyId);
        $blog_categories = DB::table('blog_categories')
                    ->select('*')
                    ->orderBy('id','DESC')
                    ->get();

        return view('cms.projects.edit', compact('project','blog_categories'));
    }



    public function update(Request $request)
    {

        $userId = Session::get('userId');
        $project = BusinessProject::findOrFail($request->id);

        // Check for duplicate (excluding current ID)
        if (BusinessProject::where('name', $request->project_title)
                ->where('id', '!=', $request->id)
                ->exists()) {
            flash()->addError('Sorry, Duplicate Found, Business Project update operation has been failed.');
            return Redirect::back();
        }

        // Handle cover photo (keep old if not replaced)
        $photoPath = $project->project_photo; // keep old photo if not replaced
        if ($request->project_photo) {
            $uploadedPath = 'uploads/project-cover/';
            $storagePath  = 'uploads/project-cover/';
            $parent       = "project-cover";

            $photoUrl  = $this->imageObject->photoUpload(
                $request,
                'project_photo',
                $uploadedPath,
                $storagePath,
                $parent,
                $userId
            );
            $photoPath = $photoUrl;
        }


        // Update the project
        $updated = $project->update([
            'name'                  => $request->name,
            'slug'                => generateSlug($request->name),
            'project_description' => $request->project_description,
            'project_type'        => $request->project_type,
            'project_category'    => $request->project_category,
            'project_visibility' => $request->project_visibility,
            'project_status'              => $request->project_status,
            'project_photo'         => $photoPath,
            'created_by'          => $userId,
        ]);

        if ($updated) {
            $this->accessLogger->logEntry($userId, 'Business Project Update.', 'Business Project', '', '');
            flash()->addSuccess('Business Project update operation has been successful.');
            return Redirect::back();
        } else {
            flash()->addError('Sorry, Business Project update operation has been failed.');
            return Redirect::back();
        }
    }

    /** ✅ Get all pages (for DataTables or listing) */
    public function getAllItems(Request $request)
    {
        $business_projects = DB::table('business_projects')->select(['*'])->orderBy('id', 'DESC')->get();

        return datatables()->of($business_projects)
            ->addIndexColumn()
            ->addColumn('project_photo', function ($business_projects) {
                if (!empty($business_projects->project_photo)) {
                    $url = asset($business_projects->project_photo);
                    return '<img src="' . $url . '" alt="Banner Image" width="80" height="50" style="object-fit:cover; border-radius:4px;" />';
                }
                return '<span class="text-muted">No Image</span>';
            })
            ->addColumn('action', function ($business_projects) {
                $btn2 = '<a href="' . '/project/edit/' . Crypt::encryptString($business_projects->id) . '" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit</a> ';
                return $btn2;
            })
            ->rawColumns(['action','project_photo'])
            ->make(true);
    }
}