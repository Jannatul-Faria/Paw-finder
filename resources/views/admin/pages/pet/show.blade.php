@extends('admin.layouts.app')
@section('title', 'Pet List')
@section('admin-content')

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Pet Create</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Pet Create</li>
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
                    <a class="btn btn-sm btn-primary" href="{{ route('admin.pets.index') }}"><i
                            class="bx bx-left-arrow-alt text-white"></i>
                        Back</a>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label" for="name">Name</label>
                                <input disabled type="text" class="form-control" name="name" placeholder=""
                                    value="{{ $pet->name }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label" for="breed">Breed</label>
                                <input disabled type="text" class="form-control" name="breed" placeholder=""
                                    value="{{ $pet->breed }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label" for="species">Species
                                    <span class="text-danger">*</span></label>
                                <select disabled class="form-control" name="specie_id[]" id="choices-multiple" multiple>
                                    <option value="">Select Species</option>
                                    @foreach ($pet->specie as $specie)
                                        <option value="{{ $specie->id }}" selected>{{ $specie->name }}</option>
                                    @endforeach

                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label" for="category_id">Category
                                    <span class="text-danger">*</span></label>
                                <select disabled class="form-control form-select" id="choices-multiple2"
                                    name="category_id[]" multiple>
                                    @foreach ($pet->categories as $category)
                                        <option value="" selected>{{ $category->name }}</option>
                                    @endforeach

                                </select>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label" for="gender">Gender
                                    <span class="text-danger">*</span></label>
                                <select disabled class="form-control" name="gender">
                                    <option value="" selected disabled>Select</option>
                                    <option value="male" {{ $pet->gender == 'male' ? 'selected' : '' }}>Male</option>
                                    <option value="female" {{ $pet->gender == 'female' ? 'selected' : '' }}>Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label" for="health_status">Health Status
                                    <span class="text-danger">*</span></label>
                                <select disabled class="form-control" name="health_status">
                                    <option value="" selected disabled>Select</option>
                                    <option value="healthy" {{ $pet->health_status == 'healthy' ? 'selected' : '' }}>Healthy
                                    </option>
                                    <option value="sick" {{ $pet->health_status == 'sick' ? 'selected' : '' }}>Sick
                                    </option>
                                    <option value="injured" {{ $pet->health_status == 'injured' ? 'selected' : '' }}>
                                        Injured
                                    </option>
                                    <option value="pregnant" {{ $pet->health_status == 'pregnant' ? 'selected' : '' }}>
                                        Pregnant
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label" for="age">Age</label>
                                <input disabled type="number" class="form-control" name="age" placeholder=""
                                    value="{{ $pet->age }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label" for="special_needs">Special Needs</label>
                                <select disabled class="form-control" name="special_needs">
                                    <option value="" selected disabled>Select</option>
                                    <option value="yes" {{ $pet->special_needs == 'yes' ? 'selected' : '' }}>Yes
                                    </option>
                                    <option value="no" {{ $pet->special_needs == 'no' ? 'selected' : '' }}>No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label" for="fee">Fee</label>
                                <input disabled type="number" class="form-control" name="fee" placeholder=""
                                    value="{{ $pet->fee }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label" for="city_id">Location</label>
                                <select disabled class="form-control form-select" id="choices-multiple3" name="city_id[]"
                                    multiple>
                                    @foreach ($pet->city as $city)
                                        <option value="" selected>{{ $city->name }}</option>
                                    @endforeach

                                </select>
                            </div>
                        </div>

                        <div class="col-md-6 d-flex justify-content-center">
                            <div class="mb-3">
                                <label class="form-label" for="avatar">Thumenail Preview</label><br>
                                <img class="rounded avatar-md" src="{{ asset($pet->thumbnail) }}" alt="Image">
                            </div>
                        </div>

                        <div class="col-md-6 d-flex justify-content-center">
                            @php
                                $images = json_decode($pet->images);
                            @endphp
                            <div class="mb-3">
                                <label class="form-label text-center" for="avatar">Multipla Preview</label><br>
                                @foreach ($images as $image)
                                    <img class="rounded avatar-md me-4" src="{{ asset($image) }}" alt="Image">
                                @endforeach
                            </div>
                        </div>


                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label" for="details">Details</label>
                                <textarea disabled id="ckeditor-classic" class="form-control" name="details">{{ $pet->details }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('per_page_js')
    <script>
        $(document).ready(function() {
            new Choices("#choices-multiple", {
                removeItemButton: !0
            })
            new Choices("#choices-multiple2", {
                removeItemButton: !0
            })
            new Choices("#choices-multiple3", {
                removeItemButton: !0
            })

            ClassicEditor.create(document.querySelector("#ckeditor-classic")).then(function(e) {
                e.ui.view.editable.element.style.height = "200px"
            }).catch(function(e) {
                console.error(e)
            });
        });
    </script>
@endpush
