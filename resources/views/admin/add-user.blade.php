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
                        <li class="breadcrumb-item"><a href="#!">Add User</a></li>
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
                    <h5>New User</h5>

                </div>
                <div class="card-body p-0">

                    <div class="input-form" style="padding: 30px">
                        <div class="row">
                            <div class="col-md-8 col-lg-8 col-xl-8">
                                <form id="new-user-form" action="{{url('/user/store-user')}}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf

                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="formGroupExampleInput"> Name</label>
                                            <input type="text" name="name" id="name" class="form-control"
                                                placeholder="Full official name">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="formGroupExampleInput">Designation</label>
                                            <input type="text" name="designation" class="form-control" id="designation"
                                                placeholder="Designation">
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="formGroupExampleInput">User Official Email</label>
                                            <input type="email" name="email" class="form-control" id="email"
                                                placeholder="Official email">
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="formGroupExampleInput">Password</label>
                                            <input type="text" name="userPassword" class="form-control" id="userPassword"
                                                placeholder="***********">
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="formGroupExampleInput">Contact no</label>
                                            <input type="text" name="userContactNo" class="form-control" id=""
                                                placeholder="Contact No">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="exampleFormControlTextarea1">User Role</label>
                                            <select name="userRole" id="userRole" class="form-control">
                                                <option value="">Select Role</option>
                                                @foreach($role as $item)
                                                    <option value="{{$item->role}}">{{$item->role}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row">

                                        <div class="form-group col-md-6">
                                            <label for="formGroupExampleInput">Photo</label>
                                            <input type="file" name="user_photo" accept="image/*" id="user_photo" class="form-control">
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="exampleFormControlTextarea1">User Status</label>
                                            <select name="userStatus" id="userStatus" class="form-control">
                                                <option value="">Select Status</option>
                                                <option value="ACTIVE">Active</option>
                                                <option value="INACTIVE">Inactive</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div>
                                        <button type="submit" class="btn btn-primary">Save</button>
                                        <button type="reset" class="btn btn-outline-primary" name="reset" value="Reset">Reset
                                        </button>
                                    </div>

                                </form>
                            </div>
                            <div class="col-md-4 col-lg-4 col-xl-4">
                                    <img src="" id="user-photo-preview" width="100%">   
                            </div>
                        </div>

                        
                    </div>
                </div>
            </div>
        </div>
    </div>


@stop


@section('page-script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>

    <script type="text/javascript">

        $("#new-user-form").validate({
            rules: {
                name: {
                    required: true
                },
                designation: {
                    required: true
                },
                email: {
                    required: true,
                    email: true
                },
                userPassword: {
                    required: true,
                    maxlength: 12,
                    minlength: 4
                },
                department_id: {
                    required: true
                },
                userRole: {
                    required: true
                },
                userStatus: {
                    required: true
                }
            },
            messages: {
                userEmail: {
                    required: "Please enter email",
                }

            },
        })


        
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









