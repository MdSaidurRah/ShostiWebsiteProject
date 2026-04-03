<?php

namespace App\Http\Controllers\Blog;


use Illuminate\Routing\Controller;
use App\LibraryFunctions\accesslogger;
use App\LibraryFunctions\crudlib;
use App\LibraryFunctions\imagelib;
use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;



class BlogController extends Controller
{

    public $accessLogger;
    public $crudObject;
    public $imageObject;
    public $userId;

    public function __construct()
    {
        $this->accessLogger=new accesslogger();
        $this->crudObject=new crudlib();
        $this->imageObject = new imagelib();
        $this->userId = Session::get('userId');
        // $this->middleware('checkPermission');

    }


    public function index()
    {
        $categories = BlogCategory::latest()->get();
        return view('blog.index', compact('categories'));
    }

    public function create()
    {
        $blog_categories = DB::table('blog_categories')
            ->select('*')
            ->orderBy('id','DESC')
            ->get();

        return view('blog.create')
            ->with('blog_categories', $blog_categories );
    }

    public function store(Request $request)
    {
        $userId = Session::get('userId');

        $request->validate([
            'title'         => 'required|string|max:255',
            'content'       => 'required|string',
            'category_id'   => 'required',
            'status'        => 'required',
            
        ]);
        

        $duplicate = Blog::where('title', $request->title)
            ->where('category_id', $request->category_id)
            ->exists();
        
        if ($duplicate) {
            flash()->addError('Sorry, duplicate blog found.');
            return Redirect::back()->withInput();
        }
        
        DB::beginTransaction();
        
        try {
        

            $photoPath = null;
            if ($request->hasFile('photo')) {
                $uploadedPath = 'uploads/blog-cover/';
                $storagePath  = 'uploads/blog-cover/';
                $parent       = 'blog-cover';
        
                $photoPath = $this->imageObject->photoUpload(
                    $request,
                    'photo',
                    $uploadedPath,
                    $storagePath,
                    $parent,
                    $userId
                );
            }
        

            $slug = generateSlug($request->title);
            if (Blog::where('slug', $slug)->exists()) {
                $slug .= '-' . time();
            }
        

            $blog = Blog::create([
                'title'           => $request->title,
                'slug'            => $slug,
                'content'         => $request->content,
                'short_note'      => $request->short_note,
                'category_id'     => $request->category_id,
                'author'          => $request->author,
                'publish_date'    => $request->publish_date,
                'status'          => $request->status,
                'cover_image'     => $photoPath,
                'view_counts'     => 0,
                'download_counts' => 0,
                'created_by'      => $userId,
            ]);
        

            $this->accessLogger->logEntry(
                $userId,
                'Blog Created',
                'Blog',
                $blog->id,
                null
            );
        
            DB::commit();
        
            flash()->addSuccess('Blog saved successfully.');
            return Redirect::route('blogs.index');
        
        } catch (\Exception $e) {
        
            DB::rollBack();
        
            flash()->addError('Blog save failed. Please try again.');
            return Redirect::back()->withInput();
        }

    }

    public function edit($id)
    {
        $keyId = Crypt::decryptString($id);
        $blog = Blog::find($keyId);


        $blog_categories = DB::table('blog_categories')
            ->select('*')
            ->orderBy('id','DESC')
            ->get();
            
        return view('blog.edit')
            ->with('blog', $blog)
            ->with('blog_categories', $blog_categories);
    }

    public function update(Request $request)
    {
        $userId = Session::get('userId');
      
        $validated = $request->validate([
            'id'            => 'required|exists:blogs,id',
            'title'         => 'required|string|max:255',
            'content'       => 'required|string',
            'category_id'   => 'required',
            'status'        => 'required',
        ]);
        

       

        $blog = Blog::findOrFail($request->id);
        

        if (
            Blog::where('title', $request->title)
                ->where('category_id', $request->category_id)
                ->where('id', '!=', $request->id)
                ->exists()
        ) {
            flash()->addError('Sorry, duplicate blog found.');
            return Redirect::back()->withInput();
        }
        
        DB::beginTransaction();
        
        try {
        
   
            $photoPath = $blog->cover_image;
        
            if ($request->hasFile('photo')) {
                $uploadedPath = 'uploads/blog-cover/';
                $storagePath  = 'uploads/blog-cover/';
                $parent       = 'blog-cover';
        
                $photoPath = $this->imageObject->photoUpload(
                    $request,
                    'photo',
                    $uploadedPath,
                    $storagePath,
                    $parent,
                    $userId
                );
            }
        

            $slug = $blog->slug;
            if ($blog->title !== $request->title) {
                $slug = generateSlug($request->title);
        
                if (
                    Blog::where('slug', $slug)
                        ->where('id', '!=', $blog->id)
                        ->exists()
                ) {
                    $slug .= '-' . time();
                }
            }
        
       
            $blog->update([
                'title'        => $request->title,
                'slug'         => $slug,
                'content'      => $request->content,
                'short_note'   => $request->short_note,
                'category_id'  => $request->category_id,
                'author'       => $request->author,
                'publish_date' => $request->publish_date,
                'status'       => $request->status,
                'cover_image'  => $photoPath,
                'updated_by'   => $userId,
            ]);
        

            $this->accessLogger->logEntry(
                $userId,
                'Blog Updated',
                'Blog',
                $blog->id,
                null
            );
        
            DB::commit();
        
            flash()->addSuccess('Blog update operation has been successful.');
            return Redirect::back();
        
        } catch (\Exception $e) {
            
            return $e;
        
            DB::rollBack();
        
            flash()->addError('Sorry, Blog update operation has failed.');
            return Redirect::back()->withInput();
        }

    }

    public function getAllItems(Request $request)
    {
        $blogs = DB::table('blogs')->select(['*'])->orderBy('id', 'DESC')->get();
        return datatables()->of($blogs)
            ->addIndexColumn()
            ->addColumn('blog_cover', function ($blogs) {
                if (!empty($blogs->cover_image)) {
                    $url = asset($blogs->cover_image);
                    return '<img src="' . $url . '" alt="Banner Image" width="80" height="50" style="object-fit:cover; border-radius:4px;" />';
                }
                return '<span class="text-muted">No Image</span>';
            })
            ->addColumn('action', function ($blogs) {
                $btn1 = '<a href="' . '/blog/read/' . Crypt::encryptString($blogs->id) . '" class="edit btn btn-success btn-sm"><i class="fa fa-file-text-o" aria-hidden="true"></i> Read</a> ';
                $btn2 = '<a href="' . '/blog/edit/' . Crypt::encryptString($blogs->id) . '" class="edit btn alert-primary btn-sm"><i class="fa fa-file-text-o" aria-hidden="true"></i> Edit</a> ';
                return $btn1 . $btn2;
            })
            ->rawColumns(['action', 'project','blog_cover'])
            ->make(true);
    }

}
