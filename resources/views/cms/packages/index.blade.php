@extends('layout')

@section('page-content')

    <h4 class="fw-bold py-3 "><span class="text-muted fw-light">Admin /</span> Packages</h4>

    <div class="page-button-area mb-4">
        <a type="button" href="{{ url('/business-package/create') }}" class="btn btn-primary btn-sm">
            <i class="fa fa-plus-square" aria-hidden="true"></i> New Packages
        </a>
    </div>

    <div class="row">
        <div class="col-xl-12 col-md-12">
            <div class="card table-card">

                <div class="card-header">
                    <h5>Packages</h5>
                </div>

                <div class="card-body p-0">
                    <div class="table-responsive">
                        <div class="p-4">
                            <table class="table table-hover mb-0" id="pageTable">
                                <thead>
                                    <tr>
                                        <th style="width: 5%;">SL</th>
                                        <th style="width: 10%;"></th>
                                        <th style="width: 20%;">Title</th>
                                        <th style="width: 20%;">Duration</th>
                                        <th style="width: 20%;">Price</th>
                                        <th style="width: 20%;">Size</th>
                                        <th style="width: 10%;">Status</th>
                                        <th style="width: 15%;">Action</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
            <!-- end -->
        </div>
    </div>

@stop

@section('page-script')
    <script type="text/javascript">
        $(document).ready(function () {
            $('#pageTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ url('/get-all/servbusiness-packageice') }}",
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
                    {data: 'cover_photo', name: 'cover_photo', searchable: true},
                    {data: 'title', name: 'title', searchable: true},
                    {data: 'duration', name: 'duration', searchable: true},
                    {data: 'price', name: 'price', searchable: true},
                    {data: 'size', name: 'size', searchable: true},
                    {data: 'status', name: 'status', searchable: true},
                    {data: 'action', name: 'action', searchable: false},
                ]
            });
        });
    </script>
@stop