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
use App\Models\PromotionalVideo;
use App\Models\VisitorContactUsMessage;
use App\Models\WebsitePage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;

class VisitorMessageController extends Controller
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


    public function visitorMessage()
    {

        return view('report.visitor-message.index');
    }



    public function show($id)
    {
        $keyId = Crypt::decryptString($id);
        $message = VisitorContactUsMessage::findOrFail($keyId);

        return view('report.visitor-message.show')->with('message', $message);


    }



    /** ✅ Get all pages (for DataTables or listing) */
    public function getAllItems(Request $request)
    {
        $visitor_contactus_message = DB::table('visitor_contactus_message')->select(['*'])->orderBy('id', 'DESC')->get();

        return datatables()->of($visitor_contactus_message)
            ->addIndexColumn()
         
            ->addColumn('action', function ($visitor_contactus_message) {
                $btn2 = '<a href="' . '/visitor-message/show/' . Crypt::encryptString($visitor_contactus_message->id) . '" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Show</a> ';
                return $btn2;
            })
            ->rawColumns(['action','video_thums'])
            ->make(true);
    }
}