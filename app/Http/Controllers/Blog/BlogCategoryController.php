<?php

namespace App\Http\Controllers\Blog;


use Illuminate\Routing\Controller;
use App\LibraryFunctions\accesslogger;
use App\LibraryFunctions\crudlib;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;


class BlogCategoryController extends Controller
{
    public $accessLogger;
    public $crudObject;
    public $userId;

    public function __construct()
    {
        $this->accessLogger=new accesslogger();
        $this->crudObject=new crudlib();

        // $this->middleware('checkPermission');

    }



    public function index()
    {
        $categories = BlogCategory::latest()->get();
        return view('blog.blog_category.index', compact('categories'));
    }

    public function create()
    {
        return view('blog_categories.create');
    }

    public function store(Request $request)
    {

        $userId = Session::get('userId');
        $request->validate([
            'name' => 'required|unique:blog_categories|max:255'
        ]);

        if (BlogCategory::where('name', $request->name)->exists()) {
            flash()->addError('Sorry, Duplicate Found, Blog category save operation has been failed.');
            return Redirect::back();
        }

        $saveBlog = BlogCategory::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'created_by' =>$userId
        ]);

        if($saveBlog)
        {
            $this->accessLogger->logEntry($userId,'Blog Category Submit.','Blog Category','','');
            flash()->addSuccess('Blog category save operation has been successful.');
            return Redirect::back();
        }else
        {
            flash()->addError('Sorry, Blog category save operation has been failed.');
            return Redirect::back();
        }

    }

    public function edit(BlogCategory $blogCategory)
    {
        return view('blog_categories.edit', compact('blogCategory'));
    }


    public function update(Request $request, BlogCategory $blogCategory)
    {
        $request->validate([
            'name' => 'required|max:255|unique:blog_categories,name,' . $blogCategory->id
        ]);

        $blogCategory->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name)
        ]);

        return redirect()->route('blog_categories.index')
                         ->with('success', 'Category updated successfully.');
    }

    public function getAllItems(Request $request)
    {
        $blogCategories = DB::table('blog_categories')->select(['*'])->orderBy('id', 'DESC')->get();
        return datatables()->of($blogCategories)
            ->addIndexColumn()
     
            ->addColumn('action', function ($blogCategories) {
                $btn1 = '<a href="' . '/donor/show/' . Crypt::encryptString($blogCategories->id) . '" class="edit btn btn-success btn-sm"><i class="fa fa-file-text-o" aria-hidden="true"></i> Detail</a> ';
                $btn2 = '<a href="' . '/donor/edit/' . Crypt::encryptString($blogCategories->id) . '" class="edit btn alert-primary btn-sm"><i class="fa fa-file-text-o" aria-hidden="true"></i> Edit</a> ';
                return $btn1 . $btn2;
            })
            ->rawColumns(['action', 'project'])
            ->make(true);
    }
}
