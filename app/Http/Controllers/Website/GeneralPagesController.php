<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GeneralPagesController extends Controller
{
    //

    public function aboutUs()
    {
        $pageTitle ="About Us";
        return view('website.general-page.about-us')
            ->with('pageTitle',$pageTitle);
    }

    public function privacyPolicy()
    {
        $pageTitle ="Privacy Policy";
        return view('website.general-page.privacy-policy')
            ->with('pageTitle',$pageTitle);
    }

    public function termsOfUse()
    {
        $pageTitle ="Terms of Use";
        return view('website.general-page.terms-of-use')
            ->with('pageTitle',$pageTitle);
    }    
    
    public function siteMap()
    {
        $pageTitle ="Site Map";
        return view('website.general-page.site-map')
            ->with('pageTitle',$pageTitle);
    }    
    
    public function faq()
    {
        $pageTitle ="FAQ";
        return view('website.general-page.faq')
            ->with('pageTitle',$pageTitle);
    }  

    public function quotation()
    {

        $packages  = DB::table('packages')->where('package_status','ACTIVE')->get();

        $pageTitle ="Quotation";
        return view('website.general-page.quatation')
            ->with('packages',$packages)
            ->with('pageTitle',$pageTitle);
    }

 
}