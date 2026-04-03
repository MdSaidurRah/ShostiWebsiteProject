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


<div class="row">

    <!--  Inner page template start -->

    <div class="col-xl-12 col-md-12">

        <div class="card table-card">

            <div class="card-header">

                <h5> Project Salary Sheet</h5>

            </div>

            <div class="card-body p-0">


                <div class="input-form" style="padding: 30px">

                    <form action="{{url('/salary-sheet/store')}}" method="POST" enctype="multipart/form-data">

                        @csrf


                        <input type="hidden"  name="project_id"  id="project_id" value="{{$project_id}}" class="form-control">


                        <div class="row">

         
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label for="formGroupExampleInput">Expense head</label>
                                    <select name="expense_head_id" id="expense_head_id" class="form-control" required >
                                        @if($projectSalaryHead->salary_head)
                                            <option value="{{$projectSalaryHead->salary_head}}">{{budgetHead($projectSalaryHead->salary_head)}}</option>
                                        @endif
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="formGroupExampleInput">Sub head</label>
                                    <select name="sub_head_id" id="sub_head_id" class="form-control" required>
                                        @if($projectSalaryHead->salary_sub_head)
                                            <option value="{{$projectSalaryHead->salary_sub_head}}">{{budgetSubHead($projectSalaryHead->salary_sub_head)}}</option>
                                        @endif
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="formGroupExampleInput">Child head</label>
                                    <select name="child_head_id" id="child_head_id" class="form-control">
                                        @if($projectSalaryHead->salary_child_head)
                                            <option value="{{$projectSalaryHead->salary_child_head}}">{{budgetChildHead($projectSalaryHead->salary_child_head)}}</option>
                                        @endif
                                    </select>
                                </div>
                            </div>

                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label for="formGroupExampleInput">Salary Month</label>
                                        <select name="salary_month" id="salary_month" class="form-control" required>
                                            <option value="">Select Month</option>
                                            <option value="1">January</option>
                                            <option value="2">February</option>
                                            <option value="3">March</option>
                                            <option value="4">April</option>
                                            <option value="5">May</option>
                                            <option value="6">June</option>
                                            <option value="7">July</option>
                                            <option value="8">August</option>
                                            <option value="9">September</option>
                                            <option value="10">October</option>
                                            <option value="11">November</option>
                                            <option value="12">December</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="formGroupExampleInput">Year</label>
                                        <select name="salary_year"  id="salary_year" class="form-control" required>
                                            <option value="">Select Year</option>
                                            <option value="2025">2025</option>
                                            <option value="2026">2026</option>
                                            <option value="2027">2027</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="formGroupExampleInput">Date</label>
                                        <input type="date" name="salary_date" id="salary_date" class="form-control" required>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>Employee name</th>
                                            <th>Basic Salary</th>
                                            <th>House Rent</th>
                                            <th>Medical Allowance</th>
                                            <th>Travel Allowance</th>
                                            <th>Others Allowance</th>
                                            <th>PF Deduction</th>
                                            <th>Tax Deduction</th>
                                            <th>Gross Salary</th>
                                            <th> Loan Installment</th>
                                            <th>Payable Amount</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($employees as $employee)
                                            <tr>
                                                <td>{{ $employee->employee_name}} <br/>{{ $employee->designation}} </td>
                                            
                                                    <?php
                                                            $monthlySalary = DB::table('salary_table')
                                                                ->where('project_id', $project_id)
                                                                ->where('employee_id',$employee->id)
                                                                ->select('basic_salary', 'house_rent','medical_allowance','travel_allowance','others_allowance', 'pf_deduction', 'income_tax', 'gross_salary',)
                                                                ->first();
                                                    ?>
                                                <td>
                                                    <input type="hidden"  name="employee_id[]" value="{{$employee->id}}" class="form-control">
                                                    <input type="number" name="basic_salary[]" readonly value="{{$monthlySalary->basic_salary}}" class="form-control">
                                                </td>
                                                <td>
                                                    <input type="number" name="house_rent[]" readonly value="{{$monthlySalary->house_rent}}" class="form-control">
                                                </td>
                                                <td>
                                                    <input type="number" name="medical_allowance[]" readonly value="{{$monthlySalary->medical_allowance}}" class="form-control">
                                                </td>   
                                                <td>
                                                    <input type="number" name="travel_allowance[]" readonly value="{{$monthlySalary->travel_allowance}}" class="form-control">
                                                </td>    
                                                <td>
                                                    <input type="number" name="others_allowance[]" readonly value="{{$monthlySalary->others_allowance}}" class="form-control">
                                                </td> 
                                                <td>
                                                    <input type="number" name="pf_deduction[]" readonly value="{{$monthlySalary->pf_deduction}}" class="form-control">
                                                </td>  
                                                <td>
                                                    <input type="number" name="income_tax[]" readonly value="{{$monthlySalary->income_tax}}" class="form-control">
                                                </td>
                                                <td>
                                                    <input type="number" name="gross_salary[]" readonly value="{{$monthlySalary->gross_salary}}" class="form-control">
                                                </td>
                                                <td>
                                                    <input type="number" name="loan_deduction[]" readonly value="{{salaryLoanInstallment($employee->id, $project_id)}}" class="form-control">
                                                </td>
                                                <td>
                                                    <input type="number" name="payable_amount[]" readonly value="{{$monthlySalary->gross_salary - salaryLoanInstallment($employee->id, $project_id) }}" class="form-control">
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>

                            </div>

                            <div class="form-row">
                                <div class="col-md-12">
                                    <input type="submit" name="submit" value="Save" class="btn btn-primary" />
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


@stop




@section('page-script')

<script type="text/javascript">
   
    var today = new Date().toISOString().split('T')[0];
    $('#salary_date').val(today);

    $('#salary_month').on('change', function() {
        var salary_month = this.value;
        var salary_year = $("#salary_year").val();
        var project_id = $("#project_id").val();

        if(salary_month && salary_year)
        {
            $.ajax({
                url: "{{url('api/project-salary-check')}}/" + project_id + "/" + salary_month+"/"+salary_year,
                type: "get",
                data: {
                    _token: '{{csrf_token()}}'
                },
                dataType: 'json',
                success: function(result) {
                    if (result.status == "EXIST") {
                        alert("Duplicate Project Employee");
                        $('#salary_month').val('');
                    }
                }
            });
        }
    });

    $('#salary_year').on('change', function() {
        var salary_year = this.value;
        var project_id = $("#project_id").val();
        var salary_month = $("#salary_month").val();

        if(salary_month && salary_year)
        {
            $.ajax({
            url: "{{url('api/project-salary-check')}}/" + project_id + "/" + salary_month+"/"+salary_year,
            type: "get",
            data: {
                _token: '{{csrf_token()}}'
            },
            dataType: 'json',
            success: function(result) {
                if (result.status == "EXIST") {
                    alert("Duplicate Project Employee");
                    $('#salary_year').val('');
                }
            }
        });
        }
    });



    

</script>

@endsection