<?php

namespace App\Http\Controllers\CMS;

use Illuminate\Routing\Controller;
use App\LibraryFunctions\accesslogger;
use App\LibraryFunctions\crudlib;
use App\LibraryFunctions\imagelib;
use App\Models\BlogCategory;
use App\Models\BusinessProduct;
use App\Models\WebsitePage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;

class BusinessProductController extends Controller
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
        return view('cms.products.index', compact('pages'));
    }

    /** ✅ Show form to create a page */
    public function create()
    {
        $blog_categories = DB::table('blog_categories')
            ->select('*')
            ->orderBy('id','DESC')
            ->get();

        return view('cms.products.create')
            ->with('blog_categories', $blog_categories);
    }

    /** ✅ Store a new page */
    public function store(Request $request)
    {

        $userId = Session::get('userId');

        $request->validate([
            'product_title'      => 'required|string|max:255',
            'product_defination' => 'required|string',
            'status'             => 'required|string',
            'cover_photo'        => 'nullable|file|mimes:jpg,jpeg,png|max:2048'
        ]);

        // Check for duplicate product
        if (BusinessProduct::where('product_title', $request->product_title)->exists()) {
            flash()->addError('Sorry, Duplicate Found, Business Product save operation has been failed.');
            return Redirect::back();
        }

        $photoPath = '';
        if ($request->cover_photo) {
            $uploadedPath = 'uploads/product-cover/';
            $storagePath  = 'uploads/product-cover/';
            $parent       = "product-cover";

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

        $product = BusinessProduct::create([
            'product_title'      => $request->product_title,
            'slug'               => generateSlug($request->product_title),
            'product_defination' => $request->product_defination,
            'status'             => $request->status,
            'cover_photo'        => $photoPath,
            'created_by'         => $userId,
        ]);

        if ($product) {
            $this->accessLogger->logEntry($userId, 'Business Product Submit.', 'Business Product', '', '');
            flash()->addSuccess('Business Product save operation has been successful.');
            return Redirect::back();
        } else {
            flash()->addError('Sorry, Business Product save operation has been failed.');
            return Redirect::back();
        }
    }


    public function edit($id)
    {

        $keyId = Crypt::decryptString($id);
        $product  = BusinessProduct::findOrFail($keyId);
        $blog_categories = DB::table('blog_categories')
                    ->select('*')
                    ->orderBy('id','DESC')
                    ->get();

        return view('cms.products.edit', compact('product','blog_categories'));
    }


    public function preview($id)
    {
        $keyId = Crypt::decryptString($id);
        $page  = WebsitePage::findOrFail($keyId);

        return $page->content;
    }


    public function update(Request $request)
    {

        $userId = Session::get('userId');

        $product = BusinessProduct::findOrFail($request->id);

        // Check for duplicate (exclude current ID)
        if (BusinessProduct::where('product_title', $request->product_title)
                ->where('id', '!=', $request->id)
                ->exists()) {
            flash()->addError('Sorry, Duplicate Found, Business Product update operation has been failed.');
            return Redirect::back();
        }

        // Handle cover photo
        $photoPath = $product->cover_photo; // keep old photo if not replaced
        if ($request->cover_photo) {
            $uploadedPath = 'uploads/product-cover/';
            $storagePath  = 'uploads/product-cover/';
            $parent       = "product-cover";

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

        // Update existing product
        $updated = $product->update([
            'product_title'      => $request->product_title,
            'slug'               => generateSlug($request->product_title),
            'product_defination' => $request->product_defination,
            'status'             => $request->status,
            'cover_photo'        => $photoPath,
            'updated_by'         => $userId,
        ]);

        if ($updated) {
            $this->accessLogger->logEntry($userId, 'Business Product Update.', 'Business Product', '', '');
            flash()->addSuccess('Business Product update operation has been successful.');
            return Redirect::back();
        } else {
            flash()->addError('Sorry, Business Product update operation has been failed.');
            return Redirect::back();
        }
    }

    /** ✅ Get all pages (for DataTables or listing) */
    public function getAllItems(Request $request)
    {
        $business_products = DB::table('business_products')->select(['*'])->orderBy('id', 'DESC')->get();

        return datatables()->of($business_products)
            ->addIndexColumn()
            ->addColumn('product_photo', function ($business_products) {
                if (!empty($business_products->cover_photo)) {
                    $url = asset($business_products->cover_photo);
                    return '<img src="' . $url . '" alt="Banner Image" width="80" height="50" style="object-fit:cover; border-radius:4px;" />';
                }
                return '<span class="text-muted">No Image</span>';
            })
            ->addColumn('action', function ($business_products) {
                $btn2 = '<a href="' . '/product/edit/' . Crypt::encryptString($business_products->id) . '" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit</a> ';
                return  $btn2;
            })
            ->rawColumns(['action','product_photo'])
            ->make(true);
    }
}