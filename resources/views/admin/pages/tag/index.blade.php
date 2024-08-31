@extends('admin.layouts.app')
@section('title', 'Tag List')
@section('admin-content')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Tag List</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                    <li class="breadcrumb-item active">Tag List</li>
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
                <h5>Tag List</h5>
                <a class="btn btn-sm btn-primary" href="{{ route('admin.tags.create') }}"><i class="bx bx-plus text-white"></i> Add
                    a tag</a>

            </div>
            <div class="card-body table-responsive">
                <table class="table table-bordered datatable table-check  dt-responsive  nowrap w-100">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Custom order</th>
                            <th>Status</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($allTags as $tag)
                        <tr>
                            <td>{{ $tag->name }}</td>
                            <td>{{ $tag->slug }}</td>
                            <td>{{ $tag->order_by }}</td>
                            <td>
                                <div class="badge badge-soft-success font-size-12">

                                    {{ $tag->is_status == 1 ? 'Active' : 'Inactive' }}
                                </div>
                            </td>
                            <td class="text-center" width="15%">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary btn-sm waves-light waves-effect dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bx bx-grid-alt"></i> Manage <i class="mdi mdi-chevron-down ms-1"></i>
                                    </button>
                                    <div class="dropdown-menu" style="">
                                        <a class="dropdown-item" href="#"><i class="bx bx-show-alt me-2 text-secondary"></i>
                                            Show</a>
                                        <a class="dropdown-item" href="{{ route('admin.tags.edit', $tag) }}"><i class="bx bx-edit me-2 text-primary"></i>
                                            Edit</a>
                                        <a>
                                            <form action="{{ route('admin.tags.destroy', $tag->id) }}" method="POST" style="display: inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" style="none" class="dropdown-item"><i class="bx bx-trash-alt me-2 text-danger"></i>Delete</button>
                                            </form>
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@push('per_page_css')
<!-- DataTables -->
<link href="{{ asset('backend') }}/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<!-- Responsive datatable examples -->
<link href="{{ asset('backend') }}/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
@endpush

@push('per_page_js')
<!-- Required datatable js -->
<script src="{{ asset('backend') }}/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="{{ asset('backend') }}/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<!-- Responsive examples -->
<script src="{{ asset('backend') }}/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{ asset('backend') }}/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

<script>
    $(document).ready(function() {
        $('#datatable').DataTable({
            "bPaginate": true,
            "bSort": false,
        });
    });
</script>
@endpush