@extends('website.layouts.layout')
@section('page-content')
    <!--? slider Area Start-->

 <main>
        <!--? slider Area Start-->
        <div class="slider-area">
            <div class="slider-active dot-style">
                <!-- Single Slider -->
                <div class="single-slider slider-height hero-overly d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6">
                                <div class="hero__caption">
                                    <span data-animation="fadeInLeft" data-delay=".4s">Welcome to Shosti Arc Studio</span>
                                    <h1 data-animation="fadeInLeft" data-delay=".6s">Your Vision- Our Expertise.</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Slider -->
                <div class="single-slider slider-height hero-overly d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6">
                                <div class="hero__caption">
                                    <span data-animation="fadeInLeft" data-delay=".4s">Welcome to Shosti Arc Studio</span>
                                    <h1 data-animation="fadeInLeft" data-delay=".6s">Your Vision- Our Expertise.</h1>
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


   