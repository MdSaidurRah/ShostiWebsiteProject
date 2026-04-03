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
                        <li class="breadcrumb-item"><a href="#!">Project Budget</a></li>
                    </ul>
                </div>

            </div>

        </div>

    </div>


    <div class="row">
        <div class="col-xl-3 col-md-3">
            <h4>{{$project[0]->project_name}}</h4>
            <a href="{{url('/project-budget-allocation/print/'. Crypt::encryptString($project[0]->id))}}" class="btn btn-sm btn-primary info"> Download Allocation</a>

            <a onclick="printReport()" class="btn btn-primary btn-sm" ><i class="fa fa-print" aria-hidden="true"></i> Print</a>

        </div>
        <div class="col-xl-9 col-md-9">
            <table class="table">
                <tr>
                    <td>Allocation</td>
                    <td>{{$budgetAllocation}}</td>
                    <td>Total Expense</td>
                    <td>{{$budgetBurn}}</td>
                    <td>Remain Amount</td>
                    <td>{{$budgetAllocation - $budgetBurn }}</td>
                </tr>
            </table>
        </div>
    </div>
    <br/>

    <!-- prject ,team member start -->


    <div class="row">

        <div class="col-xl-12 col-md-12">

            <div class="card table-card" >
                <div class="card-header">
                    <h5>Project Budget Heads</h5>
                </div>

                <div class="card-body p-0"  >
                    <div class="table-responsive">
                        <div class="" style="padding: 30px">
                            <div class="row">
                                <div class="col-md-12 col-lg-12 col-xl-12">
                                    <table class="table table-bordered" >

                                        <thead>
                                            <tr>

                                                <th>Sl</th>
                                                <th colspan="3">Head Name</th>
                                                <th style="text-align: center">Budget Allocation</th>
                                                <th style="text-align: center">Budget Burn</th>
                                                <th style="text-align: center">Remain</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($budgetHeads as $head)
                                                    <tr>
                                                        <td>{{$loop->iteration}}</td>
                                                        <td colspan="3">{{$head->head_name}}</td>
                                                        <td style="text-align: center">{{$head->budget_allocation}}</td>
                                                        <td style="text-align: center">{{$head->budget_burn}}</td>
                                                        <td style="text-align: center">{{$head->budget_allocation - $head->budget_burn}}</td>
                                                        <td>
                                                            <!-- <a onclick="deleteHead({{$project[0]->id}},{{$head->id}})" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a> -->
                                                        </td>
                                                     
                                                    </tr>


                                                    <?php
                                                    $subHeads = DB::table('projectbudgetheads')
                                                        ->where('head_category',"SubHead")
                                                        ->where('project_id',$project[0]->id)
                                                        ->where('main_head_id',$head->head_id)
                                                    ->select('*')->get();
                                                    ?>
                                                    @foreach($subHeads as $subHead)
                                                        <tr>
                                                            <td></td>
                                                            <td>{{$loop->iteration}}</td>
                                                            <td colspan="2">{{$subHead->head_name}}</td>
                                                            <td style="text-align: center">{{$subHead->budget_allocation}}</td>
                                                            <td style="text-align: center">{{$subHead->budget_burn}}</td>
                                                            <td style="text-align: center">{{$subHead->budget_allocation - $subHead->budget_burn}}</td>
                                                            <td>
                                                                <!-- <a  onclick="deleteSubHead({{$project[0]->id}},{{$subHead->id}})" class="btn btn-danger  btn-sm"><i class="fas fa-trash-alt"></i></a> -->
                                                            </td>
                                                        </tr>

                                                        <?php
                                                            $childHeads = DB::table('projectbudgetheads')
                                                                ->where('head_category',"ChildHead")
                                                                ->where('project_id',$project[0]->id)
                                                                ->where('sub_head_id',$subHead->head_id)
                                                                ->where('main_head_id',$head->head_id)
                                                                ->select('*')->get();
                                                        ?>
                                                        @foreach($childHeads as $childHead)
                                                            <tr>
                                                                <td></td>
                                                                <td></td>
                                                                <td>{{$loop->iteration}}</td>
                                                                <td>{{$childHead->head_name}}</td>
                                                                <td style="text-align: center">{{$childHead->budget_allocation}}</td>
                                                                <td style="text-align: center">{{$childHead->budget_burn}}</td>
                                                                <td style="text-align: center">{{$childHead->budget_allocation - $childHead->budget_burn}}</td>
                                                                <td>
                                                                    <!-- <a onclick="deleteChildHead({{$project[0]->id}},{{$childHead->id}})" class="btn btn-danger  btn-sm"><i class="fas fa-trash-alt"></i></a> -->
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    @endforeach
                                            @endforeach

                                        </tbody>

                                    </table>
                                </div>



                            </div>



                        </div>

                    </div>

                </div>

            </div>

            <!-- prject ,team member start -->

        </div>


    </div>

    <div id="printElement">
        @include('layouts.report-header')
        <h1 >Budget Head and Expense Report</h1>
        <table class="table table-bordered" >

            <thead>
            <tr>

                <th>Sl</th>
                <th colspan="3">Head Name</th>
                <th style="text-align: center">Budget Allocation</th>
                <th style="text-align: center">Budget Burn</th>
                <th style="text-align: center">Remain</th>
            </tr>
            </thead>
            <tbody>
            @foreach($budgetHeads as $head)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td colspan="3">{{$head->head_name}}</td>
                    <td style="text-align: center">{{$head->budget_allocation}}</td>
                    <td style="text-align: center">{{$head->budget_burn}}</td>
                    <td style="text-align: center">{{$head->budget_allocation - $head->budget_burn}}</td>
                </tr>


                    <?php
                    $subHeads = DB::table('projectbudgetheads')
                        ->where('head_category',"SubHead")
                        ->where('project_id',$project[0]->id)
                        ->where('main_head_id',$head->head_id)
                        ->select('*')->get();
                    ?>
                @foreach($subHeads as $subHead)
                    <tr>
                        <td></td>
                        <td>{{$loop->iteration}}</td>
                        <td colspan="2">{{$subHead->head_name}}</td>
                        <td style="text-align: center">{{$subHead->budget_allocation}}</td>
                        <td style="text-align: center">{{$subHead->budget_burn}}</td>
                        <td style="text-align: center">{{$subHead->budget_allocation - $subHead->budget_burn}}</td>
                    </tr>

                        <?php
                        $childHeads = DB::table('projectbudgetheads')
                            ->where('head_category',"ChildHead")
                            ->where('project_id',$project[0]->id)
                            ->where('sub_head_id',$subHead->head_id)
                            ->where('main_head_id',$head->head_id)
                            ->select('*')->get();
                        ?>
                    @foreach($childHeads as $childHead)
                        <tr>
                            <td></td>
                            <td></td>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$childHead->head_name}}</td>
                            <td style="text-align: center">{{$childHead->budget_allocation}}</td>
                            <td style="text-align: center">{{$childHead->budget_burn}}</td>
                            <td style="text-align: center">{{$childHead->budget_allocation - $childHead->budget_burn}}</td>
                        </tr>
                    @endforeach
                @endforeach
            @endforeach

            </tbody>

        </table>

    </div>



@stop



@section('page-script')


<script>

    function deleteHead(projectId, headId) {
        let text = "Are you sure? You want to delete it.";
        if (confirm(text) == true) {
            $.ajax({
                url: "{{url('/project/budget-heads-delete/')}}/"+projectId+"/"+headId,
                type: "get",
                data: {
                    _token: '{{csrf_token()}}'
                },
                dataType: 'json',
                success: function (result) {
                    alert("Deleted")
                }
            });
        } else {
            text = "You canceled!";
        }

    }

    function deleteSubHead(projectId, subHeadId) {
        let text = "Are you sure? You want to delete it.";
        if (confirm(text) == true) {
            $.ajax({
                url: "{{url('/project/budget-sub-heads-delete/')}}/"+projectId+"/"+subHeadId,
                type: "get",
                data: {
                    _token: '{{csrf_token()}}'
                },
                dataType: 'json',
                success: function (result) {
                    alert("Deleted")
                }
            });
        } else {
            text = "You canceled!";
        }

    }

    function deleteChildHead(projectId, childHeadId) {
        let text = "Are you sure? You want to delete it.";
        if (confirm(text) == true) {
            $.ajax({
                url: "{{url('/project/budget-child-heads-delete/')}}/"+projectId+"/"+childHeadId,
                type: "get",
                data: {
                    _token: '{{csrf_token()}}'
                },
                dataType: 'json',
                success: function (result) {
                    alert("Deleted")
                }
            });
        } else {
            text = "You canceled!";
        }

    }

    $( document ).ready(function() {
        $('#printElement').hide(true);
    });


    function printReport() {
        var printContents = document.getElementById('printElement').innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>

@stop

