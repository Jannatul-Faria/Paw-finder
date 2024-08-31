@extends('frontend.layouts.app')
@section('frontend_content')
    <!-- breadcrumb-area -->
    <section class="breadcrumb__area fix">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-6">
                    <div class="align-items-center d-flex justify-content-between">
                        <div class="">
                            <img src="{{ Auth::user()->image }}" alt="" style="width:30%">
                            <h3 class="pt-4">{{ Auth::user()->name }}</h3>
                        </div>
                        <div class="breadcrumb__img">
                            <img src="{{ asset('frontend/assets/img/images/h3_about_shape.png') }}" alt="img"
                                data-aos="fade-left" data-aos-delay="800" style="">
                            <img src="{{ asset('frontend/assets/img/images/footer_shape01.png') }}" alt="img"
                                data-aos="fade-left" data-aos-delay="800" style="">
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="breadcrumb__img">
                        <img src="{{ asset('frontend/assets/img/images/footer_shape02.png') }}" alt="img"
                            data-aos="fade-left" data-aos-delay="800">
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb__shape-wrap">
            <img src="{{ asset('frontend') }}/assets/img/images/breadcrumb_shape01.png" alt="img"
                data-aos="fade-down-right" data-aos-delay="400">
            <img src="{{ asset('frontend') }}/assets/img/images/breadcrumb_shape02.png" alt="img"
                data-aos="fade-up-left" data-aos-delay="400">
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12 align-items-start">


                    <div class="tgmenu__navbar-wrap tgmenu__main-menu d-none d-xl-flex">
                        <ul class="navigation">
                            <li><a href="{{ route('user-dashboard') }}">Dashboard</a></li>
                            <li><a href="{{ route('profile.update') }}">Profile</a></li>
                            <li><a href="{{ route('profile.password.change') }}">Password Changes</a></li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a href="#">
                                        <button class="dropdown-item text-danger" type="submit"
                                            style="font-weight:700; font-family: 'Baloo Bhaina 2', sans-serif;">
                                            Logout
                                        </button>
                                    </a>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-12 pb-5">
                    <div class="registration__form-wrap">
                        <h2>Update Profile :</h2>
                        <form action="{{ route('profile.profileStore') }}" enctype="multipart/form-data"
                            class="registration__form" method="POST">
                            @csrf
                            @method('PATCH')
                            <div class="row gutter-20">

                                <div class="col-md-6 mb-3">
                                    <label for="profileImageInput" class="form-label">
                                        <h6>Upload Your Profile Photo:</h6>
                                    </label>
                                    <input
                                        oninput="document.getElementById('profileImage').src = window.URL.createObjectURL(this.files[0])"
                                        name="image" type="file" class="form-control" id="profileImageInput">
                                </div>
                                <div class="col-md-6 mb-3 text-center">
                                    <img src="{{ asset(Auth::user()->image) }}" alt="Profile Image" style="width: 20%"
                                        id="profileImage" class="rounded">
                                </div>

                                <div class="col-md-6">
                                    <div class="form-grp">
                                        <label for="name" class="form-label">
                                            <h6>Enter Your Name : </h6>
                                        </label>
                                        <input name="name" type="text" value="{{ Auth::user()->name }}"
                                            class="form-control @error('name') is-invalid @enderror" id="name"
                                            placeholder="Enter name">
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-grp">
                                        <label for="email" class="form-label">
                                            <h6>Enter Your Email : </h6>
                                        </label>
                                        <input name="email" type="email" class="form-control"
                                            value="{{ Auth::user()->email }}"
                                            class="form-control @error('email') is-invalid @enderror" id="email"
                                            placeholder="Enter email">
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror


                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-grp">
                                        <label for="phone" class="form-label">
                                            <h6>Enter Your Phone Number : </h6>
                                        </label>
                                        <input name="phone" type="text" class="form-control"
                                            value="{{ Auth::user()->phone }}" placeholder="Phone Number">
                                        @error('phone')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-grp">
                                        <label for="address" class="form-label">
                                            <h6>Enter Your location : </h6>
                                        </label>
                                        <input name="address" type="text" class="form-control" id="address"
                                            value="{{ Auth::user()->address }}" placeholder="Enter Your location">
                                        @error('address')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-grp select-grp">
                                        <label for="gender" class="form-label">
                                            <h6>Gender : </h6>
                                        </label>
                                        <select name="gender" class="orderby">
                                            <option value="">Select Your Gender</option>
                                            <option value="male"
                                                {{ old('gender') == 'male' || Auth::user()->gender == 'male' ? 'selected' : '' }}>
                                                Male</option>
                                            <option value="female"
                                                {{ old('gender') == 'female' || Auth::user()->gender == 'female' ? 'selected' : '' }}>
                                                Female</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-grp">
                                        <label for="dob" class="form-label">
                                            <h6>Date Of Birth : </h6>
                                        </label>
                                        <input name="dob" type="date" class="form-control" id="dob"
                                            value="{{ Auth::user()->dob }}">
                                        @error('dob')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                            </div>
                            <button type="submit" class="btn">Update <img src="assets/img/icon/right_arrow.svg"
                                    alt="" class="injectable"></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
