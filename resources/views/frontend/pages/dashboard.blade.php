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
                    <div class="row">
                        <h4>Adoption Requested List :</h4>

                        <table class="table table-striped table-hover mt-3 p-3">
                            <thead>
                                <tr>
                                    <th scope="col">Image</th>
                                    <th scope="col">Pat Name</th>
                                    <th scope="col">Adoption</th>
                                    <th scope="col">City</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Agreement</th>
                                    <th scope="col">Request Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($adoptions as $adoption)
                                    <tr>
                                        <th scope="row"><img class="gallery__img" style="width: 50px;"
                                                src="{{ asset($adoption->pet->thumbnail) }}" alt="Pet">
                                        </th>
                                        <td>{{ $adoption->pet->name }}</td>
                                        <td>{{ $adoption->adaptor->name }}</td>
                                        <td>{{ $adoption->city->name }}</td>
                                        <td>
                                            {{ $adoption->status }}
                                        </td>
                                        <td>
                                            @if ($adoption->status == 'accepted' && $adoption->date_of_adoption && $adoption->end_date)
                                                {{ Carbon\Carbon::parse($adoption->date_of_adoption)->diffInDays(Carbon\Carbon::parse($adoption->end_date)) }}
                                                Days
                                            @else
                                                N/A
                                            @endif
                                        </td>
                                        <td>{{ $adoption->created_at->diffForHumans() }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
