@extends('layout')

@section('page-content')

    <h4 class="fw-bold py-3 "><span class="text-muted fw-light">Admin /</span>  Project </h4>

    <div class="row">
        <div class="col-xl-12 col-md-12">
            <div class="card table-card">
                <div class="card-header">
                    <h5>Project Clone</h5>
                </div>

                <div class="card-body p-0">
                    <div class="table-responsive">
                        <div class="" style="padding: 30px">

                            {{-- ✅ Form for update --}}
                            <form action="{{ url('/project/clone-save') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <input type="hidden" name="id" value="{{$project->id}}">
    

                                <div class="row">
                                    <div class="col-md-8">

                                        <div class="row">
                                            <div class="form-group col-md-12">
                                                <label for="title">Name</label>
                                                <input type="text" class="form-control" required 
                                                       name="name" id="name" 
                                                       value="{{ old('name', $project->name) }}" 
                                                       placeholder="Project Name">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-md-12">
                                                <label for="content">Description</label>
                                                <div id="quill-editor" class="mb-3" style="height: 200px;"></div>
                                                <textarea rows="3" class="mb-3 d-none" name="project_description"  id="quill-editor-area">{{ $project->project_description }}</textarea>
                                            </div>
                                        </div>

                                        

                                        <div class="row">
                                           <div class="form-group col-md-4">
                                                <label for="status">Project Type</label>
                                                <select class="form-control" name="project_type">
                                                    <option value="">-- Select Project Type --</option>
                                                    <option value="Interior" {{ old('project_type', $project->project_type) == 'Interior' ? 'selected' : '' }}>Interior</option>
                                                    <option value="Exterior" {{ old('project_type', $project->project_type) == 'Exterior' ? 'selected' : '' }}>Exterior</option>
                                                    <option value="Consultancy" {{ old('project_type', $project->project_type) == 'Consultancy' ? 'selected' : '' }}>Consultancy</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label for="status">Project Category</label>
                                                <select class="form-control" name="project_category">
                                                    <option value="">-- Select Category --</option>
                                                    <option value="Residance" {{ old('project_category', $project->project_category) == 'Residance' ? 'selected' : '' }}>Residance</option>
                                                    <option value="Office" {{ old('project_category', $project->project_category) == 'Office' ? 'selected' : '' }}>Office</option>
                                                    <option value="Kitchen" {{ old('project_category', $project->project_category) == 'Kitchen' ? 'selected' : '' }}>Kitchen</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label for="status">Project Visibility</label>
                                                <select class="form-control" name="project_visibility">
                                                    <option value="">-- Select Visibility --</option>
                                                    <option value="Published" {{ old('project_visibility', $project->project_visibility) == 'Published' ? 'selected' : '' }}>Published</option>
                                                    <option value="Hidden" {{ old('project_visibility', $project->project_visibility) == 'Hidden' ? 'selected' : '' }}>Hidden</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label for="status">Project Status</label>
                                                <select class="form-control" name="project_status">
                                                    <option value="">-- Select Status --</option>
                                                    <option value="Completed" {{ old('project_status', $project->project_status) == 'Completed' ? 'selected' : '' }}>Completed</option>
                                                    <option value="On Going" {{ old('project_status', $project->project_status) == 'On Going' ? 'selected' : '' }}>On Going</option>
                                                    <option value="Handover" {{ old('project_status', $project->project_status) == 'Handover' ? 'selected' : '' }}>Handover</option>
                                                </select>
                                            </div>
                                            
                                            <div class="form-group col-md-4">
                                                <label for="employee-photo">Project Order</label>
                                                <input type="number" name="project_order"  value="{{ old('project_order', $project->project_order) }}"  id="project_order" class="form-control">
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label for="employee-photo">Photo</label>
                                                <input type="file" name="project_photo" id="project_photo" 
                                                       accept="image/*" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="col-md-12">
                                                <input type="submit" name="submit" value="Save Clone" class="btn btn-primary" />
                                                <a href="{{ url('/product') }}" class="btn btn-outline-secondary">Cancel</a>
                                            </div>
                                        </div>

                                    </div>

                                    {{-- ✅ Image Preview --}}
                                    <div class="col-md-4">
                                        <div class="form-group col-md-12">
                                            @if($project->project_photo)
                                                <img src="{{ url($project->project_photo) }}" 
                                                     id="project_photo-preview" width="100%">
                                            @else
                                                <img src="" id="project_photo-preview" width="100%" style="display:none;">
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
