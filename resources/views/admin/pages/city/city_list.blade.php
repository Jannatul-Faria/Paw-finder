@extends('admin.layouts.app')

@section('title', 'City List')

@push('per_page_css')
@endpush

@section('admin-content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">City List</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item">
                            <a href="javascript: void(0);">cities</a>
                        </li>
                        <li class="breadcrumb-item active">City List</li>
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
                    <div class="row">
                        <div class="col-sm">
                            <div class="mb-4">
                                <a href="{{ route('admin.cities.create') }}" class="btn btn-sm btn-primary"><i
                                        class="bx bx-plus text-white"></i>Add
                                    city</a>
                            </div>
                        </div>

                    </div>
                    <!-- end row -->

                    <div class="table-responsive">
                        <table class="table align-middle datatable dt-responsive table-check nowrap"
                            style="
                        border-collapse: collapse;
                        border-spacing: 0 8px;
                        width: 100%;
                        ">
                            <thead>
                                <tr class="bg-transparent">
                                    <th style="width:20%"> Name</th>
                                    <th style="width:20%">Remarks</th>
                                    <th style="width:20%">Code</th>
                                    <th style="width:25%">Pets</th>
                                    <th style="width:20%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cities as $city)
                                    <tr>


                                        <td>{{ $city->name }}</td>

                                        <td>{{ $city->remarks }}</td>
                                        <td>
                                            <div class="badge badge-soft-success font-size-12">
                                                {{ $city->code }}
                                            </div>
                                        </td>
                                        <td>{{ $city->pets_count }} </td>
                                        <td class="text-center" width="15%">
                                            <div class="btn-group">
                                                <button type="button"
                                                    class="btn btn-primary btn-sm waves-light waves-effect dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="bx bx-grid-alt"></i> Manage <i
                                                        class="mdi mdi-chevron-down ms-1"></i>
                                                </button>
                                                <div class="dropdown-menu" style="">
                                                    <a class="dropdown-item" href="#"><i
                                                            class="bx bx-show-alt me-2 text-secondary"></i>
                                                        Show</a>
                                                    <a class="dropdown-item"
                                                        href="{{ route('admin.cities.edit', $city) }}"><i
                                                            class="bx bx-edit me-2 text-primary"></i>
                                                        Edit</a>
                                                    <a>
                                                        <form action="{{ route('admin.cities.destroy', $city->id) }}"
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
