@extends('layout')

@section('page-content')

<h4 class="fw-bold py-3 "><span class="text-muted fw-light">Admin /</span> Edit Advertisement</h4>

<div class="row">
    <div class="col-xl-12 col-md-12">
        <div class="card table-card">
            <div class="card-header">
                <h5>Edit Advertisement</h5>
            </div>

            <div class="card-body p-0">
                <div class="table-responsive">
                    <div class="" style="padding: 30px">

                        {{-- ✅ Form for update --}}
                        <form action="{{ url('/promotional-video/update') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <input type="hidden" name="id" value="{{$promotional_video->id}}">


                            <div class="row">
                                <div class="col-md-8">

                                    <div class="row">
                                        <div class="form-group col-md-8">
                                            <label for="title">Title</label>
                                            <input type="text" class="form-control" required
                                                name="video_title" id="video_title" value="{{$promotional_video->video_title}}"
                                                placeholder="Promotional Video Title">
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label for="content">Promo Video Category</label>
                                            <select class="form-control" name="video_category">
                                                <option value="{{$promotional_video->video_category}}" > {{$promotional_video->video_category}}</option>
                                                <option value="Banner">Banner</option>
                                                <option value="Poster">Poster</option>
                                            </select>
                                        </div>

                                    </div>



                                    <div class="row">
                                        <div class="form-group col-md-8">
                                            <label for="title">Reference Link</label>
                                            <input type="text" class="form-control" required
                                                name="reference_link" id="reference_link" value="{{$promotional_video->reference_link}}"
                                                placeholder="Video reference link">
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label for="status">Video Source</label>
                                            <select class="form-control" name="video_source">
                                                <option value="{{$promotional_video->video_source}}" > {{$promotional_video->video_source}}</option>
                                                <option value="ACTIVE">Active</option>
                                                <option value="Published">Published</option>
                                                <option value="INACTIVE">Inactive</option>
                                            </select>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="form-group col-md-4">
                                            <label for="status">Promo Video Status</label>
                                            <select class="form-control" name="status">
                                                <option value="{{$promotional_video->status}}">{{$promotional_video->status}}</option>
                                                <option value="ACTIVE">Active</option>
                                                <option value="Published">Published</option>
                                                <option value="INACTIVE">Inactive</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-md-8">
                                            <label for="employee-photo">Thum Photo</label>
                                            <input type="file" name="thum_photo" id="thum_photo"
                                                accept="image/*" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="col-md-12">
                                            <input type="submit" name="submit" value="Update" class="btn btn-primary" />
                                            <a href="{{ url('/promotional-video') }}" class="btn btn-outline-secondary">Cancel</a>
                                        </div>
                                    </div>

                                </div>


                            {{-- ✅ Image Preview --}}
                            <div class="col-md-4">
                                <div class="form-group col-md-12">
                                    @if($promotional_video->video_thumbnail)
                                    <img src="{{ url($promotional_video->video_thumbnail) }}"
                                        id="thum_photo-preview" width="100%">
                                    @else
                                    <img src="" id="thum_photo-preview" width="100%" style="display:none;">
                                    @endif
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


    $('#thum_photo').on('change', function(event) {
        var file = event.target.files[0];
        if (file) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#thum_photo-preview')
                    .attr('src', e.target.result)
                    .show();
                $('#thum_photo-preview').hide();
                $('#thum_photo-preview').fadeIn(650);
            };
            reader.readAsDataURL(file);
        } else {
            $('#thum_photo-preview').hide();
        }
    });
</script>
@stop