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
        $projects = DB::table('business_projects')
            ->select(
                'project_type',
                'project_category',
                'project_status',
                DB::raw('COUNT(*) as total')
            )
            ->groupBy('project_type', 'project_category', 'project_status')
            ->get();

        $totalProjects = DB::table('business_projects')->count();
        $completedProjects = DB::table('business_projects')->where('project_status', 'Completed')->count();
        $ongoingProjects = DB::table('business_projects')->where('project_status', 'On Going')->count();
        $activeProjects = DB::table('business_projects')->where('project_status', 'Active')->count();
        $publishedProjects = DB::table('business_projects')->where('project_visibility', 'Published')->count();
        $hiddenProjects = DB::table('business_projects')->where('project_visibility', 'Hidden')->count();

        $interiorProjects = DB::table('business_projects')->where('project_type', 'Interior')->count();
        $exteriorProjects = DB::table('business_projects')->where('project_type', 'Exterior')->count();
        $consultancyProjects = DB::table('business_projects')->where('project_type', 'Consultancy')->count();

        $residanceInteriorProjects = DB::table('business_projects')
            ->where('project_type', 'Interior')->where('project_category', 'Residance')->count();
        $officeInteriorProjects = DB::table('business_projects')
            ->where('project_type', 'Interior')->where('project_category', 'Office')->count();
        $kitchenInteriorProjects = DB::table('business_projects')
            ->where('project_type', 'Interior')->where('project_category', 'Kitchen')->count();

        $service = DB::table('business_services')->where('status', 'ACTIVE')->count();
        $package = DB::table('business_packages')->where('status', 'Published')->count();
        $clients = DB::table('business_clients')->count();
        $brands = DB::table('partnership_brands')->count();
        $galleryItems = DB::table('gallery')->count();
        $banners = DB::table('site_banners')->count();
        $videos = DB::table('promotional_videos')->count();
        $ads = DB::table('business_advertisements')->count();
        $users = DB::table('users')->count();
        $visitorMessages = DB::table('visitor_contactus_message')->count();
        $unreadMessages = DB::table('visitor_contactus_message')
            ->where(function ($q) {
                $q->whereNull('reply_status')->orWhere('reply_status', '!=', 'Replied');
            })->count();
        $consultationQueries = DB::table('consultation_form')->count();

        $completionRate = $totalProjects ? round(($completedProjects / $totalProjects) * 100) : 0;
        $publishRate = $totalProjects ? round(($publishedProjects / $totalProjects) * 100) : 0;

        $recentProjects = DB::table('business_projects')
            ->select('id', 'name', 'project_type', 'project_category', 'project_status', 'project_visibility', 'project_photo')
            ->orderByDesc('id')
            ->limit(6)
            ->get();

        $recentQueries = DB::table('consultation_form')
            ->orderByDesc('id')
            ->limit(6)
            ->get();

        $recentMessages = DB::table('visitor_contactus_message')
            ->orderByDesc('id')
            ->limit(5)
            ->get();

        $typeChart = [
            'labels' => ['Interior', 'Exterior', 'Consultancy'],
            'data' => [$interiorProjects, $exteriorProjects, $consultancyProjects],
        ];
        $statusChart = [
            'labels' => ['Completed', 'On Going', 'Active'],
            'data' => [$completedProjects, $ongoingProjects, $activeProjects],
        ];

        return view('dashboard', compact(
            'projects',
            'totalProjects',
            'completedProjects',
            'ongoingProjects',
            'activeProjects',
            'publishedProjects',
            'hiddenProjects',
            'interiorProjects',
            'exteriorProjects',
            'consultancyProjects',
            'residanceInteriorProjects',
            'officeInteriorProjects',
            'kitchenInteriorProjects',
            'package',
            'service',
            'clients',
            'brands',
            'galleryItems',
            'banners',
            'videos',
            'ads',
            'users',
            'visitorMessages',
            'unreadMessages',
            'consultationQueries',
            'completionRate',
            'publishRate',
            'recentProjects',
            'recentQueries',
            'recentMessages',
            'typeChart',
            'statusChart'
        ));
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
            flash()->addError('Login Fail. Please try again with valid credential');
            return redirect()->back()
                ->withInput($request->only('email'))
                ->with('login_error', 'Email or password did not match. Please try again.');
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

