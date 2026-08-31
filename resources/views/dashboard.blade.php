@extends('layout')

@section('page-content')

<div class="dash-hero">
    <div>
        <p class="admin-kicker">Control panel</p>
        <h4 class="mb-1">Welcome back, {{ session('userName') }}</h4>
        <p class="dash-hero-sub mb-0">{{ now()->format('l, d F Y') }} · Studio operations at a glance</p>
    </div>
    <div class="dash-hero-meta">
        <div>
            <span>Project completion</span>
            <strong>{{ $completionRate }}%</strong>
        </div>
        <div>
            <span>Published on site</span>
            <strong>{{ $publishRate }}%</strong>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xl-3 col-md-6">
        <a href="{{ url('/business-projects') }}" class="dash-link">
            <div class="card dash-card">
                <div class="dash-icon tone-green"><i class="fas fa-layer-group"></i></div>
                <div>
                    <p class="dash-title">Total projects</p>
                    <h5 class="dash-value">{{ $totalProjects }}</h5>
                    <p class="dash-hint">{{ $publishedProjects }} published · {{ $hiddenProjects }} hidden</p>
                </div>
            </div>
        </a>
    </div>
    <div class="col-xl-3 col-md-6">
        <a href="{{ url('/consultation-query') }}" class="dash-link">
            <div class="card dash-card">
                <div class="dash-icon tone-amber"><i class="fas fa-comments"></i></div>
                <div>
                    <p class="dash-title">Consultation queries</p>
                    <h5 class="dash-value">{{ $consultationQueries }}</h5>
                    <p class="dash-hint">CRM leads from the website</p>
                </div>
            </div>
        </a>
    </div>
    <div class="col-xl-3 col-md-6">
        <a href="{{ url('/visitor-message') }}" class="dash-link">
            <div class="card dash-card">
                <div class="dash-icon tone-blue"><i class="fas fa-envelope-open-text"></i></div>
                <div>
                    <p class="dash-title">Visitor messages</p>
                    <h5 class="dash-value">{{ $visitorMessages }}</h5>
                    <p class="dash-hint">{{ $unreadMessages }} awaiting reply</p>
                </div>
            </div>
        </a>
    </div>
    <div class="col-xl-3 col-md-6">
        <a href="{{ url('/clients') }}" class="dash-link">
            <div class="card dash-card">
                <div class="dash-icon tone-teal"><i class="fas fa-handshake"></i></div>
                <div>
                    <p class="dash-title">Clients</p>
                    <h5 class="dash-value">{{ $clients }}</h5>
                    <p class="dash-hint">{{ $users }} system users</p>
                </div>
            </div>
        </a>
    </div>
</div>

<div class="row">
    <div class="col-lg-8">
        <div class="dash-panel">
            <div class="dash-panel-head">
                <h5>Project pipeline</h5>
                <a href="{{ url('/business-projects') }}">Manage projects</a>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="pipeline-stat">
                        <span>Completed</span>
                        <strong>{{ $completedProjects }}</strong>
                        <div class="progress dash-progress">
                            <div class="progress-bar bg-success" style="width: {{ $completionRate }}%"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="pipeline-stat">
                        <span>On going</span>
                        <strong>{{ $ongoingProjects }}</strong>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="pipeline-stat">
                        <span>Active</span>
                        <strong>{{ $activeProjects }}</strong>
                    </div>
                </div>
            </div>
            <div class="type-grid">
                <div>
                    <span>Interior</span>
                    <strong>{{ $interiorProjects }}</strong>
                    <small>Residence {{ $residanceInteriorProjects }} · Office {{ $officeInteriorProjects }} · Kitchen {{ $kitchenInteriorProjects }}</small>
                </div>
                <div>
                    <span>Exterior</span>
                    <strong>{{ $exteriorProjects }}</strong>
                </div>
                <div>
                    <span>Consultancy</span>
                    <strong>{{ $consultancyProjects }}</strong>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="dash-panel">
            <div class="dash-panel-head">
                <h5>Mix by type</h5>
            </div>
            <canvas id="typeChart" height="180"></canvas>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-4">
        <div class="dash-panel">
            <div class="dash-panel-head">
                <h5>Status mix</h5>
            </div>
            <canvas id="statusChart" height="180"></canvas>
        </div>
    </div>
    <div class="col-lg-8">
        <div class="dash-panel">
            <div class="dash-panel-head">
                <h5>Website catalog</h5>
            </div>
            <div class="catalog-grid">
                <a href="{{ url('/business-services') }}">
                    <i class="fas fa-concierge-bell"></i>
                    <span>Services</span>
                    <strong>{{ $service }}</strong>
                </a>
                <a href="{{ url('/business-package') }}">
                    <i class="fas fa-box-open"></i>
                    <span>Packages</span>
                    <strong>{{ $package }}</strong>
                </a>
                <a href="{{ url('/brands') }}">
                    <i class="fas fa-tags"></i>
                    <span>Brands</span>
                    <strong>{{ $brands }}</strong>
                </a>
                <a href="{{ url('/gallery') }}">
                    <i class="fas fa-images"></i>
                    <span>Gallery</span>
                    <strong>{{ $galleryItems }}</strong>
                </a>
                <a href="{{ url('/site-banners') }}">
                    <i class="fas fa-flag"></i>
                    <span>Banners</span>
                    <strong>{{ $banners }}</strong>
                </a>
                <a href="{{ url('/promotional-videos') }}">
                    <i class="fas fa-video"></i>
                    <span>Videos</span>
                    <strong>{{ $videos }}</strong>
                </a>
                <a href="{{ url('/advertisements') }}">
                    <i class="fas fa-bullhorn"></i>
                    <span>Ads</span>
                    <strong>{{ $ads }}</strong>
                </a>
                <a href="{{ url('/user/all-user') }}">
                    <i class="fas fa-users"></i>
                    <span>Users</span>
                    <strong>{{ $users }}</strong>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-6">
        <div class="dash-panel">
            <div class="dash-panel-head">
                <h5>Recent projects</h5>
                <a href="{{ url('/business-projects') }}">View all</a>
            </div>
            <div class="table-responsive">
                <table class="table dash-table mb-0">
                    <thead>
                        <tr>
                            <th>Project</th>
                            <th>Type</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($recentProjects as $project)
                            <tr>
                                <td>
                                    <div class="dash-project-cell">
                                        @if(!empty($project->project_photo))
                                            <img src="{{ asset($project->project_photo) }}" alt="">
                                        @endif
                                        <div>
                                            <strong>{{ $project->name }}</strong>
                                            <small>{{ $project->project_category }} · {{ $project->project_visibility }}</small>
                                        </div>
                                    </div>
                                </td>
                                <td>{{ $project->project_type }}</td>
                                <td><span class="dash-pill">{{ $project->project_status }}</span></td>
                            </tr>
                        @empty
                            <tr><td colspan="3" class="text-muted">No projects yet.</td></tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="dash-panel">
            <div class="dash-panel-head">
                <h5>Latest consultation queries</h5>
                <a href="{{ url('/consultation-query') }}">View all</a>
            </div>
            <div class="table-responsive">
                <table class="table dash-table mb-0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Type</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($recentQueries as $query)
                            <tr>
                                <td>
                                    <strong>{{ $query->name }}</strong>
                                    <small class="d-block text-muted">{{ $query->location ?? '—' }} · {{ $query->size ?? '' }}</small>
                                </td>
                                <td>{{ $query->phone }}</td>
                                <td>{{ $query->type ?? '—' }}</td>
                                <td>
                                    <a class="btn btn-sm btn-outline-success" href="{{ url('/consultation-query/show/' . \Illuminate\Support\Facades\Crypt::encryptString($query->id)) }}">Open</a>
                                </td>
                            </tr>
                        @empty
                            <tr><td colspan="4" class="text-muted">No consultation queries yet.</td></tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-8">
        <div class="dash-panel">
            <div class="dash-panel-head">
                <h5>Recent visitor messages</h5>
                <a href="{{ url('/visitor-message') }}">Inbox</a>
            </div>
            @forelse($recentMessages as $message)
                <div class="message-row">
                    <div>
                        <strong>{{ $message->visitor_name }}</strong>
                        <span>{{ $message->visitor_email }}</span>
                    </div>
                    <p>{{ \Illuminate\Support\Str::limit(strip_tags($message->visitor_message), 140) }}</p>
                    <small>{{ $message->submission_time ?? '' }} · {{ $message->reply_status ?? 'Pending' }}</small>
                </div>
            @empty
                <p class="text-muted mb-0">No visitor messages yet.</p>
            @endforelse
        </div>
    </div>
    <div class="col-lg-4">
        <div class="dash-panel">
            <div class="dash-panel-head">
                <h5>Quick actions</h5>
            </div>
            <div class="quick-actions">
                <a href="{{ url('/project/create') }}"><i class="fa fa-plus"></i> New project</a>
                <a href="{{ url('/consultation-query') }}"><i class="fa fa-headset"></i> Review queries</a>
                <a href="{{ url('/visitor-message') }}"><i class="fa fa-inbox"></i> Open inbox</a>
                <a href="{{ url('/gallery/create') }}"><i class="fa fa-image"></i> Add gallery item</a>
                <a href="{{ url('/') }}" target="_blank"><i class="fa fa-globe"></i> View website</a>
            </div>
        </div>
    </div>
</div>

@stop

@section('page-script')
<script>
    (function () {
        var typeLabels = @json($typeChart['labels']);
        var typeData = @json($typeChart['data']);
        var statusLabels = @json($statusChart['labels']);
        var statusData = @json($statusChart['data']);

        if (document.getElementById('typeChart')) {
            new Chart(document.getElementById('typeChart'), {
                type: 'doughnut',
                data: {
                    labels: typeLabels,
                    datasets: [{
                        data: typeData,
                        backgroundColor: ['#056040', '#0b54c5', '#6d28d9'],
                        borderWidth: 0
                    }]
                },
                options: {
                    plugins: { legend: { position: 'bottom' } },
                    cutout: '62%'
                }
            });
        }

        if (document.getElementById('statusChart')) {
            new Chart(document.getElementById('statusChart'), {
                type: 'bar',
                data: {
                    labels: statusLabels,
                    datasets: [{
                        data: statusData,
                        backgroundColor: ['#056040', '#d97706', '#0b54c5'],
                        borderRadius: 8,
                        maxBarThickness: 28
                    }]
                },
                options: {
                    plugins: { legend: { display: false } },
                    scales: {
                        y: { beginAtZero: true, ticks: { precision: 0 } },
                        x: { grid: { display: false } }
                    }
                }
            });
        }
    })();
</script>
@endsection
