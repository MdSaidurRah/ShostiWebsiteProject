@extends('layout')

@section('page-content')

<h4 class="fw-bold py-3">
    <span class="text-muted fw-light">Admin /</span> Edit Page
</h4>

<div class="row">
    <div class="col-xl-12 col-md-12">
        <div class="card table-card">
            <div class="card-header">
                <h5>Edit Page</h5>
            </div>

            <div class="card-body p-0">
                <div class="table-responsive">
                    <div style="padding: 30px">
                        <form action="{{ url('/page/update') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <input type="hidden" name="id" value="{{$page->id}}">


                            <div class="row">
                                <div class="col-md-3">
                                    <div class="row">
                                        <div class="form-group col-md-12">
                                            <label for="title">Page Title</label>
                                            <input 
                                                type="text" 
                                                class="form-control @error('title') is-invalid @enderror" 
                                                required 
                                                name="title" 
                                                id="title" 
                                                value="{{ old('title', $page->title) }}" 
                                                placeholder="Page title">
                                            @error('title')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-md-12">
                                            <label for="category_id">Page Category</label>
                                            <select class="form-control @error('category_id') is-invalid @enderror" name="category_id" id="category_id">
                                                <option value="" disabled>Select Category</option>
                                                @foreach($blog_categories as $category)
                                                    <option value="{{ $category->id }}" 
                                                        {{ old('category_id', $page->category_id) == $category->id ? 'selected' : '' }}>
                                                        {{ $category->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('category_id')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-md-12">
                                            <label for="status">Page Status</label>
                                            <select class="form-control @error('status') is-invalid @enderror" name="status" id="status">
                                                <option value="">Select Status</option>
                                                <option value="ACTIVE" {{ old('status', $page->status) == 'ACTIVE' ? 'selected' : '' }}>Active</option>
                                                <option value="Published" {{ old('status', $page->status) == 'Published' ? 'selected' : '' }}>Published</option>
                                                <option value="INACTIVE" {{ old('status', $page->status) == 'INACTIVE' ? 'selected' : '' }}>Inactive</option>
                                            </select>
                                            @error('status')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-9">
                                    <div class="form-group col-md-12">
                                        <label for="quill-editor">Content</label>
                                        <textarea id="content" rows="20" class="form-control" name="content">{{ old('content', $page->content) }}</textarea>
                                        @error('content')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-12">
                                    <input type="submit" name="submit" value="Update" class="btn btn-primary" />
                                    <a href="{{ url('/page') }}" class="btn btn-outline-secondary">Cancel</a>
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
   
</script>
@stop
