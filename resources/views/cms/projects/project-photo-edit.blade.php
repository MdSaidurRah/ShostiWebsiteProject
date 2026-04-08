@extends('layout')

@section('page-content')

    <h4 class="fw-bold py-3 "><span class="text-muted fw-light">Admin /</span> Project Photo </h4>


    <div class="page-button-area mb-4">
        <a type="button" href="{{ url('/project/show/'. Crypt::encryptString($project->id)) }}" class="btn btn-primary btn-sm">
            <i class="fas fa-arrow-left"></i> Back to Projects
        </a>
    </div>


    <div class="row">
        <div class="col-xl-12 col-md-12">
            <div class="card table-card">
                <div class="card-header">
                    <h5> Project Photo Update</h5>
                </div>

                <div class="card-body p-0">
                    <div class="table-responsive">
                        <div class="" style="padding: 30px">

                            {{-- ✅ Form for update --}}
                            <form action="{{ url('/project-photo/update') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <input type="hidden" name="id" value="{{$photos->id}}">
    

                                <div class="row">
                                    <div class="col-md-8">

                                        <div class="row">
                                            <div class="form-group col-md-12">
                                                <label for="title">Title</label>
                                                <input type="text" class="form-control" required 
                                                       name="photo_title" id="photo_title" 
                                                       value="{{ old('photo_title', $photos->photo_title) }}" 
                                                       placeholder="Photo Title">
                                            </div>
                                        </div>

                                        <div class="row">


                                              <div class="form-group col-md-4">
                                                <label for="status">Project Status</label>
                                                <select class="form-control" name="photo_status" id="photo_status" required >
                                                    <option value="">-- Select Status --</option>
                                                    <option value="Published" {{ old('photo_status', $photos->photo_status) == 'Published' ? 'selected' : '' }}>Published</option>
                                                    <option value="Draft" {{ old('photo_status', $photos->photo_status) == 'Draft' ? 'selected' : '' }}>Draft</option>
                                                </select>
                                            </div>

                                        </div>

                                        <div class="form-row">
                                            <div class="col-md-12">
                                                <input type="submit" name="submit" value="Update" class="btn btn-primary" />
                                            </div>
                                        </div>

                                    </div>

                                    {{-- ✅ Image Preview --}}
                                    <div class="col-md-4">
                                        <div class="form-group col-md-12">
                                            @if($photos->photo_url)
                                                <img src="{{ url($photos->photo_url) }}" 
                                                     id="photo_url-preview" width="100%">
                                            @else
                                                <img src="" id="photo_url-preview" width="100%" style="display:none;">
                                            @endif
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

@stop

@section('page-script')
<script type="text/javascript">

    document.addEventListener('DOMContentLoaded', function() {
        if (document.getElementById('quill-editor-area')) {
            var editor = new Quill('#quill-editor', {
                theme: 'snow'
            });
            var quillEditor = document.getElementById('quill-editor-area');
            editor.root.innerHTML = quillEditor.value;
            editor.on('text-change', function() {
                quillEditor.value = editor.root.innerHTML;
            });
            quillEditor.addEventListener('input', function() {
                editor.root.innerHTML = quillEditor.value;
            });
        }
    });


    $('#project_photo').on('change', function(event) {
        var file = event.target.files[0];
        if (file) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#project_photo-preview')
                    .attr('src', e.target.result)
                    .show();
                $('#project_photo-preview').hide();
                $('#project_photo-preview').fadeIn(650);
            };
            reader.readAsDataURL(file);
        } else {
            $('#project_photo-preview').hide();
        }
    });

</script>
@stop
