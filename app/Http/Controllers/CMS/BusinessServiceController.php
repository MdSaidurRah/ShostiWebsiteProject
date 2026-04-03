<?php

namespace App\Http\Controllers\CMS;

use Illuminate\Routing\Controller;
use App\LibraryFunctions\accesslogger;
use App\LibraryFunctions\crudlib;
use App\LibraryFunctions\imagelib;
use App\Models\BlogCategory;
use App\Models\BusinessService;
use App\Models\WebsitePage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;

class BusinessServiceController extends Controller
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
        return view('cms.services.index', compact('pages'));
    }

    /** ✅ Show form to create a page */
    public function create()
    {
        $blog_categories = DB::table('blog_categories')
            ->select('*')
            ->orderBy('id','DESC')
            ->get();

        return view('cms.services.create')
            ->with('blog_categories', $blog_categories);
    }

    /** ✅ Store a new page */
    public function store(Request $request)
    {

        $userId = Session::get('userId');

        $request->validate([
            'service_title'      => 'required|string|max:255',
            'service_defination' => 'required|string',
            'cover_photo'        => 'nullable|file|mimes:jpg,jpeg,png|max:2048'
        ]);

        // Check for duplicate service
        if (BusinessService::where('service_title', $request->service_title)->exists()) {
            flash()->addError('Sorry, Duplicate Found, Business Service save operation has been failed.');
            return Redirect::back();
        }

        $photoPath='';
        if($request->cover_photo)
        {
            $uploadedPath = 'uploads/service-cover/';
            $storagePath = 'uploads/service-cover/';
            $parent = "service-cover";
            $photoUrl = $this->imageObject->photoUpload($request,'cover_photo', $uploadedPath, $storagePath, $parent, $userId);
            $photoPath=$photoUrl;
        }

        $service = BusinessService::create([
            'service_title'      => $request->service_title,
            'slug'               => generateSlug($request->service_title),
            'service_defination' => $request->service_defination,
            'status'             => $request->status,
            'cover_photo'        => $photoPath,
            'created_by'         => $userId,
        ]);

        if ($service) {
            $this->accessLogger->logEntry($userId, 'Business Service Submit.', 'Business Service', '', '');
            flash()->addSuccess('Business Service save operation has been successful.');
            return Redirect::back();
        } else {
            flash()->addError('Sorry, Business Service save operation has been failed.');
            return Redirect::back();
        }
    }


    public function edit($id)
    {
        $keyId = Crypt::decryptString($id);
        $service  = DB::table('business_services')->where('id',$keyId)->first();

        $blog_categories = DB::table('blog_categories')
                    ->select('*')
                    ->orderBy('id','DESC')
                    ->get();

        return view('cms.services.edit', compact('service','blog_categories'));
    }




    public function update(Request $request)
    {

        $userId = Session::get('userId');

        $request->validate([
            'id'                => 'required|integer|exists:business_services,id',
            'service_title'      => 'required|string|max:255',
            'service_defination' => 'required|string',
            'status'             => 'required|string',
            'cover_photo'        => 'nullable|file|mimes:jpg,jpeg,png|max:2048'
        ]);

        $service = BusinessService::findOrFail($request->id);

        // Check for duplicate (exclude current ID)
        if (BusinessService::where('service_title', $request->service_title)
                ->where('id', '!=', $request->id)
                ->exists()) {
            flash()->addError('Sorry, Duplicate Found, Business Service update operation has been failed.');
            return Redirect::back();
        }

        // Handle cover photo update
        $photoPath = $service->cover_photo; // keep old photo if not replaced
        if ($request->cover_photo) {
            $uploadedPath = 'uploads/service-cover/';
            $storagePath = 'uploads/service-cover/';
            $parent = "service-cover";
            $photoUrl = $this->imageObject->photoUpload(
                $request,
                'cover_photo',
                $uploadedPath,
                $storagePath,
                $parent,
                $userId
            );
            $photoPath = $photoUrl; 
        }

        // Update existing service
        $service->update([
            'service_title'      => $request->service_title,
            'slug'               => generateSlug($request->service_title),
            'service_defination' => $request->service_defination,
            'status'             => $request->status,
            'cover_photo'        => $photoPath,
            'updated_by'         => $userId,
        ]);

        if ($service) {
            $this->accessLogger->logEntry($userId, 'Business Service Update.', 'Business Service', '', '');
            flash()->addSuccess('Business Service update operation has been successful.');
            return Redirect::back();
        } else {
            flash()->addError('Sorry, Business Service update operation has been failed.');
            return Redirect::back();
        }
    }

    /** ✅ Get all pages (for DataTables or listing) */
    public function getAllItems(Request $request)
    {
        $services = DB::table('business_services')->select(['*'])->orderBy('id', 'DESC')->get();

        return datatables()->of($services)
            ->addIndexColumn()
            ->addColumn('cover_photo', function ($services) {
                if (!empty($services->cover_photo)) {
                    $url = asset($services->cover_photo);
                    return '<img src="' . $url . '" alt="Banner Image" width="80" height="50" style="object-fit:cover; border-radius:4px;" />';
                }
                return '<span class="text-muted">No Image</span>';
            })
            ->addColumn('action', function ($services) {
             
                $btn2 = '<a href="' . '/service/edit/' . Crypt::encryptString($services->id) . '" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit</a> ';
                return $btn2;
            })
            ->rawColumns(['action','cover_photo'])
            ->make(true);
    }
}