@extends('layout')

@section('page-content')

<h4 class="fw-bold py-3 "><span class="text-muted fw-light">Dashboard /</span> User Profile</h4>

<div class="row">

    <div class="col-xl-12 col-md-12">
        <div class="card table-card">
            <div class="card-header">
                <h5>User Profile</h5>
            </div>

            <div class="card-body" style="padding: 30px">

                <div class="row">

                    {{-- LEFT SIDE (USER INFO) --}}
                    <div class="col-md-10">
                        <table class="table">
                            <tbody>

                                <tr>
                                    <td>User Name</td>
                                    <td>{{ $user[0]->name }}</td>
                                </tr>

                                <tr>
                                    <td>Official Email</td>
                                    <td>{{ $user[0]->email }}</td>
                                </tr>

                                <tr>
                                    <td>Contact No</td>
                                    <td>{{ $user[0]->userContactNo }}</td>
                                </tr>

                                <tr>
                                    <td>User Role</td>
                                    <td>{{ $user[0]->userRole }}</td>
                                </tr>

                                <tr>
                                    <td>User Status</td>
                                    <td>{{ $user[0]->userStatus }}</td>
                                </tr>

                                <tr>
                                    <td>User Created At</td>
                                    <td>{{ $user[0]->created_at }}</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>

                    {{-- RIGHT SIDE (PHOTO + UPLOAD) --}}
                    <div class="col-md-2">

                        <div class="text-center">

                        
                            
                            {{-- Preview Image --}}
                            <div class="mb-3">
                                @if($user[0]->userPhoto)
                                    <img src="{{ url($user[0]->userPhoto) }}" 
                                         id="user-photo-preview"
                                         class="img-fluid rounded shadow"
                                         style="max-height: 180px; object-fit: cover;">
                                @else
                                    <img src="" 
                                         id="user-photo-preview"
                                         class="img-fluid rounded shadow d-none"
                                         style="max-height: 180px;">
                                @endif
                            </div>

                            {{-- Upload Form --}}
                            <form action="{{ url('/userprofile/profile-photo-update') }}" 
                                  method="POST" 
                                  enctype="multipart/form-data">
                                @csrf

                                <input type="hidden" name="user_id" value="{{ $user[0]->id }}">

                                <div class="mb-3">
                                    <input type="file" 
                                           name="userPhoto" 
                                           id="userPhoto" 
                                           accept="image/*" 
                                           class="form-control form-control-sm">
                                </div>

                                <button type="submit" class="btn btn-primary btn-sm w-100">
                                    Update Photo
                                </button>
                            </form>

                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>

</div>

@stop


@section('page-script')

<script>
document.getElementById('userPhoto').addEventListener('change', function(event) {

    let file = event.target.files[0];
    let preview = document.getElementById('user-photo-preview');

    if (file) {
        let reader = new FileReader();

        reader.onload = function(e) {
            preview.src = e.target.result;
            preview.classList.remove('d-none');
        };

        reader.readAsDataURL(file);
    }
});
</script>

@endsection