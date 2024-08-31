@extends('admin.layouts.app')
@section('title', 'User List')

@push('per_page_css')
@endpush

@section('admin-content')

    <div class="row">
        <div class="col-lg-12 modal-content">

            <div class="modal-header">
                <h5 class="modal-title">Add City</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.cities.store') }}" method="POST" enctype="multipart/form-data"
                    class="needs-validation" novalidate="">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label" for="name">name</label>
                                <input type="text" class="form-control" id="name" placeholder="name" name="name"
                                    value="" required="">

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label" for="code">Code</label>
                                <input type="text" class="form-control" id="code" placeholder="" name="code">

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label" for="remarks">remarks</label>
                                <input type="text" class="form-control" id="remarks" placeholder="" name="remarks">

                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Submit form</button>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div>
@endsection
@push('per_page_js')
@endpush
