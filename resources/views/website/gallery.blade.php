@extends('website.layouts.layout')
@section('page-content')
@include('website.layouts.header')
<div class="slider-area2">
    <div class="slider-height2 hero-overly d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap hero-cap2 text-center pt-80">
                        <h2>{{$pageTitle}}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- slider Area End-->
<!-- About Area Start -->
<section class="page-content">
    <div class="our-info-area pt-100 pb-100 section-bg" data-background="assets/img/gallery/section_bg02.jpg">
        <div class="container">
            <div class="row">
                <h2>Content Here</h2>
            </div>
        </div>
    </div>
</section>
<!-- About Area End -->

@endsection
