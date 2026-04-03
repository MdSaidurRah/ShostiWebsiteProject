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

                    <li class="breadcrumb-item"><a href="#!">Project Petty Cash</a></li>

                </ul>

            </div>

        </div>

    </div>

</div>

<p class="project-detail">
    {{$project[0]->project_name}}
</p>

<div class="page-button-area mb-4">
    <a href="{{url('/project/budget/'. Crypt::encryptString($project[0]->id))}}" class="edit btn btn-warning btn-sm"><i class="fas fa-layer-group"></i> Budget</a>
    <a href="{{url('/project-budget-allocation/'. Crypt::encryptString($project[0]->id))}}" class="btn btn-sm btn-primary"><i class="fas fa-bars"></i> Budget Allocation</a>
    <a href="{{url('/project/fund-received/'. Crypt::encryptString($project[0]->id))}}" class="btn btn-sm btn-primary"><i class="fas fa-bars"></i> Fund Received</a>
    <a href="{{url('/project/expenditure-record/'. Crypt::encryptString($project[0]->id))}}" class="btn btn-sm btn-primary"><i class="fas fa-bars"></i> Expenditure</a>
    <a href="{{url('/project/cheque-management/'. Crypt::encryptString($project[0]->id))}}" class="btn btn-sm btn-primary"><i class="fas fa-bars"></i> Cheque Issued</a>
    <a href="{{url('/project/advance/'. Crypt::encryptString($project[0]->id))}}" class="btn btn-sm btn-primary"><i class="fas fa-bars"></i> Advance</a>
</div>



<div class="row">

    <div class="col-xl-12 col-md-12">

        <div class="card table-card">

            <div class="card-header">

                <h5>Project Expenditure Record</h5>

            </div>

            <div class="card-body p-0">


                <div class="row">

                    <div class="col-md-12 col-lg-12 col-xl-12">

                        <div class="table-responsive">
                            <div class="" style="padding: 30px">

                                <div class="row">

                                    <div class="col-md-3">
                                        <div class="sticker-card">
                                            <h5 class="sticker-card-header"> Petty Cash Balance</h5>
                                            <p class="sticker-card-info">{{$pettyCashBalance->current_balance}} BDT</p>
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


</div>



@stop



@section('page-script')


<script type="text/javascript">



</script>

@stop