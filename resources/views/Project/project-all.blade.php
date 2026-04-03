@extends('layout')

@section('page-content')

    <h4 class="fw-bold py-3 "><span class="text-muted fw-light">Admin /</span> Project</h4>

    <div class="page-button-area mb-4">
        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#createModal"><i class="fa fa-plus-square" aria-hidden="true"></i> New Project</button>
    </div>

    <div class="row">

        <div class="col-xl-12 col-md-12">

            <div class="card table-card" >

                <div class="card-header">

                    <h5>Projects</h5>

                </div>

                <div class="card-body p-0"  >

                    <div class="table-responsive">

                        <div class="" style="padding: 30px">

                            <table class="table table-hover mb-0" id="objecttablename">

                                <thead>

                                <tr>
                                    <th style="width: 5%;">SL</th>
                                    <th style="width: 25%;">Project</th>
                                    <th style="width: 20%;">Program</th>
                                    <
                                    <th style="width: 15%;"></th>
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

        <div class="modal-dialog modal-lg">

            <div class="modal-content">

                <div class="modal-header">

                    <h5 class="modal-title fs-5" id="exampleModalLabel">Create New Project</h5>

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                </div>

                <div class="modal-body">

                    <form action="{{url('/project/store')}}" method="POST" enctype="multipart/form-data">

                        @csrf

                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group col-md-8">
                                        <label for="formGroupExampleInput">Project Name</label>
                                        <input type="text" class="form-control" name="project_name" id="project_name" placeholder="Project name"  required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="formGroupExampleInput">Account</label>
                                        <select class="form-control" name="account_id" required >
                                            <option value="">Select Account</option>
                                          
                                        </select>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label for="formGroupExampleInput">Project Description</label>
                                        <textarea  class="form-control" rows="3" name="project_description" id="project_description" placeholder="Project description" ></textarea>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label for="formGroupExampleInput">Project Status</label>
                                        <select class="form-control" name="project_status" >
                                            <option value="ACTIVE">Active</option>
                                            <option value="INACTIVE">Inactive</option>
                                        </select>
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




@stop



@section('page-script')


    <script type="text/javascript">

        $(document).ready(function () {

            $('#objecttablename').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ url('/project/get-all-items') }}",
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
                    {data: 'name', name: 'name', searchable: true},
                    {data: 'project_type', name: 'project_type', searchable: true},
                    {data: 'project_category', name: 'project_category', searchable: true},
                
                    {data: 'action', name: 'action', searchable: true},
                ]
            });

        });


    </script>

@stop
