@extends('admin.layouts.app')
@section('title', 'Pet List')
@section('admin-content')

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Pet List</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                        <li class="breadcrumb-item active">Pet List</li>
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
                    <h5>Pet List</h5>
                    <a class="btn btn-sm btn-primary" href="{{ route('admin.pets.create') }}"><i
                            class="bx bx-plus text-white"></i> Add
                        Pet</a>
                </div>
                <div class="card-body">
                    <table id="datatable" class="table table-bordered dt-responsive  w-100">
                        <thead>
                            <tr>
                                <th style="width:10%"class="text-center">Image</th>
                                <th style="width:10%">Name</th>
                                <th style="width:10%">Gender</th>
                                <th style="width:30%">Cities</th>
                                <th style="width:10%">status</th>
                                <th style="width:10%">Special Needs</th>
                                <th style="width:10%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pets as $pet)
                                <tr>
                                    <td width="10%" class="text-center">
                                        <img src="{{ asset($pet->thumbnail) }}" class="rounded avatar-sm" alt="Img">
                                    </td>
                                    <td>{{ $pet->name }}</td>
                                    <td>{{ $pet->gender }}</td>
                                    {{-- <td>{{ $pet->cities_count }} </td> --}}
                                    <td>
                                        {{-- @foreach ($pet->cities as $city)
                                            {{ $city->name }} ,
                                        @endforeach --}}
                                       {{ $pet->cities->pluck('name')->join(', ')}}
                                    </td>

                                    <td width="10%" class="text-center">
                                        <div class="badge badge-soft-success font-size-12">Active</div>
                                    </td>
                                    <td>{{ $pet->special_needs }}</td>
                                    <td class="text-center" width="15%">
                                        <div class="btn-group">
                                            <button type="button"
                                                class="btn btn-primary btn-sm waves-light waves-effect dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="bx bx-grid-alt"></i> Manage <i
                                                    class="mdi mdi-chevron-down ms-1"></i>
                                            </button>
                                            <div class="dropdown-menu" style="">
                                                <a class="dropdown-item" href="{{ route('admin.pets.show', $pet) }}"><i
                                                        class="bx bx-show-alt me-2 text-secondary"></i>
                                                    Show</a>
                                                <a class="dropdown-item"  href="{{ route('admin.pets.edit', $pet) }}"><i
                                                        class="bx bx-edit me-2 text-primary"></i>
                                                    Edit</a>
                                                <button data-id="{{ $pet->id }}" class="dropdown-item delete"><i
                                                        class="bx bx-trash-alt me-2 text-danger"></i>
                                                    Delete</button>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {{-- <div class="pagination">
                    {{ $pets->links() }} <!-- Pagination links -->
                </div> --}}
            </div>
        </div>
    </div>
@endsection

@push('per_page_css')
    <!-- DataTables -->
    <link href="{{ asset('backend') }}/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet"
        type="text/css" />
    <!-- Responsive datatable examples -->
    <link href="{{ asset('backend') }}/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css"
        rel="stylesheet" type="text/css" />
@endpush

@push('per_page_js')
    <!-- Required datatable js -->
    <script src="{{ asset('backend') }}/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('backend') }}/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <!-- Responsive examples -->
    <script src="{{ asset('backend') }}/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{ asset('backend') }}/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js">
    </script>

    <script>
        $(document).ready(function() {

            $('#datatable').DataTable({
                "bPaginate": true,
                "bSort": false,
            });

            $('.delete').click(function() {
                let id = $(this).data('id');


                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#4b3f6b',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: "{{ url('admin/pets') }}" + '/' + id,
                            type: 'DELETE',
                            data: {
                                _token: "{{ csrf_token() }}"
                            },
                            success: function(data) {
                                Swal.fire(
                                    'Deleted!',
                                    data.data.message,
                                    'success'
                                );
                                setTimeout(function() {
                                    window.location.reload();
                                }, 2000);

                            }
                        });

                    }
                })
            });
        });
    </script>
@endpush
