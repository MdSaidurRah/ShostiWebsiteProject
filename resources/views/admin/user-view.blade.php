@extends('layout')
@section('page-content')

    <!-- [ breadcrumb ] start -->
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Dashboard</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="#!">User View</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- [ breadcrumb ] end -->
    <!-- [ Main Content ] start -->

    <!-- [ Main Content ] start -->
    <div class="row">


        <div class="col-xl-4 col-md-4">
            <div class="card table-card">
                <div class="card-header">
                    <h5>User Information</h5>
                </div>
                <div class="card-body p-0" style="padding: 30px">

                    <div style="padding: 30px">
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table">
                                    <tbody>
                                    <tr>
                                        <td colspan="2">
                                            @if($user[0]->userPhoto)
                                            <img src="{{url($user[0]->userPhoto)}}" id="user-photo-preview" width="100%">   
                                            @endif
                                        </td>
                                    </tr>  
                                    <tr>
                                        <td>User Name</td>
                                        <td>{{$user[0]->name}} </td>
                                    </tr>
                                    <tr>
                                        <td>Official Email</td>
                                        <td>{{$user[0]->email}} </td>
                                    </tr>
                                    <tr>
                                        <td>Contact No</td>
                                        <td>{{$user[0]->userContactNo}} </td>
                                    </tr>
                                    <tr>
                                        <td>User Role</td>
                                        <td>{{$user[0]->userRole}} </td>
                                    </tr>

                                    <tr>
                                        <td>User Status</td>
                                        <td>{{$user[0]->userStatus}} </td>
                                    </tr>
                                    <tr>
                                        <td>User Created At</td>
                                        <td>{{$user[0]->created_at}} </td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>

        <div class="col-xl-8 col-md-8">
            <div class="card table-card">
                <div class="card-header">
                    <h5>User Information</h5>
                </div>
                <div class="card-body p-0" style="padding: 30px">

                    <div style="padding: 30px">
                        <div class="row">
                            <div class="col-md-12 col-lg-12 col-xl-12">

                                <form action="{{url('/user/update-user')}}" method="post" enctype="multipart/form-data">
                                    @csrf

                                    <input type="hidden" name="id" value="{{$user[0]->id}}">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="formGroupExampleInput">Official Name</label>
                                            <input type="text" name="name" class="form-control"
                                                   value="{{$user[0]->name}}" id="" placeholder="First Name">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="formGroupExampleInput">Designation</label>
                                            <input type="text" name="designation" class="form-control"
                                                   value="{{$user[0]->designation}}" id="" placeholder="Designation">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="formGroupExampleInput">Contact no</label>
                                            <input type="text" name="userContactNo" class="form-control"
                                                   value="{{$user[0]->userContactNo}}" id="" placeholder="Contact No">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="exampleFormControlTextarea1">User Role</label>
                                            <select name="userRole" class="form-control">
                                                <option value="{{$user[0]->userRole}}">{{$user[0]->userRole}}</option>
                                                <option value="">Select Role</option>
                                                @foreach($role as $item)
                                                    <option value="{{$item->role}}">{{$item->role}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="exampleFormControlTextarea1">User Email</label>
                                            <input type="text" name="email" class="form-control"
                                                   value="{{$user[0]->email}}" id="" placeholder="Contact No">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="formGroupExampleInput">Password</label>
                                            <input type="text" name="userPassword" class="form-control" id=""
                                                   placeholder="***********">
                                        </div>
                                    </div>



                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="formGroupExampleInput">Photo</label>
                                            <input type="file" name="user_photo" id="user_photo" accept="image/*" class="form-control">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="exampleFormControlTextarea1">User Status</label>
                                            <select name="userStatus" class="form-control">
                                                <option value="{{$user[0]->userStatus}}">{{$user[0]->userStatus}}</option>
                                                <option value="">Select Status</option>
                                                <option value="ACTIVE">Active</option>
                                                <option value="INACTIVE">Inactive</option>
                                            </select>
                                        </div>

                                    </div>

                                    <div>
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>

                                </form>
                            </div>
                          
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <!-- prject ,team member start -->
    </div>
    <!-- [ Main Content ] end -->
@stop

@section('page-script')

    <script type="text/javascript">

        $(document).ready(function () {

            $('#usertable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ url('/get-all-user') }}",
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false},
                    {data: 'firstName', name: 'firstName', searchable: true},
                    {data: 'userEmail', name: 'userEmail', searchable: true},
                    {data: 'userContactNo', name: 'userContactNo', searchable: true},
                    {data: 'userRole', name: 'userRole', searchable: true},
                    {data: 'userStatus', name: 'userStatus', searchable: true},
                    {data: 'action', name: 'action', searchable: true},
                ]
            });
        });


        $('#user_photo').on('change', function(event) {
            var file = event.target.files[0];
            if (file) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#user-photo-preview')
                        .attr('src', e.target.result)
                        .show();
                    $('#user-photo-preview').hide();
                    $('#user-photo-preview').fadeIn(650);
                };
                reader.readAsDataURL(file);
            } else {
                $('#user-photo-preview').hide();
            }
        });



    </script>
@endsection
