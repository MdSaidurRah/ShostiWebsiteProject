@extends('website.layouts.inner-layout')
@section('page-content')

<!-- About Area Start -->
<section class="page-content">
    <div class="our-info-area pt-100 pb-100 section-bg" data-background="assets/img/gallery/section_bg02.jpg">
        <div class="container">
            <div class="row mb-50">
                <div class="col-12 text-center">
                    <h2>Exterior Completed Projects</h2>
                    <p class="mt-2 text-muted">
                        Explore our carefully crafted Exterior projects that blend functionality, comfort, and modern design.
                    </p>
                </div>
            </div>
            <div class="row">

                @foreach($exteriorProjects as $projet)
                    <div class="col-lg-4 col-md-6 mb-30">
                        <a href="#" class="text-decoration-none">
                            <div class="card zoom-card h-100 shadow-sm">
                                <img src="{{ url($projet->project_photo) }}"
                                    class="card-img-top"
                                    alt="Interior Residence">
                                <div class="card-body text-center">
                                    <h5 class="project-image-title">{{$projet->name}}</h5>
                                </div>
                            </div>
                        </a>
                    </div>

                @endforeach


            </div>
        </div>
    </div>
</section>
<!-- About Area End -->


@endsection