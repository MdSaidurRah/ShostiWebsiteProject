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
use App\Models\PromotionalVideo;
use App\Models\WebsitePage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;

class PromotionalVideoController extends Controller
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
        return view('cms.promotional-videos.index', compact('pages'));
    }

    /** ✅ Show form to create a page */
    public function create()
    {
        $blog_categories = DB::table('blog_categories')
            ->select('*')
            ->orderBy('id','DESC')
            ->get();

        return view('cms.promotional-videos.create')
            ->with('blog_categories', $blog_categories);
    }

    /** ✅ Store a new page */
    public function store(Request $request)
    {

        $userId = Session::get('userId');

        $request->validate([
            'video_title'    => 'required|string|max:255',
            'reference_link' => 'required|string'
        ]);

        // Check for duplicate ad
        if (PromotionalVideo::where('reference_link', $request->reference_link)->where('video_title','video_title')->exists()) {
            flash()->addError('Sorry, Duplicate Found, Promotional video save operation has been failed.');
            return Redirect::back();
        }

        $photoPath = '';
        if ($request->thum_photo) {
            $uploadedPath = 'uploads/thum_photo/';
            $storagePath  = 'uploads/thum_photo/';
            $parent       = "thum_photo";

            $photoUrl  = $this->imageObject->photoUpload(
                $request,
                'thum_photo',
                $uploadedPath,
                $storagePath,
                $parent,
                $userId
            );

            $photoPath = $photoUrl;
        }

        $ad = PromotionalVideo::create([
            'video_title'    => $request->video_title,
            'slug'        => generateSlug($request->video_title),
            'video_category' => $request->video_category,
            'reference_link' => $request->reference_link,
            'video_source'      => $request->video_source,
            'status'      => $request->status,
            'video_thumbnail' => $photoPath,
            'created_by'  => $userId,
        ]);

        if ($ad) {
            $this->accessLogger->logEntry($userId, 'Promotional Video Submit.', 'Promotional Video', '', '');
            flash()->addSuccess('Promotional Video save operation has been successful.');
            return Redirect::back();
        } else {
            flash()->addError('Sorry, Promotional Video save operation has been failed.');
            return Redirect::back();
        }
    }


    public function edit($id)
    {

        $keyId = Crypt::decryptString($id);
        $promotional_video = PromotionalVideo::findOrFail($keyId);


        $blog_categories = DB::table('blog_categories')
                    ->select('*')
                    ->orderBy('id','DESC')
                    ->get();

        return view('cms.promotional-videos.edit', compact('promotional_video','blog_categories'));
    }



    public function update(Request $request)
    {

        $userId = Session::get('userId');

        $request->validate([
            'id'            => 'required|integer|exists:promotional_videos,id',
            'video_title'   => 'required|string|max:255',
            'reference_link'=> 'required|string'
        ]);

        // ✅ Find record
        $ad = PromotionalVideo::findOrFail($request->id);

        // ✅ Check for duplicate (ignore current record)
        if (
            PromotionalVideo::where('reference_link', $request->reference_link)
                ->where('video_title', $request->video_title)
                ->where('id', '!=', $request->id)
                ->exists()
        ) {
            flash()->addError('Sorry, Duplicate Found, Promotional video update operation has failed.');
            return Redirect::back();
        }

        // ✅ Handle thumbnail upload (replace if new one is uploaded)
        $photoPath = $ad->video_thumbnail; // keep old by default
        if ($request->hasFile('thum_photo')) {
            $uploadedPath = 'uploads/thum_photo/';
            $storagePath  = 'uploads/thum_photo/';
            $parent       = "thum_photo";

            $photoUrl  = $this->imageObject->photoUpload(
                $request,
                'thum_photo',
                $uploadedPath,
                $storagePath,
                $parent,
                $userId
            );

            $photoPath = $photoUrl;
        }

        // ✅ Update record
        $updated = $ad->update([
            'video_title'     => $request->video_title,
            'slug'            => generateSlug($request->video_title),
            'video_category'  => $request->video_category,
            'video_source'  => $request->video_source,
            'reference_link'  => $request->reference_link,
            'status'          => $request->status,
            'video_thumbnail' => $photoPath,
            'updated_by'      => $userId,
        ]);

        if ($updated) {
            $this->accessLogger->logEntry($userId, 'Promotional Video Update.', 'Promotional Video', '', '');
            flash()->addSuccess('Promotional Video update operation has been successful.');
            return Redirect::back();
        } else {
            flash()->addError('Sorry, Promotional Video update operation has failed.');
            return Redirect::back();
        }

    }

    /** ✅ Get all pages (for DataTables or listing) */
    public function getAllItems(Request $request)
    {
        $promotional_videos = DB::table('promotional_videos')->select(['*'])->orderBy('id', 'DESC')->get();

        return datatables()->of($promotional_videos)
            ->addIndexColumn()
            ->addColumn('video_thums', function ($promotional_videos) {
                if (!empty($promotional_videos->video_thumbnail)) {
                    $url = asset($promotional_videos->video_thumbnail);
                    return '<img src="' . $url . '" alt="Banner Image" width="80" height="50" style="object-fit:cover; border-radius:4px;" />';
                }
                return '<span class="text-muted">No Image</span>';
            })
            ->addColumn('action', function ($promotional_videos) {
                $btn2 = '<a href="' . '/promotional-video/edit/' . Crypt::encryptString($promotional_videos->id) . '" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit</a> ';
                return $btn2;
            })
            ->rawColumns(['action','video_thums'])
            ->make(true);
    }
}