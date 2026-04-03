<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class AboutUsController extends Controller
{

    public function aboutUs()
    {
        $pageTitle ="About Us";
        return view('website.about-us')
            ->with('pageTitle',$pageTitle);
    }

    public function meetTheTeam()
    {
        $pageTitle ="Meet The Team";
        return view('website.general-page.team')
            ->with('pageTitle',$pageTitle);
    }


}
