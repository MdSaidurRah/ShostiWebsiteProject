@extends('layout')

@section('page-content')

    <h4 class="fw-bold py-3 "><span class="text-muted fw-light">Admin /</span> Blog Category</h4>

    <div class="page-button-area mb-4">
        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#createModal"><i class="fa fa-plus-square" aria-hidden="true"></i> New Blog Category</button>
    </div>


    <div class="row">

        <div class="col-xl-12 col-md-12">

            <div class="card table-card" >

                <div class="card-header">
                    <h5>Employee</h5>
                </div>

                <div class="card-body p-0"  >

                    <div class="table-responsive">

                        <div class="" style="padding: 30px">

                            <table class="table table-hover mb-0" id="objecttablename">

                                <thead>

                                <tr>
                                    <th style="width: 5%;">SL</th>
                                    <th style="width: 25%;">Name</th>
                                    <th style="width: 10%;">Slug</th>
                                    <th style="width: 25%;"></th>
                                </tr>

                                </thead>


                            </table>

                        </div>

                    </div>

                </div>

            </div>

            <!-- prject ,team member start -->

        </div>


    </div>

    <!-- [ Main Content ] end -->


    <!-- Insert Modal -->
    <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

        <div class="modal-dialog modal-md">

            <div class="modal-content">

                <div class="modal-header">

                    <h5 class="modal-title fs-5" id="exampleModalLabel">Blog Category</h5>

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                </div>

                <div class="modal-body">

                    <form action="{{url('/blog-categories/store')}}" method="POST" enctype="multipart/form-data">

                        @csrf

                        <div class="row">

                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label for="formGroupExampleInput">Category Name</label>
                                        <input type="text" class="form-control" required name="name" id="name" placeholder="Category name" >
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label for="formGroupExampleInput">Slug </label>
                                        <input type="text" class="form-control" required name="slug" id="slug" placeholder="slug" >
                                    </div>
                                </div>

                                

                                <div class="form-row">
                                    <div class="col-md-12">
                                        <input type="submit" name="submit" value="Save" class="btn btn-primary" />
                                        <button type = "reset" class="btn btn-outline-primary" name= "reset" value= "Reset">Reset</button>
                                    </div>
                                </div>
                            </div>
                           
                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>



    <!-- Edit Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

        <div class="modal-dialog modal-lg">

            <div class="modal-content">

                <div class="modal-header">

                    <h5 class="modal-title fs-5" id="exampleModalLabel">Edit Employee</h5>

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                </div>

                <div class="modal-body">

                    <form action="{{url('/employee/update')}}" method="POST" enctype="multipart/form-data">

                        @csrf


                        <input type="hidden" class="form-control" name="id">


                        <div class="row">

                            <div class="col-md-12">

                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label for="formGroupExampleInput">Employee Name</label>
                                        <input type="text" class="form-control" required name="employee_name" id="employee_name" placeholder="Employee name" >
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="formGroupExampleInput">Monthly salary </label>
                                        <input type="number" class="form-control" required name="monthly_salary" id="monthly_salary" placeholder="Monthly salary" >
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="formGroupExampleInput">Designation</label>
                                        <input type="text" class="form-control"required name="designation" id="designation" placeholder="Designation" >
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label for="formGroupExampleInput">Contact No</label>
                                        <input type="text" class="form-control" required name="contact_no" id="contact_no" placeholder="Contact No" >
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="formGroupExampleInput">Email</label>
                                        <input type="email" class="form-control"  name="email" id="email" placeholder="Email" >
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="formGroupExampleInput">Date of Join</label>
                                        <input type="date" class="form-control" name="date_of_join" id="date_of_join" placeholder="Date of Join" >
                                    </div>
                                </div>


                                <div class="row">

                                    <div class="form-group col-md-4">
                                        <label for="formGroupExampleInput">Photo</label>
                                        <input type="file" name="photo" id="photo" class="form-control">
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="formGroupExampleInput">Employee Status</label>
                                        <select class="form-control"name="employee_status" >
                                            <option value="ACTIVE">Active</option>
                                            <option value="INACTIVE">Inactive</option>
                                        </select>
                                    </div>

                                </div>


                                <div class="form-row">
                                    <div class="col-md-12">
                                        <input type="submit" name="submit" value="Update" class="btn btn-primary" />
                                    </div>

                                </div>

                            </div>


                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>


    


@stop



@section('page-script')


    <script type="text/javascript">


        $(document).ready(function () {

            $('#objecttablename').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ url('get-all/blog-categories') }}",
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
                    {data: 'name', name: 'name', searchable: true},
                    {data: 'slug', name: 'slug', searchable: true},
                    {data: 'action', name: 'action', searchable: true},
                ]
            });
        });

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

