<?php

namespace App\Http\Controllers\CMS;

use Illuminate\Routing\Controller;
use App\LibraryFunctions\accesslogger;
use App\LibraryFunctions\crudlib;
use App\LibraryFunctions\imagelib;
use App\Models\BlogCategory;
use App\Models\BusinessPackage;
use App\Models\BusinessService;
use App\Models\WebsitePage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;

class BusinessPackageController extends Controller
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
        return view('cms.packages.index', compact('pages'));
    }

    /** ✅ Show form to create a page */
    public function create()
    {
        $blog_categories = DB::table('blog_categories')
            ->select('*')
            ->orderBy('id','DESC')
            ->get();

        return view('cms.packages.create')
            ->with('blog_categories', $blog_categories);
    }

    /** ✅ Store a new page */
    public function store(Request $request)
    {

        $userId = Session::get('userId');
        $request->validate([
            'title'      => 'required|string|max:255',
            'cover_photo'        => 'nullable|file|mimes:jpg,jpeg,png|max:2048'
        ]);

        // Check for duplicate service
        if (BusinessPackage::where('title', $request->title)->exists()) {
            flash()->addError('Sorry, Duplicate Found, Business package save operation has been failed.');
            return Redirect::back();
        }

        $photoPath='';
        if($request->cover_photo)
        {
            $uploadedPath = 'uploads/pacakge-cover/';
            $storagePath = 'uploads/pacakge-cover/';
            $parent = "pacakge-cover";
            $photoUrl = $this->imageObject->photoUpload($request,'cover_photo', $uploadedPath, $storagePath, $parent, $userId);
            $photoPath=$photoUrl;
        }

        $package = BusinessPackage::create([
            'title'             => $request->title,
            'slug'               => generateSlug($request->title),
            'description'       => $request->description,
            'duration'             => $request->duration,
            'price'             => $request->price,
            'size'             => $request->size,
            'status'             => $request->status,
            'cover_photo'        => $photoPath,
            'created_by'         => $userId,
        ]);

        if ($package) {
            $this->accessLogger->logEntry($userId, 'Business Package Submit.', 'Business Package', '', '');
            flash()->addSuccess('Business Package save operation has been successful.');
            return Redirect::back();
        } else {
            flash()->addError('Sorry, Business Package save operation has been failed.');
            return Redirect::back();
        }
    }


    public function edit($id)
    {
        $keyId = Crypt::decryptString($id);
        $package  = DB::table('business_packages')->where('id',$keyId)->first();

        return view('cms.packages.edit', compact('package'));
    }




    public function update(Request $request)
    {

        $userId = Session::get('userId');

        $request->validate([
            'id'                => 'required|integer|exists:business_packages,id',
            'title'      => 'required|string|max:255',
        ]);

        $package = BusinessPackage::findOrFail($request->id);

        // Check for duplicate (exclude current ID)
        if (BusinessPackage::where('title', $request->title)
                ->where('id', '!=', $request->id)
                ->exists()) {
            flash()->addError('Sorry, Duplicate Found, Business package update operation has been failed.');
            return Redirect::back();
        }

        // Handle cover photo update
        $photoPath = $package->cover_photo; // keep old photo if not replaced
        if ($request->cover_photo) {
            $uploadedPath = 'uploads/package-cover/';
            $storagePath = 'uploads/package-cover/';
            $parent = "package-cover";
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
        $packageUpdate =  $package->update([
            'title'             => $request->title,
            'slug'               => generateSlug($request->title),
            'description'       => $request->description,
            'duration'             => $request->duration,
            'price'             => $request->price,
            'size'             => $request->size,
            'status'             => $request->status,
            'cover_photo'        => $photoPath,
            'created_by'         => $userId,
        ]);

        if ($packageUpdate) {
            $this->accessLogger->logEntry($userId, 'Business package Update.', 'Business package', '', '');
            flash()->addSuccess('Business package update operation has been successful.');
            return Redirect::back();
        } else {
            flash()->addError('Sorry, Business package update operation has been failed.');
            return Redirect::back();
        }
    }

    /** ✅ Get all pages (for DataTables or listing) */
    public function getAllItems(Request $request)
    {
        $package = DB::table('business_packages')->select(['*'])->orderBy('id', 'DESC')->get();

        return datatables()->of($package)
            ->addIndexColumn()
            ->addColumn('cover_photo', function ($package) {
                if (!empty($package->cover_photo)) {
                    $url = asset($package->cover_photo);
                    return '<img src="' . $url . '" alt="Banner Image" width="80" height="50" style="object-fit:cover; border-radius:4px;" />';
                }
                return '<span class="text-muted">No Image</span>';
            })
            ->addColumn('action', function ($package) {
             
                $btn2 = '<a href="' . '/business-package/edit/' . Crypt::encryptString($package->id) . '" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit</a> ';
                return $btn2;
            })
            ->rawColumns(['action','cover_photo'])
            ->make(true);
    }
}