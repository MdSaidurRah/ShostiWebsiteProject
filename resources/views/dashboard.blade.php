@extends('layout')
@section('page-content')

<style>
    .dash-wrap {
        --dash-ink: #122033;
        --dash-muted: #6b7a8d;
        --dash-line: rgba(18, 32, 51, .08);
        --dash-accent: #c4a574;
        --dash-navy: #1b3a4b;
        --dash-teal: #2a7b9b;
        --dash-bg: #f4f1ea;
    }

    .dash-hero {
        background: linear-gradient(135deg, #1b3a4b 0%, #122033 58%, #2a7b9b 100%);
        border-radius: 18px;
        padding: 22px 24px;
        color: #fff;
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 16px;
        flex-wrap: wrap;
        box-shadow: 0 14px 34px rgba(18, 32, 51, .18);
        margin-bottom: 22px;
    }
    .dash-hero h3 {
        margin: 0 0 4px;
        font-weight: 700;
        letter-spacing: .2px;
    }
    .dash-hero p {
        margin: 0;
        color: rgba(255,255,255,.72);
        font-size: .92rem;
    }
    .dash-hero-meta {
        display: flex;
        gap: 10px;
        flex-wrap: wrap;
    }
    .dash-chip {
        background: rgba(255,255,255,.12);
        border: 1px solid rgba(196,165,116,.45);
        color: #f6e7c8;
        border-radius: 999px;
        padding: 6px 12px;
        font-size: .78rem;
        white-space: nowrap;
    }

    .dash-card {
        border: 0;
        border-radius: 16px;
        background: #fff;
        box-shadow: 0 8px 22px rgba(18, 32, 51, .06);
        height: 100%;
        overflow: hidden;
        transition: transform .2s ease, box-shadow .2s ease;
    }
    .dash-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 14px 28px rgba(18, 32, 51, .10);
    }
    .dash-stat {
        padding: 18px 18px 16px;
        display: flex;
        gap: 14px;
        align-items: center;
    }
    .dash-icon {
        width: 52px;
        height: 52px;
        border-radius: 14px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex: 0 0 auto;
        color: #fff;
    }
    .dash-icon i { font-size: 20px; }
    .bg-navy { background: #1b3a4b; }
    .bg-teal { background: #2a7b9b; }
    .bg-gold { background: #c4a574; }
    .bg-olive { background: #6b7f5a; }
    .bg-clay { background: #b85c38; }
    .bg-slate { background: #4a5d73; }
    .dash-title {
        font-size: .78rem;
        color: var(--dash-muted);
        margin-bottom: 2px;
        text-transform: uppercase;
        letter-spacing: .04em;
    }
    .dash-value {
        font-size: 1.45rem;
        font-weight: 700;
        margin: 0;
        color: var(--dash-ink);
        line-height: 1.2;
    }
    .dash-sub {
        font-size: .75rem;
        color: #94a3b8;
        margin-top: 2px;
    }

    .chart-card, .list-card {
        border: 0;
        border-radius: 16px;
        background: #fff;
        box-shadow: 0 8px 22px rgba(18, 32, 51, .06);
        height: 100%;
    }
    .chart-header, .list-header {
        padding: 16px 18px;
        border-bottom: 1px solid var(--dash-line);
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 12px;
    }
    .chart-title, .list-title {
        font-size: 1rem;
        font-weight: 700;
        margin: 0;
        color: var(--dash-ink);
    }
    .quick-link {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 12px 14px;
        border-radius: 12px;
        background: #f7f4ee;
        color: var(--dash-ink);
        text-decoration: none;
        margin-bottom: 8px;
        border: 1px solid transparent;
    }
    .quick-link:hover {
        border-color: #c4a574;
        color: var(--dash-navy);
        background: #fff8ec;
    }
    .dash-table {
        margin: 0;
        font-size: .86rem;
    }
    .dash-table th {
        color: var(--dash-muted);
        font-weight: 600;
        font-size: .74rem;
        text-transform: uppercase;
        letter-spacing: .04em;
        border-top: 0;
    }
    .dash-empty {
        padding: 28px 18px;
        text-align: center;
        color: var(--dash-muted);
    }
    .status-pill {
        display: inline-block;
        padding: 2px 8px;
        border-radius: 999px;
        font-size: .72rem;
        background: #eef4f7;
        color: #1b3a4b;
    }
</style>

<div class="container-fluid pt-2 px-2 dash-wrap">
    <div class="dash-hero">
        <div>
            <h3>Welcome back, {{ session('userName') ?: 'Admin' }}</h3>
            <p>Shosti Arc Studio — overview of projects, inquiries, and website content.</p>
        </div>
        <div class="dash-hero-meta">
            <span class="dash-chip"><i class="fas fa-calendar-alt me-1"></i> {{ now()->format('l, d M Y') }}</span>
            <span class="dash-chip"><i class="fas fa-user-shield me-1"></i> {{ session('userRole') ?: 'Administrator' }}</span>
        </div>
    </div>

    <div class="row g-3">
        <div class="col-xl-2 col-md-4 col-sm-6">
            <div class="dash-card">
                <div class="dash-stat">
                    <div class="dash-icon bg-navy"><i class="fas fa-drafting-compass"></i></div>
                    <div>
                        <div class="dash-title">Projects</div>
                        <p class="dash-value">{{ $stats['projects'] }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-2 col-md-4 col-sm-6">
            <div class="dash-card">
                <div class="dash-stat">
                    <div class="dash-icon bg-teal"><i class="fas fa-concierge-bell"></i></div>
                    <div>
                        <div class="dash-title">Services</div>
                        <p class="dash-value">{{ $stats['services'] }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-2 col-md-4 col-sm-6">
            <div class="dash-card">
                <div class="dash-stat">
                    <div class="dash-icon bg-gold"><i class="fas fa-handshake"></i></div>
                    <div>
                        <div class="dash-title">Clients</div>
                        <p class="dash-value">{{ $stats['clients'] }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-2 col-md-4 col-sm-6">
            <div class="dash-card">
                <div class="dash-stat">
                    <div class="dash-icon bg-olive"><i class="fas fa-images"></i></div>
                    <div>
                        <div class="dash-title">Gallery</div>
                        <p class="dash-value">{{ $stats['gallery'] }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-2 col-md-4 col-sm-6">
            <div class="dash-card">
                <div class="dash-stat">
                    <div class="dash-icon bg-clay"><i class="fas fa-envelope-open-text"></i></div>
                    <div>
                        <div class="dash-title">Messages</div>
                        <p class="dash-value">{{ $stats['messages'] }}</p>
                        <div class="dash-sub">{{ $stats['pending_replies'] }} pending reply</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-2 col-md-4 col-sm-6">
            <div class="dash-card">
                <div class="dash-stat">
                    <div class="dash-icon bg-slate"><i class="fas fa-comments"></i></div>
                    <div>
                        <div class="dash-title">Consultations</div>
                        <p class="dash-value">{{ $stats['consultations'] }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-3 mt-1">
        <div class="col-lg-8">
            <div class="chart-card">
                <div class="chart-header">
                    <div>
                        <p class="chart-title">Projects by category</p>
                        <small class="text-muted">Live count from published project records</small>
                    </div>
                    <a href="{{ url('/business-projects') }}" class="btn btn-sm btn-outline-secondary">Manage projects</a>
                </div>
                <div class="p-3">
                    @if($projectsByCategory->isEmpty())
                        <div class="dash-empty">No project data yet. Add projects to see this chart.</div>
                    @else
                        <div id="categoryChart" style="height: 360px;"></div>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="chart-card mb-3">
                <div class="chart-header">
                    <p class="chart-title mb-0">Project types</p>
                </div>
                <div class="p-3">
                    @if($projectsByType->isEmpty())
                        <div class="dash-empty">No type breakdown yet.</div>
                    @else
                        <div id="typeChart" style="height: 200px;"></div>
                    @endif
                </div>
            </div>
            <div class="list-card">
                <div class="list-header">
                    <p class="list-title">Quick actions</p>
                </div>
                <div class="p-3">
                    <a class="quick-link" href="{{ url('/project/create') }}"><span><i class="fas fa-plus-circle me-2"></i>New project</span><i class="fas fa-chevron-right"></i></a>
                    <a class="quick-link" href="{{ url('/visitor-message') }}"><span><i class="fas fa-inbox me-2"></i>Visitor messages</span><i class="fas fa-chevron-right"></i></a>
                    <a class="quick-link" href="{{ url('/consultation-query') }}"><span><i class="fas fa-headset me-2"></i>Consultation queries</span><i class="fas fa-chevron-right"></i></a>
                    <a class="quick-link" href="{{ url('/gallery') }}"><span><i class="fas fa-photo-video me-2"></i>Update gallery</span><i class="fas fa-chevron-right"></i></a>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-3 mt-1">
        <div class="col-lg-6">
            <div class="list-card">
                <div class="list-header">
                    <p class="list-title">Recent visitor messages</p>
                    <a href="{{ url('/visitor-message') }}" class="small">View all</a>
                </div>
                <div class="table-responsive">
                    @if($recentMessages->isEmpty())
                        <div class="dash-empty">No messages received yet.</div>
                    @else
                        <table class="table dash-table mb-0">
                            <thead>
                                <tr>
                                    <th>Visitor</th>
                                    <th>Contact</th>
                                    <th>Date</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($recentMessages as $message)
                                    <tr>
                                        <td>
                                            <strong>{{ $message->visitor_name ?: 'Visitor' }}</strong>
                                            <div class="text-muted" style="font-size:.75rem;">{{ \Illuminate\Support\Str::limit($message->visitor_message, 42) }}</div>
                                        </td>
                                        <td>{{ $message->visitor_contact_no ?: $message->visitor_email }}</td>
                                        <td>{{ $message->submission_time ? \Illuminate\Support\Carbon::parse($message->submission_time)->format('d M Y') : '—' }}</td>
                                        <td class="text-end">
                                            <a class="btn btn-sm btn-outline-primary" href="{{ url('/visitor-message/show/'.\Illuminate\Support\Facades\Crypt::encryptString($message->id)) }}">Open</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="list-card">
                <div class="list-header">
                    <p class="list-title">Latest consultation queries</p>
                    <a href="{{ url('/consultation-query') }}" class="small">View all</a>
                </div>
                <div class="table-responsive">
                    @if($recentConsultations->isEmpty())
                        <div class="dash-empty">No consultation queries yet.</div>
                    @else
                        <table class="table dash-table mb-0">
                            <thead>
                                <tr>
                                    <th>Client</th>
                                    <th>Type</th>
                                    <th>Location</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($recentConsultations as $form)
                                    <tr>
                                        <td>
                                            <strong>{{ $form->name }}</strong>
                                            <div class="text-muted" style="font-size:.75rem;">{{ $form->phone }}</div>
                                        </td>
                                        <td><span class="status-pill">{{ $form->type ?: 'General' }}</span></td>
                                        <td>{{ $form->location ?: '—' }}</td>
                                        <td class="text-end">
                                            <a class="btn btn-sm btn-outline-primary" href="{{ url('/consultation-query/show/'.\Illuminate\Support\Facades\Crypt::encryptString($form->id)) }}">Open</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <div class="row g-3 mt-1 mb-3">
        <div class="col-12">
            <div class="list-card">
                <div class="list-header">
                    <p class="list-title">Recently added projects</p>
                    <a href="{{ url('/business-projects') }}" class="small">View all</a>
                </div>
                <div class="table-responsive">
                    @if($recentProjects->isEmpty())
                        <div class="dash-empty">No projects added yet.</div>
                    @else
                        <table class="table dash-table mb-0">
                            <thead>
                                <tr>
                                    <th>Project</th>
                                    <th>Type</th>
                                    <th>Category</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($recentProjects as $project)
                                    <tr>
                                        <td><strong>{{ $project->name }}</strong></td>
                                        <td>{{ $project->project_type ?: '—' }}</td>
                                        <td>{{ $project->project_category ?: '—' }}</td>
                                        <td><span class="status-pill">{{ $project->project_status ?: '—' }}</span></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@stop

@section('page-script')
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load('current', { packages: ['corechart', 'bar'] });
    google.charts.setOnLoadCallback(drawDashboardCharts);

    function drawDashboardCharts() {
        @if($projectsByCategory->isNotEmpty())
        var categoryData = google.visualization.arrayToDataTable([
            ['Category', 'Projects'],
            @foreach($projectsByCategory as $row)
            ['{{ addslashes($row->project_category ?: 'Uncategorized') }}', {{ (int) $row->total }}],
            @endforeach
        ]);
        new google.visualization.ColumnChart(document.getElementById('categoryChart')).draw(categoryData, {
            legend: { position: 'none' },
            colors: ['#1b3a4b'],
            chartArea: { width: '85%', height: '70%' },
            hAxis: { textStyle: { color: '#6b7a8d' } },
            vAxis: { minValue: 0, gridlines: { color: '#eef1f4' }, textStyle: { color: '#6b7a8d' } },
            bar: { groupWidth: '45%' },
            backgroundColor: 'transparent'
        });
        @endif

        @if($projectsByType->isNotEmpty())
        var typeData = google.visualization.arrayToDataTable([
            ['Type', 'Projects'],
            @foreach($projectsByType as $row)
            ['{{ addslashes($row->project_type ?: 'Other') }}', {{ (int) $row->total }}],
            @endforeach
        ]);
        new google.visualization.PieChart(document.getElementById('typeChart')).draw(typeData, {
            pieHole: 0.48,
            legend: { position: 'bottom', textStyle: { color: '#4a5d73', fontSize: 11 } },
            colors: ['#1b3a4b', '#2a7b9b', '#c4a574', '#6b7f5a', '#b85c38'],
            chartArea: { width: '90%', height: '75%' },
            backgroundColor: 'transparent'
        });
        @endif
    }
</script>
@endsection
