<?php

namespace App\Http\Controllers\UserController;

use App\LibraryFunctions\accesslogger;
use App\LibraryFunctions\crudlib;
use App\Models\Advance;
use App\Models\SystemInformation;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use App\LibraryFunctions\emailsender;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use App\Models\RolePermission;



class SystemInformationController extends Controller
{
    public $accessLogger;
    public $crudObject;

    public function __construct()
    {
        $this->accessLogger=new accesslogger();
        $this->crudObject=new crudlib();
        $this->middleware('checkPermission');
    }

    public function systemInformation()
    {
        $role = DB::table('roles')->select('id','role')->where('roleStatus','ACTIVE')->get();
        $permission = DB::table('permission')->select('id','permission')->where('permissionStatus','ACTIVE')->get();
        $notice='';
        return view('admin.system-information')
            ->with('role',$role)
            ->with('permission',$permission);
    }


    public function store(Request $request)
    {
        $userId=Session::get('userId');
        $request->request->add(['createdBy'=>$userId]);

        $inputFormData=$request->except('_token');
        $advance=$this->crudObject->create(new SystemInformation(),$inputFormData);
        if($advance)
        {
            $this->accessLogger->logEntry($userId,'News submit.','News content','','');
            flash()->addSuccess('Add operation has been successful.');
            return redirect()->back();
        }else
        {
            flash()->addError('Sorry, Add operation has been failed.');
            return redirect()->back();
        }
    }


    public function update(Request $request)
    {
        $userId=Session::get('userId');
        $request->request->add(['updatedBy'=>$userId]);

        $inputFormData=$request->except('_token','id','submit');
        $advance=$this->crudObject->update(new SystemInformation(),$inputFormData,'id',$request->id);
        if($advance)
        {
            $this->accessLogger->logEntry($userId,'News Update.','News content','','');
            flash()->addSuccess('Update operation has been successful.');
            return Redirect::back();
        }else
        {
            flash()->addError('Sorry, Update operation has been failed .');
            return Redirect::back();
        }
    }



    public function getSystemInformation(Request $request)
    {
        $system_information=DB::table('system_information')->select(['*'])->orderBy('id','DESC')->get();
        return datatables()->of($system_information)
            ->addIndexColumn()
            ->addColumn('view-btn',function($system_information){$viewBtn = '<button type="button" class="view-btn btn btn-sm btn-primary" data-bs-toggle="modal"
                data-information_key="'.$system_information->information_key.'"
                data-information_value="'.$system_information->information_value.'"
                data-information_key_status="'.$system_information->information_key_status.'"
                data-bs-target="#viewModal"><i class="fas fa-eye" ></i></button> ';return $viewBtn;})
            ->addColumn('edit-btn',function($system_information){$editBtn = '<button type="button" class="edit-btn btn btn-sm btn-primary" data-bs-toggle="modal"
                data-id="'.$system_information->id.'"
                data-information_key="'.$system_information->information_key.'"
                data-information_value="'.$system_information->information_value.'"
                data-information_key_status="'.$system_information->information_key_status.'"
                data-bs-target="#editModal"><i class="fas fa-edit"></i> </button> ';return $editBtn;})
            ->rawColumns(['view-btn','edit-btn'])
            ->make(true);
    }


}

