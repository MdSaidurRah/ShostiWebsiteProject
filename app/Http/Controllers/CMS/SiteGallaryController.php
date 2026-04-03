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
use App\Models\Gallery;
use App\Models\SiteBanner;
use App\Models\WebsitePage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;

class SiteGallaryController extends Controller
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
        return view('cms.gallery.index', compact('pages'));
    }

    /** ✅ Show form to create a page */
    public function create()
    {
        $blog_categories = DB::table('site_banners')
            ->select('*')
            ->orderBy('id','DESC')
            ->get();

        return view('cms.gallery.create')
            ->with('blog_categories', $blog_categories);
    }

    /** ✅ Store a new page */
    public function store(Request $request)
    {



        $userId = Session::get('userId');

        // Check for duplicate client
        if (Gallery::where('title', $request->banner_title)->exists()) {
            flash()->addError('Sorry, Duplicate Found, Gallery save operation has been failed.');
            return Redirect::back();
        }

        $photoPath = '';
        if ($request->gallery_photo) {
            $uploadedPath = 'uploads/gallery-item/';
            $storagePath  = 'uploads/gallery-item/';
            $parent       = "gallery-item";

            $logoUrl  = $this->imageObject->photoUpload(
                $request,
                'gallery_photo',
                $uploadedPath,
                $storagePath,
                $parent,
                $userId
            );

            $photoPath = $logoUrl;
        }

        $client = Gallery::create([
            'title' => $request->title,
            'slug'        => generateSlug($request->banner_title),
            'item_category'     => $request->item_category,
            'reference_link'     => $request->reference_link,
            'status'      => $request->status,
            'gallery_image'        => $photoPath,
            'created_by'  => $userId,
        ]);

        if ($client) {
            $this->accessLogger->logEntry($userId, 'Gallery Submit.', 'Gallery ', '', '');
            flash()->addSuccess('Gallery save operation has been successful.');
            return Redirect::back();
        } else {
            flash()->addError('Sorry, Gallery save operation has been failed.');
            return Redirect::back();
        }
        
    }


    public function edit($id)
    {

        $keyId = Crypt::decryptString($id);
        $galleryItem  = Gallery::findOrFail($keyId);

        $blog_categories = DB::table('blog_categories')
                    ->select('*')
                    ->orderBy('id','DESC')
                    ->get();

        return view('cms.gallery.edit', compact('galleryItem','blog_categories'));
    }



    public function update(Request $request)
    {



      $userId = Session::get('userId');

        // Find the banner to update
        $gallery = Gallery::findOrFail($request->id);

        // Check for duplicate client except current one
        if (
            Gallery::where('title', $request->title)
                ->where('id', '!=', $gallery->id)
                ->exists()
        ) {
            flash()->addError('Sorry, Duplicate Found, Gallery update operation has been failed.');
            return Redirect::back();
        }

        // Handle cover photo upload
        $photoPath = $gallery->gallery_image; // keep old image by default
        if ($request->hasFile('gallery_photo')) {
            $uploadedPath = 'uploads/gallery-item/';
            $storagePath  = 'uploads/gallery-item/';
            $parent       = "gallery-item";

            $logoUrl = $this->imageObject->photoUpload(
                $request,
                'gallery_photo',
                $uploadedPath,
                $storagePath,
                $parent,
                $userId
            );

            $photoPath = $logoUrl;
        }


        // Update record
        $updated = $gallery->update([
            'title'    => $request->title,
            'slug'            => generateSlug($request->title),
            'item_category' => $request->item_category,
            'reference_link' => $request->reference_link,
            'status'          => $request->status,
            'gallery_image'    => $photoPath,
            'updated_by'      => $userId,
        ]);

        if ($updated) {
            $this->accessLogger->logEntry($userId, 'Banner Update.', 'Banner', $gallery->id, '');
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
        $gallery = DB::table('gallery')
            ->select(['*'])
            ->orderBy('id', 'DESC')
            ->get();

        return datatables()->of($gallery)
            ->addIndexColumn()
            ->addColumn('banner_image_preview', function ($gallery) {
                if (!empty($gallery->gallery_image)) {
                    $url = asset($gallery->gallery_image);
                    return '<img src="' . $url . '" alt="Banner Image" width="80" height="50" style="object-fit:cover; border-radius:4px;" />';
                }
                return '<span class="text-muted">No Image</span>';
            })
            ->addColumn('action', function ($gallery) {
                $btn2 = '<a href="' . url('/gallery/edit/' . Crypt::encryptString($gallery->id)) . '" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit</a> ';
                return $btn2;
            })
            ->rawColumns(['banner_image_preview', 'action']) // <-- include banner_image as raw HTML
            ->make(true);
    }
}