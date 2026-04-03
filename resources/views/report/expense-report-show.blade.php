@extends('layout')

@section('page-content')


    <!-- [ breadcrumb ] start -->

    <div class="page-header" xmlns="http://www.w3.org/1999/html">

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



    <div class="row">
        <div class="col-xl-4 col-md-4">
            <form action="{{url('/expense-report-print')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="project_id" value="{{$project_id}}">
                <input type="hidden" name="start_date" value="{{$start_date}}">
                <input type="hidden" name="end_date" value="{{$end_date}}">
                <input type="hidden" name="expense_head_id" value="{{$expense_head_id}}">
                <input type="hidden" name="sub_head_id" value="{{$sub_head_id}}">
                <input type="hidden" name="child_head_id" value="{{$child_head_id}}">
                <button type="submit" name="submit" value="Print Report" class="btn  btn-primary" /> <i class="fa fa-print" aria-hidden="true"></i> Print</button>
            </form>
        </div>
        <div class="col-xl-4 col-md-4">

        </div>
    </div>
    <br/>





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
                                    <table class="table table-hover mb-0" id="expense-report-data">
                                        <thead>
                                        <tr>
                                            <th style="width: 5%;">SL</th>
                                            <th style="width: 20%;">Head</th>
                                            <th style="width: 15%;">Project</th>
                                            <th style="width: 10%;">Date</th>
                                            <th style="width: 10%;">Amount</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                            @foreach($expenseList as $index=>$expense)
                                                <tr>
                                                    <td>{{$loop->iteration}}</td>
                                                    <td>
                                                        {{$expense->child_head_name}}
                                                        <br/> > {{$expense->sub_head_name}}
                                                        <br/> >>  {{$expense->expense_head}}
                                                    </td>
                                                    <td>{{$expense->project_name}}</td>
                                                    <td>{{$expense->date}}</td>
                                                    <td>{{$expense->amount}}</td>
                                                </tr>
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



@stop



@section('page-script')


    <script type="text/javascript">


    </script>

@stop

