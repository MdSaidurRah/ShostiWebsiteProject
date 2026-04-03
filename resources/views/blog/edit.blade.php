@extends('layout')

@section('page-content')

    <h4 class="fw-bold py-3 "><span class="text-muted fw-light">Admin /</span> Edit Blog</h4>

    <div class="row">
        <div class="col-xl-12 col-md-12">
            <div class="card table-card">
                <div class="card-header">
                    <h5>Edit Blog</h5>
                </div>

                <div class="card-body p-0">
                    <div class="table-responsive">
                        <div class="" style="padding: 30px">

                            {{-- ✅ Form for update --}}
                            <form action="{{ url('/blog/update') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <input type="hidden" name="id" value="{{$blog->id}}">
    

                                <div class="row">
                                    <div class="col-md-8">

                                        <div class="row">
                                            <div class="form-group col-md-12">
                                                <label for="title">Title</label>
                                                <input type="text" class="form-control" required 
                                                       name="title" id="title" 
                                                       value="{{ old('title', $blog->title) }}" 
                                                       placeholder="Blog Title">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-md-12">
                                                <label for="title">Short Note</label>
                                                <input type="text" class="form-control" required 
                                                       name="short_note" id="short_note" 
                                                       value="{{ old('short_note', $blog->short_note) }}" 
                                                       placeholder="Short Note">
                                            </div>
                                        </div>



                                        <div class="row">
                                            <div class="form-group col-md-12">
                                                <label for="content">Content</label>
                                                <div id="quill-editor" class="mb-3" style="height: 300px;"></div>
                                                <textarea rows="3" class="mb-3 d-none" name="content"  id="quill-editor-area">{{ $blog->content }}</textarea>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-md-4">
                                                <label for="category_id">Category</label>
                                                <select class="form-control" name="category_id" id="category_id">
                                                    <option value="" disabled>Select Category</option>
                                                    @foreach($blog_categories as $category)
                                                        <option value="{{ $category->id }}" 
                                                            {{ old('category_id', $blog->category_id) == $category->id ? 'selected' : '' }}>
                                                            {{ $category->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label for="author">Author</label>
                                                <input type="text" class="form-control" 
                                                       name="author" id="author" 
                                                       value="{{ old('author', $blog->author) }}" 
                                                       placeholder="Author Name">
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label for="publish_date">Publish Date</label>
                                                <input type="date" class="form-control" 
                                                       name="publish_date" id="publish_date" 
                                                       value="{{ old('publish_date', $blog->publish_date) }}">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-md-4">
                                                <label for="status">Blog Status </label>
                                                <select class="form-control" name="status">
                                                    <option  value="{{ $blog->status}}">{{ $blog->status}}</option>
                                                    <option value="ACTIVE">Active</option>
                                                    <option value="Published">Published</option>
                                                    <option value="INACTIVE">Inactive</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-md-8">
                                                <label for="employee-photo">Photo</label>
                                                <input type="file" name="photo" id="blog-photo" 
                                                       accept="image/*" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="col-md-12">
                                                <input type="submit" name="submit" value="Update" class="btn btn-primary" />
                                                <a href="{{ url('/blog') }}" class="btn btn-outline-secondary">Cancel</a>
                                            </div>
                                        </div>

                                    </div>

                                    {{-- ✅ Image Preview --}}
                                    <div class="col-md-4">
                                        <div class="form-group col-md-12">
                                            @if($blog->cover_image)
                                                <img src="{{ url($blog->cover_image) }}" 
                                                     id="blog-preview" width="100%">
                                            @else
                                                <img src="" id="blog-preview" width="100%" style="display:none;">
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


    $('#blog-photo').on('change', function(event) {
        var file = event.target.files[0];
        if (file) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#blog-preview')
                    .attr('src', e.target.result)
                    .show();
                $('#blog-preview').hide();
                $('#blog-preview').fadeIn(650);
            };
            reader.readAsDataURL(file);
        } else {
            $('#blog-preview').hide();
        }
    });

</script>
@stop
