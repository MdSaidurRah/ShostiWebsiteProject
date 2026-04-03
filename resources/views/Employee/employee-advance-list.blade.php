@extends('layout')

@section('page-content')

    <h4 class="fw-bold py-3 ">Employee Advance </h4>



    <div class="row">

        <div class="col-xl-12 col-md-12">
            <div class="card table-card" >
                <div class="card-header">
                    <h5>Advance List</h5>
                </div>

                <div class="card-body p-0"  >
                    <div class="table-responsive">
                        <div class="" style="padding: 30px">
                            <table class="table table-hover mb-0" id="objecttablename">
                                <thead>
                                <tr>
                                    <th style="width: 5%;">SL</th>
                                    <th style="width: 25%;">Purpose</th>
                                    <th style="width: 10%;">Amount</th>
                                    <th style="width: 10%;">Date</th>
                                    <th style="width: 10%;">Project</th>
                                    <th style="width: 10%;">Type</th>
                                    <th style="width: 10%;">Adjustment</th>
                                </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- prject ,team member start -->

        </div>


    </div>

    <!-- [ Main Content ] end -->


    <!-- Insert Modal -->




@stop



@section('page-script')


    <script type="text/javascript">



        $(document).ready(function () {

            var today = new Date().toISOString().split('T')[0];
            $('#received_date').val(today);

            $('#objecttablename').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ url('/employee/advance/get-all-items') }}",
                data:{
                  employeeId:"ssssssssssssssss"
                },
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
                    {data: 'advance_purpose', name: 'advance_purpose', searchable: true},
                    {data: 'amount', name: 'amount', searchable: true},
                    {data: 'received_date', name: 'received_date', searchable: true},
                    {data: 'project', name: 'project', searchable: true},
                    {data: 'advance_type', name: 'advance_type', searchable: true},
                    {data: 'account_adjustment', name: 'account_adjustment', searchable: true},
                ]
            });
        });


    </script>

@stop

