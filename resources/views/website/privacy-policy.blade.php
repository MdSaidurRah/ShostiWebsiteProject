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

        <div class="container py-5">
  <div class="pp-wrap">
    <!-- Header -->
    <div class="pp-header p-4 p-md-5">
      <h1 class="pp-title h3">Privacy Policy</h1>
      <p class="pp-sub mt-2">How we handle and protect your personal information.</p>
    </div>

    <!-- Body -->
    <div class="p-4 p-md-5">

      <!-- Information Security -->
      <div class="pp-section">
        <div class="pp-h">Information Security</div>
        <p class="pp-text">
          We use reasonable efforts to safeguard personal information. However, no data storage system or transmission
          method can be guaranteed to be 100% secure. As a result, we cannot guarantee the security of any information
          (including personal information) that we obtain.
        </p>
        <div class="pp-callout">
          <strong>Important:</strong> If you have reason to believe that your interaction with us is no longer secure,
          please immediately notify us in accordance with the “Contacting Us” section below.
        </div>
      </div>

      <!-- Opt-Out Instruction -->
      <div class="pp-section">
        <div class="pp-h">Opt-Out Instruction</div>
        <div class="pp-callout">
          If you do not want to receive promotional emails from us, you can opt-out at any time by sending a request to
          <a class="pp-link" href="mailto:info@bdinterior.net">info@bdinterior.net</a>
        </div>
      </div>

      <!-- Access / Change / Delete -->
      <div class="pp-section">
        <div class="pp-h">How Can You Access, Change or Delete Your Personal Information</div>
        <p class="pp-text">
          If you would like to request to review, correct, restrict or delete personal information that you have previously
          provided to us, object to the processing of personal information, or request to receive an electronic copy of your
          personal information for purposes of transmitting it to another company (to the extent this right to data portability
          is provided to you by applicable law), you may contact us by completing this form.
        </p>
      </div>

    </div>
</section>
<!-- About Area End -->


@endsection
