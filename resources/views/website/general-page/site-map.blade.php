@extends('website.layouts.inner-layout')
@section('page-content')

<!-- Sitemap Page Start -->
<section class="sitemap-page py-5 py-lg-6">
    <div class="container">

        <!-- Header -->
        <div class="row justify-content-center mb-4 mb-lg-5">
            <div class="col-xl-8 col-lg-9">
                <div class="text-center">
                    <span class="sm-pill">Sitemap</span>
                    <h1 class="sm-h1 mt-3 mb-2">Find everything in one place</h1>
                    <p class="sm-lead mb-0">
                        Quick links to the most important pages on our website.
                    </p>
                </div>
            </div>
        </div>

        <!-- Content -->
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-11">
                <div class="sm-card">

                    <div class="row g-4">

                        <!-- Main -->
                        <div class="col-md-6 col-lg-4">
                            <h3 class="sm-title">Main</h3>
                            <ul class="sm-list">
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li><a href="{{ url('/about') }}">About</a></li>
                                <li><a href="{{ url('/services') }}">Services</a></li>
                                <li><a href="{{ url('/projects') }}">Projects</a></li>
                                <li><a href="{{ url('/contact') }}">Contact</a></li>
                            </ul>
                        </div>

                        <!-- Services -->
                        <div class="col-md-6 col-lg-4">
                            <h3 class="sm-title">Services</h3>
                            <ul class="sm-list">
                                <li><a href="{{ url('/service/interior-design') }}">Interior Design</a></li>
                                <li><a href="{{ url('/service/exterior-design') }}">Exterior Design</a></li>
                                <li><a href="{{ url('/service/architectural-consultancy') }}">Architectural Consultancy</a></li>
                            </ul>
                        </div>

                        <!-- Other -->
                        <div class="col-md-6 col-lg-4">
                            <h3 class="sm-title">Other</h3>
                            <ul class="sm-list">
                                <li><a href="{{ url('/gallery') }}">Gallery</a></li>
                                <li><a href="{{ url('/profile') }}">Profile</a></li>
                                <li><a href="{{ url('/privacy-policy') }}">Privacy Policy</a></li>
                                <li><a href="{{ url('/terms') }}">Terms & Conditions</a></li>
                                <li><a href="{{ url('/sitemap') }}">Sitemap</a></li>
                            </ul>
                        </div>

                    </div>

                    <!-- Contact box -->
                    <div class="sm-help mt-4">
                        <div>
                            <h4 class="sm-help-title mb-1">Need help finding something?</h4>
                            <p class="sm-help-text mb-0">
                                Contact us and we’ll guide you to the right page.
                            </p>
                        </div>
                        <a href="{{ url('/contact-us') }}" class="btn btn-success rounded-pill px-4">
                            Contact Us
                        </a>
                    </div>

                </div>
            </div>
        </div>

    </div>
</section>
<!-- Sitemap Page End -->

<style>
    .sitemap-page{
        background: linear-gradient(180deg, #f6f7f9 0%, #ffffff 60%);
    }

    .sm-pill{
        display:inline-block;
        padding: 8px 14px;
        border-radius: 999px;
        font-weight: 700;
        font-size: .8rem;
        letter-spacing: .08em;
        text-transform: uppercase;
        color: #198754;
        background: rgba(25,135,84,.10);
    }

    .sm-h1{
        font-weight: 900;
        letter-spacing: -0.03em;
        line-height: 1.15;
        color: #111827;
        font-size: clamp(1.7rem, 2.2vw + 1rem, 2.6rem);
    }

    .sm-lead{
        color:#6c757d;
        line-height:1.7;
        max-width: 760px;
        margin: 0 auto;
    }

    .sm-card{
        background:#fff;
        border:1px solid #e9ecef;
        border-radius: 18px;
        padding: 28px;
        box-shadow: 0 16px 45px rgba(0,0,0,.06);
    }

    .sm-title{
        font-weight: 800;
        color:#111827;
        margin-bottom: 12px;
        font-size: 1.1rem;
    }

    .sm-list{
        list-style:none;
        padding:0;
        margin:0;
    }

    .sm-list li{
        margin-bottom: 10px;
    }

    .sm-list a{
        display:inline-flex;
        align-items:center;
        gap: 8px;
        text-decoration:none;
        color:#405a50;
        font-weight: 600;
        transition: .2s ease;
    }

    .sm-list a::before{
        content:"";
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: rgba(25,135,84,.25);
        flex: 0 0 auto;
    }

    .sm-list a:hover{
        color:#198754;
        transform: translateX(2px);
    }

    .sm-help{
        display:flex;
        align-items:center;
        justify-content:space-between;
        gap: 16px;
        padding-top: 18px;
        margin-top: 18px;
        border-top: 1px solid #e9ecef;
        flex-wrap: wrap;
    }

    .sm-help-title{
        font-weight: 800;
        color:#111827;
        font-size: 1.05rem;
    }

    .sm-help-text{
        color:#6c757d;
        line-height: 1.7;
    }

    @media (max-width: 575.98px){
        .sm-card{ padding: 18px; }
    }
</style>

@endsection