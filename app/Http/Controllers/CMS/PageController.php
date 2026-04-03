<?php

namespace App\Http\Controllers\CMS;

use Illuminate\Routing\Controller;
use App\LibraryFunctions\accesslogger;
use App\LibraryFunctions\crudlib;
use App\LibraryFunctions\imagelib;
use App\Models\BlogCategory;
use App\Models\WebsitePage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;

class PageController extends Controller
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
        return view('cms.pages.index', compact('pages'));
    }

    /** ✅ Show form to create a page */
    public function create()
    {
        $blog_categories = DB::table('blog_categories')
            ->select('*')
            ->orderBy('id','DESC')
            ->get();

        return view('cms.pages.create')
            ->with('blog_categories', $blog_categories);
    }

    /** ✅ Store a new page */
    public function store(Request $request)
    {

        $userId = Session::get('userId');

        $request->validate([
            'title'       => 'required|string|max:255',
            'content'       => 'required|string',
            'category_id' => 'required|integer',
            'status'      => 'required'
        ]);

        if (WebsitePage::where('title', $request->title)->where('category_id', $request->category_id)->exists()) {
            flash()->addError('Sorry, Duplicate Found, Website Page save operation has been failed.');
            return Redirect::back();
        }

        $page = WebsitePage::create([
            'title'            => $request->title,
            'slug'             => generateSlug($request->title),
            'content'          => $request->content,
            'category_id'      => $request->category_id,
            'status'           => $request->status,
            'created_by'       => $userId,
        ]);

        if ($page) {
            $this->accessLogger->logEntry($userId, 'Website Page Submit.', 'Website Page', '', '');
            flash()->addSuccess('Website Page save operation has been successful.');
            return Redirect::back();
        } else {
            flash()->addError('Sorry, Website Page save operation has been failed.');
            return Redirect::back();
        }
    }


    public function edit($id)
    {
        $keyId = Crypt::decryptString($id);
        $page  = WebsitePage::findOrFail($keyId);
        $blog_categories = DB::table('blog_categories')
                    ->select('*')
                    ->orderBy('id','DESC')
                    ->get();

        return view('cms.pages.edit', compact('page','blog_categories'));
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

        $request->validate([
            'title'       => 'required|string|max:255',
            'content'     => 'required|string',
            'category_id' => 'required|integer',
            'status'      => 'required'
        ]);

        // ✅ Prevent duplicate (excluding the current page being updated)
        if (WebsitePage::where('title', $request->title)
            ->where('category_id', $request->category_id)
            ->where('id', '!=', $request->id) // exclude current page
            ->exists()
        ) {
            flash()->addError('Sorry, Duplicate Found, Website Page update operation has been failed.');
            return Redirect::back()->withInput();
        }

        // ✅ Find existing page
        $page = WebsitePage::findOrFail($request->id);

        // ✅ Update fields
        $page->update([
            'title'       => $request->title,
            'slug'        => generateSlug($request->title),
            'content'     => $request->content,
            'category_id' => $request->category_id,
            'status'      => $request->status,
            'updated_by'  => $userId,  // <-- track updater
        ]);

        if ($page) {
            $this->accessLogger->logEntry($userId, 'Website Page Update.', 'Website Page', $page->id, '');
            flash()->addSuccess('Website Page update operation has been successful.');
            return redirect()->back();
        } else {
            flash()->addError('Sorry, Website Page update operation has been failed.');
            return redirect()->back()->withInput();
        }
    }

    /** ✅ Get all pages (for DataTables or listing) */
    public function getAllItems(Request $request)
    {
        $pages = DB::table('website_pages')->select(['*'])->orderBy('id', 'DESC')->get();

        return datatables()->of($pages)
            ->addIndexColumn()
            ->addColumn('category', function ($pages) {
                $category = BlogCategory::where('id', $pages->category_id)->first();
                return $category ? $category->name : 'Uncategorized';
            })
            ->addColumn('action', function ($pages) {
                $btn1 = '<a href="' . '/page/preview/' . Crypt::encryptString($pages->id) . '" target="_Blank" class="btn btn-success btn-sm"><i class="fa fa-file-text-o"></i> Preview</a> ';
                $btn2 = '<a href="' . '/page/edit/' . Crypt::encryptString($pages->id) . '" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit</a> ';
                return $btn1 . $btn2;
            })
            ->rawColumns(['action','category'])
            ->make(true);
    }
}