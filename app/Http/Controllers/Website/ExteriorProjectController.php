<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExteriorProjectController extends Controller
{
    //

    public function exteriorProjects()
    {
        $pageTitle ="Exterior Projects";

        $exteriorProjects =  DB::table('business_projects')
            ->where('project_type','Exterior')
            ->where('project_status','ACTIVE')
            ->select('*')
            ->orderBy('id','DESC')
            ->get();

        return view('website.projects.exterior')
            ->with('exteriorProjects',$exteriorProjects)
            ->with('pageTitle',$pageTitle);
    }

   
}
