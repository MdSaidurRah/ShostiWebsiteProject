<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //

    public function blog()
    {
        $pageTitle ="Blog";

        return view('website.blog.blog')
            ->with('pageTitle',$pageTitle);
    }

    public function blogDetails()
    {
        $pageTitle ="Blog Details";

        return view('website.blog.blog-details')
            ->with('pageTitle',$pageTitle);
    }

}
