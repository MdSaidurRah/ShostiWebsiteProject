@extends('website.layouts.inner-layout')
@section('page-content')

<section class="about-area page-content section-padding">
    <div class="container">

        <div class="row align-items-center gx-5 gy-5">

            <!-- Image -->
            <div class="col-lg-6">
                <div class="about-image-wrapper">
                    <img src="{{ static_asset('website/assets/img/projects/about-us.jpg') }}"
                         class="img-fluid rounded-4 shadow">

                    <div class="about-badge">
                        <h4>5+</h4>
                        <small>Years Experience</small>
                    </div>
                </div>
            </div>

            <!-- Content -->
            <div class="col-lg-6">
                <div class="about-content">

                    <h2 class="fw-bold mb-3">
                        At <span style="color:var(--light-pine-green)">Shosti Arc Studio</span>
                    </h2>

                    <p class="p-text">
                        Our mission is simple — to create comfortable, stylish, and deeply
                        satisfying spaces that elevate everyday living. We believe that great design is not just about
                        how a space looks, but how it feels and functions.
                    </p>

                    <h5 class="mt-4">Our Story</h5>
                    <p class="p-text">
                        Shosti Arc Studio began as a small, passionate studio founded by two individuals driven by a
                        shared vision — to deliver meaningful and high-quality design for every client.
                    </p>
                    <p class="p-text">
                        Today, we continue to grow with trust, creativity, and dedication, delivering thoughtful
                        solutions and client-focused design.
                    </p>

                </div>
            </div>

        </div>
        
        
        <!-- Vision Mission Values -->
        <div class="row mt-5">

            <div class="col-md-4">
                <div class="journey-card h-100">
                    <h4 class="fw-bold mb-3">Our Vision</h4>
                    <p>
                        To become a leading professional architecture and interior design studio, recognized for
                        high-quality design and seamless execution.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="journey-card h-100">
                    <h4 class="fw-bold mb-3">Our Mission</h4>
                    <p>
                        To design spaces that are comfortable, elegant, and fulfilling — tailored to reflect each
                        client’s lifestyle and needs.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="journey-card h-100">
                    <h4 class="fw-bold mb-3">Our Values</h4>
                    <ul class="text-start">
                        <li>Client-first approach</li>
                        <li>Attention to detail</li>
                        <li>Creativity with purpose</li>
                        <li>Integrity in execution</li>
                        <li>Commitment to quality</li>
                    </ul>
                </div>
            </div>

        </div>

        <!-- Journey Section -->
        <div class="row mt-5">
            <div class="col-12 text-center mb-4">
                <h3 class="fw-bold">Our Journey</h3>
            </div>

            <div class="col-md-4">
                <div class="journey-card">
                    <h5>2022</h5>
                    <p>Shosti Arc Studio was founded</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="journey-card">
                    <h5>2023</h5>
                    <p>Established our official office</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="journey-card">
                    <h5>2024</h5>
                    <p>Successfully completed 50+ projects</p>
                </div>
            </div>
        </div>
        
        

        <!-- Team Section -->
        <div class="row mt-5">
            <div class="col-12 text-center mb-4">
                <h3 class="fw-bold">Our Team</h3>
            </div>

            <div class="col-md-6">
                <ul class="team-list">
                    <li>Founder & CEO – B.Arch & M.A. Interior</li>
                    <li>Chief Architect – B.Arch (India)</li>
                    <li>Architect & Interior Designer – B.Arch</li>
                    <li>Finance Director – MBA</li>
                </ul>
            </div>

            <div class="col-md-6">
                <ul class="team-list">

                    <li>Engineer – Diploma in Civil</li>
                    <li>Draft Man – Architecture & Civil</li>
                    <li>Site Engineer – Diploma in Architect</li>
                    <li>IT Expert – Computer Science</li>
                    <li>Software Support – B.Sc in CSE</li>
                </ul>
            </div>
        </div>

        

        <!-- CTA -->
        <div class="row mt-5 text-center">
            <div class="col-12">
                <h3 class="fw-bold">Make Your Dream Space a Reality</h3>
                <p>Transform your vision into a beautifully designed space with Shosti Arc Studio.</p>
                <a href="{{ url('/contact-us') }}" class="btn btn-primary px-5 py-2 rounded-pill">
                    Book a Meeting
                </a>
            </div>
        </div>

    </div>
    

</section>

<style>

.p-text
{
    text-align: justify;
}

.about-image-wrapper {
    position: relative;
}

.about-badge {
    position: absolute;
    top: 20px;
    left: 20px;
    background: #fff;
    padding: 12px 18px;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

.about-values li {
    margin-bottom: 6px;
}

.journey-card {
    background: #00424242;
    padding: 20px;
    border-radius: 12px;
    text-align: center;
    box-shadow: 0 5px 15px rgba(0,0,0,0.05);
}

.team-list li {
    margin-bottom: 8px;
}
</style>

@endsection
