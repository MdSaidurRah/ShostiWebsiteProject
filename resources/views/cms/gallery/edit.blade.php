@extends('layout')

@section('page-content')

    <h4 class="fw-bold py-3 "><span class="text-muted fw-light">Admin /</span> Edit Gallery</h4>

    <div class="row">
        <div class="col-xl-12 col-md-12">
            <div class="card table-card">
                <div class="card-header">
                    <h5>Edit Gallery</h5>
                </div>

                <div class="card-body p-0">
                    <div class="table-responsive">
                        <div class="" style="padding: 30px">

                            {{-- ✅ Form for update --}}
                            <form action="{{ url('/gallery/update') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                             

                                <input type="hidden" name="id" value="{{$galleryItem->id}}">
    

                                <div class="row">
                                    <div class="col-md-8">

                                        <div class="row">
                                            <div class="form-group col-md-8">
                                                <label for="title">Item Title</label>
                                                <input type="text" class="form-control" required 
                                                       name="title" id="title"  value="{{ old('title', $galleryItem->title) }}"
                                                       placeholder="Title">
                                            </div>

                                            <div class="form-group col-md-8">
                                                <label for="title">Reference Link</label>
                                                <input type="text" class="form-control" required 
                                                       name="reference_link" id="reference_link"  value="{{ old('reference_link', $galleryItem->reference_link) }}"
                                                       placeholder="Reference Link">
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label for="status">Item Category </label>
                                                <select class="form-control" name="item_category">
                                                    <option value="first" {{ old('item_category', $galleryItem->item_category) == 'first' ? 'selected' : '' }}>First</option>
                                                    <option value="second" {{ old('item_category', $galleryItem->item_category) == 'second' ? 'selected' : '' }}>Second</option>
                                                    <option value="third" {{ old('item_category', $galleryItem->item_category) == 'third' ? 'selected' : '' }}>Third</option>
                                                    <option value="fourth" {{ old('item_category', $galleryItem->item_category) == 'fourth' ? 'selected' : '' }}>Fourth</option>
                                                    <option value="fifth" {{ old('item_category', $galleryItem->item_category) == 'fifth' ? 'selected' : '' }}>Fifth</option>
                                                    <option value="sixth" {{ old('item_category', $galleryItem->item_category) == 'sixth' ? 'selected' : '' }}>Sixth</option>
                                                 
                                                </select>
                                            </div>
                                        </div>

                                        

                                        <div class="row">
                                           
                                            <div class="form-group col-md-4">
                                                <label for="status">Status</label>
                                                <select class="form-control" name="status">
                                                    <option value="ACTIVE" {{ old('status', $galleryItem->status) == 'ACTIVE' ? 'selected' : '' }}>Active</option>
                                                    <option value="Published" {{ old('status', $galleryItem->status) == 'Published' ? 'selected' : '' }}>Published</option>
                                                    <option value="INACTIVE" {{ old('status', $galleryItem->status) == 'INACTIVE' ? 'selected' : '' }}>Inactive</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-md-8">
                                                <label for="employee-photo">Cover Photo</label>
                                                <input type="file" name="gallery_photo" id="cover_photo" 
                                                       accept="image/*" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="col-md-12">
                                                <input type="submit" name="submit" value="Update" class="btn btn-primary" />
                                                <a href="{{ url('/site-galleryItem') }}" class="btn btn-outline-secondary">Cancel</a>
                                            </div>
                                        </div>

                                    </div>

                                    {{-- ✅ Image Preview --}}
                                    <div class="col-md-4">
                                        <div class="form-group col-md-12">
                                            @if($galleryItem->gallery_image)
                                                <img src="{{ url($galleryItem->gallery_image) }}" 
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
