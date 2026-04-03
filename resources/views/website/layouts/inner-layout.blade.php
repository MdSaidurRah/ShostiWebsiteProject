<!doctype html>
<html class="no-js" lang="zxx">

<head>
   
    <title>Shosti Arc Studio | Your Vision- Our Expertise. </title>

    <meta name="description" content="Shosti Arc Studio is a leading home interior design and development company in Dhaka, Bangladesh. We provide modern, luxury, and customized interior solutions for apartments, houses, and commercial spaces.">
    <meta name="keywords" content="home interior design in Dhaka, interior design company in Bangladesh, apartment interior design Dhaka, luxury home interior Bangladesh, residential interior design Dhaka, interior development services Bangladesh, Shosti Arc Studio">
    <meta name="author" content="Shosti Arc Studio">
    <meta name="robots" content="index, follow">
    <meta name="language" content="English">
    <meta name="revisit-after" content="7 days">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{static_asset('website/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{static_asset('website/assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{static_asset('website/assets/css/slicknav.css')}}">
    <link rel="stylesheet" href="{{static_asset('website/assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{static_asset('website/assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{static_asset('website/assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{static_asset('website/assets/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{static_asset('website/assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{static_asset('website/assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{static_asset('website/assets/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{static_asset('website/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{static_asset('website/assets/css/main.css')}}">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gabarito:wght@400..900&display=swap" rel="stylesheet">

</head>

<body class="body-bg">

    <main>



        @include('website.layouts.header')
        <!-- slider Area Start-->
        <div class="slider-area2">
                <div class="slider-height2 d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="hero-cap hero-cap2 text-center ">
                                    <h2>{{$pageTitle}}</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @yield('page-content')

    </main>
        @include('website.footer')
    <!-- Scroll Up -->
    <div id="back-top">
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <!-- JS here -->
    <!-- All JS Custom Plugins Link Here here -->
    <script src="{{static_asset('website/assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="{{static_asset('website/assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{static_asset('website/assets/js/popper.min.js')}}"></script>
    <script src="{{static_asset('website/assets/js/bootstrap.min.js')}}"></script>
    <!-- Jquery Mobile Menu -->
    <script src="{{static_asset('website/assets/js/jquery.slicknav.min.js')}}"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="{{static_asset('website/assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{static_asset('website/assets/js/slick.min.js')}}"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="{{static_asset('website/assets/js/wow.min.js')}}"></script>
    <script src="{{static_asset('website/assets/js/animated.headline.js')}}"></script>
    <script src="{{static_asset('website/assets/js/jquery.magnific-popup.js')}}"></script>

    <!-- Nice-select, sticky -->
    <script src="{{static_asset('website/assets/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{static_asset('website/assets/js/jquery.sticky.js')}}"></script>

    <!-- contact js -->
    <script src="{{static_asset('./assets/js/main.js')}}"></script>
    <script src="{{static_asset('website/assets/js/contact.js')}}"></script>
    <script src="{{static_asset('website/assets/js/jquery.form.js')}}"></script>
    <script src="{{static_asset('website/assets/js/jquery.validate.min.js')}}"></script>
    <script src="{{static_asset('website/assets/js/mail-script.js')}}"></script>
    <script src="{{static_asset('website/assets/js/jquery.ajaxchimp.min.js')}}"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="{{static_asset('website/assets/js/plugins.js')}}"></script>
    <script src="{{static_asset('website/assets/js/main.js')}}"></script>

    @yield('page-js')

</body>

</html>
