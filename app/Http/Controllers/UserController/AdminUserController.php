<?php

namespace App\Http\Controllers\UserController;

use App\LibraryFunctions\imagelib;
use App\Models\User;
use App\Models\Systemuser;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\LibraryFunctions\crudlib;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use App\LibraryFunctions\emailsender;
use Illuminate\Support\Facades\Hash;
use App\LibraryFunctions\accesslogger;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Crypt;

class AdminUserController extends Controller
{
    public $accessLogger;
    public $crudObject;
    public $imageObject;

    public function __construct()
    {
        $this->imageObject = new imagelib();
        $this->accessLogger=new accesslogger();
        $this->crudObject=new crudlib();
        $this->middleware('checkPermission')->except(['receiptPrint']);
    }


    public function profile()
    {

        $userId = Session::get('userId');

        $user = DB::table('users')
            ->select('*')
            ->where('id',$userId)
            ->get();

        return view('admin.profile')
            ->with('user',$user);
    }    

    public function signatureUpdate(Request $request)
    {

        $request->validate([
            'user_id' => 'required',
            'signature' => [
                'required',
                'image', // ensures it's an image
                'mimes:jpeg,png,jpg', // allowed file types
                'max:2048' // max size in KB (2 MB)
                // 'dimensions:min_width=200,min_height=50,max_width=400,max_height=200' // optional
            ]
        ]);


        if($request->signature)
        {
            $uploadedPath = 'uploads/user-photos/';
            $storagePath = 'uploads/user-photos/';
            $parent = "signature";
            $photoUrl = $this->imageObject->photoUpload($request,'signature', $uploadedPath, $storagePath, $parent, 1);
        }



        $signatrueUpdate =  DB::table('users')
                ->where('id', $request->user_id)
                ->update(['signature' => $photoUrl]);

        if($signatrueUpdate)
        {
            $this->accessLogger->logEntry(0,"User Signature has been updated","User",'','');
            flash()
                ->option('timeout', 6000)
                ->addSuccess('User signature has been updated.');
            return redirect()->back();
        }else
        {
            flash()
                ->option('timeout', 6000)
                ->addError('Sorry, signature has been update failed.');
            return redirect()->back();
        }

    }
    
    
    
    public function allUser()
    {

        $user = DB::table('users')->get();
        $userNumber =  count($user);
        return view('admin.users')
            ->with('userNumber',$userNumber)
            ->with('user',$user);
    }


    public function addUser()
    {
        $role = DB::table('roles')->select('role')->where('roleStatus','ACTIVE')->get();
        return view('admin.add-user')
            ->with('role',$role);
    }

    public function userRole($id)
    {

        $keyId = Crypt::decryptString($id);
        $user = DB::table('users')
            ->select('*')
            ->where('id',$keyId)
            ->get();

        $role = DB::table('roles')->select('role')->where('roleStatus','ACTIVE')->get();
        $permission = DB::table('access_permission')->select('permission','userRole')->where('userRole',$user[0]->userRole)->get();

        return view('admin.user-role')
            ->with('role',$role)
            ->with('permission',$permission)
            ->with('user',$user);
    }



    public function storeUser(Request $request)
    {

        $exists =Systemuser::where('email', $request->name)
            ->exists();

        if ($exists) {
            flash()->addError('User email already exists.');
            return Redirect::back();
        }
        else
        {
            if($request->userPassword)
        {
            $request->request->add(['password'=> Hash::make($request->userPassword)]);
        }

        if($request->user_photo)
        {
            $uploadedPath = 'uploads/user-photos/';
            $storagePath = 'uploads/user-photos/';
            $parent = "user-photo";
            $photoUrl = $this->imageObject->photoUpload($request,'user_photo', $uploadedPath, $storagePath, $parent, 1);
            $request->request->add(['userPhoto' =>$photoUrl]);
        }

        $data = $request->except('_token','userPassword');
        $userAdd  = $this->crudObject->create(new Systemuser(),$data);
        if($userAdd)
        {
            $this->accessLogger->logEntry(0,"New User create in system Admin","System",'','');
            flash()
                ->option('timeout', 6000)
                ->addSuccess('New User Added successfully.');
            return redirect()->back();
        }else
        {
            flash()
                ->option('timeout', 6000)
                ->addError('Sorry, New User added successfully failed.');
            return redirect()->back();
        }

        }



        
    }

    public function delete($id)
    {

        $keyId = Crypt::decryptString($id);
        User::find($keyId)->delete();
        return response()->json(['success'=>'User has been deleted successfully.']);
    }


    public function viewUser($id)
    {
        $keyId = Crypt::decryptString($id);

        $user = DB::table('users')
            ->select('*')
            ->where('id',$keyId)
            ->get();

        $role = DB::table('roles')->select('role')->where('roleStatus','ACTIVE')->get();

        return view('admin.user-view')
            ->with('role',$role)
            ->with('user',$user);
    }

    public function viewUserActivities($id)
    {
        $keyId = Crypt::decryptString($id);

        $user = DB::table('users')
            ->select('*')
            ->where('id',$keyId)
            ->get();

        $userActivities = DB::table('access_logs')
            ->select('*')
            ->where('userId',$keyId)
            ->orderBy('id','DESC')
            ->get();

        return view('admin.view-user-activities')
            ->with('user',$user)
            ->with('userActivities',$userActivities);
    }

    public function updateUser(Request $request)
    {


        if($request->userPassword)
        {
            $request->request->add(['password'=> Hash::make($request->userPassword)]);
        }

        if($request->user_photo)
        {
            $uploadedPath = 'uploads/user-photos/';
            $storagePath = 'uploads/user-photos/';
            $parent = "user-photo";
            $photoUrl = $this->imageObject->photoUpload($request,'user_photo', $uploadedPath, $storagePath, $parent, 1);
            $request->request->add(['userPhoto' =>$photoUrl]);
        }

        $data = $request->except('_token','id','userPassword','user_photo');

        $othersUpdate  = $this->crudObject->update(new Systemuser(),$data,'id',$request->id);

        if($othersUpdate)
        {
            $this->accessLogger->logEntry($request->id,"User Information update by system Admin","System",'','');
            flash()
                ->option('timeout', 6000)
                ->addSuccess('Others information has been update successfully.');
            return redirect()->back();
        }else
        {
            flash()
                ->option('timeout', 6000)
                ->addError('Sorry, User information update has been failed.');
            return redirect()->back();
        }
    }


    public function allSystemUser(Request $request)
    {
        $users = DB::table('users')
            ->select([
                '*'
            ])
            ->orderBy('id','DESC')
            ->get();


        return datatables()->of($users)
            ->addIndexColumn()

            ->addColumn('photo', function ($users){
                $photo='<img src="http://127.0.0.1:8000/'.$users->userPhoto.'" width="50px">';
                return $photo;
            })
            ->addColumn('action', function($users)
            {
                $btn1 = '<a href="'. '/user/view-user/'. Crypt::encryptString($users->id).'" class="edit btn btn-info btn-sm"><i class="fa fa-file-text-o" aria-hidden="true"></i> View</a> ';

                return $btn1;
            })
            ->rawColumns(['action','photo'])
            ->make(true);
    }

}

