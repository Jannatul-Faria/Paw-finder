@extends('admin.layouts.app')
@section('title', 'Brand List')
@section('admin-content')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Brand Update Page</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>

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
                <h5>Brand Create</h5>
                <a class="btn btn-sm btn-primary" href="{{ route('admin.brands.index') }}"><i
                        class="bx bx-plus text-white"></i>Back</a>

            </div>
            <div class="card-body p-4">

                <div class="row">
                    <div class="col-md-12">
                        <div>
                            <form method="POST" action="{{ route('admin.brands.update', $brand) }}"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="name">Name</label>
                                            <input type="text" value="{{ $brand->name }}" class="form-control" id="name"
                                                name="name" placeholder="Enter a brand name">
                                            @error('name')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="url">Url</label>
                                            <input type="text" value="{{ $brand->url }}" class="form-control" id="url"
                                                name="url" placeholder="Enter a url">
                                            @error('url')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <img src="{{ asset($brand->image) }}" alt="" class="rounded avatar-lg">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="image">Image</label>
                                            <input type="file" id="image" class="form-control" name="image">
                                            @error('image')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                            <!-- <input oninput="newImg.src=window.URL.createObjectURL(this.files[0])"
                                                type="file" class="form-control" id="brandImg"> -->

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="remark">Remark</label>
                                            <input type="text" value="{{ $brand->remark }}" class="form-control"
                                                id="remark" name="remark" placeholder="Enter a remark">
                                            @error('remark')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="order_by">Ordar by</label>
                                            <input type="number" value="{{ $brand->order_by }}" class="form-control"
                                                id="order_by" name="order_by" placeholder="Enter brand order by">
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group">


                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="is_feature"
                                            name="is_feature" {{ $brand->is_feature ? 'checked' : '' }}>
                                        <label class="form-check-label" for="is_feature">Is Featured</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" {{ $brand->is_status ? 'checked' : '' }}
                                            class="form-check-input" id="is_status" name="is_status">
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