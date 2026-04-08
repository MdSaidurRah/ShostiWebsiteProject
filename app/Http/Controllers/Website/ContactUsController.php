<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\Request;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class ContactUsController extends Controller
{
    public function home()
    {
        return view('welcome');
    }


    public function contactUs()
    {
        $pageTitle ="Contact Us";

        return view('website.general-page.contact-us')
            ->with('pageTitle',$pageTitle);
    }


    public function contactUsSubmission(Request $request)
    {
    
        $request->validate([
            'name'       => 'required|string|max:100',
            'email'      => 'nullable|email|max:150',
            'subject'    => 'nullable|string|max:255',
            'contact_no' => 'required|digits_between:10,11',
            'message'    => 'required|string|max:2000',
        ]);

        $visitorQuery = DB::table('visitor_contactus_message')->insert([
            'visitor_name'       => $request->name,
            'visitor_email'      => $request->email,
            'visitor_contact_no' => $request->contact_no,
            'subject'    => $request->subject,
            'visitor_message'    => $request->message,
            'created_at'         => now(),
            'updated_at'         => now(),
        ]);

        if ($visitorQuery) {
          return redirect()->back()
                ->with('success', 'Your message has been submitted successfully. We will contact you very soon. Thank you!');
        }

        return redirect()->back()
            ->with('error', 'Sorry! Your message submission failed. Please try again later.');

    }

    public function registrationForm()
    {
        $pageTitle ="Registration Form";
        return view('website.registration-form')
            ->with('pageTitle',$pageTitle);
    }

    public function registrationFormSubmission(Request $request)
    {
        return $request;

    }
}
