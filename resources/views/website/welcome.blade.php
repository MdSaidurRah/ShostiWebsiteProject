@extends('website.layouts.layout')
@section('page-content')
    <!--? slider Area Start-->

 <main>
        <!--? slider Area Start-->
        <div class="slider-area">
            <div class="slider-active dot-style">
                <div class="single-slider slider-height hero-overly d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-7 col-lg-8">
                                <div class="hero__caption">
                                    <span data-animation="fadeInLeft" data-delay=".2s">Interior · Architecture · Dhaka</span>
                                    <h1 data-animation="fadeInLeft" data-delay=".4s">Your vision.<br>Our expertise.</h1>
                                    <p data-animation="fadeInLeft" data-delay=".55s" style="color:rgba(255,255,255,.78);max-width:520px;font-size:1.05rem;">
                                        Modern interiors and architectural consultancy, designed for homes, offices, and hospitality spaces.
                                    </p>
                                    <div class="hero-actions" data-animation="fadeInLeft" data-delay=".7s">
                                        <a href="{{ url('/portfolio') }}" class="btn btn-hero">View Portfolio</a>
                                        <a href="{{ url('/contact-us') }}" class="btn btn-hero-outline">Book Consultation</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Video icon -->

        </div>


        @include('website.professional-service-section')
        @include('website.service-section')
        @include('website.why-choose-us-section')
        @include('website.state-section')
        @include('website.process-flow-section')
        @include('website.work-section')
        @include('website.client-section')
        @include('website.gallery-section')
        @include('website.brand-section')
    

    </main>
    @include('website.footer')

@endsection


   