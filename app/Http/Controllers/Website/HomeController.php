<?php

namespace App\Http\Controllers\Website;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller;

class HomeController extends Controller
{
    public function home()
    {

        $businessClients = DB::table('business_clients')->where('status','ACTIVE')->get();

        $partnershipBrands = DB::table('partnership_brands')->where('status','ACTIVE')->get();

        return view('website.welcome')
            ->with('partnershipBrands', $partnershipBrands)
            ->with('businessClients', $businessClients);
    }




    public function services()
    {
        $pageTitle ="Services";

        return view('website.services')
            ->with('pageTitle',$pageTitle);
    }

    public function gallery()
    {
        $pageTitle ="Gallery";

        return view('website.gallery')
            ->with('pageTitle',$pageTitle);
    }

}
