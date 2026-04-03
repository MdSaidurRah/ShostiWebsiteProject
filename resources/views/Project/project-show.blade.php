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

                    <li class="breadcrumb-item"><a href="#!">Project</a></li>

                </ul>

            </div>

        </div>

    </div>

</div>

<div class="page-button-area mb-4">
    <a href="{{url('/project/budget/'. Crypt::encryptString($project[0]->id))}}" class="edit btn btn-warning btn-sm"><i class="fas fa-layer-group"></i> Statement</a>
    <a href="{{url('/project-budget-allocation/'. Crypt::encryptString($project[0]->id))}}" class="btn btn-sm btn-primary"><i class="fas fa-bars"></i> Budget</a>
    <a href="{{url('/project/fund-received/'. Crypt::encryptString($project[0]->id))}}" class="btn btn-sm btn-primary"><i class="fas fa-bars"></i> Fund Received</a>
    <a href="{{url('/project/expenditure-record/'. Crypt::encryptString($project[0]->id))}}" class="btn btn-sm btn-primary"><i class="fas fa-bars"></i> Expenditure</a>
    <a href="{{url('/project/cheque-management/'. Crypt::encryptString($project[0]->id))}}" class="btn btn-sm btn-primary"><i class="fas fa-bars"></i> Cheque Issued</a>
    <a href="{{url('/project/advance/'. Crypt::encryptString($project[0]->id))}}" class="btn btn-sm btn-primary"><i class="fas fa-bars"></i> Advance</a>
    <a href="{{url('/project/loan/'. Crypt::encryptString($project[0]->id))}}" class="btn btn-sm btn-primary"><i class="fas fa-bars"></i> Loan</a>
    <a href="{{url('/project/petty-cash/'. Crypt::encryptString($project[0]->id))}}" class="btn btn-sm btn-primary"><i class="fas fa-bars"></i> Petty Cash</a>
    <a href="{{url('/project/salary-sheet/'. Crypt::encryptString($project[0]->id))}}" class="btn btn-sm btn-primary"><i class="fas fa-bars"></i> Salary Sheet</a>

    <?php
    $authorization = DB::table('project_authorization')->where('project_id', $project[0]->id)
        ->select('id')
        ->first();
    ?>
    @if(isset($authorization))
    <a href="{{url('/authorization/show/'. Crypt::encryptString($authorization->id))}}" class="btn btn-sm btn-primary"><i class="fas fa-bars"></i> Authorization</a>
    @endif
</div>



<div class="row">

    <div class="col-xl-12 col-md-12">

        <div class="card table-card">

            <div class="card-header">

                <h5>{{$project[0]->project_name}} : Details</h5>

            </div>

            <div class="card-body p-0">

                <div class="table-responsive">

                    <div class="" style="padding: 30px">

                        <div class="row">


                            <div class="col-md-2">
                                <div class="sticker-card">
                                    <h5 class="sticker-card-header"> Total Expense</h5>
                                    <p class="sticker-card-info">{{$totalExpenseAmount}} BDT</p>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="sticker-card">
                                    <h5 class="sticker-card-header"> Remain Fund</h5>
                                    <p class="sticker-card-info">{{$totalReceivedFund - $totalExpenseAmount}} BDT</p>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="sticker-card">
                                    <h5 class="sticker-card-header"> Fund Received</h5>
                                    <p class="sticker-card-info">{{$totalReceivedFund}} BDT</p>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="sticker-card">
                                    <h5 class="sticker-card-header"> Budget Allocation</h5>
                                    <p class="sticker-card-info">{{$budgetAllocationAmount}} BDT</p>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="sticker-card">
                                    <h5 class="sticker-card-header"> Cash Amount Balance</h5>
                                    <p class="sticker-card-info">{{$pettyCashBalance}} BDT</p>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="sticker-card">
                                    <h5 class="sticker-card-header"> Bank Account Balance</h5>
                                    <p class="sticker-card-info">{{$bankAccountBalance}} BDT</p>
                                </div>
                            </div>
                            
                        </div>

                        <br />

                        <div class="row">
                            <div class="col-md-3 col-lg-3 col-xl-3">
                                <table class="table table-bordered">

                                    <tr>
                                        <td>Donor
                                            <br />
                                            <?php
                                            $donor = DB::table('project_donors')->where('project_id', $project[0]->id)
                                                ->select('id', 'name_of_donor')
                                                ->first();
                                            ?>
                                            @if(isset( $donor))
                                            <a href="{{url('/donor/show/'. Crypt::encryptString($donor->id))}}.">{{$donor->name_of_donor}}</a>
                                            @endif
                                        </td>
                                    </tr>


                                    <tr>
                                        <td>Program
                                            <br />
                                            <p class="info-note">{{$project[0]->program_name}}</p>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Account
                                            <br />
                                            <?php
                                            $account = DB::table('account')->where('id', $project[0]->account_id)
                                                ->select('account_name')->first();
                                            ?>
                                            <p class="info-note">{{$account->account_name}}</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Location
                                            <br />
                                            <p class="info-note">{{$project[0]->location}}</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Budget
                                            <br />
                                            <p class="info-note">{{$project[0]->budget_amount}}</p>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>Funded By
                                            <br />
                                            <p class="info-note">{{$project[0]->funded_by}}</p>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>Starting Date
                                            <br />
                                            <p class="info-note">{{$project[0]->starting_date}}</p>
                                        </td>

                                    </tr>

                                    <tr>
                                        <td>Create Time
                                            <br />
                                            <p class="info-note">{{$project[0]->createdAt}}</p>
                                        </td>

                                    </tr>
                                </table>
                            </div>

                            <div class="col-md-9 col-lg-9 col-xl-9">


                                <br />


                                <div class="row">
                                    <div class="col-md-12">
                                        <h5> Project Head Expense</h5>
                                        <hr />
                                        <div id="head-expense" style=" height: 400px;"></div>
                                    </div>
                                </div>



                            </div>



                        </div>



                    </div>

                </div>

            </div>

        </div>



    </div>


</div>

<!-- Project Salary Budget Head -->
<div class="row">
    <div class="col-xl-12 col-md-12">

        <div class="card table-card">
            <div class="card-header">
                <h5>Project Salary Budget Head</h5>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <div class="" style="padding: 30px">

                        <form action="{{url('/project-salary-head-setup')}}" method="POST">
                            @csrf

                            <input type="hidden" name="project_id" id="project_id" value="{{$project[0]->id}}">

                            <div class="row">
                                <div class="form-group col-md-3">
                                    <label for="formGroupExampleInput">Expense head</label>
                                    <select name="expense_head_id" id="expense_head_id" class="form-control" required >
                                        @if($project[0]->salary_head)
                                        <option value="">{{budgetHead($project[0]->salary_head)}}</option>
                                        @endif
                                        <option value="">Select head</option>
                                        @foreach($projectSalaryHead as $head)
                                            <option value="{{$head->head_id}}">{{$head->head_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="formGroupExampleInput">Sub head</label>
                                    <select name="sub_head_id" id="sub_head_id" class="form-control" required>
                                        @if($project[0]->salary_sub_head)
                                        <option value="">{{budgetSubHead($project[0]->salary_sub_head)}}</option>
                                        @endif
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="formGroupExampleInput">Child head</label>
                                    <select name="child_head_id" id="child_head_id" class="form-control">
                                        @if($project[0]->salary_child_head)
                                            <option value="">{{budgetChildHead($project[0]->salary_child_head)}}</option>
                                        @endif
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <input type="submit" value="Update" class="form-control">
                                </div>
                            </div>


                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@stop



@section('page-script')


@section('page-script')

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

        $('#expense_head_id').on('change', function() {
        var headId = this.value;
        var projectId = $("#project_id").val();

        $("#sub_head_id").html('');
        $.ajax({
            url: "{{url('api/project-budget-sub-head')}}/" + headId + "/" + projectId,
            type: "get",
            data: {
                _token: '{{csrf_token()}}'
            },
            dataType: 'json',
            success: function(result) {
                $('#sub_head_id').html('<option value="">-- Select Sub Head --</option>');
                $.each(result.subHead, function(key, value) {
                    $("#sub_head_id").append('<option value="' + value
                        .head_id + '">' + value.head_name + '</option>');
                });
            }
        });
    });



    $('#sub_head_id').on('change', function() {
        var subHeadId = this.value;
        var headId = $("#expense_head_id").val();
        var projectId = $("#project_id").val();
        $('#amount').val(0);
        $("#child_head_id").html('');
        $.ajax({
            url: "{{url('api/project-budget-child-head')}}/" + headId + "/" + subHeadId + "/" + projectId,
            type: "get",
            data: {
                _token: '{{csrf_token()}}'
            },
            dataType: 'json',
            success: function(result) {
                $('#amount').val(result['amount']);
                $('#amount').attr('max', result['amount'])
                $('#child_head_id').html('<option value="">-- Select Child Head --</option>');
                $.each(result.childHead, function(key, value) {
                    $("#child_head_id").append('<option value="' + value
                        .head_id + '">' + value.head_name + '</option>');
                });
            }
        });
    });



        google.charts.load('current', {'packages':['bar']});
        google.charts.setOnLoadCallback(drawChart);
        var charProjectList = {{ Js::from($chartData )}};
        function drawChart() {
            var data = google.visualization.arrayToDataTable(charProjectList);
            var options = {
                bars: 'vertical', // Required for Material Bar Charts.
                legend:{position: 'bottom'},
            };

            var chart = new google.charts.Bar(document.getElementById('head-expense'));

            chart.draw(data, google.charts.Bar.convertOptions(options));
        }

    </script>



    </script>

@stop


