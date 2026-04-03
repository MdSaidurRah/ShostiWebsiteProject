<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    //

    public function portfolio()
    {
        $pageTitle ="Portfolio";
        return view('website.portfolio.portfolio')
            ->with('pageTitle',$pageTitle);
    }

 
}