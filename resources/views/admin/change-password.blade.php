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
                        <li class="breadcrumb-item"><a href="#!">Change Password</a></li>
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
                    <h5>Change Password</h5>
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

                            <form action="{{ url('/user/update-password') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="">

                                @if(session('error'))
                                    <div class="alert alert-danger">
                                        {{ session('error') }}
                                    </div>
                                @endif


                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="row">
                                            <div class="form-group col-md-12">
                                                <label for="current_password">Current Password</label>
                                                <input type="password" class="form-control" required name="current_password" id="current_password" placeholder="Current Password">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="new_password">New Password</label>
                                                <input type="password" class="form-control" required name="new_password" id="new_password" placeholder="New Password">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="new_password_confirmation">Confirm New Password</label>
                                                <input type="password" class="form-control" required name="new_password_confirmation" id="new_password_confirmation" placeholder="Confirm New Password">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-md-12">
                                                <input type="submit" name="submit" value="Change Password" class="btn btn-primary" />
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
        </div>
        <!-- prject ,team member start -->
    </div>
    <!-- [ Main Content ] end -->
@stop

@section('page-script')

    <script type="text/javascript">

        $(document).ready(function () {
            $('form').on('submit', function (e) {
                const newPassword = $('#new_password').val();
                const confirmPassword = $('#new_password_confirmation').val();

                if (newPassword !== confirmPassword) {
                    e.preventDefault(); // prevent form submission
                    alert('New password and confirm password do not match.');
                    $('#new_password_confirmation').focus();
                }
            });
        });



    </script>
@endsection
