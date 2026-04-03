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
 {{-- <section class="page-content contact-section">
        <div class="container">
            <div class="mb-5 pb-4">
                <div class="map-embed">
                    <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d228.17426265005605!2d90.37569667976746!3d23.790555274740363!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1766776228368!5m2!1sen!2sbd"
                    style="border:0;"
                    allowfullscreen
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                    ></iframe>
                </div>
            </div>
        </div>
    </section> --}}
<!-- About Area End -->

<section class="contact-map-section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10">

        <div class="map-card">
          <div class="map-responsive">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d228.17426265005605!2d90.37569667976746!3d23.790555274740363!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1766776228368!5m2!1sen!2sbd"
              allowfullscreen
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
              title="Our Location"
            ></iframe>
          </div>

          <!-- Optional overlay info card (edit content as needed) -->
          <div class="map-info">
            <h5>Our Office</h5>
            <p>House #820, Road #03, Mirpur, Dhaka-1216, Bangladesh</p>

            <div class="map-actions">
              <a class="btn-direction" target="_blank" rel="noopener"
                 href="https://www.google.com/maps?q=23.790555274740363,90.37569667976746">
                Get Directions
              </a>
              <a class="btn-call" href="tel:+8801XXXXXXXXX">Call</a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>


@endsection
