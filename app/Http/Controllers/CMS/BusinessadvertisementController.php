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
use App\Models\WebsitePage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;

class BusinessadvertisementController extends Controller
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
        return view('cms.advertisements.index', compact('pages'));
    }

    /** ✅ Show form to create a page */
    public function create()
    {
        $blog_categories = DB::table('blog_categories')
            ->select('*')
            ->orderBy('id','DESC')
            ->get();

        return view('cms.advertisements.create')
            ->with('blog_categories', $blog_categories);
    }

    /** ✅ Store a new page */
    public function store(Request $request)
    {

        $userId = Session::get('userId');

        $request->validate([
            'ad_title'    => 'required|string|max:255',
            'ad_category' => 'required|string',
            'cover_photo' => 'nullable|file|mimes:jpg,jpeg,png|max:2048'
        ]);

        // Check for duplicate ad
        if (BusinessAdvertisement::where('ad_title', $request->ad_title)->exists()) {
            flash()->addError('Sorry, Duplicate Found, Business Ad save operation has been failed.');
            return Redirect::back();
        }

        $photoPath = '';
        if ($request->cover_photo) {
            $uploadedPath = 'uploads/ad-cover/';
            $storagePath  = 'uploads/ad-cover/';
            $parent       = "ad-cover";

            $photoUrl  = $this->imageObject->photoUpload(
                $request,
                'cover_photo',
                $uploadedPath,
                $storagePath,
                $parent,
                $userId
            );

            $photoPath = $photoUrl;
        }

        $ad = BusinessAdvertisement::create([
            'ad_title'    => $request->ad_title,
            'slug'        => generateSlug($request->ad_title),
            'ad_category' => $request->ad_category,
            'status'      => $request->status,
            'cover_photo' => $photoPath,
            'created_by'  => $userId,
        ]);

        if ($ad) {
            $this->accessLogger->logEntry($userId, 'Business Ad Submit.', 'Business Ad', '', '');
            flash()->addSuccess('Business Ad save operation has been successful.');
            return Redirect::back();
        } else {
            flash()->addError('Sorry, Business Ad save operation has been failed.');
            return Redirect::back();
        }
        
    }


    public function edit($id)
    {

        $keyId = Crypt::decryptString($id);
        $advertisement  = BusinessAdvertisement::findOrFail($keyId);


        $blog_categories = DB::table('blog_categories')
                    ->select('*')
                    ->orderBy('id','DESC')
                    ->get();

        return view('cms.advertisements.edit', compact('advertisement','blog_categories'));
    }



    public function update(Request $request)
    {

        $userId = Session::get('userId');

        $request->validate([
            'ad_title'    => 'required|string|max:255',
            'ad_category' => 'required|string',
            'status'      => 'required|string',
            'cover_photo' => 'nullable|file|mimes:jpg,jpeg,png|max:2048'
        ]);

        // Find the ad to update
        $ad = BusinessAdvertisement::findOrFail($request->id);

        // Check for duplicate ad title (excluding current record)
        if (BusinessAdvertisement::where('ad_title', $request->ad_title)
            ->where('id', '!=',$request->id)
            ->exists()) {
            flash()->addError('Sorry, Duplicate Found, Business Ad update operation has been failed.');
            return Redirect::back();
        }

        // Handle cover photo upload if new one is provided
        $photoPath = $ad->cover_photo; // keep existing
        if ($request->cover_photo) {
            $uploadedPath = 'uploads/ad-cover/';
            $storagePath  = 'uploads/ad-cover/';
            $parent       = "ad-cover";

            $photoUrl  = $this->imageObject->photoUpload(
                $request,
                'cover_photo',
                $uploadedPath,
                $storagePath,
                $parent,
                $userId
            );

            $photoPath = $photoUrl;
        }

        // Update ad
        $updated = $ad->update([
            'ad_title'    => $request->ad_title,
            'slug'        => generateSlug($request->ad_title),
            'ad_category' => $request->ad_category,
            'status'      => $request->status,
            'cover_photo' => $photoPath,
            'updated_by'  => $userId,
        ]);

        if ($updated) {
            $this->accessLogger->logEntry($userId, 'Business Ad Update.', 'Business Ad', '', '');
            flash()->addSuccess('Business Ad update operation has been successful.');
            return Redirect::back();
        } else {
            flash()->addError('Sorry, Business Ad update operation has been failed.');
            return Redirect::back();
        }
    }

    /** ✅ Get all pages (for DataTables or listing) */
    public function getAllItems(Request $request)
    {
        $advertisements = DB::table('business_advertisements')->select(['*'])->orderBy('id', 'DESC')->get();

        return datatables()->of($advertisements)
            ->addIndexColumn()
            ->addColumn('ad_banner', function ($advertisements) {
                if (!empty($advertisements->cover_photo)) {
                    $url = asset($advertisements->cover_photo);
                    return '<img src="' . $url . '" alt="Banner Image" width="80" height="50" style="object-fit:cover; border-radius:4px;" />';
                }
                return '<span class="text-muted">No Image</span>';
            })
            ->addColumn('action', function ($advertisements) {
                $btn2 = '<a href="' . '/advertisement/edit/' . Crypt::encryptString($advertisements->id) . '" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit</a> ';
                return $btn2;
            })
            ->rawColumns(['action','ad_banner'])
            ->make(true);
    }
}