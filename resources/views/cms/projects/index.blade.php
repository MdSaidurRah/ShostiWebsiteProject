@extends('layout')

@section('page-content')

<h4 class="fw-bold py-3 ">
    <span class="text-muted fw-light">Admin /</span> Projects
</h4>

<div class="page-button-area mb-4">
    <a href="{{ url('/project/create') }}" class="btn btn-primary btn-sm">
        <i class="fa fa-plus-square"></i> New Project
    </a>
</div>

<div class="row">
    <div class="col-xl-12 col-md-12">
        <div class="card table-card">

            <div class="card-header">
                <h5>Projects</h5>
            </div>

            <div class="card-body p-0">
                <div class="table-responsive">
                    <div class="p-4">

                        <table class="table table-hover mb-0" id="pageTable">

                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Photo</th>
                                    <th>Title</th>
                                    <th>Type</th>
                                    <th>Category</th>
                                    <th>Order</th>
                                    <th>Visibility</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>

                                {{-- FILTER ROW --}}
                                <tr>
                                    <th></th>
                                    <th></th>

                                    <th>
                                        <input type="text" class="form-control form-control-sm column-search" placeholder="Search Title">
                                    </th>

                                    <th>
                                        <input type="text" class="form-control form-control-sm column-search" placeholder="Search Type">
                                    </th>

                                    <th>
                                        <input type="text" class="form-control form-control-sm column-search" placeholder="Search Category">
                                    </th>

                                    <th>
                                        <input type="text" class="form-control form-control-sm column-search" placeholder="Order">
                                    </th>

                                    <th>
                                        <select class="form-control form-control-sm column-search">
                                            <option value="">All</option>
                                            <option value="Hidden">Hidden</option>
                                            <option value="Published">Published</option>
                                        </select>
                                    </th>

                                    <th>
                                        <select class="form-control form-control-sm column-search">
                                            <option value="">All</option>
                                            <option value="Active">Active</option>
                                            <option value="Completed">Completed</option>
                                            <option value="On Going">On Going</option>
                                        </select>
                                    </th>

                                    <th></th>
                                </tr>
                            </thead>

                        </table>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@stop

@section('page-script')

<script>
$(document).ready(function () {

    let table = $('#pageTable').DataTable({
        processing: true,
        serverSide: true,
        orderCellsTop: true,
        fixedHeader: true,

        ajax: "{{ url('/get-all/projects') }}",

        columns: [
            {data: 'DT_RowIndex', orderable: false, searchable: false},
            {data: 'project_photo'},
            {data: 'name'},
            {data: 'project_type'},
            {data: 'project_category'},
            {data: 'project_order'},
            {data: 'project_visibility'},
            {data: 'project_status'},
            {data: 'action', orderable: false, searchable: false},
        ]
    });

    // COLUMN SEARCH
    $('#pageTable thead tr:eq(1) th').each(function (i) {
        let input = $(this).find('.column-search');

        if (input.length) {
            input.on('keyup change', function () {
                if (table.column(i).search() !== this.value) {
                    table.column(i).search(this.value).draw();
                }
            });
        }
    });

});
</script>

@stop