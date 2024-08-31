{{-- <section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Update Password') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div>
            <x-input-label for="update_password_current_password" :value="__('Current Password')" />
            <x-text-input id="update_password_current_password" name="current_password" type="password" class="mt-1 block w-full" autocomplete="current-password" />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="update_password_password" :value="__('New Password')" />
            <x-text-input id="update_password_password" name="password" type="password" class="mt-1 block w-full" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="update_password_password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="update_password_password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section> --}}
{{-- @extends('frontend.layouts.app')
@section('frontend_content')
    <!-- breadcrumb-area -->
    <section class="breadcrumb__area fix">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-6">
                    <div class="align-items-center">
                        <img src="{{ asset('frontend/assets/img/images/author_01.png') }}" alt="" style="width:20%">
                        <h3 class="pt-4">{{ Auth::user()->name }}</h3>
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
                            <li><a href="{{ route('profile.destroy') }}">Logout</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-12 pb-5">
                    <div class="registration__form-wrap">
                        <h2>Password Changes:</h2>
                        <form action="#" class="registration__form">

                            <div class="row gutter-20">

                                <div class="col-md-6 mb-3">
                                    <label for="image" class="form-label">
                                        <h6>Uplode Your Profile Photo : </h6>
                                    </label>
                                    <input name="image" type="file" class="form-control">
                                </div>
                                <div class="col-md-6 mb-3 text-center">
                                    <img src="{{ asset(Auth::user()->image) }}" alt="Profile Image">
                                </div>
                                <div class="col-md-6">
                                    <div class="form-grp">
                                        <label for="name" class="form-label">
                                            <h6>Enter Your Name : </h6>
                                        </label>
                                        <input name="name" type="text" value="{{ Auth::user()->name }}"
                                            class="form-control @error('name') is-invalid @enderror" id="name"
                                            placeholder="Enter name">
                                        <x-input-error :messages="$errors->get('name')" class="mt-2 text-danger" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-grp">
                                        <label for="email" class="form-label">
                                            <h6>Enter Your Email : </h6>
                                        </label>
                                        <input name="email" type="email" class="form-control"
                                            value="{{ Auth::user()->email }}"
                                            class="form-control @error('name') is-invalid @enderror" id="name"
                                            placeholder="Enter email">
                                        <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger" />


                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-grp">
                                        <label for="phone" class="form-label">
                                            <h6>Enter Your Phone Number : </h6>
                                        </label>
                                        <input name="phone" type="text" class="form-control"
                                            value="{{ Auth::user()->phone }}" placeholder="Phone Number">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-grp">
                                        <label for="address" class="form-label">
                                            <h6>Enter Your location : </h6>
                                        </label>
                                        <input name="address" type="text" class="form-control" id="address"
                                            value="{{ Auth::user()->address }}" placeholder="Enter Your location">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-grp select-grp">
                                        <label for="gender" class="form-label">
                                            <h6>Gender : </h6>
                                        </label>
                                        <select name="gender" class="orderby">
                                            <option value="">Select Your Gender</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>

                                        </select>



                                    </div>
                                </div>

                            </div>
                            <button type="submit" class="btn">Book Now <img src="assets/img/icon/right_arrow.svg"
                                    alt="" class="injectable"></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection --}}

@extends('frontend.layouts.app')
@section('frontend_content')
    <!-- breadcrumb-area -->
    <section class="breadcrumb__area fix">
        <div class="container">
            <div class="row align-items-end">

                <div class="col-lg-4">
                    <div class="">
                        <img src="{{ asset('frontend/assets/img/images/h3_about_shape.png') }}" alt="img"
                            data-aos="fade-left" data-aos-delay="800">
                        <img src="{{ asset('frontend/assets/img/images/footer_shape01.png') }}" alt="img"
                            data-aos="fade-left" data-aos-delay="800">

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="">

                    </div>
                </div>
                <div class="col-lg-4">
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
                <div class="col-lg-6 mt-3 pb-5">
                    <div class="registration__form-wrap">
                        <h2>Password Changes:</h2>
                        <form action="{{ route('profile.password.update') }}" enctype="multipart/form-data"
                            class="registration__form" method="POST">
                            @csrf
                            @method('PATCH')
                            <div class="row gutter-20">


                                <div class="col-md-12 ms-3">
                                    <div class="form-grp">
                                        <label for="name" class="form-label">
                                            <h6>Current Password: </h6>
                                        </label>
                                        <input name="current_password" type="password" value=""
                                            class="form-control @error('current_password') is-invalid @enderror"
                                            id="current_password" placeholder="Enter current_password">
                                        @error('current_password')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12 ms-3">
                                    <div class="form-grp">
                                        <label for="password" class="form-label">
                                            <h6>Enter New Password : </h6>
                                        </label>
                                        <input name="password" type="password" class="form-control" value=""
                                            class="form-control @error('password') is-invalid @enderror" id="password"
                                            placeholder="Enter new password">
                                        @error('password')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror


                                    </div>
                                </div>
                                <div class="col-md-12 ms-3">
                                    <div class="form-grp">
                                        <label for="password_confirmation" class="form-label">
                                            <h6>Enter Confirmation Password : </h6>
                                        </label>
                                        <input name="password_confirmation" type="password" class="form-control"
                                            value="" placeholder="password_confirmation">
                                        @error('password_confirmation')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn mt-3 ps-3">Change Password <img
                                    src="assets/img/icon/right_arrow.svg" alt="" class="injectable"></button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 col-md-8">
                    <div class="about__img-four">
                        <img src="{{ asset('frontend') }}/assets/img/team/team_details.jpg" alt="img"
                            data-aos="fade-right" data-aos-delay="400">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
