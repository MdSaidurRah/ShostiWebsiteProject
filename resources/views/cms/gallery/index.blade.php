@extends('layout')

@section('page-content')

    <h4 class="fw-bold py-3 "><span class="text-muted fw-light">Admin /</span> Site Gallery</h4>

    <div class="page-button-area mb-4">
        <a type="button" href="{{ url('/gallery/create') }}" class="btn btn-primary btn-sm">
            <i class="fa fa-plus-square" aria-hidden="true"></i> New Gallery Item
        </a>
    </div>

    <div class="row">
        <div class="col-xl-12 col-md-12">
            <div class="card table-card">

                <div class="card-header">
                    <h5>Site Gallery </h5>
                </div>

                <div class="card-body p-0">
                    <div class="table-responsive">
                        <div class="p-4">
                            <table class="table table-hover mb-0" id="pageTable">
                                <thead>
                                    <tr>
                                        <th style="width: 5%;">SL</th>
                                        <th style="width: 10%;">Photo</th>
                                        <th style="width: 20%;">Title</th>
                                        <th style="width: 20%;">Category</th>
                                        <th style="width: 20%;">Status</th>
                                        <th style="width: 15%;">Action</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
            <!-- end -->
        </div>
    </div>

@stop

@section('page-script')
    <script type="text/javascript">
        $(document).ready(function () {
            $('#pageTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ url('/get-all/gallery') }}",
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
                    {data: 'title', name: 'title', searchable: true},
                    {data: 'gallery_image', name: 'gallery_image', searchable: true},
                    {data: 'item_category', name: 'item_category', searchable: true},
                    {data: 'status', name: 'status', searchable: true},
                    {data: 'action', name: 'action', searchable: false},
                ]
            });
        });
    </script>
@stop