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
  <div class="terms-wrapper p-4 p-md-5">

    <h1 class="h3 font-weight-bold mb-1">Terms of Use</h1>

    <!-- 1 -->
    <div class="terms-item">
      <div class="terms-title">1. Acceptance of Terms</div>
      <p class="terms-text">
        By using our website and services, you agree to comply with these Terms of Use and any applicable laws.
      </p>
    </div>

    <!-- 2 -->
    <div class="terms-item">
      <div class="terms-title">2. Eligibility</div>
      <p class="terms-text">
        You must be able to form a legally binding contract in your jurisdiction to use the services.
      </p>
    </div>

    <!-- 3 -->
    <div class="terms-item">
      <div class="terms-title">3. Accounts &amp; Security</div>
      <ul class="terms-list">
        <li>You are responsible for maintaining the confidentiality of your account credentials.</li>
        <li>Notify us immediately of any unauthorized use or suspected breach.</li>
        <li>We may suspend accounts that violate these terms.</li>
      </ul>
    </div>

    <!-- 4 -->
    <div class="terms-item">
      <div class="terms-title">4. Orders, Pricing &amp; Payment</div>
      <ul class="terms-list">
        <li>Prices and availability may change without notice.</li>
        <li>We may refuse or cancel orders for suspected fraud or pricing errors.</li>
        <li>Taxes and shipping charges may apply based on your location.</li>
      </ul>
    </div>

    <!-- 5 -->
    <div class="terms-item">
      <div class="terms-title">5. Shipping &amp; Delivery</div>
      <p class="terms-text">
        Delivery times are estimates and may vary due to courier delays, weather, or events beyond our control.
      </p>

      <div class="terms-tip">
        <strong>Tip:</strong> Keep your phone number and delivery address updated to avoid failed deliveries.
      </div>
    </div>

    <!-- 6 -->
    <div class="terms-item">
      <div class="terms-title">6. Returns &amp; Refunds</div>
      <ul class="terms-list">
        <li>Return eligibility may depend on product type and condition.</li>
        <li>Refunds (if applicable) are processed after inspection.</li>
        <li>Shipping fees may be non-refundable unless required by law.</li>
      </ul>
    </div>

    <!-- 7 -->
    <div class="terms-item">
      <div class="terms-title">7. User Content</div>
      <p class="terms-text">
        If you submit reviews, comments, or other content, you confirm that you have the rights to share it.
        We may remove content that is unlawful, abusive, or misleading.
      </p>
    </div>

    <!-- 8 -->
    <div class="terms-item">
      <div class="terms-title">8. Intellectual Property</div>
      <p class="terms-text">
        All content, logos, design, and software on this website are owned by us or our licensors and are protected by law.
      </p>
    </div>

  </div>
</div>

    </div>
</section>
<!-- About Area End -->




@endsection
