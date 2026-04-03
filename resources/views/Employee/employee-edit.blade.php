@extends('layout')

@section('page-content')

    <h4 class="fw-bold py-3 "><span class="text-muted fw-light">Admin /</span> Employee Edit</h4>



    <div class="row">

        <div class="col-xl-12 col-md-12">

            <div class="card table-card" >

                <div class="card-header">
                    <h5>Employee</h5>
                </div>

                <div class="card-body p-0"  >

                    <div class="table-responsive">

                        <div class="" style="padding: 30px">

                            

                        <form action="{{url('/employee/update')}}" method="POST" enctype="multipart/form-data">

                        @csrf

                        <input type="hidden" name="id" value="{{$employee[0]->id}}">

                        <div class="row">

                            <div class="col-md-8">
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label for="formGroupExampleInput">Employee Name</label>
                                        <input type="text" class="form-control" value="{{$employee[0]->employee_name}}" required name="employee_name" id="employee_name" readonly >
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="formGroupExampleInput">Designation</label>
                                        <input type="text" class="form-control"  value="{{$employee[0]->designation}}" required name="designation" id="designation" placeholder="Designation" >
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="formGroupExampleInput">Contact No</label>
                                        <input type="text" class="form-control"  value="{{$employee[0]->contact_no}}" required name="contact_no" id="contact_no" placeholder="Contact No" >
                                    </div>

                                </div>

                                <div class="row">

                                    <div class="form-group col-md-4">
                                        <label for="formGroupExampleInput">Date of Join</label>
                                        <input type="date" class="form-control"  value="{{$employee[0]->date_of_join}}" name="date_of_join" id="date_of_join" placeholder="Date of Join" >
                                    </div>
                                    
                               
                                    <div class="form-group col-md-4">
                                        <label for="formGroupExampleInput">Email</label>
                                        <input type="email" class="form-control"  value="{{$employee[0]->email}}"  name="email" id="email" placeholder="Email" >
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="formGroupExampleInput">Employee Status</label>
                                        <select class="form-control" name="employee_status" >
                                            <option  value="{{$employee[0]->employee_status}}"> {{$employee[0]->employee_status}}</option>
                                            <option value="ACTIVE">Active</option>
                                            <option value="ACTIVE">Active</option>
                                            <option value="INACTIVE">Inactive</option>
                                        </select>
                                    </div>

                               
                                </div>


                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label for="formGroupExampleInput">Photo</label>
                                        <input type="file" name="photo" accept="image/*" id="employee-photo" class="form-control">
                                    </div>

                                    

                                </div>


                                <div class="form-row">

                                    <div class="col-md-12">
                                        <input type="submit" name="submit" value="Update" class="btn btn-primary" />
                                    </div>

                                </div>

                            </div>

                             <div class="col-md-4">
                                    <div class="form-group col-md-12">
                                            @if($employee[0]->photograph)
                                            <img src="{{url($employee[0]->photograph)}}" id="employee-photo-preview" width="100%">   
                                            @endif
                                    </div>
                             </div>


                        </div>

                    </form>

                        </div>

                    </div>

                </div>

            </div>

            <!-- prject ,team member start -->

        </div>


    </div>

    <!-- [ Main Content ] end -->




@stop



@section('page-script')


    <script type="text/javascript">



    $('#employee-photo').on('change', function(event) {
        var file = event.target.files[0];
        if (file) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#employee-photo-preview')
                    .attr('src', e.target.result)
                    .show();
                $('#employee-photo-preview').hide();
                $('#employee-photo-preview').fadeIn(650);
            };
            reader.readAsDataURL(file);
        } else {
            $('#employee-photo-preview').hide();
        }
    });



       

    </script>

@stop

