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

                <div class="page-button-area mb-4">
                    <a  href="{{url('/project/add-salary-sheet/'. Crypt::encryptString($project_id))}}" class="btn btn-primary btn-sm"><i class="fa fa-plus-square" aria-hidden="true"></i> Add Salary Sheet</a>
                </div>


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

                    <table class="table">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Name </th>
                                <th>Year </th>
                                <th>Date</th>
                                <th>Amount </th>
                                <th>Salary Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($projectSalarySheets as $salarySheet)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{getMonth($salarySheet->salary_month) }}</td>
                                    <td>{{$salarySheet->salary_year}}</td>
                                    <td>{{$salarySheet->salary_date}}</td>
                                    <td>{{$salarySheet->total_payable_amount}}</td>
                                    <td>{{$salarySheet->sheet_status}}</td>
                                    <td>
                                        @if($salarySheet->sheet_status == "Approved")
                                         <a href="{{url('/salary-sheet-print/'. Crypt::encryptString($salarySheet->id))}}" class="btn btn-primary btn-sm"> <i class="fa fa-print" aria-hidden="true"></i> Print</a>
                                        @endif
                                       
                                        <a href="{{url('/salary-sheet-detail/'. Crypt::encryptString($salarySheet->id))}}" class="btn btn-success  btn-sm"> Detail</a>
                                    </td>
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


@stop




@section('page-script')

<script type="text/javascript">



    


</script>

@endsection