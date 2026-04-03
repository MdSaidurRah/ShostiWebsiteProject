<?php


namespace App\Http\Controllers\People;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\LibraryFunctions\imagelib;
use Illuminate\Support\Facades\Crypt;
use App\LibraryFunctions\accesslogger;
use App\LibraryFunctions\crudlib;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;


class EmployeeController extends Controller
{
    public $accessLogger;
    public $crudObject;
    public $imageObject;

    public function __construct()
    {
        $this->accessLogger=new accesslogger();
        $this->crudObject=new crudlib();
        $this->imageObject = new imagelib();
        $this->middleware('checkPermission');
    }


    public function index()
    {
        return view('Employee.employee-all')
        ->with('projects', getProjectList());
    }


    public function create()
    {
        return view('Employee.employee-add');
    }


    public function store(Request $request)
    {
        $exists =Employee::where('employee_name', $request->employee_name)
            ->where('project_id',$request->project_id)
            ->exists();

        if ($exists) {
            flash()->addError('Employe on this project already exists.');
            return Redirect::back();
        }
        else
        {
            $userId=Session::get('userId');
        $request->request->add(['createdBy'=>$userId]);
        if($request->photo)
        {
            $uploadedPath = 'uploads/employee-photos/';
            $storagePath = 'uploads/employee-photos/';
            $parent = "employee-photo";
            $photoUrl = $this->imageObject->photoUpload($request,'photo', $uploadedPath, $storagePath, $parent, 1);
            $request->request->add(['photograph' =>$photoUrl]);
        }
        $inputFormData=$request->except('_token','photo');
        $employee=$this->crudObject->create(new Employee(),$inputFormData);
        if($employee)
        {
            $this->accessLogger->logEntry($userId,'News submit.','News content','','');
            flash()->addSuccess('Add operation has been successful.');
            return Redirect::back();
        }else
        {
            flash()->addError('Sorry, Add operation has been failed.');
            return Redirect::back();
        }

        }


        
    }

    public function profile($id)
    {
        $keyId = Crypt::decryptString($id);
        $employee=DB::table('employee')->select('*')->where('id',$keyId)->get();


        $salarySheetData = DB::table('salary_table')->where('employee_id',$employee[0]->id)->select('*')->get();
   

        return view('Employee.employee-profile')
            ->with('salarySheetData',$salarySheetData)
            ->with('employee',$employee);
    }


    public function edit($id)
    {
        $keyId = Crypt::decryptString($id);
        $employee=DB::table('employee')->select('*')->where('id',$keyId)->get();
        return view('Employee.employee-edit')  
            ->with('projects', getProjectList())
            ->with('employee',$employee);
    }


    public function update(Request $request)
    {
        $userId=Session::get('userId');
        $request->request->add(['updatedBy'=>$userId]);
        if($request->photo)
        {
            $uploadedPath = 'uploads/employee-photos/';
            $storagePath = 'uploads/employee-photos/';
            $parent = "employee-photo";
            $photoUrl = $this->imageObject->photoUpload($request,'photo', $uploadedPath, $storagePath, $parent, 1);
            $request->request->add(['photograph' =>$photoUrl]);
        }

        $inputFormData=$request->except('_token','id','submit','photo');
        $employee=$this->crudObject->update(new Employee(),$inputFormData,'id',$request->id);
        if($employee)
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


    public function delete($id)
    {
        $employee=DB::table('employee')->select('*')->where('id',$id)->get();
        return view('Employee.view-news')
            ->with('employee',$employee);
    }


    public function getAllItems(Request $request)
    {
        $employee=DB::table('employee')->select(['*'])->orderBy('id','DESC')->get();
        return datatables()->of($employee)
            ->addIndexColumn()
            ->addColumn('action', function ($employee){
                $btn1='<a href="'.'/employee-advance/'. Crypt::encryptString($employee->id).'" class="edit btn btn-warning btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Advance</a> ';
                $btn2='<a href="'.'/employee/profile/'. Crypt::encryptString($employee->id).'" class="edit btn btn-warning btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Profile</a> ';
                $btn3='<a href="'.'/employee/edit/'. Crypt::encryptString($employee->id).'" class="edit btn btn-warning btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a> ';
                return $btn1 . $btn2 . $btn3;
            })            
            ->addColumn('photo', function ($employee){
                $photo='<img src="http://127.0.0.1:8000/'.$employee->photograph.'" width="50px">';
                return $photo;
            })            
            ->addColumn('employee', function ($employee){
                $employee=$employee->employee_name ;
                return $employee;
            })
            ->rawColumns(['action','photo','employee'])
            ->make(true);
    }

}
