@extends('layout')

@section('page-content')


    <!-- [ breadcrumb ] start -->

    <div class="page-header">

        <div class="page-block">

            <div class="row align-items-center">

                <div class="col-md-12">

                    <div class="page-header-title">

                        <h5 class="m-b-10">Dashboard </h5>

                    </div>

                    <ul class="breadcrumb">

                        <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>

                        <li class="breadcrumb-item"><a href="#!">Expense</a></li>

                    </ul>

                </div>

            </div>

        </div>

    </div>


    <!-- prject ,team member start -->

    <div class="row">

        <div class="col-xl-12 col-md-12">

            <div class="card table-card" >

                <div class="card-header">

                    <h5>Expense Report</h5>

                </div>

                <div class="card-body p-0"  >

                    <div class="table-responsive">

                        <div class="" style="padding: 30px">

                            <div class="row">

                                <div class="col-md-12 col-lg-12 col-xl-12">
                                    <form action="{{url('/generate-expense-report')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-12">

                                                <div class="row">
                                                    <div class="form-group col-md-4">
                                                        <label for="formGroupExampleInput">Project</label>
                                                        <select  name="project_id" id="project_id" class="form-control">
                                                            <option value="">Select Project</option>
                                                            @foreach($projects as $project)
                                                                <option value="{{$project->id}}">{{$project->project_name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                    <div class="form-group col-md-4">
                                                        <label for="formGroupExampleInput">Start Date</label>
                                                        <input type="date" class="form-control" name="start_date" id="start_date" placeholder="date" >
                                                    </div>

                                                    <div class="form-group col-md-4">
                                                        <label for="formGroupExampleInput">End Date</label>
                                                        <input type="date" class="form-control" name="end_date" id="end_date" placeholder="date" >
                                                    </div>
                                                </div>


                                                <div class="row">
                                                    <div class="form-group col-md-4">
                                                        <label for="formGroupExampleInput">Expense head</label>
                                                        <select  name="expense_head_id"  id="expense_head_id" class="form-control" >
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="formGroupExampleInput">Sub head</label>
                                                        <select  name="sub_head_id" id="sub_head_id" class="form-control" >
                                                        </select>
                                                    </div>

                                                    <div class="form-group col-md-4">
                                                        <label for="formGroupExampleInput">Child head</label>
                                                        <select  name="child_head_id" id="child_head_id" class="form-control">
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-row">
                                                    <div class="col-md-12">
                                                        <input type="submit" name="submit" value="Show Report" class="btn btn-primary" />
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>



                        </div>

                    </div>

                </div>

            </div>

            <!-- prject ,team member start -->

        </div>


    </div>



@stop



@section('page-script')


    <script type="text/javascript">

        $('#expense_head_id').select2({
            width: '100%',
        });

        $('#sub_head_id').select2({
            width: '100%',
        });

        $('#child_head_id').select2({
            width: '100%',
        });



        $('#project_id').on('change', function () {
            var projectId = this.value;
            $("#expense_head_id").html('');
            $.ajax({
                url: "{{url('api/project-budget-head/')}}/"+projectId,
                type: "get",
                data: {
                    _token: '{{csrf_token()}}'
                },
                dataType: 'json',
                success: function (result) {
                    $('#expense_head_id').html('<option value="">-- Select Expense Head --</option>');
                    $.each(result.head, function (key, value) {
                        $("#expense_head_id").append('<option value="' + value
                            .head_id + '">' + value.head_name + '</option>');
                    });
                }
            });
        });

        $('#expense_head_id').on('change', function () {
            var headId = this.value;
            var projectId = $("#project_id").val();

            $("#sub_head_id").html('');
            $.ajax({
                url: "{{url('api/project-budget-sub-head')}}/"+headId+"/"+projectId,
                type: "get",
                data: {
                    _token: '{{csrf_token()}}'
                },
                dataType: 'json',
                success: function (result) {
                    $('#sub_head_id').html('<option value="">-- Select Sub Head --</option>');
                    $.each(result.subHead, function (key, value) {
                        $("#sub_head_id").append('<option value="' + value
                            .head_id + '">' + value.head_name + '</option>');
                    });
                }
            });
        });

        $('#sub_head_id').on('change', function () {
            var subHeadId = this.value;
            var headId = $("#expense_head_id").val();
            var projectId = $("#project_id").val();

            $("#child_head_id").html('');
            $.ajax({
                url: "{{url('api/project-budget-child-head')}}/"+headId+"/"+subHeadId+"/"+projectId,
                type: "get",
                data: {
                    _token: '{{csrf_token()}}'
                },
                dataType: 'json',
                success: function (result) {
                    $('#child_head_id').html('<option value="">-- Select Child Head --</option>');
                    $.each(result.childHead, function (key, value) {
                        $("#child_head_id").append('<option value="' + value
                            .head_id + '">' + value.head_name + '</option>');
                    });
                }
            });
        });


        $(document).ready(function () {
            var today = new Date().toISOString().split('T')[0];
            $('#date').val(today);
            $('#objecttablename').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ url('/expense/get-all-items') }}",
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
                    {data: 'expenseHead', name: 'expenseHead', searchable: true},
                    {data: 'project_name', name: 'project_name', searchable: true},
                    {data: 'date', name: 'date', searchable: true},
                    {data: 'amount', name: 'amount', searchable: true},
                    {data: 'payment_status', name: 'payment_status', searchable: true},
                    {data: 'payment_mode', name: 'payment_mode', searchable: true},
                    {data: 'expense_status', name: 'expense_status', searchable: true},
                    {data: 'action', name: 'action', searchable: true}
                ]
            });
        });


    </script>

@stop

