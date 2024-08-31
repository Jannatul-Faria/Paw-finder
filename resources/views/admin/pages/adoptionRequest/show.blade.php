@extends('admin.layouts.app')

@section('title', 'adoption request')

@push('per_page_css')
@endpush

@section('admin-content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Adoption Request</h4>

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="invoice-title">
                        <div class="d-flex align-items-start">
                            <div class="flex-grow-1">
                                <div class="mb-1">
                                    <span class="logo-txt">Adopter Name : {{ $adoption->adaptor->name }}</span>

                                </div>
                            </div>
                        </div>
                        <p class="mb-1">{{ $adoption->adaptor->address }}</p>
                        <p class="mb-1"><i class="mdi mdi-email align-middle me-1"></i>{{ $adoption->adaptor->email }}</p>
                        <p><i class="mdi mdi-phone align-middle me-1"></i> {{ $adoption->adaptor->phone }}</p>
                    </div>
                    <hr class="my-4">
                    <div class="py-2 mt-3">
                        <h5 class="font-size-15">Request summary</h5>
                    </div>
                    <div class="p-2 border rounded">
                        <div class="row">

                            <div class="col-sm-6">
                                <div>
                                    <div>
                                        <h5 class="font-size-15">Request Date:</h5>
                                        <p>{{ $adoption->created_at->format('j F, Y') }}</p>

                                    </div>
                                    <div>
                                        <h5 class="font-size-15">Requested Location:</h5>
                                        <p>{{ $adoption->city->name }}</p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div>
                                    <div>
                                        <h5 class="font-size-15">Massage:</h5>
                                        <p class="mb-1">{{ $adoption->message }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="py-2 mt-3">
                        <h5 class="font-size-15">Pet summary</h5>
                    </div>
                    <div class="p-2 border rounded">
                        <div class="row">
                            <div class="col-sm-4">
                                <div>
                                    <div>
                                        <h5 class="font-size-15">Pet Name:</h5>
                                        <p>{{ $adoption->pet->name }}</p>

                                    </div>

                                    <div class="mt-4">
                                        <h5 class="font-size-15">Pet Location:</h5>
                                        <p class="mb-1">{{ $adoption->pet->cities->implode('name', ', ') }}</p>
                                    </div>
                                    <div class="mt-4">
                                        <h5 class="font-size-15">Tenure:</h5>
                                        <p class="mb-1">For {{ $adoption->tenure }} days</p>
                                    </div>
                                    <div class="mt-4">
                                        <h5 class="font-size-15">Special Needs:</h5>
                                        <p class="mb-1">{{ $adoption->pet->special_needs }} </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div>
                                    <div>
                                        <h5 class="font-size-15">Availability:</h5>
                                        <p class="mb-1">{{ $adoption->pet->availability }}</p>
                                    </div>
                                    <div class="mt-4">
                                        <h5 class="font-size-15">Pet Breed:</h5>
                                        <p>{{ $adoption->pet->breed }}</p>

                                    </div>

                                    <div class="mt-4">
                                        <h5 class="font-size-15">Gender:</h5>
                                        <p class="mb-1">{{ $adoption->pet->gender }}</p>
                                    </div>
                                    <div class="mt-4">
                                        <h5 class="font-size-15">Health Status:</h5>
                                        <p class="mb-1">{{ $adoption->pet->health_status }}</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div>
                                    <div>
                                        <img src="{{ $adoption->pet->thumbnail }}" alt="" style="width: 90%">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- end card body -->
                </div>
                <div class="card-footer">
                    <label for="">Request Status</label>
                    <form action="{{ route('admin.adoption.status', $adoption) }}" method="POST" id="statusUpdateForm">
                        @csrf
                        <select {{ in_array($adoption->status, ['accepted', 'rejected', 'finished']) ? 'disabled' : '' }}
                            onchange="statusUpdate()" class="form-control" name="status">
                            <option value="" disabled>Select Status</option>
                            <option value="pending" {{ $adoption->status == 'pending' ? 'selected' : '' }}>Pending
                            </option>
                            <option value="accepted" {{ $adoption->status == 'accepted' ? 'selected' : '' }}>
                                Accepted</option>
                            <option value="finished" {{ $adoption->status == 'finished' ? 'selected' : '' }}>
                                Finished</option>
                            <option value="rejected" {{ $adoption->status == 'rejected' ? 'selected' : '' }}>
                                Rejected
                            </option>
                        </select>
                    </form>
                </div>
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
@endsection

@push('per_page_js')
    <script>
        function statusUpdate() {
            document.getElementById('statusUpdateForm').submit();
        }
    </script>
@endpush
