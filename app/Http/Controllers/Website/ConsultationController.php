<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

use App\Mail\ContactUsSubmissionReply;
use App\Mail\ContactUsSubmissionNotification;
use App\Models\ConsultationForm;
use Illuminate\Support\Facades\Mail;

class ConsultationController extends Controller
{



    public function consultationFormSubmission(Request $request)
    {

        // ✅ Validation
        $request->validate([
            'name'     => 'required|string|max:100',
            'phone'    => 'required|regex:/^01[0-9]{9}$/',
            'location' => 'nullable|string|max:150',
            'size'     => 'nullable|string|max:50',
            'type'     => 'nullable|string|max:150',
            'message'  => 'nullable|string|max:2000',
        ]);

        try {

            // ✅ Store Data
            ConsultationForm::create([
                'name'     => $request->name,
                'phone'    => $request->phone,
                'location' => $request->location,
                'size'     => $request->size,
                'type'     => $request->type,
                'message'  => $request->message,
            ]);

            // ✅ Redirect Back With Success Message
            return redirect()->back()
                ->with('success', 'Your consultation request has been submitted successfully! We will contact you very soon. Thank you! ');

        } catch (\Exception $e) {

            return redirect()->back()
                ->with('error', 'Sorry! Something went wrong. Please try again.');
        }

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
