@extends('layout')

@section('page-content')

    <h4 class="fw-bold py-3 "><span class="text-muted fw-light">Admin /</span> Blog Content</h4>

    <div class="page-button-area mb-4">
        <a type="button" href="{{url('/blog-content/create')}}" class="btn btn-primary btn-sm"><i class="fa fa-plus-square" aria-hidden="true"></i> New Blog Category Content</a>
    </div>


    <div class="row">

        <div class="col-xl-12 col-md-12">

            <div class="card table-card" >

                <div class="card-header">
                    <h5>Blog Content</h5>
                </div>

                <div class="card-body p-0"  >

                    <div class="table-responsive">

                        <div class="" style="padding: 30px">

                            <table class="table table-hover mb-0" id="objecttablename">

                                <thead>

                                <tr>
                                    <th style="width: 5%;">SL</th>
                                    <th style="width: 15%;">Name</th>
                                    <th style="width: 25%;">Name</th>
                                    <th style="width: 10%;">Publish Date</th>
                                    <th style="width: 10%;">Status</th>
                                    <th style="width: 15%;"></th>
                                </tr>

                                </thead>


                            </table>

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

        $(document).ready(function () {
            $('#objecttablename').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ url('get-all/blog-content') }}",
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
                    {data: 'title', name: 'title', searchable: true},
                    {data: 'blog', name: 'blog', searchable: true},
                    {data: 'publish_date', name: 'publish_date', searchable: true},
                    {data: 'content_status', name: 'content_status', searchable: true},
                    {data: 'action', name: 'action', searchable: true},
                ]
            });
        });

    


    </script>

@stop

