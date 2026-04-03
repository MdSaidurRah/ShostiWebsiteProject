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

                        <li class="breadcrumb-item"><a href="#!">System Information</a></li>

                    </ul>

                </div>

            </div>

        </div>

    </div>

    <!-- [ breadcrumb ] end -->

    <!-- [ Main Content ] start -->


    <!-- [ Main Content ] start -->

    <div class="row">



        <!-- seo start -->

        <div class="col-xl-4 col-md-12">

            <div class="card">

                <div class="card-body">

                    <div class="row align-items-center">

                        <div class="col-12">
                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#createModal"><i class="fa fa-plus-square" aria-hidden="true"></i> New System Information</button>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>


    <!-- seo end -->


    <!-- prject ,team member start -->

    <div class="row">

        <div class="col-xl-12 col-md-12">

            <div class="card table-card" >

                <div class="card-header">
                    <h5>System Information</h5>
                </div>

                <div class="card-body p-0"  >

                    <div class="table-responsive">

                        <div class="" style="padding: 30px">

                            <table class="table table-hover mb-0" id="objecttablename">

                                <thead>

                                <tr>
                                    <th style="width: 5%;">SL</th>
                                    <th style="width: 15%;">Key</th>
                                    <th style="width: 50%;">Value</th>
                                    <th style="width: 10%;">Status</th>
                                    <th style="width: 5%;"></th>
                                    <th style="width: 5%;"></th>
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
                    <h5 class="modal-title fs-5" id="exampleModalLabel">Create New Information</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <form action="{{url('/configurations/system-information/store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label for="formGroupExampleInput">Information Key</label>
                                        <input type="text" class="form-control" name="information_key" id="information_key" placeholder="Information Key" >
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label for="formGroupExampleInput">Information Value</label>
                                        <input type="text" class="form-control" name="information_value" id="information_value" placeholder="Information Value" >
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label for="formGroupExampleInput">Key Information Status</label>
                                        <select class="form-control" name="information_key_status" >
                                            <option value="">Select Status</option>
                                            <option value="ACTIVE">Active</option>
                                            <option value="INACTIVE">Inactive</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
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

                    <h5 class="modal-title fs-5" id="exampleModalLabel">Edit Information</h5>

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                </div>

                <div class="modal-body">

                    <form action="{{url('/configurations/system-information/update')}}" method="POST" enctype="multipart/form-data">

                        @csrf


                        <input type="hidden" class="form-control" name="id">


                        <div class="row">

                            <div class="col-md-12">

                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label for="formGroupExampleInput">Information Key</label>
                                        <input type="text" class="form-control" name="information_key" id="information_key" placeholder="Information Key" >
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label for="formGroupExampleInput">Information Value</label>
                                        <input type="text" class="form-control" name="information_value" id="information_value" placeholder="Information Value" >
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label for="formGroupExampleInput">Key Information Status</label>
                                        <select class="form-control" name="information_key_status" >
                                            <option value="">Select Status</option>
                                            <option value="ACTIVE">Active</option>
                                            <option value="INACTIVE">Inactive</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
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


    <!-- View Modal -->
    <div class="modal fade" id="viewModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fs-5" id="exampleModalLabel">View Information</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="formGroupExampleInput">Information Key</label>
                                    <input type="text" class="form-control" readonly name="information_key" id="information_key" placeholder="Information Key" >
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="formGroupExampleInput">Information Value</label>
                                    <input type="text" class="form-control" readonly name="information_value" id="information_value" placeholder="Information Value" >
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label for="formGroupExampleInput">Key Information Status</label>
                                    <input type="text" class="form-control" readonly name="information_key_status" id="information_key_status"  >
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


        $(document).on('click', '.edit-btn', function() {

            $("#editModal input[name='id']").val( $(this).data('id') );
            $("#editModal input[name='information_key']").val( $(this).data('information_key') );
            $("#editModal input[name='information_value']").val( $(this).data('information_value') );
            $("#editModal input[name='information_key_status']").val( $(this).data('information_key_status') );
        });


        $(document).on('click', '.view-btn', function() {
            $("#editModal input[name='information_key']").val( $(this).data('information_key') );
            $("#editModal input[name='information_value']").val( $(this).data('information_value') );
            $("#editModal input[name='information_key_status']").val( $(this).data('information_key_status') );

        });



        $(document).ready(function () {


            $('#objecttablename').DataTable({

                processing: true,

                serverSide: true,

                ajax: "{{ url('/configurations/get-system-information') }}",

                columns: [

                    {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
                    {data: 'information_key', name: 'information_key', searchable: true},
                    {data: 'information_value', name: 'information_value', searchable: true},
                    {data: 'information_key_status', name: 'information_key_status', searchable: true},
                    {data: 'view-btn', name: 'view-btn', searchable: true},
                    {data: 'edit-btn', name: 'edit-btn', searchable: true},
                ]

            });

        });


    </script>

@stop

