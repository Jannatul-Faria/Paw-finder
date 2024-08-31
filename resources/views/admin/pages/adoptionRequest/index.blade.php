@extends('admin.layouts.app')

@section('title', 'adoption List')

@push('per_page_css')
@endpush

@section('admin-content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">adoption List</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item">
                            <a href="javascript: void(0);">adoptions</a>
                        </li>
                        <li class="breadcrumb-item active">adoption List</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table align-middle datatable dt-responsive table-check nowrap"
                            style="
                          border-collapse: collapse;
                          border-spacing: 0 8px;
                          width: 100%;
                        ">
                            <thead>
                                <tr class="bg-transparent">
                                    <th style="width:10px">Adopter Name</th>
                                    <th style="width:20px">Pet Name</th>
                                    <th style="width:30px">City Name</th>
                                    <th style="width:20px">Status</th>
                                    <th style="width:20px">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($adoptions as $adoption)
                                    <tr>


                                        <td>{{ $adoption->adaptor->name }}</td>

                                        <td>{{ $adoption->pet->name }}</td>
                                        <td>{{ $adoption->city->name }}</td>
                                        <td>
                                            <div class="badge badge-soft-success font-size-12">
                                                {{ $adoption->status }}
                                            </div>
                                        </td>


                                        <td class="text-center" width="15%">
                                            <div class="btn-group">
                                                <button type="button"
                                                    class="btn btn-primary btn-sm waves-light waves-effect dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="bx bx-grid-alt"></i> Manage <i
                                                        class="mdi mdi-chevron-down ms-1"></i>
                                                </button>
                                                <div class="dropdown-menu" style="">
                                                    <a class="dropdown-item"
                                                        href="{{ route('admin.adoption.show', $adoption->id) }}"><i
                                                            class="bx bx-show-alt me-2 text-secondary"></i>
                                                        Show</a>
                                                    {{-- <a class="dropdown-item"
                                                        href="{{ route('admin.adoptions.edit', $adoption) }}"><i
                                                            class="bx bx-edit me-2 text-primary"></i>
                                                        Edit</a> --}}

                                                    <a>
                                                        <form action="{{ route('admin.adoption.destroy', $adoption->id) }}"
                                                            method="POST" style="display: inline-block">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" style="none" class="dropdown-item"><i
                                                                    class="bx bx-trash-alt me-2 text-danger"></i>Delete</button>
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
                    <!-- end table responsive -->
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
@endsection

@push('per_page_js')
@endpush
