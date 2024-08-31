@extends('frontend.layouts.app')
@section('frontend_content')
    <!-- breadcrumb-area -->
    <section class="breadcrumb__area fix">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-6">
                    <div class="align-items-center">
                        <img src="{{ asset('frontend/assets/img/images/author_01.png') }}" alt="" style="width:20%">
                        <h3 class="pt-4">Jannatul Faria</h3>
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
                <div class="col-md-12">


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
            </div>
        </div>
    </section>
@endsection
