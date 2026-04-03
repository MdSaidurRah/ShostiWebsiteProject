<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    //

    public function interior()
    {
        $pageTitle ="Interior";

        return view('website.projects.interior')
            ->with('pageTitle',$pageTitle);
    }

    public function exterior()
    {
        $pageTitle ="Exterior";

        return view('website.projects.exterior')
            ->with('pageTitle',$pageTitle);
    }
}
