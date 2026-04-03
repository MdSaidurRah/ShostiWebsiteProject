<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InteriorProjectController extends Controller
{
    //

    public function interior()
    {
        $pageTitle ="Interior";

        $projectCategory = DB::table('project_category')
            ->where('category_status', 'ACTIVE')
            ->select('*')
            ->get();

        return view('website.projects.interior')
            ->with('projectCategory',$projectCategory)
            ->with('pageTitle',$pageTitle);
    }

    public function interiorProjectDetail($category)
    {
        $category  = DB::table('project_category')
            ->where('category_name', $category )
            ->select('id')
            ->first();

        $projects  = DB::table('projects')
            ->where('category_id', $category->id)
            ->select('*')
            ->get();


        $pageTitle ="Kitchen Interior Projects";

        return view('website.projects.project-detials')
            ->with('projects',$projects)
            ->with('pageTitle',$pageTitle);
    }

   
}
