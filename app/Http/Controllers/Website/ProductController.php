<?php

namespace App\Http\Controllers\Website;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;

use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{




    public function productDetail($slug)
    {

        $product = DB::table('business_products')->where('slug', $slug)->first();
        if (!$product) {
            abort(404);
        }

        $blog_categories = DB::table('blog_categories')
            ->select('*')
            ->orderBy('id','DESC')
            ->get();

        $blog_categories = DB::table('blog_categories')
            ->select('*')
            ->orderBy('id','DESC')
            ->get();


        $pageTitle = $product->product_title ?? 'Prodcut Detail';

        return view('website.product.product-detail')
            ->with('product', $product)
            ->with('blog_categories',$blog_categories)
            ->with('blog_categories',$blog_categories)
            ->with('pageTitle', $pageTitle);


        $pageTitle ="Service Detail";
        return view('service-detail')
            ->with('pageTitle',$pageTitle);
    }


    public function softwareDevelopment()
    {
        $pageTitle ="Software Development";
        return view('software-development')
            ->with('pageTitle',$pageTitle);
    }
    public function websiteDesign()
    {
        $pageTitle ="Website Design";
        return view('website.website-design')
            ->with('pageTitle',$pageTitle);
    }


    public function creativeLarning()
    {
        $pageTitle ="Creative Learning";
        return view('website.creative-learning')
            ->with('pageTitle',$pageTitle);
    }

    public function technicalConsultancy()
    {
        $pageTitle ="Technical Consultancy";
        return view('website.technical-consultancy')
            ->with('pageTitle',$pageTitle);
    }

    public function digitalMarketing()
    {
        $pageTitle ="Digital Marketing";
        return view('website.digital-marketing')
            ->with('pageTitle',$pageTitle);
    }


    public function newsDetail($id)
    {
        $news = DB::table('news')
            ->select('*')
            ->where('id',$id)
            ->where('status','PUBLISHED')
            ->orderBy('id','DESC')
            ->get();

        $pageTitle =$news[0]->newsTitle;

        return view('website.news-detail')
            ->with('news',$news)
            ->with('pageTitle',$pageTitle);
    }



    public function contactUsSubmission(Request $request)
    {
        $visitorQuery = DB::table('visitor_contactus_message')->insert(
            [
                'visitorName' => $request->visitorName,
                'visitorEmail' => $request->visitorEmail,
                'visitorContactNo' =>$request->visitorContactNo,
                'visitorMessage' => $request->visitorMessage
            ]
        );

        if($visitorQuery)
        {
            return response()->json(['success' => 'Your Message has been submitted successfully, We will on it very soon, Thanks.']);
        }else
        {
            return response()->json([
                'fail' => 'Sorry, Your Message submission has been failed. Please, try again after some time.']);
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
