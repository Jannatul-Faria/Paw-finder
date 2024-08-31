@extends('admin.layouts.app')

@section('title', 'city edit')

@push('per_page_css')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
@endpush

@section('admin-content')
    <div class="row">
        <div class="clo-lg-12 modal-content">

            <div class="modal-header">
                <h5 class="modal-title">Edit city</h5>

            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('admin.cities.update', $city) }}" class="needs-validation">
                    @csrf
                    @method('PATCH')
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label" for="name">name</label>
                                <input type="text" class="form-control" id="name" placeholder="name" name="name"
                                    value="{{ $city->name }}" required>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label" for="code">Code</label>
                                <input type="text" value="{{ $city->code }}" class="form-control" id="code"
                                    placeholder="" name="code">

                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label" for="remarks">remarks</label>
                                <input type="text" class="form-control" id="remarks" placeholder="" name="remarks"
                                    value="{{ $city->remarks }}">

                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Submit form</button>
                </form>
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
