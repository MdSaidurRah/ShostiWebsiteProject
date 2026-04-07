@extends('layout')

@section('page-content')

    <h4 class="fw-bold py-3 "><span class="text-muted fw-light">Admin /</span> Consultation Query</h4>

    Admin / Projects
Projects
    

    <div class="row">
        <div class="col-xl-12 col-md-12">
            <div class="card table-card">

                <div class="card-header">
                    <h5>Consultation Query</h5>
                </div>

                <div class="card-body p-0">
                    <div class="table-responsive">
                        <div class="p-4">
                            <table class="table table-hover mb-0" id="pageTable">
                                <thead>
                                    <tr>
                                        <th style="width: 5%;">SL</th>
                                        <th style="width: 10%;">Consultant Name</th>
                                        <th style="width: 10%;">Phone</th>
                                        <th style="width: 10%;">Location </th>
                                        <th style="width: 10%;">Size</th>
                                        <th style="width: 10%;">Type</th>
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
                ajax: "{{ url('/get-all/consultation-query') }}",

                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
                    {data: 'visitor_name', name: 'visitor_name', searchable: true},
                    {data: 'visitor_phone', name: 'phone', searchable: true},
                    {data: 'location', name: 'location', searchable: true},
                    {data: 'physical_', name: 'size', searchable: true},
                    {data: 'type', name: 'type', searchable: true},
                    {data: 'query_status', name: 'query_status', searchable: true},
                    {data: 'action', name: 'action', searchable: false},
                ]
            });
        });
    </script>
@stop