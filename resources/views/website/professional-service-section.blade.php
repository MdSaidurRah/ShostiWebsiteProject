<!-- Professional Services Start -->
<section class="pro-services section-padding ">
    <div class="container">
        <div class="row align-items-center g-4 g-lg-5">

            <!-- Content -->
            <div class="col-lg-7 mb-3">
                <div class="pro-anim pro-left">
                  
                    <h2 class="fw-bold mb-3">
                        We create modern and first-class interior spaces.
                    </h2>

                    <p class="text-muted">
                        Where refined design meets timeless elegance. We specialize in creating bespoke interior spaces
                        that embody sophistication, comfort, and purposeful living. Every detail is thoughtfully curated,
                        every space meticulously crafted—transforming interiors into expressions of elevated lifestyle
                        and enduring beauty.
                    </p>

                    <p class="text-muted mb-0">
                        An atelier of refined interiors. We design exclusive, harmonious spaces where elegance,
                        functionality, and craftsmanship come together to create a sense of calm, balance, and distinction.
                    </p>

                    <div class="mt-4 d-flex flex-wrap gap-2">
                        <a href="{{ url('/services') }}" class="btn btn-primary rounded-pill px-4 mr-2">
                            View Services
                        </a>
                        <a href="{{ url('/contact-us') }}" class="btn btn-outline-primary rounded-pill px-4">
                            Contact Us
                        </a>
                    </div>
                </div>
            </div>


            <!-- Video -->
            <div class="col-lg-5 col-md-8">
                <div class="pro-anim pro-right">
                    <div class="pro-media">

                        <div class="video-wrapper">
                            <iframe 
                                src="https://www.youtube.com/embed/P5V5EFxGYZQ"
                                title="YouTube video player"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen>
                            </iframe>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Professional Services End -->

<style>
    /* Premium split background (half light gray / half white) */
    .pro-split{
        background: linear-gradient(90deg, #f6f7f9 0%, #f6f7f9 50%, #ffffff 50%, #ffffff 100%);
        position: relative;
        overflow: hidden;
    }

    /* subtle premium accents */
    .pro-split::before{
        content:"";
        position:absolute;
        top:-120px; left:-120px;
        width:260px; height:260px;
        border-radius:50%;
        background: rgba(13,110,253,.08);
        filter: blur(0px);
        pointer-events:none;
    }
    .pro-split::after{
        content:"";
        position:absolute;
        bottom:-140px; right:-140px;
        width:320px; height:320px;
        border-radius:50%;
        background: rgba(0,0,0,.03);
        pointer-events:none;
    }

    /* premium typography spacing */
    .pro-split h2{
        line-height: 1.2;
        letter-spacing: -0.02em;
    }
    .pro-split p{
        line-height: 1.75;
    }

    /* Image container (premium look) */
    .pro-media{
        border-radius: 18px;
        overflow: hidden;
        box-shadow: 0 18px 45px rgba(0,0,0,.10);
        border: 1px solid rgba(0,0,0,.06);
        background: #fff;
        transform: translateZ(0);
    }
    .pro-media img{
        width: 100%;
        height: 380px;
        object-fit: cover;
        display: block;
        transition: transform .4s ease;
    }
    .pro-media:hover img{
        transform: scale(1.03);
    }

    /* --- Subtle animation on scroll (no JS required) --- */
    .pro-anim{
        opacity: 0;
        transform: translateY(16px);
        transition: opacity .7s ease, transform .7s ease;
        will-change: opacity, transform;
    }
    @media (prefers-reduced-motion: reduce){
        .pro-anim{
            opacity: 1 !important;
            transform: none !important;
            transition: none !important;
        }
    }

    /* Use modern scroll-timeline if supported */
    @supports (animation-timeline: view()){
        .pro-anim{
            animation: proFadeUp linear both;
            animation-timeline: view();
            animation-range: entry 10% cover 35%;
        }
        .pro-left{ transform: none; }
        .pro-right{ transform: none; }
    }

    @keyframes proFadeUp{
        from{ opacity: 0; transform: translateY(16px); }
        to{ opacity: 1; transform: translateY(0); }
    }

    /* Fallback: simple load-in animation */
    @supports not (animation-timeline: view()){
        .pro-anim{
            opacity: 1;
            transform: translateY(0);
            animation: proLoad .65s ease both;
        }
        .pro-right{ animation-delay: .08s; }
        @keyframes proLoad{
            from{ opacity: 0; transform: translateY(14px); }
            to{ opacity: 1; transform: translateY(0); }
        }
    }

    /* Responsive background behavior: stack nicely */
    @media (max-width: 991.98px){
        .pro-split{
            background: #ffffff;
        }
        .pro-media img{
            height: 280px;
        }
    }
    @media (max-width: 575.98px){
        .pro-media img{
            height: 220px;
        }
    }


.video-wrapper {
    position: relative;
    width: 100%;
    padding-bottom: 56.25%; /* 16:9 ratio */
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 15px 35px rgba(0,0,0,0.1);
}

.video-wrapper iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}

</style>