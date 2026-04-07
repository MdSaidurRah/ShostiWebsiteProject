@extends('layout')

@section('page-content')

<h4 class="fw-bold py-3 "><span class="text-muted fw-light">Admin /</span> View  Consultation Form</h4>

    <div class="page-button-area mb-4">
        <a href="{{ route('consultation-query.index') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Back</a>
    </div>

<div class="row">
    <div class="col-xl-12 col-md-12">
        <div class="card table-card">
            <div class="card-header">
                <h5> Consultation Form</h5>
            </div>

            <div class="card-body p-0">
                <div class="table-responsive">
                    <div class="" style="padding: 30px">


                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <table class="table" style="border-collapse: collapse; width: 100%;">
                                    <tr>
                                        <th>Visitor Name</th>
                                        <td>{{ $form->name }}</td>
                                    </tr>
                                    <tr>
                                        <th>Visitor Email</th>
                                        <td>{{ $form->phone }}</td>
                                    </tr>
                                    <tr>
                                        <th>Contact No</th>
                                        <td>{{ $form->location }}</td>
                                    </tr>
                                    <tr>
                                        <th>Submission Time</th>
                                        <td>{{ $form->size }}</td>
                                    </tr>
                                    <tr>
                                        <th>Message</th>
                                        <td>{!! $form->message !!}</td>
                                    </tr>
                                    <tr>
                                        <th>Reply Status</th>
                                        <td>{{ $form->query_status }}</td>
                                    </tr>
                                    <tr>
                                        <th>Message Status</th>
                                        <td>{{ $form->created_by }}</td>
                                    </tr>
                                </table>
                                
                            </div> 
                            <div class="col-md-6 text-end mb-3">
                                
                            </div>  
                        </div>

                        
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


    
</script>
@stop