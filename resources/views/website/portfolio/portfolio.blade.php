@extends('website.layouts.inner-layout')
@section('page-content')

<!-- Portfolio Page Start -->
<section class="portfolio-page py-5 py-lg-6">
    <div class="container">

        <!-- Header -->
        <div class="row justify-content-center mb-4 mb-lg-5">
            <div class="col-xl-8 col-lg-9">
                <div class="text-center">
                    <span class="pf-pill">Portfolio</span>
                    <h1 class="pf-h1 mt-3 mb-2">Our Recent Projects</h1>
                    <p class="pf-lead mb-0">
                        Explore our work across residential, commercial, office, and exterior design.
                    </p>
                </div>
            </div>
        </div>

        <!-- Tabs -->
        <div class="d-flex justify-content-center mb-4">
            <ul class="nav pf-tabs" id="portfolioTabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="tab-all" data-bs-toggle="tab" data-bs-target="#pane-all" type="button" role="tab" aria-controls="pane-all" aria-selected="true">
                        All
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="tab-res" data-bs-toggle="tab" data-bs-target="#pane-res" type="button" role="tab" aria-controls="pane-res" aria-selected="false">
                        Residential
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="tab-com" data-bs-toggle="tab" data-bs-target="#pane-com" type="button" role="tab" aria-controls="pane-com" aria-selected="false">
                        Commercial
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="tab-office" data-bs-toggle="tab" data-bs-target="#pane-office" type="button" role="tab" aria-controls="pane-office" aria-selected="false">
                        Office
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="tab-ext" data-bs-toggle="tab" data-bs-target="#pane-ext" type="button" role="tab" aria-controls="pane-ext" aria-selected="false">
                        Exterior
                    </button>
                </li>
            </ul>
        </div>

        <!-- Tab Panes -->
        <div class="tab-content" id="portfolioTabsContent">

            <!-- ALL -->
            <div class="tab-pane fade show active" id="pane-all" role="tabpanel" aria-labelledby="tab-all">
                <div class="row g-4">
                    @php
                        // Replace these with DB-driven items later
                        $allProjects = [
                            ['img' => 'website/assets/img/projects/about-us.jpg', 'title' => 'Modern Living Room', 'cat' => 'Residential'],
                            ['img' => 'website/assets/img/service/interior-service.jpg', 'title' => 'Luxury Bedroom', 'cat' => 'Residential'],
                            ['img' => 'website/assets/img/service/exterior-service.jpg', 'title' => 'Facade Design', 'cat' => 'Exterior'],
                            ['img' => 'website/assets/img/service/consultancy-service.jpg', 'title' => 'Corporate Office', 'cat' => 'Office'],

                        ];
                    @endphp

                    @foreach($allProjects as $p)
                        <div class="col-12 col-sm-6 col-lg-4 col-xl-3 mb-4">
                            <a href="#" class="pf-card">
                                <div class="pf-img">
                                    <img src="{{ static_asset($p['img']) }}" alt="{{ $p['title'] }}">
                                </div>
                                <div class="pf-meta">
                                    <div class="pf-cat">{{ $p['cat'] }}</div>
                                    <h5 class="pf-title">{{ $p['title'] }}</h5>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- RESIDENTIAL -->
            <div class="tab-pane fade" id="pane-res" role="tabpanel" aria-labelledby="tab-res">
                <div class="row g-4">
                    @php
                        $resProjects = [
                            ['img' => 'website/assets/img/projects/about-us.jpg', 'title' => 'Modern Living Room'],
                            ['img' => 'website/assets/img/service/interior-service.jpg', 'title' => 'Luxury Bedroom'],
                            ['img' => 'website/assets/img/projects/interior/kitchen/Architectural (3).png', 'title' => 'Kitchen & Dining'],
                            ['img' => 'website/assets/img/projects/interior/residence/resident (9).png', 'title' => 'Duplex Interior'],
                        ];
                    @endphp

                    @foreach($resProjects as $p)
                        <div class="col-12 col-sm-6 col-lg-4 col-xl-3 mb-4">
                            <a href="#" class="pf-card">
                                <div class="pf-img">
                                    <img src="{{ static_asset($p['img']) }}" alt="{{ $p['title'] }}">
                                </div>
                                <div class="pf-meta">
                                    <div class="pf-cat">Residential</div>
                                    <h5 class="pf-title">{{ $p['title'] }}</h5>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- COMMERCIAL -->
            <div class="tab-pane fade" id="pane-com" role="tabpanel" aria-labelledby="tab-com">
                <div class="row g-4">
                    @php
                        $comProjects = [
                            ['img' => 'website/assets/img/projects/interior/residence/resident-(2).png', 'title' => 'Restaurant Interior'],
                            ['img' => 'website/assets/img/projects/interior/office/Interior-(1).png', 'title' => 'Showroom Space'],
                            ['img' => 'website/assets/img/projects/interior/residence/resident (4).png', 'title' => 'Retail Counter'],
                            ['img' => 'website/assets/img/projects/interior/office/Interior-(7).png', 'title' => 'Cafe Concept'],
                        ];
                    @endphp

                    @foreach($comProjects as $p)
                        <div class="col-12 col-sm-6 col-lg-4 col-xl-3 mb-4">
                            <a href="#" class="pf-card">
                                <div class="pf-img">
                                    <img src="{{ static_asset($p['img']) }}" alt="{{ $p['title'] }}">
                                </div>
                                <div class="pf-meta">
                                    <div class="pf-cat">Commercial</div>
                                    <h5 class="pf-title">{{ $p['title'] }}</h5>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- OFFICE -->
            <div class="tab-pane fade" id="pane-office" role="tabpanel" aria-labelledby="tab-office">
                <div class="row g-4">
                    @php
                        $officeProjects = [
                            ['img' => 'website/assets/img/projects/interior/office/Interior-(12).png', 'title' => 'Corporate Office'],
                            ['img' => 'website/assets/img/projects/interior/office/Interior-(10).png', 'title' => 'Meeting Room'],
                            ['img' => 'website/assets/img/projects/interior/office/Interior-(11).png', 'title' => 'Reception Desk'],
                            ['img' => 'website/assets/img/projects/interior/office/Interior-(9).png', 'title' => 'Workspace Layout'],
                        ];
                    @endphp

                    @foreach($officeProjects as $p)
                        <div class="col-12 col-sm-6 col-lg-4 col-xl-3 mb-4">
                            <a href="#" class="pf-card">
                                <div class="pf-img">
                                    <img src="{{ static_asset($p['img']) }}" alt="{{ $p['title'] }}">
                                </div>
                                <div class="pf-meta">
                                    <div class="pf-cat">Office</div>
                                    <h5 class="pf-title">{{ $p['title'] }}</h5>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- EXTERIOR -->
            <div class="tab-pane fade" id="pane-ext" role="tabpanel" aria-labelledby="tab-ext">
                <div class="row g-4">
                    @php
                        $extProjects = [
                            ['img' => 'website/assets/img/projects/exterior/exterior-(33).jpg', 'title' => 'Facade Design'],
                            ['img' => 'website/assets/img/projects/exterior/exterior-(34).jpg', 'title' => 'Landscape Concept'],
                            ['img' => 'website/assets/img/projects/exterior/exterior-(35).jpg', 'title' => 'Exterior Lighting'],
                            ['img' => 'website/assets/img/projects/exterior/exterior (5).png', 'title' => 'Front Elevation'],
                        ];
                    @endphp

                    @foreach($extProjects as $p)
                        <div class="col-12 col-sm-6 col-lg-4 col-xl-3 mb-4">
                            <a href="#" class="pf-card">
                                <div class="pf-img">
                                    <img src="{{ static_asset($p['img']) }}" alt="{{ $p['title'] }}">
                                </div>
                                <div class="pf-meta">
                                    <div class="pf-cat">Exterior</div>
                                    <h5 class="pf-title">{{ $p['title'] }}</h5>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>

        <!-- CTA -->
        <div class="mt-5">
            <div class="pf-cta d-flex flex-column flex-lg-row align-items-start align-items-lg-center justify-content-between gap-5 ">
                <div>
                    <h4 class="mb-1 fw-bold">Want a similar design for your space?</h4>
                    <p class="mb-0 text-muted">Tell us your requirements and we’ll propose the best solution.</p>
                </div>
                <div class="d-flex flex-column flex-sm-row gap-3">
                    <a href="{{ url('/quotation') }}" class="btn btn-success rounded-pill mx-2">
                        Get a Quote
                    </a>
                    <a href="{{ url('/services') }}" class="btn btn-outline-dark rounded-pill ">
                        Explore Services
                    </a>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- Portfolio Page End -->

<style>
    .portfolio-page{
        background: linear-gradient(180deg, #f6f7f9 0%, #ffffff 60%);
    }

    .pf-pill{
        display:inline-block;
        padding: 8px 14px;
        border-radius: 999px;
        font-weight: 800;
        font-size: .8rem;
        letter-spacing: .08em;
        text-transform: uppercase;
        color: #198754;
        background: rgba(25,135,84,.10);
    }

    .pf-h1{
        font-weight: 900;
        letter-spacing: -0.03em;
        line-height: 1.15;
        color: #111827;
        font-size: clamp(1.7rem, 2.2vw + 1rem, 2.6rem);
    }

    .pf-lead{
        color:#6c757d;
        line-height:1.7;
        max-width: 760px;
        margin: 0 auto;
    }

    /* Tabs */
    .pf-tabs{
        gap: 10px;
        flex-wrap: wrap;
        justify-content: center;
    }

    .pf-tabs .nav-link{
        border: 1px solid #e9ecef;
        border-radius: 999px;
        padding: 10px 16px;
        font-weight: 800;
        color:#111827;
        background:#fff;
        transition: .2s ease;
    }

    .pf-tabs .nav-link:hover{
        transform: translateY(-1px);
        border-color: rgba(25,135,84,.25);
    }

    .pf-tabs .nav-link.active{
        background: rgba(25,135,84,.12);
        border-color: rgba(25,135,84,.25);
        color:#198754;
    }

    /* Cards */
    .pf-card{
        display:block;
        text-decoration:none;
        background:#fff;
        border:1px solid #e9ecef;
        border-radius: 18px;
        overflow:hidden;
        box-shadow: 0 14px 35px rgba(0,0,0,.05);
        transition: .2s ease;
        height: 100%;
    }

    .pf-img img{
        width:100%;
        height: 200px;
        object-fit: cover;
        display:block;
        transition: transform .35s ease;
    }

    .pf-meta{
        padding: 14px 14px 16px;
    }

    .pf-cat{
        display:inline-block;
        font-weight: 800;
        font-size: .78rem;
        letter-spacing: .08em;
        text-transform: uppercase;
        color:#198754;
        background: rgba(25,135,84,.10);
        padding: 6px 10px;
        border-radius: 999px;
        margin-bottom: 10px;
    }

    .pf-title{
        font-weight: 900;
        color:#111827;
        margin: 0;
        letter-spacing: -0.01em;
        font-size: 1.05rem;
        line-height: 1.25;
    }

    .pf-card:hover{
        transform: translateY(-3px);
        box-shadow: 0 18px 45px rgba(0,0,0,.08);
        border-color: rgba(25,135,84,.25);
    }

    .pf-card:hover .pf-img img{
        transform: scale(1.04);
    }

    /* CTA */
    .pf-cta{
        background:#fff;
        border:1px solid #e9ecef;
        border-radius: 18px;
        padding: 20px;
        box-shadow: 0 14px 35px rgba(0,0,0,.05);
    }

    @media (max-width: 575.98px){
        .pf-img img{ height: 180px; }
        .pf-cta{ padding: 16px; }
    }
</style>

@endsection

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
@section('page-js')


@stop