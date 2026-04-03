@extends('layout')

@section('page-content')

<h4 class="fw-bold py-3 "><span class="text-muted fw-light">Admin /</span> New Page</h4>



<div class="row">

    <div class="col-xl-12 col-md-12">

        <div class="card table-card">

            <div class="card-header">
                <h5>New Page</h5>
            </div>

            <div class="card-body p-0">

                <div class="table-responsive">

                    <div class="" style="padding: 30px">

                        <form action="{{url('/page/store')}}" method="POST" enctype="multipart/form-data">

                            @csrf

                            <div class="row">

                                <div class="col-md-3">
                                    <div class="row">
                                        <div class="form-group col-md-12">
                                            <label for="formGroupExampleInput">Page Title</label>
                                            <input type="text" class="form-control" required name="title" id="title" placeholder="Page title">
                                        </div>


                                    </div>

                                    <div class="row">
                                        <div class="form-group col-md-12">
                                            <label for="formGroupExampleInput">Page Category</label>
                                            <select class="form-control" name="category_id" id="category_id">
                                                <option value="">Search Category...</option>
                                                <option value="" disabled selected>Select Category</option>
                                                @foreach($blog_categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-md-12">
                                            <label for="formGroupExampleInput">Page Status</label>
                                            <select class="form-control" name="status">
                                                <option value="">Select Status</option>
                                                <option value="ACTIVE">Active</option>
                                                <option value="Published">Published</option>
                                                <option value="INACTIVE">Inactive</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-9">
                                    <div class="form-group col-md-12">
                                        <div class="form-group col-md-12">
                                            <label for="formGroupExampleInput">Content</label>
                                   
                                            <textarea rows="20" class="form-control" name="content"></textarea>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="form-row">

                                <div class="col-md-12">

                                    <input type="submit" name="submit" value="Save" class="btn btn-primary" />

                                    <button type="reset" class="btn btn-outline-primary" name="reset" value="Reset">Reset</button>

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
   

</script>

@stop