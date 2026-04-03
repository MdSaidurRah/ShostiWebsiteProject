<?php

namespace App\Http\Controllers\Website;

use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function news()
    {
        $pageTitle ="News";
        $news = DB::table('news')
            ->select('*')
            ->where('status','PUBLISHED')
            ->orderBy('id','DESC')
            ->get();
        return view('website.reading-content.news')
            ->with('news',$news)
            ->with('pageTitle',$pageTitle);
    }

    public function contentDetail($content, $newsTitle)
    {
        $contentType = $content;
        if($content =='news')
        {
            $contentType = 'News';
            $pageTitle ='News';
        }elseif ($content =='article')
        {
            $contentType = 'Article';
            $pageTitle ='Article';
        }else{
            $contentType = 'Feature';
            $pageTitle ='Feature';
        }

        $news = DB::table('news')
            ->select('*')
            ->where('newsTitle',$newsTitle)
            ->where('status','PUBLISHED')
            ->orderBy('id','DESC')
            ->get();

        $newsContent = DB::table('news_content')
            ->select('*')
            ->where('news_id',$news[0]->id)
            ->where('status','PUBLISHED')
            ->get();

        return view('website.reading-content.content-detail')
            ->with('newsContent',$newsContent)
            ->with('news',$news)
            ->with('pageTitle',$pageTitle);
    }

    public function article()
    {
        $pageTitle ="Article";
        $article = DB::table('news')
            ->select('*')
            ->where('status','PUBLISHED')
            ->orderBy('id','DESC')
            ->get();
        return view('website.reading-content.article')
            ->with('article',$article)
            ->with('pageTitle',$pageTitle);
    }

    public function feature()
    {
        $pageTitle ="Feature";
        $feature = DB::table('news')
            ->select('*')
            ->where('status','PUBLISHED')
            ->orderBy('id','DESC')
            ->get();
        return view('website.reading-content.feature')
            ->with('feature',$feature)
            ->with('pageTitle',$pageTitle);
    }



}
