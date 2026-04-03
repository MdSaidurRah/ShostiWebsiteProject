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
                            <form action="{{ url('/site-banner/update') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <input type="hidden" name="id" value="{{$banner->id}}">
    

                                <div class="row">
                                    <div class="col-md-8">

                                        <div class="row">
                                            <div class="form-group col-md-8">
                                                <label for="title">Banner Title</label>
                                                <input type="text" class="form-control" required 
                                                       name="banner_title" id="banner_title"  value="{{ old('banner_title', $banner->banner_title) }}"
                                                       placeholder="Advertisement Title">
                                            </div>
                               
                                            <div class="form-group col-md-4">
                                                <label for="status">Banner Category </label>
                                                <select class="form-control" name="banner_category">
                                                    <option value="SITE BANNER" {{ old('banner_category', $banner->banner_category) == 'SITE BANNER' ? 'selected' : '' }}>Site Banner</option>
                                                    <option value="FOOTER BANNER" {{ old('banner_category', $banner->banner_category) == 'FOOTER BANNER' ? 'selected' : '' }}>Footer Banner</option>
                                                    <option value="INNER COVER" {{ old('banner_category', $banner->banner_category) == 'INNER COVER' ? 'selected' : '' }}>Inner Cover</option>
                                                </select>
                                            </div>
                                        </div>

                                        

                                        <div class="row">
                                           
                                            <div class="form-group col-md-4">
                                                <label for="status">Banner Status</label>
                                                <select class="form-control" name="status">
                                                    <option value="ACTIVE" {{ old('status', $banner->status) == 'ACTIVE' ? 'selected' : '' }}>Active</option>
                                                    <option value="Published" {{ old('status', $banner->status) == 'Published' ? 'selected' : '' }}>Published</option>
                                                    <option value="INACTIVE" {{ old('status', $banner->status) == 'INACTIVE' ? 'selected' : '' }}>Inactive</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-md-8">
                                                <label for="employee-photo">Cover Photo</label>
                                                <input type="file" name="cover_photo" id="cover_photo" 
                                                       accept="image/*" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="col-md-12">
                                                <input type="submit" name="submit" value="Update" class="btn btn-primary" />
                                                <a href="{{ url('/site-banner') }}" class="btn btn-outline-secondary">Cancel</a>
                                            </div>
                                        </div>

                                    </div>

                                    {{-- ✅ Image Preview --}}
                                    <div class="col-md-4">
                                        <div class="form-group col-md-12">
                                            @if($banner->banner_image)
                                                <img src="{{ url($banner->banner_image) }}" 
                                                     id="cover_photo-preview" width="100%">
                                            @else
                                                <img src="" id="cover_photo-preview" width="100%" style="display:none;">
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


    $('#cover_photo').on('change', function(event) {
        var file = event.target.files[0];
        if (file) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#cover_photo-preview')
                    .attr('src', e.target.result)
                    .show();
                $('#cover_photo-preview').hide();
                $('#cover_photo-preview').fadeIn(650);
            };
            reader.readAsDataURL(file);
        } else {
            $('#cover_photo-preview').hide();
        }
    });

</script>
@stop
