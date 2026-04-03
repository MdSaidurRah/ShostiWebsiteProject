@extends('website.layouts.inner-layout')
@section('page-content')

<!-- Services / Expertise Grid Start -->
<section class="page-content services-page py-5 py-lg-6">
    <div class="container">

        <!-- Header -->
        <div class="row justify-content-center mb-4 mb-lg-5">
            <div class="col-xl-8 col-lg-9">
                <div class="text-center">
                    <span class="sp-pill">What We Do</span>
                    <h1 class="sp-h1 mt-3 mb-2">Our Services & Expertise</h1>
                    <p class="sp-lead mb-0">
                        Premium design, planning, and execution—crafted with clarity, comfort, and timeless aesthetics.
                    </p>
                </div>
            </div>
        </div>

        <!-- Grid -->
        <div class="row g-4">

            @foreach($businessService as $service)
                <div class="col-sm-6 col-lg-4 col-xl-3 mb-4 mb-5">
                    <div class="service-card h-100">
                        <div class="service-icon"><i class="bi bi-brush"></i></div>
                        <h5 class="service-title">{{$service->service_title}}</h5>
                        <p class="service-text">{{$service->service_defination}}</p>
                    </div>
                </div>

            @endforeach

        
           

        </div>

        <!-- CTA -->
        <div class="mt-5">
            <div class="sp-cta d-flex flex-column flex-lg-row align-items-start align-items-lg-center justify-content-between gap-3">
                <div>
                    <h4 class="mb-1 fw-bold">Ready to discuss your project?</h4>
                    <p class="mb-0 text-muted">Share your requirements and we’ll guide you with the best solution.</p>
                </div>
                <div class="d-flex flex-wrap gap-2">
                    <a href="{{ url('/quotation') }}" class="btn btn-success rounded-pill mx-2">Get a Quote</a>
                    <a href="{{ url('/portfolio') }}" class="btn btn-outline-dark rounded-pill ">View Portfolio</a>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- Services / Expertise Grid End -->

<style>
    .services-page{
        background: linear-gradient(180deg, #f6f7f9 0%, #ffffff 60%);
    }

    .sp-pill{
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

    .sp-h1{
        font-weight: 900;
        letter-spacing: -0.03em;
        line-height: 1.15;
        color: #111827;
        font-size: clamp(1.7rem, 2.2vw + 1rem, 2.6rem);
    }

    .sp-lead{
        color:#6c757d;
        line-height:1.7;
        max-width: 760px;
        margin: 0 auto;
    }

    .service-card{
        background:#fff;
        border:1px solid #e9ecef;
        border-radius: 18px;
        padding: 18px;
        box-shadow: 0 14px 35px rgba(0,0,0,.05);
        transition: .2s ease;
        height: 100%;
    }

    .service-icon{
        width: 44px;
        height: 44px;
        border-radius: 12px;
        display:flex;
        align-items:center;
        justify-content:center;
        background: rgba(25,135,84,.10);
        color:#198754;
        font-size: 1.3rem;
        margin-bottom: 12px;
    }

    .service-title{
        font-weight: 800;
        color:#111827;
        font-size: 1.05rem;
        margin-bottom: 8px;
        letter-spacing: -0.01em;
    }

    .service-text{
        color:#6c757d;
        line-height: 1.75;
        margin-bottom: 0;
        font-size: .98rem;
    }

    .service-card:hover{
        transform: translateY(-3px);
        box-shadow: 0 18px 45px rgba(0,0,0,.08);
        border-color: rgba(25,135,84,.25);
    }

    .sp-cta{
        background:#fff;
        border:1px solid #e9ecef;
        border-radius: 18px;
        padding: 20px;
        box-shadow: 0 14px 35px rgba(0,0,0,.05);
    }

    @media (max-width: 575.98px){
        .service-card{ padding: 16px; }
        .sp-cta{ padding: 16px; }
    }
</style>

@endsection