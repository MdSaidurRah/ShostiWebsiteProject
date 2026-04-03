<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

use App\Mail\ContactUsSubmissionReply;
use App\Mail\ContactUsSubmissionNotification;
use Illuminate\Support\Facades\Mail as FacadesMail;

class GeneralpageController extends Controller
{



    public function termsOfUse()
    {
        $pageTitle ="Terms of Use";
        return view('website.terms-of-use')
            ->with('pageTitle',$pageTitle);
    }

    public function faqs()
    {
        $pageTitle ="Faqs";
        return view('website.faqs')
            ->with('pageTitle',$pageTitle);
    }


    public function privacyPolicy()
    {
        $pageTitle ="Privacy Policy";
        return view('website.privacy-policy')
            ->with('pageTitle',$pageTitle);
    }

    public function cookiePolicy()
    {
        $pageTitle ="Cookie Policy";
        return view('website.cookie-policy')
            ->with('pageTitle',$pageTitle);
    }

    public function siteMap()
    {
        $pageTitle ="Site Map";
        return view('website.site-map')
            ->with('pageTitle',$pageTitle);
    }

}
