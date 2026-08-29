<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Shosti Arc Studio Admin</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{static_asset('/assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{static_asset('/assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{static_asset('/assets/vendors/css/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{static_asset('/assets/lib/css/bootstrap.bundle.min.css')}}">

    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{static_asset('/assets/vendors/font-awesome/css/font-awesome.min.css')}}" />
    <link rel="stylesheet" href="{{static_asset('/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css')}}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <!-- <link rel="stylesheet" href="{{static_asset('/assets/css/style.css')}}"> -->

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Select2 -->
    <link href="{{static_asset('/assets/lib/css/select2.min.css')}}" rel="stylesheet" />

    <link href="{{static_asset('/assets/css/style.css')}}" rel="stylesheet">
    <link href="{{static_asset('/assets/css/custom-style.css')}}" rel="stylesheet">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{static_asset('/assets/images/favicon.png')}}" />

    <!-- quill-->
    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.snow.css" rel="stylesheet" />

    <!-- Data table -->
    <link rel="stylesheet" href="{{static_asset('/assets/lib/datatable/jquery.dataTables.css')}}">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/3.2.2/css/buttons.dataTables.css">

</head>

<body class="admin-app">
    @php
        $userPhoto = \Illuminate\Support\Facades\DB::table('users')->where('id', session('userId'))->select('userPhoto')->first();
        $adminPhoto = ($userPhoto && !empty($userPhoto->userPhoto))
            ? url($userPhoto->userPhoto)
            : static_asset('/assets/images/logo-mini.svg');
    @endphp
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo" href="{{url('/dashboard')}}"><img src="{{static_asset('/assets/images/logo.svg')}}" alt="logo" /></a>
                <a class="navbar-brand brand-logo-mini" href="{{url('/dashboard')}}"><img src="{{static_asset('/assets/images/logo-mini.svg')}}" alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center">
                <button class="navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="mdi mdi-menu"></span>
                </button>
                <div class="search-field d-none d-xl-block">
                    <form class="d-flex align-items-center h-100" action="#" onsubmit="return false;">
                        <div class="input-group">
                            <span class="input-group-text border-0 mdi mdi-magnify"></span>
                            <input type="text" class="form-control bg-transparent border-0" placeholder="Search admin pages">
                        </div>
                    </form>
                </div>
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item">
                        <a class="nav-link count-indicator" target="_blank" href="{{url('/')}}" title="View website">
                            <i class="fas fa-globe"></i>
                            <span class="count-symbol bg-success"></span>
                        </a>
                    </li>
                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                            <div class="nav-profile-img">
                                <img src="{{ $adminPhoto }}" alt="profile">
                            </div>
                            <div class="nav-profile-text">
                                <p class="mb-1 text-black">{{session('userName')}}</p>
                            </div>
                        </a>
                        <div class="dropdown-menu navbar-dropdown dropdown-menu-right p-0 border-0 font-size-sm" aria-labelledby="profileDropdown" data-x-placement="bottom-end">
                            <div class="p-3 text-center bg-primary">
                                <img class="img-avatar img-avatar48 img-avatar-thumb" src="{{ $adminPhoto }}" alt="">
                            </div>
                            <div class="p-2">
                                <h5 class="dropdown-header text-uppercase pl-2 text-dark">User Options</h5>
                             
                                <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="{{url('user/profile')}}">
                                    <span>Profile</span>
                                    <span class="p-0">
                                        <span class="badge badge-success">1</span>
                                        <i class="mdi mdi-account-outline ml-1"></i>
                                    </span>
                                </a>  
                                <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="{{url('user/change-password')}}">
                                    <span>Change Password</span>
                                    <span class="p-0">
                                        <span class="badge badge-success">1</span>
                                        <i class="mdi mdi-account-outline ml-1"></i>
                                    </span>
                                </a>
                              
                                <div role="separator" class="dropdown-divider"></div>
                                <h5 class="dropdown-header text-uppercase  pl-2 text-dark mt-2">Actions</h5>
                              
                                <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="{{url('sign-out')}}">
                                    <span>Log Out</span>
                                    <i class="mdi mdi-logout ml-1"></i>
                                </a>
                            </div>
                        </div>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                    <span class="mdi mdi-menu"></span>
                </button>
            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item nav-category">Main</li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/dashboard')}}">
                            <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>
               
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#menu-cms" aria-expanded="false" aria-controls="menu-cms">
                            <span class="icon-bg"><i class="mdi mdi-view-dashboard menu-icon"></i></span>
                            <span class="menu-title">CMS</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="menu-cms">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="{{url('/business-projects')}}">Project</a></li>
                                <li class="nav-item"> <a class="nav-link" href="{{url('/business-services')}}">Service</a></li>
                                <li class="nav-item"> <a class="nav-link" href="{{url('/products')}}">Product</a></li>
                                <li class="nav-item"> <a class="nav-link" href="{{url('/advertisements')}}">Advertisements</a></li>
                                <li class="nav-item"> <a class="nav-link" href="{{url('/site-banners')}}">Site Banners</a></li>
                                <li class="nav-item"> <a class="nav-link" href="{{url('/clients')}}">Clients</a></li>
                                <li class="nav-item"> <a class="nav-link" href="{{url('/brands')}}">Brands</a></li>
                                <li class="nav-item"> <a class="nav-link" href="{{url('/promotional-videos')}}">Promotional Videos</a></li>
                                <li class="nav-item"> <a class="nav-link" href="{{url('/gallery')}}">Gallery </a></li>
                                <li class="nav-item"> <a class="nav-link" href="{{url('/business-package')}}">Business Package </a></li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#menu-report" aria-expanded="false" aria-controls="menu-report">
                            <span class="icon-bg"><i class="mdi mdi-file-chart menu-icon"></i></span>
                            <span class="menu-title">Report</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="menu-report">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="{{url('/visitor-message')}}">Visitor Message</a></li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#menu-crm" aria-expanded="false" aria-controls="menu-crm">
                            <span class="icon-bg"><i class="mdi mdi-account-multiple menu-icon"></i></span>
                            <span class="menu-title">CRM</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="menu-crm">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="{{url('/consultation-query')}}">Consultation Query</a></li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#menu-people" aria-expanded="false" aria-controls="menu-people">
                            <span class="icon-bg"><i class="mdi mdi-account-group menu-icon"></i></span>
                            <span class="menu-title">Peoples</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="menu-people">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="{{url('/user/all-user')}}">All Users</a></li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#menu-setup" aria-expanded="false" aria-controls="menu-setup">
                            <span class="icon-bg"><i class="mdi mdi-settings menu-icon"></i></span>
                            <span class="menu-title">Setup</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="menu-setup">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"><a class="nav-link" href="{{url('/configurations/system-information')}}">System Information</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{url('/configurations/role-permission')}}">Role & Permission</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </nav>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    @yield('page-content')
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <footer class="footer">
                    <div class="footer-inner-wraper">
                        <div class="d-sm-flex justify-content-center justify-content-sm-between">
                            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © {{ date('Y') }} Shosti Arc Studio. All rights reserved.</span>

                        </div>
                    </div>
                </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->


    <script src="{{static_asset('/assets/lib/js/bootstrap.bundle.min.js')}}"></script>
    
    <script src="{{static_asset('/assets/lib/chart/chart.min.js')}}"></script>
    <!-- Select2 -->
    <script src="{{static_asset('/assets/lib/js/select2.min.js')}}"></script>


    <!-- plugins:js -->
    <script src="{{static_asset('/assets/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->

    
    <!-- Plugin js for this page -->
    
    <script src="{{static_asset('/assets/vendors/jquery-circle-progress/js/circle-progress.min.js')}}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{static_asset('/assets/js/off-canvas.js')}}"></script>
    <script src="{{static_asset('/assets/js/hoverable-collapse.js')}}"></script>
    <script src="{{static_asset('/assets/js/misc.js')}}"></script>
    <script src="{{static_asset('/assets/js/main.js')}}"></script>
    <!-- endinject -->
   <!-- Data table -->
    <script src="{{static_asset('/assets/lib/datatable/jquery.dataTables.js')}}"></script>
    <script src="https://cdn.datatables.net/buttons/3.2.2/js/buttons.dataTables.js"></script>

    <!-- Custom js for this page -->
    <script src="{{static_asset('/assets/js/dashboard.js')}}"></script>

    <!-- quill-->
    <script src="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.js"></script>



    <!-- End custom js for this page -->
</body>

@yield('page-script')


</html>