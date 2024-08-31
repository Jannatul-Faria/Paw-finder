@extends('admin.layouts.app')
@section('title', 'Tag Update page')
@section('admin-content')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Tag Update Page</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                    <!-- <li class="breadcrumb-item active">Create a Brand</li> -->
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
                <h5>Tag Update</h5>
                <a class="btn btn-sm btn-primary" href="{{ route('admin.tags.index') }}"><i class="bx bx-plus text-white"></i>Back</a>

            </div>
            <div class="card-body p-4">

                <div class="row">
                    <div class="col-md-12">
                        <div>
                            <form method="POST" action="{{ route('admin.tags.update', $tag) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="name">Name</label>
                                            <input type="text" value="{{ $tag->name }}" class="form-control" id="name" name="name" placeholder="Enter a brand name">
                                            @error('name')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="order_by">custom order</label>
                                            <input type="text" value="{{ $tag->order_by }}" class="form-control" id="order_by" name="order_by" placeholder="Enter a custom order">
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group">


                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="is_status" name="is_status" {{ $tag->is_status ? 'checked' : '' }}>
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
