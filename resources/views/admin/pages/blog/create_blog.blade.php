@extends('admin.layouts.app')

@section('title', 'User List')

@push('per_page_css')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
@endpush

@section('admin-content')
    <div class="row">
        <div class="clo-lg-12 modal-content">

            <div class="modal-header">
                <h5 class="modal-title">Add blog</h5>

            </div>
            <div class="modal-body">
                <form action="{{ route('admin.blogs.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <label for="category_id" class="form-label">Select Category</label>
                            <select class="form-control form-select" id="category_id" name="category_id">
                                <option value="">Select Category</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label" for="title">title</label>
                                <input type="text" class="form-control" id="title" placeholder="title" name="title"
                                    value="">
                                @error('title')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror

                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label" for="image">image</label>
                                <input type="file" class="form-control" id="image" placeholder="" name="image">

                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label" for="description">description</label>
                                <textarea class="form-control" id="ckeditor-classic" name="description"></textarea>
                                @error('description')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                    </div>


                    <button type="submit" class="btn btn-primary">Submit form</button>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
@endsection

@push('per_page_js')
    <script>
        ClassicEditor.create(document.querySelector("#ckeditor-classic")).then(function(e) {
            e.ui.view.editable.element.style.height = "200px"
        }).catch(function(e) {
            console.error(e)
        });
    </script>
@endpush
