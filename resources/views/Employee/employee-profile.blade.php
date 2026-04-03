@extends('layout')

@section('page-content')

    <h4 class="fw-bold py-3 "><span class="text-muted fw-light">Admin /</span> Employee Profile</h4>


    <div class="row">

        <div class="col-xl-12 col-md-12">

            <div class="card table-card" >

                <div class="card-header">
                    <h5>Employee Profile</h5>
                </div>

                <div class="card-body p-0"  >

                    <div class="table-responsive">

                        <div class="" style="padding: 30px">

                        <div class="row">
                            <div class="col-md-4">
                                <table class="table table-bordered">
                                    <tr>
                                        <td colspan="2">
                                            @if($employee[0]->photograph)
                                            <img src="{{url($employee[0]->photograph)}}" id="employee-photo-preview" width="100%">   
                                            @endif
                                        </td>
                                
                                    </tr> 
                                    <tr>
                                        <td>Name</td>
                                        <td>{{$employee[0]->employee_name}}</td>
                                    </tr> 
                                    <tr>
                                        <td>Designation</td>
                                        <td>{{$employee[0]->designation}}</td>
                                    </tr>
                                    <tr>
                                        <td>Contact No</td>
                                        <td>{{$employee[0]->contact_no}}</td>
                                    </tr> 
                                    <tr>
                                        <td>Email</td>
                                        <td>{{$employee[0]->email}}</td>
                                    </tr> 
                                    <tr>
                                        <td>Date of Join</td>
                                        <td>{{$employee[0]->date_of_join}}</td>
                                    </tr>
                                    <tr>
                                        <td>Status</td>
                                        <td>{{$employee[0]->employee_status}}</td>
                                    </tr>
                                   
                                </table>
                            </div>
                            <div class="col-md-8">

                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Project</th>
                                            <th>Basic Salary</th>
                                            <th>House Rent</th>
                                            <th>Medical Allowance</th>
                                            <th>Travel Allowance</th>
                                            <th>Others Allowance</th>
                                            <th>PF </th>
                                            <th>Tax </th>
                                            <th>Gross Salary</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $grossSalary = 0;
                                            ?>
                                        @foreach($salarySheetData as $item)
                                            {{ $grossSalary =  $grossSalary + $item->gross_salary}}
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{getProject($item->project_id)}}</td>
                                                <td>{{$item->basic_salary}}</td>
                                                <td>{{$item->house_rent}}</td>
                                                <td>{{$item->medical_allowance}}</td>
                                                <td>{{$item->travel_allowance}}</td>
                                                <td>{{$item->others_allowance}}</td>
                                                <td>{{$item->pf_deduction}}</td>
                                                <td>{{$item->income_tax}}</td>
                                                <td>{{$item->gross_salary}}</td>
                                            </tr>
                                        @endforeach
                                       
                                    </tbody>
                                    <tfoot>
                                         <tr>
                                                <td colspan="9">Total Gross Salary</td>
                                               
                                                <td><span style="font-weight: bold;"> {{$grossSalary}} </span></td>
                                        </tr>
                                    </tfoot>
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

