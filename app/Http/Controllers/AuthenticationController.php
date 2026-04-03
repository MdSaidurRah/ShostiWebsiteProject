<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\LibraryFunctions\accesslogger;
use App\LibraryFunctions\emailsender;
use App\Models\Account;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class AuthenticationController extends Controller
{

    public $emailObject;
    public $accessLogger;

    public function __construct()
    {
        $this->emailObject = new emailsender();
        $this->accessLogger = new accesslogger();
    }

    public function admin()
    {

  
   
       return view('dashboard');
    }

    public function login()
    {
        $pageTitle='Account Login';
        return view('User.login')
            ->with('pageTitle', $pageTitle);
    }

    public function loginAttempt(Request $request)
    {


        // return Hash::make($request->password);

        $validated = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);






        // Check if user exists by email
        $user = User::where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password) && $user->userStatus == "ACTIVE") {
            $this->accessLogger->logEntry($user->id,"Successful Login Attempt","System",'','');
            session::flush();
            $loggedUserId = $user->id;
            Session::put('userName', $user->name);
            Session::put('userId', $loggedUserId);
            Session::put('systemUniqueId', $user->systemUniqueId);
            Session::put('userEmail', $user->email);
            Session::put('userRole', $user->userRole);
            Session::put('userPhoto', $user->userPhoto);
            Session::put('loginStatus', 'ACTIVE');
            return Redirect::route('dashboard');
        } else {
            $message = "User email or password not matched";
            flash()->addError('Login Fail. Please try again with valid credential');
            return redirect()->back();
        }

    }

    public function signOut()
    {
        header("cache-Control: no-store, no-cache, must-revalidate");
        header("cache-Control: post-check=0, pre-check=0", false);
        header("Pragma: no-cache");
        header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
        $this->accessLogger->logEntry(Session::get('userId'),"Successful Logout Attempt","System",'','');
        session::flush();
        Session::flash('message', "You are signed out successfully");
        return Redirect::route('login');
    }

}

