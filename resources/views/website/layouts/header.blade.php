<header>
        <!-- Header Start -->
        <div class="header-area header-transparent">
            <div class="main-header header-sticky">
                <div class="container-fluid">
                    <div class="menu-wrapper d-flex align-items-center justify-content-between">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="{{url('/')}}"><img src="{{static_asset('website/assets/img/logo/logo.png')}}" style="width: 300px;" alt=""></a>
                        </div>
                        <!-- Main-menu -->
                        <div class="main-menu f-right d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    <li><a href="{{url('/')}}">Home</a></li>
                                    <li><a href="#">Projects</a>
                                        <ul class="submenu">
                                            <li><a href="{{url('/projects/interior')}}">Interior</a></li>
                                            <li><a href="{{url('/projects/exterior')}}">Exterior</a></li>
                                            {{-- <li><a href="{{url('/service/architectural-consultancy')}}">Architectural Consultancy</a></li> --}}
                                        </ul>
                                    </li>
                                    <li><a href="{{url('/services')}}">Services</a></li>
                                    <li><a href="{{url('/portfolio')}}">Portfolio</a></li>
                                    <li><a href="{{url('/about-us')}}">About Us</a></li>
                                    <li><a href="{{url('/contact-us')}}">Contact Us</a></li>
                                </ul>
                            </nav>
                        </div>
                     
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
