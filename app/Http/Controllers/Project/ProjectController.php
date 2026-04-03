<?php


namespace App\Http\Controllers\Project;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Support\Facades\Crypt;
use App\LibraryFunctions\accesslogger;
use App\LibraryFunctions\crudlib;
use App\Models\Account;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;


class ProjectController extends Controller
{
    public $accessLogger;
    public $crudObject;


    public function __construct()
    {
        $this->accessLogger = new accesslogger();
        $this->crudObject = new crudlib();
     
    }


    public function index()
    {
        return view('Project.project-all');
    }


    public function create()
    {
        return view('Project.project-add');
    }


    public function getAllItems(Request $request)
    {
        $project = DB::table('projects')->select(['*'])->orderBy('id', 'DESC')->get();
        return datatables()->of($project)
            ->addIndexColumn()
    
            ->addColumn('action', function ($project) {
                $btn1 = '<a href="' . '/project/show/' . Crypt::encryptString($project->id) . '" class="edit btn btn-success btn-sm"><i class="fa fa-file-text-o" aria-hidden="true"></i> Detail</a> ';
                $btn2 = '<a href="' . '/project/edit/' . Crypt::encryptString($project->id) . '" class="edit btn alert-primary btn-sm"><i class="fa fa-file-text-o" aria-hidden="true"></i> Edit</a> ';
                return $btn1 . $btn2;
            })
            ->rawColumns(['action'])
            ->make(true);
    }
}
