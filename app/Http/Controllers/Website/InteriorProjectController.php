<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InteriorProjectController extends Controller
{
    //

    public function projectInformation($id)
    {
        $projects = DB::table('business_projects')
            ->where('id', $id)
            ->select('*')
            ->get();
        
        $projectPhotos = DB::table('project_photos')
            ->where('project_id', $id)
            ->select('*')
            ->get();

        $pageTitle = $projects[0]->name . ' - Project Information';

        return view('website.projects.project-information')
            ->with('projects', $projects)
            ->with('projectPhotos', $projectPhotos)
            ->with('pageTitle', $pageTitle);
    }

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
        $categoryId  = DB::table('project_category')
            ->where('category_name', $category )
            ->select('id')
            ->first();

        $projects  = DB::table('business_projects')
            ->where('category_id', $categoryId->id)
            ->select('*')
            ->get();


        $pageTitle = $category .' Interior Projects';

        return view('website.projects.project-detials')
            ->with('projects',$projects)
            ->with('pageTitle',$pageTitle);
    }

   
}
