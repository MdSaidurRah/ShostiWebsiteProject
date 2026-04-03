<?php

namespace App\Http\Controllers\Website;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller;

class ServiceController extends Controller
{

    public function services()
    {
        $pageTitle ="Services";

        $businessService = DB::table('business_services')->where('status','ACTIVE')->get();

        return view('website.services.services')
            ->with('businessService',$businessService)
            ->with('pageTitle',$pageTitle);
    }

 

}
