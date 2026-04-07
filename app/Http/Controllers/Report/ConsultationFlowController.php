<?php

namespace App\Http\Controllers\Report;

use Illuminate\Routing\Controller;
use App\LibraryFunctions\accesslogger;
use App\LibraryFunctions\crudlib;
use App\LibraryFunctions\imagelib;
use App\Models\BlogCategory;
use App\Models\BusinessAdvertisement;
use App\Models\BusinessClient;
use App\Models\BusinessProject;
use App\Models\ConsultationForm;
use App\Models\PromotionalVideo;
use App\Models\VisitorContactUsMessage;
use App\Models\WebsitePage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;

class ConsultationFlowController extends Controller
{
    public $accessLogger;
    public $crudObject;
    public $imageObject;
    public $userId;

    public function __construct()
    {
        $this->accessLogger = new accesslogger();
        $this->crudObject   = new crudlib();
        $this->imageObject  = new imagelib();
        $this->userId       = Session::get('userId');
        // $this->middleware('checkPermission');
    }


    public function consultationQuery()
    {
        return view('crm.index');
    }

    public function consultationQueryShow($id)
    {
        $keyId = Crypt::decryptString($id);
        $form = ConsultationForm::findOrFail($keyId);

        return view('crm.consultation-show')->with('form', $form);


    }

   

    /** ✅ Get all pages (for DataTables or listing) */
    public function getAllItems(Request $request)
    {
        $consultationQuery = DB::table('consultation_form')->select(['*'])->orderBy('id', 'DESC')->get();

        return datatables()->of($consultationQuery)
            ->addIndexColumn()
         
            ->addColumn('action', function ($consultationQuery) {
                $btn2 = '<a href="' . '/consultation-query/show/' . Crypt::encryptString($consultationQuery->id) . '" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Show</a> ';
                return $btn2;
            })
            ->rawColumns(['action','video_thums'])
            ->make(true);
    }
}   