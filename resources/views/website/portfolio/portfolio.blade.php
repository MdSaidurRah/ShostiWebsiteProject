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
                    <button class="nav-link active" id="tab-res" data-bs-toggle="tab" data-bs-target="#pane-completed" type="button" role="tab" aria-controls="pane-completed" aria-selected="false">
                        Completed
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="tab-com" data-bs-toggle="tab" data-bs-target="#pane-running" type="button" role="tab" aria-controls="pane-running" aria-selected="false">
                        Running
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="tab-office" data-bs-toggle="tab" data-bs-target="#pane-interior" type="button" role="tab" aria-controls="pane-interior" aria-selected="false">
                        Interior
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="tab-ext" data-bs-toggle="tab" data-bs-target="#pane-ext" type="button" role="tab" aria-controls="pane-ext" aria-selected="false">
                        Exterior
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="tab-ext" data-bs-toggle="tab" data-bs-target="#pane-consultancy" type="button" role="tab" aria-controls="pane-consultancy" aria-selected="false">
                        Consultancy
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="tab-ext" data-bs-toggle="tab" data-bs-target="#pane-kitchen" type="button" role="tab" aria-controls="pane-kitchen" aria-selected="false">
                        Kitchen
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="tab-ext" data-bs-toggle="tab" data-bs-target="#pane-office" type="button" role="tab" aria-controls="pane-office" aria-selected="false">
                        Office
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="tab-ext" data-bs-toggle="tab" data-bs-target="#pane-residence" type="button" role="tab" aria-controls="pane-residence" aria-selected="false">
                        Residence
                    </button>
                </li>
            </ul>
        </div>

        <!-- Tab Panes -->
        <div class="tab-content" id="portfolioTabsContent">

           

            <!-- Completed -->
            <div class="tab-pane fade show active" id="pane-completed" role="tabpanel" aria-labelledby="tab-res">
                <div class="row g-4">
                    @php
                        $completed = DB::table('business_projects')
                            ->where('project_visibility', 'Published')
                            ->where('project_status', 'completed')
                            ->get();
                    @endphp
                    @foreach($completed as $p)
                        <div class="col-12 col-sm-6 col-lg-4 col-xl-3 mb-4">
                            <a href="#" class="pf-card">
                                <div class="pf-img">
                                    <img src="{{ url($p->project_photo) }}" alt="{{ $p->name }}">
                                </div>
                                <div class="pf-meta">
                                    <div class="pf-cat">{{ $p->project_category }}</div>
                                    <h5 class="pf-title">{{ $p->name }}</h5>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>            
            
            <!-- Running -->
            <div class="tab-pane fade" id="pane-running" role="tabpanel" aria-labelledby="tab-res">
                <div class="row g-4">
                    @php
                        $running = DB::table('business_projects')
                            ->where('project_visibility', 'Published')
                            ->where('project_status', 'Running')
                            ->get();
                    @endphp     
                    @foreach($running as $p)
                        <div class="col-12 col-sm-6 col-lg-4 col-xl-3 mb-4">
                            <a href="#" class="pf-card">
                                <div class="pf-img">
                                    <img src="{{ url($p->project_photo) }}" alt="{{ $p->name }}">
                                </div>
                                <div class="pf-meta">
                                    <div class="pf-cat">{{ $p->project_category }}</div>
                                    <h5 class="pf-title">{{ $p->name }}</h5>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>            
            
            <!-- Interior -->
            <div class="tab-pane fade" id="pane-interior" role="tabpanel" aria-labelledby="tab-res">
                <div class="row g-4">
                    @php
                        $interior = DB::table('business_projects')
                            ->where('project_visibility', 'Published')
                            ->where('project_status', 'Running')
                            ->get();
                    @endphp     
                    @foreach($interior as $p)
                        <div class="col-12 col-sm-6 col-lg-4 col-xl-3 mb-4">
                            <a href="#" class="pf-card">
                                <div class="pf-img">
                                    <img src="{{ url($p->project_photo) }}" alt="{{ $p->name }}">
                                </div>
                                <div class="pf-meta">
                                    <div class="pf-cat">{{ $p->project_category }}</div>
                                    <h5 class="pf-title">{{ $p->name }}</h5>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>            
            
            <!-- Exterior -->
            <div class="tab-pane fade" id="pane-exterior" role="tabpanel" aria-labelledby="tab-res">
                <div class="row g-4">
                    @php
                        $exterior = DB::table('business_projects')
                            ->where('project_visibility', 'Published')
                            ->where('project_status', 'Running')
                            ->get();
                    @endphp     
                    @foreach($exterior as $p)
                        <div class="col-12 col-sm-6 col-lg-4 col-xl-3 mb-4">
                            <a href="#" class="pf-card">
                                <div class="pf-img">
                                    <img src="{{ url($p->project_photo) }}" alt="{{ $p->name }}">
                                </div>
                                <div class="pf-meta">
                                    <div class="pf-cat">{{ $p->project_category }}</div>
                                    <h5 class="pf-title">{{ $p->name }}</h5>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>            
            
            <!-- Consultancy -->
            <div class="tab-pane fade" id="pane-consultancy" role="tabpanel" aria-labelledby="tab-res">
                <div class="row g-4">
                    @php
                        $consultancy = DB::table('business_projects')
                            ->where('project_visibility', 'Published')
                            ->where('project_status', 'Running')
                            ->get();
                    @endphp     
                    @foreach($consultancy as $p)
                        <div class="col-12 col-sm-6 col-lg-4 col-xl-3 mb-4">
                            <a href="#" class="pf-card">
                                <div class="pf-img">
                                    <img src="{{ url($p->project_photo) }}" alt="{{ $p->name }}">
                                </div>
                                <div class="pf-meta">
                                    <div class="pf-cat">{{ $p->project_category }}</div>
                                    <h5 class="pf-title">{{ $p->name }}</h5>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
            
            <!-- Kitchen -->
            <div class="tab-pane fade" id="pane-kitchen" role="tabpanel" aria-labelledby="tab-res">
                <div class="row g-4">
                    @php
                        $kitchen = DB::table('business_projects')
                            ->where('project_visibility', 'Published')
                            ->where('project_status', 'Running')
                            ->get();
                    @endphp     
                    @foreach($kitchen as $p)
                        <div class="col-12 col-sm-6 col-lg-4 col-xl-3 mb-4">
                            <a href="#" class="pf-card">
                                <div class="pf-img">
                                    <img src="{{ url($p->project_photo) }}" alt="{{ $p->name }}">
                                </div>
                                <div class="pf-meta">
                                    <div class="pf-cat">{{ $p->project_category }}</div>
                                    <h5 class="pf-title">{{ $p->name }}</h5>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>            
            
            <!-- Office -->
            <div class="tab-pane fade" id="pane-office" role="tabpanel" aria-labelledby="tab-res">
                <div class="row g-4">
                    @php
                        $office  = DB::table('business_projects')
                            ->where('project_visibility', 'Published')
                            ->where('project_status', 'Running')
                            ->get();
                    @endphp     
                    @foreach($office as $p)
                        <div class="col-12 col-sm-6 col-lg-4 col-xl-3 mb-4">
                            <a href="#" class="pf-card">
                                <div class="pf-img">
                                    <img src="{{ url($p->project_photo) }}" alt="{{ $p->name }}">
                                </div>
                                <div class="pf-meta">
                                    <div class="pf-cat">{{ $p->project_category }}</div>
                                    <h5 class="pf-title">{{ $p->name }}</h5>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
            
            <!-- Residence -->
            <div class="tab-pane fade" id="pane-residence" role="tabpanel" aria-labelledby="tab-res">
                <div class="row g-4">
                    @php
                        $residence = DB::table('business_projects')
                            ->where('project_visibility', 'Published')
                            ->where('project_status', 'Running')
                            ->get();
                    @endphp     
                    @foreach($residence as $p)
                        <div class="col-12 col-sm-6 col-lg-4 col-xl-3 mb-4">
                            <a href="#" class="pf-card">
                                <div class="pf-img">
                                    <img src="{{ url($p->project_photo) }}" alt="{{ $p->name }}">
                                </div>
                                <div class="pf-meta">
                                    <div class="pf-cat">{{ $p->project_category }}</div>
                                    <h5 class="pf-title">{{ $p->name }}</h5>
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