@extends('layout')

@section('page-content')

    <h4 class="fw-bold py-3 "><span class="text-muted fw-light">Admin /</span> Visitor Message</h4>

    

    <div class="row">
        <div class="col-xl-12 col-md-12">
            <div class="card table-card">

                <div class="card-header">
                    <h5>Visitor Message</h5>
                </div>

                <div class="card-body p-0">
                    <div class="table-responsive">
                        <div class="p-4">
                            <table class="table table-hover mb-0" id="pageTable">
                                <thead>
                                    <tr>
                                        <th style="width: 5%;">SL</th>
                                        <th style="width: 10%;">Visitor Name</th>
                                        <th style="width: 10%;">Email</th>
                                        <th style="width: 10%;">Contact No.</th>
                                        <th style="width: 10%;">Submission Date</th>
                                        <th style="width: 10%;">Reply Status</th>
                                        <th style="width: 10%;">Message Status</th>
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
                ajax: "{{ url('/get-all/visitor-message') }}",

                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
                    {data: 'visitor_name', name: 'visitor_name', searchable: true},
                    {data: 'visitor_email', name: 'visitor_email', searchable: true},
                    {data: 'visitor_contact_no', name: 'visitor_contact_no', searchable: true},
                    {data: 'submission_time', name: 'submission_time', searchable: true},
                    {data: 'reply_status', name: 'reply_status', searchable: true},
                    {data: 'message_status', name: 'message_status', searchable: true},
                    {data: 'action', name: 'action', searchable: false},
                ]
            });
        });
    </script>
@stop