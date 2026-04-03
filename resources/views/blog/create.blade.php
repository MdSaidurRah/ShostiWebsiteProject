@extends('layout')

@section('page-content')

<h4 class="fw-bold py-3 "><span class="text-muted fw-light">Admin /</span> New Blog</h4>



<div class="row">

    <div class="col-xl-12 col-md-12">

        <div class="card table-card">

            <div class="card-header">
                <h5>New Blog</h5>
            </div>

            <div class="card-body p-0">

                <div class="table-responsive">

                    <div class="" style="padding: 30px">

                        <form action="{{url('/blog/store')}}" method="POST" enctype="multipart/form-data">

                            @csrf

                            <div class="row">

                                <div class="col-md-8">
                                    <div class="row">
                                        <div class="form-group col-md-12">
                                            <label for="formGroupExampleInput">Title</label>
                                            <input type="text" class="form-control" required name="title" id="title" placeholder="Title">
                                        </div>
                                    </div>     
                                    <div class="row">
                                        <div class="form-group col-md-12">
                                            <label for="formGroupExampleInput">Short Note</label>
                                            <input type="text" class="form-control" required name="short_note" id="short_note" placeholder="Short Note">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-md-12">
                                            <label for="formGroupExampleInput">Content</label>
                                            <div id="quill-editor" class="mb-3" style="height: 300px;"> </div>
                                            <textarea rows="3" class="mb-3 d-none" name="content" id="quill-editor-area"></textarea>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-md-4">
                                            <label for="formGroupExampleInput">Category</label>
                                            <select class="form-control" name="category_id" id="category_id">
                                                <option value="">Search Category...</option>
                                                <option value="" disabled selected>Select Category</option>
                                                @foreach($blog_categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="formGroupExampleInput">Author</label>
                                            <input type="text" class="form-control" name="author" id="author" placeholder="Author Name">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="formGroupExampleInput">Publish Date</label>
                                            <input type="date" class="form-control" name="publish_date" id="publish_date">
                                        </div>


                                    </div>

                                    <div class="row">
                                        <div class="form-group col-md-4">
                                            <label for="formGroupExampleInput">Blog Status</label>
                                            <select class="form-control" name="status">
                                                <option value="" disabled selected>Select Status</option>
                                                <option value="ACTIVE">Active</option>
                                                <option value="Published">Published</option>
                                                <option value="INACTIVE">Inactive</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-md-8">
                                            <label for="formGroupExampleInput">Photo</label>
                                            <input type="file" name="photo" id="blog-photo" accept="image/*" class="form-control">
                                        </div>

                                    </div>


                                    <div class="form-row">

                                        <div class="col-md-12">

                                            <input type="submit" name="submit" value="Save" class="btn btn-primary" />

                                            <button type="reset" class="btn btn-outline-primary" name="reset" value="Reset">Reset</button>

                                        </div>

                                    </div>

                                </div>
                                <div class="col-md-4">
                                    <div class="form-group col-md-12">
                                        <img src="" id="blog-photo-preview" width="100%">

                                    </div>
                                </div>

                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>

        <!-- prject ,team member start -->

    </div>


</div>

<!-- [ Main Content ] end -->






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
                $('#blog-photo-preview')
                    .attr('src', e.target.result)
                    .show();
                $('#blog-photo-preview').hide();
                $('#blog-photo-preview').fadeIn(650);
            };
            reader.readAsDataURL(file);
        } else {
            $('#blog-photo-preview').hide();
        }
    });
</script>

@stop