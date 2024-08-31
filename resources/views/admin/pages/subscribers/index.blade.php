@extends('admin.layouts.app')

@section('title', 'subscriber List')

@push('per_page_css')
@endpush

@section('admin-content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">subscriber List ({{ count($subscribers) }})</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item">
                            <a href="javascript: void(0);">subscribers</a>
                        </li>
                        <li class="breadcrumb-item active">subscriber List</li>
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
                                    <th style="width:33%"> Email</th>
                                    <th style="width:33px">Status</th>
                                    <th style="width:33%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($subscribers as $subscriber)
                                    <tr>
                                        <td>{{ $subscriber->email }}</td>
                                        <td>
                                            <div class="badge badge-soft-success font-size-12">
                                                <i class="bx bx-check-double align-middle"></i> {{ $subscriber->status }}
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
                                                    <a class="dropdown-item" href="#"><i
                                                            class="bx bx-show-alt me-2 text-secondary"></i>
                                                        Show</a>
                                                    <a class="dropdown-item"
                                                        href="{{ route('admin.subscribers.edit', $subscriber) }}"><i
                                                            class="bx bx-edit me-2 text-primary"></i>
                                                        Edit</a>
                                                    <a>
                                                        <form
                                                            action="{{ route('admin.subscribers.destroy', $subscriber->id) }}"
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
