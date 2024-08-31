@extends('admin.layouts.app')

@section('title', 'Blog edit')

@push('per_page_css')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
@endpush

@section('admin-content')
    <div class="row">
        <div class="clo-lg-12 modal-content">

            <div class="modal-header">
                <h5 class="modal-title">Add a blog</h5>

            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('admin.blogs.update', $blog) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="row">
                        <div class="col-md-12">
                            <label for="category_id" class="form-label">Select Category</label>
                            <select class="form-control form-select" id="category_id" name="category_id">
                                <option value="">{{ $blog->category->name }}</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}
                                    </option>
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
                                    value="{{ $blog->title }}">
                                @error('title')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror

                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <img src="{{ asset($blog->image) }}" alt="" class="rounded avatar-lg">
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
                                <textarea class="form-control" id="summernote" name="description">{{ $blog->description }}</textarea>
                                @error('description')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                    </div>


                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
@endsection

@push('per_page_js')
    {{-- summerNote-js --}}
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <script>
        $('#summernote').summernote({
            placeholder: 'Hello stand alone ui'
            tabsize: 2,
            height: 120,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
    </script>
@endpush
