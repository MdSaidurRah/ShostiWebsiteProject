<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{


    public function arduino()
    {
        $pageTitle ="Arduino Micro Controller";
        return view('website.course.arduino')
            ->with('pageTitle',$pageTitle);
    }

    public function python()
    {
        $pageTitle ="Python";
        return view('website.course.python')
            ->with('pageTitle',$pageTitle);
    }

    public function php()
    {
        $pageTitle ="PHP";
        return view('website.course.php')
            ->with('pageTitle',$pageTitle);
    }

    public function laravel()
    {
        $pageTitle ="Laravel";
        return view('website.course.laravel')
            ->with('pageTitle',$pageTitle);
    }

    public function vuejs()
    {
        $pageTitle ="Vue Js 3";
        return view('website.course.vuejs')
            ->with('pageTitle',$pageTitle);
    }
    
}
