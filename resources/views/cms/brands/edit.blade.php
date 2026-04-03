@extends('layout')

@section('page-content')

    <h4 class="fw-bold py-3 "><span class="text-muted fw-light">Admin /</span> Edit Brands</h4>

    <div class="row">
        <div class="col-xl-12 col-md-12">
            <div class="card table-card">
                <div class="card-header">
                    <h5>Edit Brands</h5>
                </div>

                <div class="card-body p-0">
                    <div class="table-responsive">
                        <div class="" style="padding: 30px">

                            {{-- ✅ Form for update --}}
                            <form action="{{ url('/brands/update') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <input type="hidden" name="id" value="{{$client->id}}">
    

                                <div class="row">
                                    <div class="col-md-8">

                                        <div class="row">
                                            <div class="form-group col-md-12">
                                                <label for="title">Title</label>
                                                <input type="text" class="form-control" required 
                                                       name="name" id="name" 
                                                       value="{{ old('name', $client->name) }}" 
                                                       placeholder="Name ">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-md-12">
                                                <label for="content">Adress</label>
                                                <div id="quill-editor" class="mb-3" style="height: 300px;"></div>
                                                <textarea rows="3" class="mb-3 d-none" name="address"  id="quill-editor-area">{{ $client->address }}</textarea>
                                            </div>
                                        </div>

                                        

                                        <div class="row">
                                            <div class="form-group col-md-4">
                                                <label for="status">Product Status</label>
                                                <select class="form-control" name="status">
                                                    <option value="{{$client->status }}">{{$client->status }}</option>
                                                    <option value="ACTIVE">Active</option>
                                                    <option value="Published" >Published</option>
                                                    <option value="INACTIVE" >Inactive</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-md-8">
                                                <label for="employee-photo">Logo</label>
                                                <input type="file" name="logo" id="logo_photo" 
                                                       accept="image/*" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="col-md-12">
                                                <input type="submit" name="submit" value="Update" class="btn btn-primary" />
                                                <a href="{{ url('/clients') }}" class="btn btn-outline-secondary">Cancel</a>
                                            </div>
                                        </div>

                                    </div>

                                    {{-- ✅ Image Preview --}}
                                    <div class="col-md-4">
                                        <div class="form-group col-md-12">
                                            @if($client->company_logo)
                                                <img src="{{ url($client->company_logo) }}" 
                                                     id="cover_photo-preview" width="100%">
                                            @else
                                                <img src="" id="logo_photo-preview" width="100%" style="display:none;">
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


    $('#logo_photo').on('change', function(event) {
        var file = event.target.files[0];
        if (file) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#logo_photo-preview')
                    .attr('src', e.target.result)
                    .show();
                $('#logo_photo-preview').hide();
                $('#logo_photo-preview').fadeIn(650);
            };
            reader.readAsDataURL(file);
        } else {
            $('#logo_photo-preview').hide();
        }
    });

</script>
@stop
