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


        <div class="col-xl-12 col-md-12">
            <div class="card table-card">
                <div class="card-header">
                    <h5>User Profile</h5>
                </div>
                <div class="card-body p-0" style="padding: 30px">

                    <div style="padding: 30px">
                        <div class="row">
                            <div class="col-md-10">
                                <table class="table">
                                    <tbody>
                                    <tr>
                                        <td colspan="2">
                                           
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
                            <div class="col-md-2">
                               

                                    <hr/>

                                    @if($user[0]->userPhoto)
                                        <img src="{{url($user[0]->userPhoto)}}" id="user-photo-preview" width="100%">   
                                    @endif
                                    <hr/>

                                    @if($user[0]->signature)
                                        <img src="{{url($user[0]->signature)}}" id="signature-photo-preview" width="100%">   
                                    @else
                                        <img src="" id="signature-photo-preview" width="100%">   
                                    @endif

                                    
                                    <hr/>

                                    <form id="new-user-form" action="{{url('/user/signature-update')}}" method="post" enctype="multipart/form-data">
                                        @csrf

                                        <input type="hidden" name="user_id" value="{{$user[0]->id}}">

                                        <div class="row">

                                            <div class="form-group col-md-6">
                                                <label for="formGroupExampleInput">Signature Photo</label>
                                                <input type="file" name="signature" accept="image/*" id="signature" class="form-control">
                                            </div>

                                        </div>

                                        <div>
                                            <button type="submit" class="btn btn-primary">Update Signature</button>
                                            </button>
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

            
        });


        $('#signature').on('change', function(event) {
            var file = event.target.files[0];
            if (file) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#signature-photo-preview')
                        .attr('src', e.target.result)
                        .show();
                    $('#signature-photo-preview').hide();
                    $('#signature-photo-preview').fadeIn(650);
                };
                reader.readAsDataURL(file);
            } else {
                $('#signature-photo-preview').hide();
            }
        });



    </script>
@endsection
