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
  <div class="cp-wrap">
    <!-- Header -->
    <div class="cp-header p-4 p-md-5">
      <h1 class="cp-title h3">Cookie Policy</h1>
      <p class="cp-sub mt-2">Learn what cookies are and why we use them.</p>
    </div>

    <!-- Body -->
    <div class="p-4 p-md-5">

      <!-- What Are Cookies -->
      <div class="cp-section">
        <div class="cp-h">What Are Cookies?</div>
        <p class="cp-text">
          Cookies are small data files stored on your computer, tablet, or smartphone when you visit a website.
          These files help websites remember your preferences, enhance performance, and improve user experience.
          There are different types of cookies:
        </p>

        <ul class="cookie-list">
            <li><strong>First-party cookies:</strong> Set by bdinterior.net directly.</li>
            <li><strong>Third-party cookies:</strong> Set by external services we use (like analytics or ad providers).</li>
            <li><strong>Session cookies:</strong> Temporary and expire when you close your browser.</li>
            <li><strong>Persistent cookies:</strong> Stay on your device for a set period, helping us recognize you on future visits.</li>
        </ul>

        <div class="cp-callout">
          We may also use <strong>web beacons</strong> or <strong>pixel tags</strong>—small transparent images embedded in emails or webpages to track user behavior, such as email opens or webpage visits.
        </div>
      </div>

      <!-- Why We Use Cookies -->
      <div class="cp-section">
        <div class="cp-h">Why We Use Cookies</div>
        <p class="cp-text">
          We use different categories of cookies to serve you better:
        </p>

        <div class="">
          <!-- Essential Cookies -->
          <div class="mb-3">
            <div class="card cp-card">
              <div class="card-body">
                <div class="cp-card-title">1. Essential Cookies</div>
                <p class="cp-card-text">
                  These are necessary for the website to function properly. They enable basic features such as navigation,
                  page access, and security. Without these, the website may not perform as intended.
                </p>
              </div>
            </div>
          </div>

          <!-- Performance & Analytics Cookies -->
          <div class="mb-3">
            <div class="card cp-card">
              <div class="card-body">
                <div class="cp-card-title">2. Performance &amp; Analytics Cookies</div>
                <p class="cp-card-text">
                  These cookies collect data on how users interact with our website. They help us identify the most visited pages,
                  detect issues, and improve overall performance and user experience. We use tools like
                  <strong>Google Analytics</strong> to analyze website traffic trends anonymously.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
    </div>
</section>
<!-- About Area End -->


@endsection
