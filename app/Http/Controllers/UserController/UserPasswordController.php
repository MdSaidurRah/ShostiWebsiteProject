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

class UserPasswordController extends Controller
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


    public function changePassword()
    {

        $userId = Session::get('userId');

        $user = DB::table('users')
            ->select('*')
            ->where('id',$userId)
            ->get();

        return view('admin.change-password')
            ->with('user',$user);
    }    
    
    public function updatePassword(Request $request)
    {

         $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|string|min:4|confirmed',
        ]);

        $user = User::where('id', Session::get('userId'))->first();

        // Check if current password matches
        if (!Hash::check($request->current_password, $user->password)) {
            return back()->with('error', 'Your current password is incorrect.');
        }

        $user->password = Hash::make($request->new_password);
        $user->save();

        header("cache-Control: no-store, no-cache, must-revalidate");
        header("cache-Control: post-check=0, pre-check=0", false);
        header("Pragma: no-cache");
        header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
        $this->accessLogger->logEntry(Session::get('userId'),"Successful logout attempt after password change","System",'','');
        session::flush();
        flash()->addSuccess('Password Change Successful. Your current password has been changned.');
        return Redirect::route('login');

      
    }

   

}

