@extends('website.layouts.inner-layout')
@section('page-content')

<!-- About Area Start -->
<section class="about-area page-content section-padding">
    <div class="container">

        <div class="row align-items-center gx-5 gy-5">

            <!-- About Image -->
            <div class="col-lg-6">
                <div class="about-image-wrapper">
                    <img src="{{ static_asset('website/assets/img/projects/about-us.jpg') }}"
                         alt="About Shosti Arc Studio"
                         class="img-fluid about-image">

                    <!-- Experience Badge -->
                    <div class="about-badge">
                        <h4 class="mb-0">5+</h4>
                        <small>Years of Experience</small>
                    </div>
                </div>
            </div>

            <!-- About Content -->
            <div class="col-lg-6">
                <div class="about-content">

                    <span class="about-subtitle">About Our Studio</span>

                    <h2 class="about-title">
                        Designing meaningful spaces with
                        <span class="text-primary">purpose & elegance</span>.
                    </h2>

                    <p class="about-text">
                        Shosti Arc Studio is a full-service architecture and interior design firm based in Dhaka, Bangladesh.
                        Founded in 1998 by Architect Md. Shostir R. Chowdhury, the firm has built a strong reputation for
                        delivering innovative, sustainable, and client-focused design solutions.
                    </p>

                    <p class="about-text">
                        We believe design is more than aesthetics — it is about creating functional environments that enhance
                        lifestyle, comfort, and long-term value. Our experienced architects and designers collaborate closely
                        with clients to bring visions to life with excellence and integrity.
                    </p>

                    <!-- Buttons -->
                    <div class="about-actions mt-4">
                        <a href="{{ url('/contact-us') }}" class="btn btn-primary rounded-pill px-4">
                            Contact Us
                        </a>

                        <a href="{{ url('/portfolio') }}" class="btn btn-outline-dark rounded-pill px-4">
                            View Portfolio
                        </a>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
<!-- About Area End -->

<style>
    .about-image-wrapper {
        position: relative;
    }

    .about-badge {
        position: absolute;
        top: 20px;
        left: 20px;
        background-color: rgba(255, 255, 255, 0.9);
        padding: 15px 20px;
        border-radius: 8px;
        text-align: center;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }   
</style>


@endsection