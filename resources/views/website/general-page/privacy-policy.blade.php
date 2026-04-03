@extends('website.layouts.inner-layout')
@section('page-content')

<!-- Privacy Policy Page Start -->
<section class="policy-page py-5 py-lg-6">
    <div class="container">

        <!-- Header -->
        <div class="row justify-content-center mb-4 mb-lg-5">
            <div class="col-xl-8 col-lg-9">
                <div class="text-center">
                    <span class="pp-pill">Privacy Policy</span>
                    <h1 class="pp-h1 mt-3 mb-2">Your privacy matters to us</h1>
                    <p class="pp-lead mb-0">
                        This Privacy Policy explains how we collect, use, and protect your information when you use our website.
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

                    <h3 class="pp-title">1. Information We Collect</h3>
                    <p class="pp-text">
                        We may collect information you provide to us directly (such as your name, phone number, email address,
                        and project requirements) when you contact us, request a quote, or submit forms on our website.
                    </p>

                    <h3 class="pp-title">2. How We Use Your Information</h3>
                    <ul class="pp-list">
                        <li>To respond to inquiries and provide quotations or project information</li>
                        <li>To communicate about services, updates, and project discussions</li>
                        <li>To improve website performance, content, and user experience</li>
                        <li>To maintain website security and prevent fraudulent activity</li>
                    </ul>

                    <h3 class="pp-title">3. Cookies & Analytics</h3>
                    <p class="pp-text">
                        We may use cookies and similar technologies to understand website usage and improve functionality.
                        You can control cookies through your browser settings. Disabling cookies may affect site features.
                    </p>

                    <h3 class="pp-title">4. Sharing of Information</h3>
                    <p class="pp-text">
                        We do not sell your personal information. We may share limited information with trusted service providers
                        only when necessary to operate our website or deliver services (e.g., hosting, email services).
                    </p>

                    <h3 class="pp-title">5. Data Security</h3>
                    <p class="pp-text">
                        We take reasonable measures to protect your information. However, no online transmission or storage
                        method is 100% secure, and we cannot guarantee absolute security.
                    </p>

                    <h3 class="pp-title">6. Third-Party Links</h3>
                    <p class="pp-text">
                        Our website may include links to third-party websites (e.g., social platforms). We are not responsible
                        for their privacy practices. Please review their policies separately.
                    </p>

                    <h3 class="pp-title">7. Your Rights</h3>
                    <p class="pp-text">
                        You may request access, correction, or deletion of your personal information by contacting us.
                        We will respond within a reasonable timeframe.
                    </p>

                    <h3 class="pp-title">8. Contact Us</h3>
                    <p class="pp-text mb-0">
                        If you have any questions about this Privacy Policy, please contact us:
                        <br><strong>Email:</strong> <a class="pp-link" href="mailto:info@shostiarcstudio.com">info@shostiarcstudio.com</a>
                        <br><strong>Phone:</strong> <a class="pp-link" href="tel:+8801737797773">+88 01737797773</a>
                    </p>

                </div>
            </div>
        </div>

    </div>
</section>
<!-- Privacy Policy Page End -->

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