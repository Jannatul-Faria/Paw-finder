@extends('admin.layouts.app')
@section('title', 'Page List')
@section('admin-content')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Paw Page</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                    <li class="breadcrumb-item active">Create a Pages</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h5>Page Create</h5>
                <a class="btn btn-sm btn-primary" href="{{ route('admin.pages.index') }}"><i
                        class="bx bx-plus text-white"></i>Back</a>

            </div>
            <div class="card-body p-4">

                <div class="row">
                    <div class="col-md-12">
                        <div>
                            <form method="POST" action="{{ route('admin.pages.store') }}" enctype="multipart/form-data">
                                @csrf

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="name">Name</label>
                                            <input type="text" class="form-control" id="name" name="name"
                                                placeholder="Enter a page name">
                                            @error('name')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror

                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="url">Url</label>
                                            <input type="text" class="form-control" id="url" name="url"
                                                placeholder="Enter a url">
                                                @error('url')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label" for="content">Description</label>
                                            <textarea class="form-control" id="ckeditor-classic"
                                                name="content"></textarea>
                                            @error('content')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group">

                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="is_status"
                                                name="is_status">
                                            <label class="form-check-label" for="is_status">Status</label>
                                        </div>
                                    </div>


                                    <div class="mt-4">
                                        <button type="submit" class="btn btn-primary w-md">Submit</button>
                                    </div>
                            </form>
                        </div>
                    </div>

                </div>


            </div>
        </div>
    </div>
</div>
@endsection

@push('per_page_js')
    <script>
        ClassicEditor.create(document.querySelector("#ckeditor-classic")).then(function (e) {
            e.ui.view.editable.element.style.height = "200px"
        }).catch(function (e) {
            console.error(e)
        });
    </script>
@endpush
