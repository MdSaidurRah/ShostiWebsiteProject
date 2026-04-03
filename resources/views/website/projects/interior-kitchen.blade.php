@extends('website.layouts.inner-layout')
@section('page-content')
<!-- Page Content Start -->
<section class="page-content">
    <div class="our-info-area pt-100 pb-100 section-bg" data-background="assets/img/gallery/section_bg02.jpg">
        <div class="container">


            <div class="row mb-50">
                <div class="col-12 text-center">
                    <h2>Kitchen Interior Completed Projects</h2>
                    <p class="mt-2 text-muted">
                        Explore our carefully crafted interior projects that blend functionality, comfort, and modern design.
                    </p>
                </div>
            </div>

            <!-- Cards Row -->
             <div class="row">

                <!-- Card 1 -->
                <div class="col-lg-4 col-md-6 mb-30">
                    <a href="#" class="text-decoration-none">
                        <div class="card zoom-card h-100 shadow-sm">
                            <img src="{{ static_asset('website/assets/img/projects/interior-kitchen-11.jpg') }}"
                                 class="card-img-top"
                                 alt="Interior Kitchen">
                            <div class="card-body text-center">
                                <h5 class="project-image-title">Kitchen Interior</h5>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Card 2 -->
                <div class="col-lg-4 col-md-6 mb-30">
                    <a href="#" class="text-decoration-none">
                        <div class="card zoom-card h-100 shadow-sm">
                            <img src="{{ static_asset('website/assets/img/projects/interior-kitchen-12.jpg') }}"
                                 class="card-img-top"
                                 alt="Interior Office">
                            <div class="card-body text-center">
                                <h5 class="project-image-title">Kitchen Interior</h5>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Card 3 -->
                <div class="col-lg-4 col-md-6 mb-30">
                    <a href="#" class="text-decoration-none">
                        <div class="card zoom-card h-100 shadow-sm">
                            <img src="{{ static_asset('website/assets/img/projects/interior-kitchen-13.jpg') }}"
                                 class="card-img-top"
                                 alt="Interior Residence">
                            <div class="card-body text-center">
                                <h5 class="project-image-title">Kitchen Interior</h5>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Card 3 -->
                <div class="col-lg-4 col-md-6 mb-30">
                    <a href="#" class="text-decoration-none">
                        <div class="card zoom-card h-100 shadow-sm">
                            <img src="{{ static_asset('/website/assets/img/projects/interior/kitchen/Architectural (3).png') }}"
                                 class="card-img-top"
                                 alt="Interior Residence">
                            <div class="card-body text-center">
                                <h5 class="project-image-title">Kitchen Interior</h5>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Card 3 -->
                <div class="col-lg-4 col-md-6 mb-30">
                    <a href="#" class="text-decoration-none">
                        <div class="card zoom-card h-100 shadow-sm">
                            <img src="{{ static_asset('/website/assets/img/projects/interior/kitchen/Architectural (8).png') }}"
                                 class="card-img-top"
                                 alt="Interior Residence">
                            <div class="card-body text-center">
                                <h5 class="project-image-title">Kitchen Interior</h5>
                            </div>
                        </div>
                    </a>
                </div>

                 <div class="col-lg-4 col-md-6 mb-30">
                    <a href="#" class="text-decoration-none">
                        <div class="card zoom-card h-100 shadow-sm">
                            <img src="{{ static_asset('/website/assets/img/projects/interior/kitchen/Architectural (11).png') }}"
                                 class="card-img-top"
                                 alt="Interior Residence">
                            <div class="card-body text-center">
                                <h5 class="project-image-title">Kitchen Interior</h5>
                            </div>
                        </div>
                    </a>
                </div>

                 <div class="col-lg-4 col-md-6 mb-30">
                    <a href="#" class="text-decoration-none">
                        <div class="card zoom-card h-100 shadow-sm">
                            <img src="{{ static_asset('/website/assets/img/projects/interior/kitchen/Architectural (14).png') }}"
                                 class="card-img-top"
                                 alt="Interior Residence">
                            <div class="card-body text-center">
                                <h5 class="project-image-title">Kitchen Interior</h5>
                            </div>
                        </div>
                    </a>
                </div>


            </div>
                

            </div>
            <!-- Cards Row End -->

        </div>
    </div>
</section>
<!-- Page Content End -->

@endsection
