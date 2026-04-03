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
                        <li class="breadcrumb-item"><a href="#!">User Analytics</a></li>
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
        <div class="col-xl-12 col-md-4">
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <div>
                                <a type="button" class="btn btn-success btn-sm" href="{{url('/user/add-user')}}"><i class="fas fa-user-plus"></i> New User</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- prject ,team member start -->
        <div class="col-xl-12 col-md-12">
            <div class="card table-card">
                <div class="card-header">
                    <h5>All System Users</h5>
                </div>
                <div class="card-body p-0" style="padding: 30px">


                    <div class="input-form" style="padding: 30px">

                        <table class="table " id="usertable">
                            <thead>
                            <tr>
                                <th> SL</th>
                                <th> </th>
                                <th> Name</th>
                                <th>User Email</th>
                                <th>Designation</th>
                                <th>User Role</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                            </thead>
                        </table>
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

            var table = $('#usertable').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ url('/get-all-user') }}",
                    data: function (d) {
                        d.userRole = $('#userRole').val(),
                            d.search = $('input[type="search"]').val()
                    }
                },
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false},
                    {data: 'photo', name: 'photo', searchable: true},
                    {data: 'name', name: 'name', searchable: true},
                    {data: 'email', name: 'email', searchable: true},
                    {data: 'designation', name: 'designation', searchable: true},
                    {data: 'userRole', name: 'userRole', searchable: true},
                    {data: 'userStatus', name: 'userStatus', searchable: true},
                    {data: 'action', name: 'action', searchable: true},
                ]
            });


            $("#userRole").keyup(function () {
                table.draw();
            });


            $('body').on('click', '.deleteProduct', function () {

                var userId = $(this).data("id");
                if (confirm("Are you sure want to delete this user !")) {
                    $.ajax({
                        type: "GET",
                        url: "{{ url('/user/user/delete') }}" + '/' + userId,
                        success: function (data) {
                            table.draw();
                        },
                        error: function (data) {
                            console.log('Error:', data);
                        }
                    });
                }
            });

        });

    </script>
@endsection
