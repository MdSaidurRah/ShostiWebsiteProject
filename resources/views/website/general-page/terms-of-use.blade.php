@extends('website.layouts.inner-layout')
@section('page-content')

<!-- Terms of Use Page Start -->
<section class="policy-page py-5 py-lg-6">
    <div class="container">

        <!-- Header -->
        <div class="row justify-content-center mb-4 mb-lg-5">
            <div class="col-xl-8 col-lg-9">
                <div class="text-center">
                    <span class="pp-pill">Terms of Use</span>
                    <h1 class="pp-h1 mt-3 mb-2">Terms & Conditions</h1>
                    <p class="pp-lead mb-0">
                        Please read these Terms of Use carefully before using our website and services.
                    </p>
                </div>
            </div>
        </div>

        <!-- Content -->
        <div class="row justify-content-center">
            <div class="col-xl-9 col-lg-10">
                <div class="pp-card">

                    <p class="pp-updated mb-4">
                        <strong>Last updated:</strong> {{ date('F d, Y') }}
                    </p>

                    <h3 class="pp-title">1. Acceptance of Terms</h3>
                    <p class="pp-text">
                        By accessing or using this website, you agree to be bound by these Terms of Use and all applicable laws.
                        If you do not agree, please do not use the website.
                    </p>

                    <h3 class="pp-title">2. Services & Information</h3>
                    <p class="pp-text">
                        The information on this website is provided for general informational purposes only. Project timelines,
                        pricing, and availability may vary and are subject to change. Final scope and pricing will be confirmed
                        through official quotation and agreement.
                    </p>

                    <h3 class="pp-title">3. User Responsibilities</h3>
                    <ul class="pp-list">
                        <li>You agree to use the website only for lawful purposes.</li>
                        <li>You must not attempt to disrupt the website’s functionality or security.</li>
                        <li>You must not submit false, misleading, or harmful information through forms or messages.</li>
                    </ul>

                    <h3 class="pp-title">4. Intellectual Property</h3>
                    <p class="pp-text">
                        All content on this website (including text, images, designs, logos, and project materials) is the property
                        of Shosti Arc Studio or its licensors and is protected by applicable intellectual property laws.
                        You may not copy, reproduce, or distribute content without written permission.
                    </p>

                    <h3 class="pp-title">5. Third-Party Links</h3>
                    <p class="pp-text">
                        Our website may contain links to third-party websites (such as social media). We are not responsible for
                        the content, policies, or practices of third-party websites. Use them at your own discretion.
                    </p>

                    <h3 class="pp-title">6. Limitation of Liability</h3>
                    <p class="pp-text">
                        We strive to keep the website accurate and available, but we do not guarantee that it will be error-free
                        or uninterrupted. To the maximum extent permitted by law, Shosti Arc Studio will not be liable for any
                        direct or indirect loss arising from the use of this website.
                    </p>

                    <h3 class="pp-title">7. Privacy</h3>
                    <p class="pp-text">
                        Your use of this website is also governed by our Privacy Policy. Please review it to understand how we
                        collect and use information.
                    </p>

                    <h3 class="pp-title">8. Changes to These Terms</h3>
                    <p class="pp-text">
                        We may update these Terms of Use from time to time. Any changes will be posted on this page with an updated
                        “Last updated” date. Continued use of the website means you accept the changes.
                    </p>

                    <h3 class="pp-title">9. Contact Us</h3>
                    <p class="pp-text mb-0">
                        If you have any questions about these Terms of Use, contact us:
                        <br><strong>Email:</strong> <a class="pp-link" href="mailto:info@shostiarcstudio.com">info@shostiarcstudio.com</a>
                        <br><strong>Phone:</strong> <a class="pp-link" href="tel:+8801737797773">+88 01737797773</a>
                    </p>

                </div>
            </div>
        </div>

    </div>
</section>
<!-- Terms of Use Page End -->

<style>
    .policy-page{
        background: linear-gradient(180deg, #f6f7f9 0%, #ffffff 60%);
    }

    .pp-pill{
        display:inline-block;
        padding: 8px 14px;
        border-radius: 999px;
        font-weight: 700;
        font-size: .8rem;
        letter-spacing: .08em;
        text-transform: uppercase;
        color: #198754;
        background: rgba(25,135,84,.10);
    }

    .pp-h1{
        font-weight: 900;
        letter-spacing: -0.03em;
        line-height: 1.15;
        color: #111827;
        font-size: clamp(1.7rem, 2.2vw + 1rem, 2.6rem);
    }

    .pp-lead{
        color:#6c757d;
        line-height:1.7;
        max-width: 760px;
        margin: 0 auto;
    }

    .pp-card{
        background:#fff;
        border:1px solid #e9ecef;
        border-radius: 18px;
        padding: 28px;
        box-shadow: 0 16px 45px rgba(0,0,0,.06);
    }

    .pp-updated{
        font-size: .95rem;
        color:#6c757d;
        padding-bottom: 14px;
        border-bottom: 1px solid #e9ecef;
    }

    .pp-title{
        font-weight: 800;
        color:#111827;
        margin-top: 20px;
        margin-bottom: 10px;
        font-size: 1.15rem;
    }

    .pp-text{
        color:#6c757d;
        line-height: 1.85;
        font-size: 1.02rem;
        margin-bottom: 10px;
    }

    .pp-list{
        margin: 0 0 10px 0;
        padding-left: 18px;
        color:#6c757d;
        line-height: 1.85;
        font-size: 1.02rem;
    }

    .pp-link{
        color:#198754;
        text-decoration:none;
        font-weight: 600;
    }
    .pp-link:hover{ text-decoration: underline; }

    @media (max-width: 575.98px){
        .pp-card{ padding: 18px; }
        .pp-text, .pp-list{ font-size: 1rem; }
    }
</style>

@endsection