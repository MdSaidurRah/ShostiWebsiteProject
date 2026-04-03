@extends('website.layouts.inner-layout')
@section('page-content')

<!-- Page Content Start -->
<section class="page-content">
    <div class="our-info-area pt-100 pb-100 section-bg" data-background="assets/img/gallery/section_bg02.jpg">
        <div class="container">

            <div class="row mb-50">
                <div class="col-12 text-center">
                    <h2>Interior Completed Projects</h2>
                    <p class="mt-2 text-muted">
                        Explore our carefully crafted interior projects that blend functionality, comfort, and modern design.
                    </p>
                </div>
            </div>

            <!-- Cards Row -->
            <div class="row">


            @foreach($projectCategory as $category)
                 <div class="col-lg-4 col-md-6 mb-30">
                    <a href="{{ url('/interior-project/'.$category->category_name) }}" class="text-decoration-none">
                        <div class="card zoom-card h-100 shadow-sm">
                            <img src="{{ url($category->category_cover_photo)}}"
                                 class="card-img-top"
                                 alt="Interior Kitchen">
                            <div class="card-body text-center">
                                <h5 class="project-image-title">{{$category->category_name}}</h5>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach

                
            </div>
            <!-- Cards Row End -->

        </div>
    </div>
</section>
<!-- Page Content End -->

@endsection
