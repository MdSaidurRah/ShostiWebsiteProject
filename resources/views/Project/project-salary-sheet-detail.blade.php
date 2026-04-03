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
                    <li class="breadcrumb-item"><a href="#!">Salary Sheet Detail</a></li>
                </ul>


            </div>

        </div>

    </div>

</div>


<div class="row">

    <!--  Inner page template start -->

    <div class="col-xl-12 col-md-12">

        <div class="card table-card">

            <div class="card-header">

                <h5> Project Salary Sheet Detail</h5>

            </div>

            <div class="card-body p-0">


                <div class="input-form" style="padding: 30px">

                    <div class="row">
                        <div class="col-md-8">
                            <table class="table table-bordered table-sm">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Employee </th>
                                        <th>Basic Salary  </th>
                                        <th>House Rent</th>
                                        <th>Medical Allowance</th>
                                        <th>Loan Deduction</th>
                                        <th>Total Payable</th>
                                    </tr>
                                </thead>

                                <?php
                                    $payable = 0;
                                ?>
                                <tbody>
                                    @foreach($projectSalarySheetDatas as $salary)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{ getEmployee($salary->employee_id) }}</td>
                                        <td>{{$salary->basic_salary}}</td>
                                        <td>{{$salary->house_rent}}</td>
                                        <td>{{$salary->medical_allowance}}</td>
                                        <td>{{$salary->loan_deduction}}</td>
                                        <td>{{$salary->payable_amount}}</td>
                                    </tr>
                                    <?php $payable = $payable+ $salary->payable_amount ?>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-4">
                            <div class="sheet-information">

                                <form action="{{url('/salary-sheet-approval')}}" method="POST">
                                    @csrf

                                    <input type="hidden" name="sheet_id" value="{{Crypt::encryptString($projectSalarySheets[0]->id)}}">
                                
                                    <table class="table table-sm">
                                        <tbody>

                                            <tr>
                                                <td>
                                                    <p>{{ budgetHead($projectSalarySheets[0]->expense_head_id)}} >>
                                                        {{ budgetSubHead($projectSalarySheets[0]->sub_head_id)}} >>
                                                        {{ budgetChildHead($projectSalarySheets[0]->child_head_id)}}  
                                                    </p>
                                                </td>
                                            
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p> Project Name</p>
                                                </td>
                                                <td>
                                                    <p>{{getProject($projectSalarySheets[0]->project_id)}}</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p> Salary For</p>
                                                </td>
                                                <td>
                                                    <p>{{getMonth($projectSalarySheets[0]->salary_month)}}, {{$projectSalarySheets[0]->salary_year}}</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>Issue Date</p>
                                                </td>
                                                <td>
                                                    <p>{{$projectSalarySheets[0]->salary_date}}</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <p>Payable Amount</p>
                                                </td>
                                                <td>
                          
                                                    <input type="number" name="total_payable_amount" value="{{$payable}}" readonly class="form-control" >
                                           
                                                </td>
                                            </tr>  
                                        
                                            <tr>
                                                <td>
                                                    <p>Cash Payment</p>
                                                </td>
                                                <td>
                                                    @if($projectSalarySheets[0]->sheet_status == "Pending")
                                                        <input type="number" name="cash_payment_amount" value="{{$projectSalarySheets[0]->cash_payment_amount}}" class="form-control" >
                                                    @else
                                                        <input type="number" name="cash_payment_amount" value="{{$projectSalarySheets[0]->cash_payment_amount}}"  class="form-control" readonly>
                                                    @endif
                                                </td>
                                            </tr>  
                                            <tr>
                                                <td>
                                                    <p>Account Cheque Payment</p>
                                                </td>
                                                <td>
                                                    @if($projectSalarySheets[0]->sheet_status == "Pending")
                                                        <input type="number" name="cheque_payment_amount" value="{{$projectSalarySheets[0]->cheque_payment_amount}}"  class="form-control" >
                                                    @else
                                                        <input type="number" name="cheque_payment_amount" value="{{$projectSalarySheets[0]->cheque_payment_amount}}" class="form-control" readonly>
                                                    @endif
                                                </td>
                                            </tr> 

                                            <tr>
                                                <td>
                                                    <p>Sheet Status</p>
                                                </td>
                                                <td>
                                                    <p>{{$projectSalarySheets[0]->sheet_status}}</p>
                                                    @if($projectSalarySheets[0]->sheet_status == "Pending")
                                                        <input type="submit" name="submic" value="Approved" class="form-control">
                                                    @endif
                                                </td>
                                            </tr>
                                            
                                            <tr>
                                                <td>
                                                    <p>Payment Status</p>
                                                </td>
                                                <td>
                                                    <p>
                                                        {{$projectSalarySheets[0]->payment_status}}
                                                    </p>
                                                </td>
                                            </tr>
                                        </tbody>

                                    </table>
                                </form>
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

@endsection