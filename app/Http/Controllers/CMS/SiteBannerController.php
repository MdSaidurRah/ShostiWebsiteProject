<?php

namespace App\Http\Controllers\CMS;

use Illuminate\Routing\Controller;
use App\LibraryFunctions\accesslogger;
use App\LibraryFunctions\crudlib;
use App\LibraryFunctions\imagelib;
use App\Models\BlogCategory;
use App\Models\BusinessAdvertisement;
use App\Models\BusinessClient;
use App\Models\BusinessProject;
use App\Models\SiteBanner;
use App\Models\WebsitePage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;

class SiteBannerController extends Controller
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
        return view('cms.site-banners.index', compact('pages'));
    }

    /** ✅ Show form to create a page */
    public function create()
    {
        $blog_categories = DB::table('site_banners')
            ->select('*')
            ->orderBy('id','DESC')
            ->get();

        return view('cms.site-banners.create')
            ->with('blog_categories', $blog_categories);
    }

    /** ✅ Store a new page */
    public function store(Request $request)
    {

        $userId = Session::get('userId');

        // Check for duplicate client
        if (SiteBanner::where('banner_title', $request->banner_title)->exists()) {
            flash()->addError('Sorry, Duplicate Found, Banner save operation has been failed.');
            return Redirect::back();
        }

        $photoPath = '';
        if ($request->cover_photo) {
            $uploadedPath = 'uploads/banner/';
            $storagePath  = 'uploads/banner/';
            $parent       = "banner";

            $logoUrl  = $this->imageObject->photoUpload(
                $request,
                'cover_photo',
                $uploadedPath,
                $storagePath,
                $parent,
                $userId
            );

            $photoPath = $logoUrl;
        }

        $client = SiteBanner::create([
            'banner_title' => $request->banner_title,
            'slug'        => generateSlug($request->banner_title),
            'banner_category'     => $request->banner_category,
            'status'      => $request->status,
            'banner_image'        => $photoPath,
            'created_by'  => $userId,
        ]);

        if ($client) {
            $this->accessLogger->logEntry($userId, 'Banner Submit.', 'Banner ', '', '');
            flash()->addSuccess('Banner save operation has been successful.');
            return Redirect::back();
        } else {
            flash()->addError('Sorry, Banner save operation has been failed.');
            return Redirect::back();
        }
        
    }


    public function edit($id)
    {

        $keyId = Crypt::decryptString($id);
        $banner  = SiteBanner::findOrFail($keyId);


        $blog_categories = DB::table('blog_categories')
                    ->select('*')
                    ->orderBy('id','DESC')
                    ->get();

        return view('cms.site-banners.edit', compact('banner','blog_categories'));
    }



    public function update(Request $request)
    {

      $userId = Session::get('userId');

        // Find the banner to update
        $banner = SiteBanner::findOrFail($request->id);

        // Check for duplicate client except current one
        if (
            SiteBanner::where('banner_title', $request->banner_title)
                ->where('id', '!=', $banner->id)
                ->exists()
        ) {
            flash()->addError('Sorry, Duplicate Found, Banner update operation has been failed.');
            return Redirect::back();
        }

        // Handle cover photo upload
        $photoPath = $banner->banner_image; // keep old image by default
        if ($request->hasFile('cover_photo')) {
            $uploadedPath = 'uploads/banner/';
            $storagePath  = 'uploads/banner/';
            $parent       = "banner";

            $logoUrl = $this->imageObject->photoUpload(
                $request,
                'cover_photo',
                $uploadedPath,
                $storagePath,
                $parent,
                $userId
            );

            $photoPath = $logoUrl;
        }

        // Update record
        $updated = $banner->update([
            'banner_title'    => $request->banner_title,
            'slug'            => generateSlug($request->banner_title),
            'banner_category' => $request->banner_category,
            'status'          => $request->status,
            'banner_image'    => $photoPath,
            'updated_by'      => $userId,
        ]);

        if ($updated) {
            $this->accessLogger->logEntry($userId, 'Banner Update.', 'Banner', $banner->id, '');
            flash()->addSuccess('Banner update operation has been successful.');
            return Redirect::back();
        } else {
            flash()->addError('Sorry, Banner update operation has been failed.');
            return Redirect::back();
        }
    }

    /** ✅ Get all pages (for DataTables or listing) */
   public function getAllItems(Request $request)
    {
        $site_banner = DB::table('site_banners')
            ->select(['*'])
            ->orderBy('id', 'DESC')
            ->get();

        return datatables()->of($site_banner)
            ->addIndexColumn()
            ->addColumn('banner_image_preview', function ($site_banner) {
                if (!empty($site_banner->banner_image)) {
                    $url = asset($site_banner->banner_image);
                    return '<img src="' . $url . '" alt="Banner Image" width="80" height="50" style="object-fit:cover; border-radius:4px;" />';
                }
                return '<span class="text-muted">No Image</span>';
            })
            ->addColumn('action', function ($site_banner) {
                $btn2 = '<a href="' . url('/site-banner/edit/' . Crypt::encryptString($site_banner->id)) . '" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit</a> ';
                return $btn2;
            })
            ->rawColumns(['banner_image_preview', 'action']) // <-- include banner_image as raw HTML
            ->make(true);
    }
}