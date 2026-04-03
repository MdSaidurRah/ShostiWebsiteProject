<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <title>EduINNTECH | Education, Innovation and Technology</title>
    <link rel="shortcut icon" type="image/svg" href="https://eduinntech.com/public/website/assets/images/eduinntech.svg">
    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <meta name="title" content="Education, Innovation and Technology Company">
    <meta name="description" content="Education, Innovation, Technology, Eduinntech is an ICT startup company in Bangladesh. The main services of eduinntech are software development, website design, technical support, digital consultancy, and providing creative learning">
    <meta name="keywords" content="Creative education, technology, innovation, Bangladeshi ICT startup">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    
    <meta property="fb:app_id" content="1058287408388901"/>
    <meta property="og:url" content="https://eduinntech.com" />
    <meta property="og:type" content="website">
    <meta property="og:title" content="Education, Innovation and Technology Company" />
    <meta property="og:description" content="Eduinntech (Education, Innovation, Technology) is an ICT startup company in Bangladesh. The main services of eduinntech are software development, website design, technical support, digital consultancy, and providing creative learning">
     <meta property="og:image" content="https://eduinntech.com/public/assets/images/EduInnTech Profile.jpg" />

    <!-- ** 'assets/plugins Needed for the Project ** -->
    <link href="{{static_asset('website/assets/css/fonts.css')}}" rel="stylesheet">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{static_asset('website/assets/plugins/bootstrap/bootstrap.min.css')}}">
    <!-- slick slider -->
    <link rel="stylesheet" href="{{static_asset('website/assets/plugins/slick/slick.css')}}">
    <!-- themefy-icon -->
    <link rel="stylesheet" href="{{static_asset('website/assets/plugins/themify-icons/themify-icons.css')}}">
    <!-- animation css -->
    <link rel="stylesheet" href="{{static_asset('website/assets/plugins/animate/animate.css')}}">

    <link href="{{static_asset('website/assets/css/style.css')}}" rel="stylesheet">
    <link href="{{static_asset('website/assets/css/new-style.css')}}" rel="stylesheet">
    <link href="{{static_asset('website/assets/css/testimonial-style.css')}}" rel="stylesheet">
    <link href="{{static_asset('website/assets/css/about-style.css')}}" rel="stylesheet">
    <link href="{{static_asset('website/assets/css/announcement-style.css')}}" rel="stylesheet">
    <link href="{{static_asset('website/assets/css/success-st-section-style.css')}}" rel="stylesheet">


    <!--Favicon-->
    <link rel="shortcut icon" href="{{static_asset('images/favicon.ico')}}" type="image/x-icon">
    <link rel="icon" href="{{static_asset('images/favicon.ico')}}" type="image/x-icon">

</head>

<body>


<!-- header -->
<header class="fixed-top header">
    <!-- top header -->
    <div class="top-header py-2 " style="background: #ffffff">
        <div class="container" >
            <div class="row no-gutters p-2">
                <div class="col-lg-8 text-center text-lg-left">
                    <!--<a class="text-color p-2" href="callto:+8801723705472">+8801723-705472</a> | -->
                    <!--<a class="text-color p-2" href="callto:+8801852-012518">+8801852-012518</a> | -->
                    <!--<a class="text-color p-2" href="javascript:void(0)">FAQ</a> | -->
                    <a class="text-color p-2" href="javascript:void(0)">Career</a> | 
                    <a class="text-color p-2" href="javascript:void(0)">Privacy Policy</a>
                </div>
                <div class="col-lg-4 text-center text-lg-right">
                    <ul class="list-inline">
                         <li class="list-inline-item mx-0"><a class="d-inline-block text-color" href="https://www.facebook.com/EduInnTech"><i class="ti-facebook"></i></a></li>
                         <li class="list-inline-item mx-0"><a class="d-inline-block text-color" href="javascript:void(0)"><i class="ti-linkedin"></i></a></li>
                    
                        <!--<li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="notice.html">notice</a></li>-->
                        <!--<li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="research.html">research</a></li>-->
                        <!--<li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="scholarship.html">SCHOLARSHIP</a></li>-->
                        <!--<li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="#" data-toggle="modal" data-target="#loginModal">login</a></li>-->
                        <!--<li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="#" data-toggle="modal" data-target="#signupModal">register</a></li>-->
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- navbar -->
    <div class="navigation w-100">
        <div class="container" style="background: #fff;">
            <nav class="navbar navbar-expand-lg navbar-light p-0">
                <a class="navbar-brand" href="{{url('/')}}"><img src="{{static_asset('website/assets/images/Logo.svg')}}" alt="Logo of EduInnTech" width="76%"></a>
                <button class="navbar-toggler rounded-0" type="button" data-toggle="collapse" data-target="#navigation"
                        aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navigation">
                    <ul class="navbar-nav ml-auto text-center">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{url('/')}}">Home</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="{{url('/about-us')}}">About Us</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="{{url('/')}}#service">Services</a>
                        </li>
                
                        <li class="nav-item ">
                            <a class="nav-link" href="{{url('/')}}#testimonial">Testimonial</a>
                        </li>

                          <li class="nav-item dropdown view">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">
                                Reading
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{url('/reading')}}">Blog</a>
                                <a class="dropdown-item" href="{{url('/study')}}">Study</a>
                            </div>
                        </li>
                        
                        <!--<li class="nav-item dropdown view">-->
                        <!--    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"-->
                        <!--       aria-haspopup="true" aria-expanded="false">-->
                        <!--        Read-->
                        <!--    </a>-->
                        <!--    <div class="dropdown-menu" aria-labelledby="navbarDropdown">-->
                        <!--        <a class="dropdown-item" href="{{url('/news')}}">News</a>-->
                        <!--        <a class="dropdown-item" href="{{url('/article')}}">Article</a>-->
                        <!--        <a class="dropdown-item" href="{{url('/feature')}}">Feature</a>-->
                        <!--    </div>-->
                        <!--</li>-->

                        <li class="nav-item @@contact">
                            <a class="nav-link" href="{{url('/contact-us')}}">CONTACT Us</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>
<!-- /header -->



@yield('page-inner-content')


<!-- Scroll to Top Button -->
<button id="scrollTopBtn" class="scroll-top" aria-label="Scroll to top" title="Back to top">
  <!-- simple chevron up icon (SVG) -->
  <svg width="18" height="18" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
    <path fill="currentColor" d="M7.41 15.41 12 10.83l4.59 4.58L18 14l-6-6-6 6z"/>
  </svg>
</button>

<!-- Cookie Consent -->
<div id="cookie-banner" style="position:fixed;bottom:0;width:100%;background:#222;color:#fff;padding:15px;text-align:center;z-index:1000;">
  This site uses cookies to improve your experience. 
  <button id="accept">Accept</button>
  <button id="reject">Reject</button>
</div>



<!-- footer -->
<footer>


        <?php
            $footer_banner = DB::table('site_banners')->select('banner_image')
                ->where('banner_category','FOOTER BANNER')
                ->where('status','ACTIVE')
                ->orderBy('id','DESC')->limit(1)->first();
        ?>


    <!-- footer content -->
    <div class="footer bg-footer border-bottom py-4" style="background-image: url('{{url($footer_banner->banner_image)}}');  background-size: cover;  background-position: center;"  style="padding-top: 40px">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-8 mb-5 mb-lg-0" style="padding: 56px;">
                    <!-- logo -->
                    <a class="logo-footer" href="{{url('/')}}"><img class="img-fluid mb-4" src="{{static_asset('website/assets/images/Logo.svg')}}" alt="Logo of EduInnTech" width="65%"></a>
                </div>

                <!-- support -->
                <div class="col-lg-4 col-md-6 col-sm-12 col-12 mb-5 mb-md-0">
                    <h4 class="mb-2">Inportant Links</h4>
                    <ul class="list-unstyled">
                        <li class="mb-2">Our Expertise</li>
                        <li class="mb-2"><a href="{{url('/terms-of-use')}}"> Terms of Use </a></li>
                        <li class="mb-2"><a href="{{url('/privacy-policy')}}"> Privacy Policy </a></li>
                    </ul>
                </div>


                <!-- support -->
                <div class="col-lg-4 col-md-6 col-sm-12 col-12 mb-5 mb-md-0">
                    <h4 class="mb-2">Contact Details</h4>
                    <ul class="list-unstyled">
                        <li class="mb-2">912 West Shewrapara, Mirpur Dhaka-1216</li>
                        <li class="mb-2">+8801852-012518</li>
                        <li class="mb-2">info@eduinntech.com</li>
                    </ul>
                </div>



            </div>
        </div>
    </div>
    <!-- copyright -->
    <div class="copyright py-2 bg-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-7 text-sm-left text-center">
                    <p class="mb-0">Copyright &copy; 
                        <script>
                            var CurrentYear = new Date().getFullYear();
                            document.write(CurrentYear);
                        </script> 
                        EduINNTECH. All Rights Reserved.
                    </p>
                </div>
                <div class="col-sm-5 text-sm-right text-center">
                    <ul class="list-inline">
                        <li class="list-inline-item"><a class="d-inline-block p-2 text-color" href="https://www.facebook.com/EduInnTech"><i class="ti-facebook "></i></a></li>
                        <li class="list-inline-item"><a class="d-inline-block p-2 text-color" href="javascript:void(0)"><i class="ti-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- /footer -->

<!-- jQuery -->
<script src="{{static_asset('website/assets/plugins/jQuery/jquery.min.js')}}"></script>
<!-- Bootstrap JS -->
<script src="{{static_asset('website/assets/plugins/bootstrap/bootstrap.min.js')}}"></script>
<!-- slick slider -->
<script src="{{static_asset('website/assets/plugins/slick/slick.min.js')}}"></script>
<!-- aos -->
<script src="{{static_asset('website/assets/plugins/aos/aos.j')}}s"></script>
<!-- venobox popup -->
<script src="{{static_asset('website/assets/plugins/venobox/venobox.min.js')}}"></script>
<!-- mixitup filter -->
<script src="{{static_asset('website/assets/plugins/mixitup/mixitup.min.js')}}"></script>
<!-- google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places"></script>
<script src="{{static_asset('website/assets/plugins/google-map/gmap.js')}}"></script>
{{--<script src="https://cdn.jsdelivr.net/npm/@tsparticles/confetti@3.0.3/tsparticles.confetti.bundle.min.js"></script>--}}
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>


<!-- Main Script -->
<script src="{{static_asset('website/assets/js/script.js')}}"></script>

<script>
    // Scroll to top button

        (function() {
            
            const btn = document.getElementById('scrollTopBtn');
            const showAt = 300; // px scrolled before showing the button

            // Show/hide button based on scroll position
            function checkScroll() {
                if (window.scrollY > showAt) {
                    btn.classList.add('show');
                } else {
                    btn.classList.remove('show');
                }
            }

            // Smooth scroll to top (with accessible keyboard fallback)
            function scrollToTop(e) {
                e && e.preventDefault();
                // If browser supports scroll behavior, use it:
                if ('scrollBehavior' in document.documentElement.style) {
                    window.scrollTo({
                        top: 0,
                        behavior: 'smooth'
                    });
                } else {
                    // Fallback for older browsers
                    const c = window.scrollY || document.documentElement.scrollTop;
                    if (c > 0) {
                        window.requestAnimationFrame(function step() {
                            const newPos = Math.max(0, c - c / 8);
                            window.scrollTo(0, newPos);
                            if (newPos > 0) requestAnimationFrame(step);
                        });
                    }
                }
                // Move focus to topmost focusable element (for keyboard users)
                const main = document.querySelector('main, [role="main"]');
                if (main) main.setAttribute('tabindex', '-1');
                (main || document.body).focus({
                    preventScroll: true
                });
            }

            // Attach listeners
            window.addEventListener('scroll', checkScroll, {
                passive: true
            });
            btn.addEventListener('click', scrollToTop);
            // Allow Enter/Space keys when button focused (for some browsers)
            btn.addEventListener('keydown', function(e) {
                if (e.key === 'Enter' || e.key === ' ') scrollToTop(e);
            });

            // Initial check in case page loads scrolled
            checkScroll();

        })();


        // Cookie consent banner

            const banner = document.getElementById("cookie-banner");
            const acceptBtn = document.getElementById("accept");
            const rejectBtn = document.getElementById("reject");

            // Check if user already gave consent
            if (localStorage.getItem("cookieConsent")) {
                banner.style.display = "none";
            }

            acceptBtn.onclick = function () {
                localStorage.setItem("cookieConsent", "accepted");
                banner.style.display = "none";
                // ✅ Load analytics or ad scripts here
            };

            rejectBtn.onclick = function () {
                localStorage.setItem("cookieConsent", "rejected");
                banner.style.display = "none";
                // ❌ Do not load non-essential cookies
            };
</script>

@yield('script')


</body>
</html>
