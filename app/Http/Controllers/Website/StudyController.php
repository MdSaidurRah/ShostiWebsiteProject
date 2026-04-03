<?php

namespace App\Http\Controllers\Website;

use App\Models\BlogCategory;
use Illuminate\Routing\Controller;

use Illuminate\Support\Facades\DB;

class StudyController extends Controller
{
    public function index()
    {
        $pageTitle ="Study";
        
    
        $webpage = DB::table('website_pages')
            ->select('*')
            ->where('status','Published')
            ->orderBy('id','DESC')
            ->get();


        $blog_categories = DB::table('blog_categories')
            ->select('*')
            ->orderBy('id','DESC')
            ->get();

        return view('website.page.webpage')
            ->with('webpage',$webpage)
            ->with('blog_categories',$blog_categories)
            ->with('pageTitle',$pageTitle);
    }

    public function studyContent($slug)
    {

        $page = DB::table('website_pages')->where('slug', $slug)->first();
        if (!$page) {
            abort(404);
        }

        readCount($page->id);

        return $page->content;

        // $blog_contents = DB::table('blog_contents')->where('blog_id', $blog->id)->get();
        
        // $blog_categories = DB::table('blog_categories')
        //     ->select('*')
        //     ->orderBy('id','DESC')
        //     ->get();

        // $blog_categories = DB::table('blog_categories')
        //     ->select('*')
        //     ->orderBy('id','DESC')
        //     ->get();


        // $pageTitle = $blog->title ?? 'Blog Detail';

        // return view('website.reading.blog_detail')
        //     ->with('blog', $blog)
        //     ->with('blog_contents', $blog_contents)
        //     ->with('blog_categories',$blog_categories)
        //     ->with('blog_categories',$blog_categories)
        //     ->with('pageTitle', $pageTitle);
    }


    
    public function categoriesBlogList($slug)
    {
        $pageTitle = "Categories Blog";
        $category =  BlogCategory::where('slug',$slug)->select('id')->first();
      
        $blogs = DB::table('blogs')
            ->where('status', "Published")
            ->where('category_id', $category->id)
        ->get();
        
        return view('website.reading.categories-blogs')
            ->with('pageTitle', $pageTitle)
            ->with('blogs', $blogs);
    }

    

}
