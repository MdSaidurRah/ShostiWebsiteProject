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
                        <li class="breadcrumb-item"><a href="#!">Role & Permission</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- [ breadcrumb ] end -->

    <div class="row">

        <div class="col-xl-5 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#rolePermissionModal">
                                    Role Permission Assign
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#roleModal">
                                    Role
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#permissionModal">
                                    Permission
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="row">

        <div class="col-xl-5 col-md-12">
            <div class="card table-card">
                <div class="card-header">
                    <h5>All Roles and Permissions</h5>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive" style="padding: 30px">
                        <table class="table table-hover mb-0" id="rolepermissiontable">
                            <thead>
                            <tr>
                                <th>SL</th>
                                <th>Role</th>
                                <th>Permission</th>
                                <th>Status</th>
                                <th class="text-end"></th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-12">
            <div class="card table-card">
                <div class="card-header">
                    <h5>Roles</h5>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive" style="padding: 30px">
                        <table class="table table-hover mb-0" id="rolestable">
                            <thead>
                            <tr>
                                <th>SL</th>
                                <th>Role</th>
                                <th>Status</th>
                                <th class="text-end"></th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-md-12">
            <div class="card table-card">
                <div class="card-header">
                    <h5>Permissions</h5>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive" style="padding: 30px">
                        <table class="table table-hover mb-0" id="permissiontable">
                            <thead>
                            <tr>
                                <th>SL</th>
                                <th>Permission</th>
                                <th>Status</th>
                                <th class="text-end"></th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Role Permission Modal -->
    <div class="modal fade" id="rolePermissionModal" tabindex="-1" aria-labelledby="rolePermissionModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="rolePermissionModalLabel">Role Permission Assign</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="rolePermissionForm" action="" method="">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Role</label>
                            <select name="userRole" id="userRole" class="form-control" required>
                                <option value="">Select Role</option>
                                @foreach($role as $item)
                                    <option value="{{$item->role}}">{{$item->role}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Permission</label>
                            <select name="userPermission" id="userPermission" class="form-control" required>
                                <option value="">Select Permission</option>
                                @foreach($permission as $item)
                                    <option value="{{$item->permission}}">{{$item->permission}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="d-grid">
                            <input type="submit" name="submit" value="Assign Permission" class="btn btn-primary">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Role Modal -->
    <div class="modal fade" id="roleModal" tabindex="-1" aria-labelledby="roleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="roleModalLabel">Role Create</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="roleForm" action="" method="">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Role</label>
                            <input type="text" name="role" id="role" class="form-control" placeholder="Role name"
                                   required>
                        </div>
                        <div class="d-grid">
                            <input type="submit" name="submit" value="Save Role" class="btn btn-primary">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Permission Modal -->
    <div class="modal fade" id="permissionModal" tabindex="-1" aria-labelledby="permissionModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="permissionModalLabel">Permission Create</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="permissionForm" action="" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Permission</label>
                            <input type="text" name="permission" id="permission" class="form-control"
                                   placeholder="Permission name" required>
                        </div>
                        <div class="d-grid">
                            <input type="submit" id="savePermission" name="submit" value="Save Permission"
                                   class="btn btn-primary">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

@stop

@section('page-script')

    <script type="text/javascript">
        $(document).ready(function () {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            // DataTables init (keep variables so we can reload them)
            var rolePermissionTable = $('#rolepermissiontable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ url('/get-role-permission') }}",
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false},
                    {data: 'userRole', name: 'userRole', searchable: true},
                    {data: 'permission', name: 'permission', searchable: true},
                    {data: 'accessPermissionStatus', name: 'accessPermissionStatus', searchable: true},
                    {data: 'action', name: 'action', searchable: true},
                ]
            });

            var roleTable = $('#rolestable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ url('/get-role') }}",
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false},
                    {data: 'role', name: 'role', searchable: true},
                    {data: 'roleStatus', name: 'roleStatus', searchable: true},
                    {data: 'action', name: 'action', searchable: true},
                ]
            });

            var permissionTable = $('#permissiontable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ url('/get-permission') }}",
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false},
                    {data: 'permission', name: 'permission', searchable: true},
                    {data: 'permissionStatus', name: 'permissionStatus', searchable: true},
                    {data: 'action', name: 'action', searchable: true},
                ]
            });

            // Role Permission Assign
            $("#rolePermissionForm").submit(function (e) {
                e.preventDefault();

                var userRole = $("#userRole").val();
                var userPermission = $("#userPermission").val();

                $.ajax({
                    type: 'GET', // recommended: POST (keep GET if your routes are GET)
                    url: "{{ url('/role-permission-assign') }}",
                    data: {
                        userRole: userRole,
                        userPermission: userPermission
                    },
                    success: function (data) {
                        if ($.isEmptyObject(data.fail)) {
                            alert(data.success);
                            rolePermissionTable.ajax.reload(null, false);
                            // Optional: close modal after success
                            var modalEl = document.getElementById('rolePermissionModal');
                            var modal = bootstrap.Modal.getInstance(modalEl) || new bootstrap.Modal(modalEl);
                            modal.hide();
                            $("#rolePermissionForm")[0].reset();
                        } else {
                            alert("Matched Role and Permission has been Found.");
                        }
                    },
                    error: function (xhr) {
                        console.log(xhr.responseText);
                        alert("Something went wrong.");
                    }
                });
            });

            // Delete Role Permission
            $('body').on('click', '.deleteProduct', function () {
                var roleId = $(this).data("id");

                if (confirm("Are you sure want to delete this user !")) {
                    $.ajax({
                        type: "GET", // recommended: DELETE
                        url: "{{ url('/role-permission-delete') }}/" + roleId,
                        success: function () {
                            rolePermissionTable.ajax.reload(null, false);
                        },
                        error: function (xhr) {
                            console.log(xhr.responseText);
                            alert("Delete failed.");
                        }
                    });
                }
            });

            // Save Role
            $("#roleForm").submit(function (e) {
                e.preventDefault();

                var role = $("#role").val();

                $.ajax({
                    type: 'GET', // recommended: POST
                    url: "{{ url('/save-role') }}",
                    data: {role: role},
                    success: function (data) {
                        if ($.isEmptyObject(data.fail)) {
                            alert(data.success);
                            roleTable.ajax.reload(null, false);

                            var modalEl = document.getElementById('roleModal');
                            var modal = bootstrap.Modal.getInstance(modalEl) || new bootstrap.Modal(modalEl);
                            modal.hide();
                            $("#roleForm")[0].reset();
                        } else {
                            alert("Role already exist or role add fail!");
                        }
                    },
                    error: function (xhr) {
                        console.log(xhr.responseText);
                        alert("Something went wrong.");
                    }
                });
            });

            // Save Permission
            $("#permissionForm").submit(function (e) {
                e.preventDefault();

                var permission = $("#permission").val();

                $.ajax({
                    type: 'GET', // recommended: POST
                    url: "{{ url('/save-permission') }}",
                    data: {permission: permission},
                    success: function (data) {
                        if ($.isEmptyObject(data.fail)) {
                            alert(data.success);
                            permissionTable.ajax.reload(null, false);

                            var modalEl = document.getElementById('permissionModal');
                            var modal = bootstrap.Modal.getInstance(modalEl) || new bootstrap.Modal(modalEl);
                            modal.hide();
                            $("#permissionForm")[0].reset();
                        } else {
                            alert("Permission already exist or permission add fail!");
                        }
                    },
                    error: function (xhr) {
                        console.log(xhr.responseText);
                        alert("Something went wrong.");
                    }
                });
            });

        });
    </script>
@endsection