<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Shosti Arc Studio — Admin</title>
    <link rel="stylesheet" href="{{static_asset('/assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{static_asset('/assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{static_asset('/assets/vendors/css/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{static_asset('/assets/lib/css/bootstrap.bundle.min.css')}}">
    <link rel="stylesheet" href="{{static_asset('/assets/vendors/font-awesome/css/font-awesome.min.css')}}" />
    <link rel="stylesheet" href="{{static_asset('/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="{{static_asset('/assets/lib/css/select2.min.css')}}" rel="stylesheet" />
    <link href="{{static_asset('/assets/css/style.css')}}" rel="stylesheet">
    <link href="{{static_asset('/assets/css/custom-style.css')}}" rel="stylesheet">
    <link rel="shortcut icon" href="{{static_asset('/assets/images/favicon.png')}}" />
    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.snow.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{static_asset('/assets/lib/datatable/jquery.dataTables.css')}}">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/3.2.2/css/buttons.dataTables.css">
</head>

<body class="admin-shell">
    <?php
        $userPhoto = DB::table('users')->where('id', session('userId'))->select('userPhoto')->first();
        $photoUrl = ($userPhoto && $userPhoto->userPhoto)
            ? url($userPhoto->userPhoto)
            : static_asset('/assets/images/logo-mini.png');
        $cmsOpen = request()->is('business-projects*', 'project*', 'business-services*', 'advertisements*', 'site-banner*', 'clients*', 'brands*', 'promotional-video*', 'gallery*', 'business-package*');
        $reportOpen = request()->is('visitor-message*');
        $crmOpen = request()->is('consultation-query*');
        $peopleOpen = request()->is('user/all-user*', 'user/add-user*', 'user/view-user*', 'user/view-activities*');
        $setupOpen = request()->is('configurations*');
    ?>
    <div class="container-scroller">
        <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo" href="{{url('/dashboard')}}"><img src="{{static_asset('/assets/images/logo.png')}}" alt="Shosti Arc Studio" /></a>
                <a class="navbar-brand brand-logo-mini" href="{{url('/dashboard')}}"><img src="{{static_asset('/assets/images/logo-mini.png')}}" alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-stretch">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="mdi mdi-menu"></span>
                </button>
                <div class="admin-topbar-title d-none d-md-flex">
                    <span>Control panel</span>
                </div>
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="nav-profile-img">
                                <img src="{{ $photoUrl }}" alt="{{ session('userName') }}">
                            </div>
                            <div class="nav-profile-text">
                                <p class="mb-0 text-black">{{ session('userName') }}</p>
                            </div>
                        </a>
                        <div class="dropdown-menu navbar-dropdown dropdown-menu-right p-0 border-0 font-size-sm" aria-labelledby="profileDropdown">
                            <div class="p-3 text-center admin-profile-banner">
                                <img class="img-avatar img-avatar48 img-avatar-thumb" src="{{ $photoUrl }}" alt="">
                            </div>
                            <div class="p-2">
                                <h5 class="dropdown-header text-uppercase pl-2 text-dark">User Options</h5>
                                <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="{{url('user/profile')}}">
                                    <span>Profile</span>
                                    <i class="mdi mdi-account-outline ml-1"></i>
                                </a>
                                <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="{{url('user/change-password')}}">
                                    <span>Change Password</span>
                                    <i class="mdi mdi-lock-outline ml-1"></i>
                                </a>
                                <div role="separator" class="dropdown-divider"></div>
                                <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="{{url('sign-out')}}">
                                    <span>Log Out</span>
                                    <i class="mdi mdi-logout ml-1"></i>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link count-indicator" target="_blank" href="{{url('/')}}" title="View website">
                            <i class="fas fa-globe"></i>
                        </a>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                    <span class="mdi mdi-menu"></span>
                </button>
            </div>
        </nav>

        <div class="container-fluid page-body-wrapper">
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item nav-category">Main</li>
                    <li class="nav-item {{ request()->is('dashboard') ? 'active' : '' }}">
                        <a class="nav-link" href="{{url('/dashboard')}}">
                            <span class="icon-bg"><i class="mdi mdi-view-dashboard menu-icon"></i></span>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-item {{ $cmsOpen ? 'active open' : '' }}">
                        <a class="nav-link sidebar-toggle" href="#menuCms" aria-expanded="{{ $cmsOpen ? 'true' : 'false' }}">
                            <span class="icon-bg"><i class="mdi mdi-folder-multiple-image menu-icon"></i></span>
                            <span class="menu-title">CMS</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="sidebar-submenu {{ $cmsOpen ? 'is-open' : '' }}" id="menuCms">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"><a class="nav-link {{ request()->is('business-projects*', 'project*') ? 'active' : '' }}" href="{{url('/business-projects')}}">Project</a></li>
                                <li class="nav-item"><a class="nav-link {{ request()->is('business-services*') ? 'active' : '' }}" href="{{url('/business-services')}}">Service</a></li>
                                <li class="nav-item"><a class="nav-link {{ request()->is('advertisements*') ? 'active' : '' }}" href="{{url('/advertisements')}}">Advertisements</a></li>
                                <li class="nav-item"><a class="nav-link {{ request()->is('site-banner*') ? 'active' : '' }}" href="{{url('/site-banners')}}">Site Banners</a></li>
                                <li class="nav-item"><a class="nav-link {{ request()->is('clients*') ? 'active' : '' }}" href="{{url('/clients')}}">Clients</a></li>
                                <li class="nav-item"><a class="nav-link {{ request()->is('brands*') ? 'active' : '' }}" href="{{url('/brands')}}">Brands</a></li>
                                <li class="nav-item"><a class="nav-link {{ request()->is('promotional-video*') ? 'active' : '' }}" href="{{url('/promotional-videos')}}">Promotional Videos</a></li>
                                <li class="nav-item"><a class="nav-link {{ request()->is('gallery*') ? 'active' : '' }}" href="{{url('/gallery')}}">Gallery</a></li>
                                <li class="nav-item"><a class="nav-link {{ request()->is('business-package*') ? 'active' : '' }}" href="{{url('/business-package')}}">Business Package</a></li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item {{ $reportOpen ? 'active open' : '' }}">
                        <a class="nav-link sidebar-toggle" href="#menuReport" aria-expanded="{{ $reportOpen ? 'true' : 'false' }}">
                            <span class="icon-bg"><i class="mdi mdi-chart-bar menu-icon"></i></span>
                            <span class="menu-title">Report</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="sidebar-submenu {{ $reportOpen ? 'is-open' : '' }}" id="menuReport">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"><a class="nav-link {{ $reportOpen ? 'active' : '' }}" href="{{url('/visitor-message')}}">Visitor Message</a></li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item {{ $crmOpen ? 'active open' : '' }}">
                        <a class="nav-link sidebar-toggle" href="#menuCrm" aria-expanded="{{ $crmOpen ? 'true' : 'false' }}">
                            <span class="icon-bg"><i class="mdi mdi-account-multiple menu-icon"></i></span>
                            <span class="menu-title">CRM</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="sidebar-submenu {{ $crmOpen ? 'is-open' : '' }}" id="menuCrm">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"><a class="nav-link {{ $crmOpen ? 'active' : '' }}" href="{{url('/consultation-query')}}">Consultation Query</a></li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item {{ $peopleOpen ? 'active open' : '' }}">
                        <a class="nav-link sidebar-toggle" href="#menuPeople" aria-expanded="{{ $peopleOpen ? 'true' : 'false' }}">
                            <span class="icon-bg"><i class="mdi mdi-account-group menu-icon"></i></span>
                            <span class="menu-title">Peoples</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="sidebar-submenu {{ $peopleOpen ? 'is-open' : '' }}" id="menuPeople">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"><a class="nav-link {{ $peopleOpen ? 'active' : '' }}" href="{{url('/user/all-user')}}">All Users</a></li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item {{ $setupOpen ? 'active open' : '' }}">
                        <a class="nav-link sidebar-toggle" href="#menuSetup" aria-expanded="{{ $setupOpen ? 'true' : 'false' }}">
                            <span class="icon-bg"><i class="mdi mdi-settings menu-icon"></i></span>
                            <span class="menu-title">Setup</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="sidebar-submenu {{ $setupOpen ? 'is-open' : '' }}" id="menuSetup">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"><a class="nav-link {{ request()->is('configurations/system-information*') ? 'active' : '' }}" href="{{url('/configurations/system-information')}}">System Information</a></li>
                                <li class="nav-item"><a class="nav-link {{ request()->is('configurations/role-permission*') ? 'active' : '' }}" href="{{url('/configurations/role-permission')}}">Role & Permission</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </nav>

            <div class="main-panel">
                <div class="content-wrapper">
                    @yield('page-content')
                </div>
                <footer class="footer">
                    <div class="footer-inner-wraper">
                        <div class="d-sm-flex justify-content-center justify-content-sm-between">
                            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © {{ date('Y') }} Shosti Arc Studio. All rights reserved.</span>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </div>

    <script src="{{static_asset('/assets/lib/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{static_asset('/assets/lib/chart/chart.min.js')}}"></script>
    <script src="{{static_asset('/assets/lib/js/select2.min.js')}}"></script>
    <script src="{{static_asset('/assets/vendors/js/vendor.bundle.base.js')}}"></script>
    <script src="{{static_asset('/assets/vendors/jquery-circle-progress/js/circle-progress.min.js')}}"></script>
    <script src="{{static_asset('/assets/js/off-canvas.js')}}"></script>
    <script src="{{static_asset('/assets/js/hoverable-collapse.js')}}"></script>
    <script src="{{static_asset('/assets/js/misc.js')}}"></script>
    <script src="{{static_asset('/assets/js/main.js')}}"></script>
    <script src="{{static_asset('/assets/lib/datatable/jquery.dataTables.js')}}"></script>
    <script src="https://cdn.datatables.net/buttons/3.2.2/js/buttons.dataTables.js"></script>
    <script src="{{static_asset('/assets/js/dashboard.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.js"></script>
    <script>
        (function () {
            var sidebar = document.getElementById('sidebar');
            if (!sidebar) return;

            sidebar.addEventListener('click', function (event) {
                var toggle = event.target.closest('.sidebar-toggle');
                if (!toggle || !sidebar.contains(toggle)) return;
                event.preventDefault();

                var selector = toggle.getAttribute('href');
                var panel = selector ? document.querySelector(selector) : null;
                if (!panel) return;

                var parentItem = toggle.closest('.nav-item');
                var willOpen = !panel.classList.contains('is-open');

                sidebar.querySelectorAll('.sidebar-submenu.is-open').forEach(function (openPanel) {
                    openPanel.classList.remove('is-open');
                    var openToggle = openPanel.previousElementSibling;
                    if (openToggle) openToggle.setAttribute('aria-expanded', 'false');
                    var openItem = openPanel.closest('.nav-item');
                    if (openItem && !openItem.querySelector('.sub-menu a.active')) {
                        openItem.classList.remove('open');
                    }
                });

                if (willOpen) {
                    panel.classList.add('is-open');
                    toggle.setAttribute('aria-expanded', 'true');
                    if (parentItem) parentItem.classList.add('open');
                }
            });
        })();
    </script>
</body>

@yield('page-script')

</html>
