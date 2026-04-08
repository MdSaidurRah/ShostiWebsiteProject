@extends('layout')

@section('page-content')

<h4 class="fw-bold py-3">
    <span class="text-muted fw-light">Admin /</span> View Project
</h4>


    <div class="page-button-area mb-4">
        <a type="button" href="{{ url('/business-projects') }}" class="btn btn-primary btn-sm">
           <i class="fas fa-arrow-left"></i> Back to Projects
        </a>
    </div>

<div class="row">
    <div class="col-xl-12 col-md-12">
        <div class="card table-card">
            <div class="card-header">
                <h5>Project Details</h5>
            </div>

            <div class="card-body p-0">
                <div class="table-responsive">
                    <div style="padding: 30px">

                        <div class="row">
                            <div class="col-md-6">

                                <div class="row">
                                    <div class="form-group col-md-12">

                                        {{-- Project Image --}}
                                        @if($project->project_photo)
                                            <img src="{{ url($project->project_photo) }}" width="100%" class="rounded shadow mb-3">
                                        @else
                                            <p class="text-muted">No Photo Available</p>
                                        @endif

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label><strong>Name</strong></label>
                                        <p class="text-dark">{{ $project->name }}</p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label><strong>Description</strong></label>
                                        <div class="border rounded p-3" style="min-height:150px;">
                                            {!! $project->project_description !!}
                                        </div>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="form-group col-md-4">
                                        <label><strong>Project Type</strong></label>
                                        <p class="text-dark">{{ $project->project_type }}</p>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label><strong>Project Category</strong></label>
                                        <p class="text-dark">{{ $project->project_category }}</p>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label><strong>Project Visibility</strong></label>
                                        <p class="text-dark">{{ $project->project_visibility }}</p>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label><strong>Project Status</strong></label>
                                        <p class="text-dark">{{ $project->project_status }}</p>
                                    </div>

                                </div>

                                <div class="form-row">
                                    <div class="col-md-12 mt-3">
                                        <a href="{{ url('/business-projects') }}" class="btn btn-outline-secondary">
                                            Back
                                        </a>
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-6">

                            
                                        {{-- Button to open upload modal --}}
                                        <button class="btn btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#photoUploadModal">
                                            Upload Project Photo
                                        </button>




                                        <?php
                                            $photos = DB::table('project_photos')->where('project_id', $project->id)->get();
                                            ?>
                                        @if($photos->count() > 0)
                                            <h5 class="mt-4">Project Photos</h5>
                                            <hr/>
                                            <div class="row">
                                                @foreach($photos as $photo)

                                                    <div class="col-md-4 mb-3">
                                                        <a href="{{ url('/project-photo/edit/' . Crypt::encryptString($photo->id)) }}"  class="text-decoration-none text-dark">
                                                            <div class="card">
                                                                <img src="{{ url($photo->photo_url) }}" class="card-img-top" style="height: 150px; object-fit: cover;">
                                                                <div class="card-body">
                                                                    <h6 class="card-title">{{ $photo->photo_title }}</h6>
                                                                    <p class="card-text"><small class="text-muted">Status: {{ $photo->photo_status }}</small></p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    @endforeach
                                            </div>
                                            @else
                                            <p class="text-muted mt-4">No additional photos uploaded for this project.</p>
                                        @endif






                            </div>

                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


{{-- ===========================
     PHOTO UPLOAD MODAL
=========================== --}}
<div class="modal fade" id="photoUploadModal" tabindex="-1">
    <div class="modal-dialog">
        <form action="{{ url('/business-projects/photo-upload') }}" 
              method="POST" 
              enctype="multipart/form-data" 
              class="modal-content">
            
            @csrf
            <input type="hidden" name="project_id" value="{{ $project->id }}">

            <div class="modal-header">
                <h5 class="modal-title">Upload New Photo</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">

                {{-- Preview Box --}}
                <div class="mb-3 text-center">
                    <img id="previewImage" 
                         src="{{ $project->project_photo ? url($project->project_photo) : '' }}" 
                         style="max-width: 100%; max-height: 250px; display: {{ $project->project_photo ? 'block' : 'none' }};"
                         class="rounded shadow">
                </div>

                {{-- File Input --}}
                <div class="mb-3">
                    <label class="form-label">Select New Photo</label>
                    <input type="file" name="project_photo" id="projectPhotoInput" class="form-control" accept="image/*" required>
                </div>
                    {{-- File Input --}}
                <div class="mb-3">
                    <label class="form-label">Photo Title</label>
                    <input type="text" name="photo_title" id="photo_title" class="form-control" required>
                </div>

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary">Upload</button>
            </div>

        </form>
    </div>
</div>

@stop

@section('page-script')
<script>
document.getElementById('projectPhotoInput').addEventListener('change', function(event) {

    let file = event.target.files[0];
    let preview = document.getElementById('previewImage');

    if (file) {
        let reader = new FileReader();

        reader.onload = function(e) {
            preview.src = e.target.result;
            preview.style.display = 'block';
        };

        reader.readAsDataURL(file);
    } else {
        preview.style.display = 'none';
    }

});
</script>
@stop