<?php

namespace App\Http\Controllers\Blog;


use Illuminate\Routing\Controller;
use App\LibraryFunctions\accesslogger;
use App\LibraryFunctions\crudlib;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use App\LibraryFunctions\imagelib;
use App\Models\BlogCategory;
use App\Models\BlogContent;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;


class BlogContentController extends Controller
{
    public $accessLogger;
    public $crudObject;
    public $userId;
    public $imageObject;

    public function __construct()
    {
        $this->accessLogger=new accesslogger();
        $this->crudObject=new crudlib();
        $this->imageObject = new imagelib();
        // $this->middleware('checkPermission');

    }



    public function index()
    {
        $categories = BlogCategory::latest()->get();
        return view('blog.blog_content.index', compact('categories'));
    }

    public function create()
    {
        return view('blog.blog_content.create');
    }

    public function store(Request $request)
    {

        $userId = Session::get('userId');
        $validated = $request->validate([
            'blog_id'        => 'required|int',
            'title'        => 'required|string|max:255',
            'content'      => 'required|string',
            'publish_date' => 'required|date',
            'content_status'       => 'required|string|in:Draft,Published',
            'photo'        => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        if (BlogContent::where('title', $request->title)->where('blog_id', $request->blog_id)->exists()) {
            flash()->addError('Sorry, Duplicate Found, Blog content save operation has been failed.');
            return Redirect::back();
        }


        // ✅ Handle file upload (if photo exists)
        $photoPath='';
        if($request->photo)
        {
            $uploadedPath = 'uploads/topic-cover/';
            $storagePath = 'uploads/topic-cover/';
            $parent = "topic-cover";
            $photoUrl = $this->imageObject->photoUpload($request,'photo', $uploadedPath, $storagePath, $parent, $userId);
            $photoPath=$photoUrl;
        }

        // ✅ Save into database
        $blog = BlogContent::create([
            'title' => $request->title,
            'content'       => $request->content,
            'blog_id'   => $request->blog_id,
            'publish_date'  => $request->publish_date,
            'content_status'        =>$request->status,
            'topic_cover_image'   => $photoPath,
        ]);

        if($blog)
        {
            $this->accessLogger->logEntry($userId,'Blog Content Submit.','Blog Content ','','');
            flash()->addSuccess('Blog content save operation has been successful.');
            return Redirect::back();
        }else
        {
            flash()->addError('Sorry, Blog content save operation has been failed.');
            return Redirect::back();
        }

    }
    
    
    

    public function show($id)
    {

        $keyId = Crypt::decryptString($id);
        $blogContent = BlogContent::where('id', $keyId)->select('*')->get();

        return view('blog.blog_content.edit')
            ->with('blogContent', $blogContent);
    }

    
    public function edit($id)
    {

        $keyId = Crypt::decryptString($id);
        $blogContent = BlogContent::where('id', $keyId)->select('*')->get();

        return view('blog.blog_content.edit')
            ->with('blogContent', $blogContent);
    }


    public function update(Request $request)
    {


       $userId = Session::get('userId');

        // ✅ Check duplicate (but exclude current record ID)
        if (
            BlogContent::where('title', $request->title)
                ->where('blog_id', $request->blog_id)
                ->where('id', '!=', $request->id)
                ->exists()
        ) {
            flash()->addError('Sorry, Duplicate Found, Blog content update operation has been failed.');
            return Redirect::back();
        }

        // ✅ Find existing record
        $blog = BlogContent::find($request->id);

        if (!$blog) {
            flash()->addError('Blog content not found.');
            return Redirect::back();
        }

        // ✅ Handle file upload (if new photo exists)
        $photoPath = $blog->topic_cover_image; // keep old image by default
        if ($request->hasFile('photo')) {
            $uploadedPath = 'uploads/topic-cover/';
            $storagePath  = 'uploads/topic-cover/';
            $parent       = "topic-cover";
            $photoUrl  = $this->imageObject->photoUpload($request, 'photo', $uploadedPath, $storagePath, $parent, $userId);
            $photoPath = $photoUrl;
        }

        // ✅ Update into database
        $blog->update([
            'title'             => $request->title,
            'content'           => $request->content,
            'blog_id'           => $request->blog_id,
            'publish_date'      => $request->publish_date,
            'content_status'    => $request->content_status,
            'topic_cover_image' => $photoPath,
        ]);

        if ($blog) {
            $this->accessLogger->logEntry($userId, 'Blog Content Updated.', 'Blog Content', '', '');
            flash()->addSuccess('Blog content update operation has been successful.');
            return Redirect::back();
        } else {
            flash()->addError('Sorry, Blog content update operation has been failed.');
            return Redirect::back();
        }

    }

    public function getAllItems(Request $request)
    {
        $blogContents = DB::table('blog_contents')->select(['*'])->orderBy('id', 'DESC')->get();
        return datatables()->of($blogContents)
            ->addIndexColumn()
            ->addColumn('publish_date', function ($blogContents) {
                return date('d-m-Y', strtotime($blogContents->publish_date));
            })   
            ->addColumn('blog', function ($blogContents) {
                $blog = DB::table('blogs')->where('id', $blogContents->blog_id)->first();
                return $blog ? htmlspecialchars($blog->title) : 'N/A';

            })
            ->addColumn('content_status', function ($blogContents) {
                $statusBadge = '';
                if ($blogContents->content_status === 'DRAFT') {
                    $statusBadge = '<span class="badge bg-warning text-dark">Draft</span>';
                } elseif ($blogContents->content_status === 'PUBLISHED') {
                    $statusBadge = '<span class="badge bg-success">Published</span>';
                } elseif ($blogContents->content_status === 'INACTIVE') {
                    $statusBadge = '<span class="badge bg-secondary">Inactive</span>';
                } else {
                    $statusBadge = '<span class="badge bg-info text-dark">' . htmlspecialchars($blogContents->content_status) . '</span>';
                }
                return $statusBadge;
            })
            ->addColumn('action', function ($blogContents) {
                $btn1 = '<a href="' . '/blog-content/show/' . Crypt::encryptString($blogContents->id) . '" class="edit btn btn-success btn-sm"><i class="fa fa-file-text-o" aria-hidden="true"></i> Detail</a> ';
                $btn2 = '<a href="' . '/blog-content/edit/' . Crypt::encryptString($blogContents->id) . '" class="edit btn alert-primary btn-sm"><i class="fa fa-file-text-o" aria-hidden="true"></i> Edit</a> ';
                return $btn1 . $btn2;
            })
            ->rawColumns(['action','publish_date','content_status','blog'])
            ->make(true);
    }
}
