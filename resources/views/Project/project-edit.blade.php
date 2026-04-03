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

                    <h5>Edit Project</h5>

                </div>

                <div class="card-body p-0">


                    <div class="input-form" style="padding: 30px">

                        <form action="{{url('/project/update')}}" method="POST" enctype="multipart/form-data">

                            @csrf


                            <input type='hidden' name='id' value='{{$project[0]->id}}'>


                            <div class="row">

                                <div class="col-md-12">

                                    <div class="row">
                                        <div class="form-group col-md-8">
                                            <label for="formGroupExampleInput">Project Name</label>
                                            <input type="text" class="form-control" value='{{$project[0]->project_name}}' name="project_name" id="project_name" placeholder="Project name"  readonly>
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label for="formGroupExampleInput">Account</label>
                                            <select class="form-control" name="account_id" readonly >
                                                <?php
                                                    $account = DB::table('account')->where('id',$project[0]->account_id)
                                                        ->select('account_name')->first();
                                                ?>
                                                <option value="{{$project[0]->account_id}}">{{$account->account_name}}</option>
                                             
                                            </select>
                                        </div>

                                    </div>


                                    <div class="row">
                                        <div class="form-group col-md-12">
                                            <label for="formGroupExampleInput">Project Description</label>
                                            <textarea  class="form-control" rows="3" name="project_description" id="project_description" placeholder="Project description" >{{$project[0]->project_description}}</textarea>
                                        </div>
                                    </div>

                                    <div class="row">

                                        <div class="form-group col-md-4">
                                            <label for="formGroupExampleInput">Program</label>
                                            <select class="form-control" name="program_id" >
                                                <option value='{{$project[0]->program_id}}' >{{$project[0]->program_name}} </option>
                                                @foreach($programs as $program)
                                                    <option value="{{$program->id}}">{{$program->program_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="formGroupExampleInput">Location</label>
                                            <select class="form-control" name="location" >
                                                <option value='{{$project[0]->location}}' >{{$project[0]->location}} </option>
                                                <option value="">Select Location</option>
                                                @foreach($locations as $location)
                                                    <option value="{{$location->location}}">{{$location->location}}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label for="formGroupExampleInput">Project Status</label>
                                            <select class="form-control" name="project_status" >
                                                <option value='{{$project[0]->project_status}}'>{{$project[0]->project_status}}</option>
                                                <option value="">Select Status</option>
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

    </div>


@stop




@section('page-script')

    <script type="text/javascript">


    </script>

@endsection
