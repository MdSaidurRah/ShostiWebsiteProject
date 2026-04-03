<?php

namespace App\Http\Controllers\CMS;

use Illuminate\Routing\Controller;
use App\LibraryFunctions\accesslogger;
use App\LibraryFunctions\crudlib;
use App\LibraryFunctions\imagelib;
use App\Models\BlogCategory;
use App\Models\BusinessBrands;
use App\Models\BusinessProject;
use App\Models\WebsitePage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;

class BusinessBrandsController extends Controller
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
        return view('cms.brands.index', compact('pages'));
    }

    /** ✅ Show form to create a page */
    public function create()
    {
        $blog_categories = DB::table('blog_categories')
            ->select('*')
            ->orderBy('id','DESC')
            ->get();

        return view('cms.brands.create')
            ->with('blog_categories', $blog_categories);
    }

    /** ✅ Store a new page */
    public function store(Request $request)
    {
        $userId = Session::get('userId');

        $request->validate([
            'name' => 'required|string|max:255',
            'address'     => 'required|string',
            'logo'        => 'nullable|file|mimes:jpg,jpeg,png|max:2048'
        ]);

        // Check for duplicate client
        if (BusinessBrands::where('name', $request->name)->exists()) {
            flash()->addError('Sorry, Duplicate Found, Business Brands save operation has been failed.');
            return Redirect::back();
        }

        $logoPath = '';
        if ($request->logo) {
            $uploadedPath = 'uploads/client-logo/';
            $storagePath  = 'uploads/client-logo/';
            $parent       = "client-logo";

            $logoUrl  = $this->imageObject->photoUpload(
                $request,
                'logo',
                $uploadedPath,
                $storagePath,
                $parent,
                $userId
            );

            $logoPath = $logoUrl;
        }

        $client = BusinessBrands::create([
            'name' => $request->name,
            'slug'        => generateSlug($request->name),
            'address'     => $request->address,
            'status'      => $request->status,
            'company_logo'        => $logoPath,
            'created_by'  => $userId,
        ]);

        if ($client) {
            $this->accessLogger->logEntry($userId, 'Business Brands Submit.', 'Business Brands', '', '');
            flash()->addSuccess('Business Brands save operation has been successful.');
            return Redirect::back();
        } else {
            flash()->addError('Sorry, Business Brands save operation has been failed.');
            return Redirect::back();
        }

        

        
    }


    public function edit($id)
    {

        $keyId = Crypt::decryptString($id);
        $client  = BusinessBrands::findOrFail($keyId);
        $blog_categories = DB::table('blog_categories')
                    ->select('*')
                    ->orderBy('id','DESC')
                    ->get();

        return view('cms.brands.edit', compact('client','blog_categories'));
    }


    public function update(Request $request)
    {

        $userId = Session::get('userId');


        $client = BusinessBrands::findOrFail($request->id);

        // Check for duplicate (exclude current client)
        if (BusinessBrands::where('name', $request->name)
                ->where('id', '!=', $request->id)
                ->exists()) {
            flash()->addError('Sorry, Duplicate Found, Business Brands update operation has been failed.');
            return Redirect::back();
        }

        // Handle logo upload (keep old if not replaced)
        $logoPath = $client->company_logo;
        if ($request->logo) {
            $uploadedPath = 'uploads/client-logo/';
            $storagePath  = 'uploads/client-logo/';
            $parent       = "client-logo";

            $logoUrl  = $this->imageObject->photoUpload(
                $request,
                'logo',
                $uploadedPath,
                $storagePath,
                $parent,
                $userId
            );

            $logoPath = $logoUrl;
        }

        // Update the client
        $updated = $client->update([
            'name' => $request->name,
            'slug'        => generateSlug($request->name),
            'address'     => $request->address,
            'status'      => $request->status,
            'company_logo'        => $logoPath,
            'updated_by'  => $userId,
        ]);

        if ($updated) {
            $this->accessLogger->logEntry($userId, 'Business Brands Update.', 'Business Brands', '', '');
            flash()->addSuccess('Business Brands update operation has been successful.');
            return Redirect::back();
        } else {
            flash()->addError('Sorry, Business Brands update operation has been failed.');
            return Redirect::back();
        }
    }

    /** ✅ Get all pages (for DataTables or listing) */
    public function getAllItems(Request $request)
    {
        $business_clients = DB::table('partnership_brands')->select(['*'])->orderBy('id', 'DESC')->get();

        return datatables()->of($business_clients)
            ->addIndexColumn()
            ->addColumn('company_logo_image', function ($business_clients) {
                if (!empty($business_clients->company_logo)) {
                    $url = asset($business_clients->company_logo);
                    return '<img src="' . $url . '" alt="Banner Image" width="80" height="50" style="object-fit:cover; border-radius:4px;" />';
                }
                return '<span class="text-muted">No Image</span>';
            })
            ->addColumn('action', function ($business_clients) {
                $btn2 = '<a href="' . '/brands/edit/' . Crypt::encryptString($business_clients->id) . '" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit</a> ';
                return $btn2;
            })
            ->rawColumns(['action','company_logo_image'])
            ->make(true);
    }
}