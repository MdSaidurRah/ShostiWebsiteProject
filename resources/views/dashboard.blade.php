@extends('layout')
@section('page-content')

<style>
    /* ===== Dashboard UI Upgrade ===== */
    .dash-card {
        border: 0;
        border-radius: 16px;
        transition: all .2s ease;
        box-shadow: 0 6px 18px rgba(0,0,0,.06);
        overflow: hidden;
    }
    .dash-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 26px rgba(0,0,0,.10);
    }
    .dash-icon {
        width: 56px;
        height: 56px;
        border-radius: 14px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: rgba(13,110,253,.10); /* bootstrap primary tint */
        flex: 0 0 auto;
    }
    .dash-icon i {
        font-size: 22px;
    }
    .dash-title {
        font-size: .9rem;
        color: #6c757d;
        margin-bottom: 4px;
    }
    .dash-value {
        font-size: 1.2rem;
        font-weight: 700;
        margin: 0;
        color: #111827;
    }
    .dash-sub {
        font-size: .8rem;
        color: #94a3b8;
        margin-top: 2px;
    }
    .chart-card {
        border: 0;
        border-radius: 16px;
        box-shadow: 0 6px 18px rgba(0,0,0,.06);
    }
    .chart-header {
        padding: 16px 18px;
        border-bottom: 1px solid rgba(0,0,0,.06);
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 12px;
        flex-wrap: wrap;
    }
    .chart-title {
        font-size: 1rem;
        font-weight: 700;
        margin: 0;
        color: #111827;
    }
    .chart-actions {
        display: flex;
        gap: 10px;
        align-items: center;
        flex-wrap: wrap;
    }
</style>

<div class="container-fluid pt-4 px-4">

    

    <!-- Chart Section -->
    <div class="row mt-4">
        <div class="col-12">
            <div class="bg-white chart-card">
                <div class="chart-header">
                    <div>
                        <p class="chart-title mb-0">Project Category Overview</p>
                        <small class="text-muted">Active projects grouped by category</small>
                    </div>

                    <!-- Optional filters (UI only) -->
                    <div class="chart-actions">
                        <select class="form-select form-select-sm" style="min-width: 160px;">
                            <option selected>This Month</option>
                            <option>Last 30 Days</option>
                            <option>This Year</option>
                        </select>
                        <button class="btn btn-sm btn-outline-primary">
                            <i class="fas fa-sync-alt me-1"></i> Refresh
                        </button>
                    </div>
                </div>

                <div class="p-3">
                    <div id="barchart_material" style="height: 420px;"></div>
                </div>
            </div>
        </div>
    </div>

</div>

@stop

@section('page-script')
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    // Your chart draw code goes here
</script>
@endsection