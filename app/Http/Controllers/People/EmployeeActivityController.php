<?php


namespace App\Http\Controllers\People;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Support\Facades\Crypt;
use App\LibraryFunctions\accesslogger;
use App\LibraryFunctions\crudlib;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;


class EmployeeActivityController extends Controller
{
    public $accessLogger;
    public $crudObject;

    public function __construct()
    {
        $this->accessLogger=new accesslogger();
        $this->crudObject=new crudlib();
        $this->middleware('checkPermission');
    }

    public function advanceList($id)
    {
        $keyId = Crypt::decryptString($id);
        $employee=DB::table('employee')->select('*')->where('id',$keyId)->get();
        return view('Employee.employee-advance-list')
            ->with('employee',$employee);
    }

    public function getAllIEmployeeAdvance(Request $request)
    {
        Log::info($request->employeeId);
        $advance=DB::table('advance')
            ->where('employee_id',$request->employeeId)
            ->select(['*'])->orderBy('id','DESC')->get();
        return datatables()->of($advance)
            ->addIndexColumn()
            ->addColumn('action',function ($advance){
                $btn3='<a href="'.'/advance/edit/'. Crypt::encryptString($advance->id).'" class="edit btn btn-warning btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a> ';
                return $btn3;
            })
            ->rawColumns(['view-btn','action'])
            ->make(true);
    }

}
