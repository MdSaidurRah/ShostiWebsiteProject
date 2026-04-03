@extends('layout')

@section('page-content')

<h4 class="fw-bold py-3 "><span class="text-muted fw-light">Admin /</span> Blog Content</h4>



<div class="row">

    <div class="col-xl-12 col-md-12">

        <div class="card table-card">

            <div class="card-header">
                <h5>Blog Content</h5>
            </div>

            <div class="card-body p-0">

                <div class="table-responsive">

                    <div class="" style="padding: 30px">


                        <div class="row">
                            <div class="col-md-8">
                                <form action="{{url('/blog-content/store')}}" method="POST" enctype="multipart/form-data">

                                    @csrf


                                    <div class="row">

                                        <div class="col-md-12">


                                            <div class="row">
                                                <div class="form-group col-md-12">
                                                    <label for="formGroupExampleInput">Blog Title</label>
                                                    <select class="form-control" name="blog_id" id="blog_id" >
                                                        <option value="" disabled selected>Select Status</option>
                                                        <?php 

                                                            $blogs = DB::table('blogs')
                                                                ->select('title', 'id')
                                                                ->where('status', '!=', 'Inactive')
                                                                ->get();
                                                                ?>

                                                        @foreach($blogs as $blog)
                                                            <option value="{{$blog->id}}">{{$blog->title}}</option>
                                                        @endforeach    
                                                    </select>
                                                </div>
                                            </div>
                                            
                                            <div class="row">
                                                <div class="form-group col-md-12">
                                                    <label for="formGroupExampleInput">Sub Title</label>
                                                    <input type="text" class="form-control" required name="title" id="title" placeholder="Category name">
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="form-group col-md-12">
                                                    <label for="content">Content</label>
                                                    <div id="quill-editor" class="mb-3" style="height: 300px;"></div>
                                                    <textarea rows="3" class="mb-3 d-none" name="content"  id="quill-editor-area"></textarea>
                                                </div>
                                            </div>

                                            
                                            
                                            <div class="row">

                                                <div class="form-group col-md-4">
                                                    <label for="formGroupExampleInput">Blog Status</label>
                                                    <select class="form-control" name="status" >
                                                        <option value="" disabled selected>Select Status</option>
                                                        <option value="ACTIVE">Active</option>
                                                        <option value="Published">Published</option>
                                                        <option value="INACTIVE">Inactive</option>
                                                    </select>
                                                </div>
                                                            
                                                <div class="form-group col-md-4">
                                                    <label for="formGroupExampleInput">Publish Date</label>
                                                    <input type="date" name="publish_date" id="publish_date"  class="form-control">
                                                </div>
                                                
                                                <div class="form-group col-md-4">
                                                    <label for="formGroupExampleInput">Photo</label>
                                                    <input type="file" name="photo" id="employee-photo" accept="image/*" class="form-control">
                                                </div>
                                            </div>





                                            <div class="form-row">
                                                <div class="col-md-12">
                                                    <input type="submit" name="submit" value="Save" class="btn btn-primary" />
                                                    <button type="reset" class="btn btn-outline-primary" name="reset" value="Reset">Reset</button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </form>

                            </div>
                            <div class="col-md-4">
                                    <div class="form-group col-md-12">
                                        <img src="" id="employee-photo-preview" width="100%">   
                                       
                                    </div>
                            </div>
                        </div>



                    </div>

                </div>

            </div>

        </div>

        <!-- prject ,team member start -->

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


    $('#employee-photo').on('change', function(event) {
        var file = event.target.files[0];
        if (file) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#employee-photo-preview')
                    .attr('src', e.target.result)
                    .show();
                $('#employee-photo-preview').hide();
                $('#employee-photo-preview').fadeIn(650);
            };
            reader.readAsDataURL(file);
        } else {
            $('#employee-photo-preview').hide();
        }
    });
</script>

@stop