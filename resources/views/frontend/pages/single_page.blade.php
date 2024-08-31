@extends('frontend.layouts.app')
@section('frontend_content')
    <!-- breadcrumb-area -->
    <section class="breadcrumb__area fix">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="breadcrumb__content">
                        <h3 class="title">{{ $page->name }}</h3>
                        <nav class="breadcrumb">
                            <span property="itemListElement" typeof="ListItem">
                                <a href="index.html">Home</a>
                            </span>
                            <span class="breadcrumb-separator"><i class="flaticon-right-arrow-angle"></i></span>
                            <span property="itemListElement" typeof="ListItem">{{ $page->name }}</span>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="breadcrumb__img">
                        <img src="{{ asset('frontend') }}/assets/img/images/breadcrumb_img.png" alt="img"
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
    <!-- breadcrumb-area-end -->
    <section class="team__details-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 mb-3">
                    <div class="team__details-img">
                        <img src="{{ asset('frontend/assets/img/team/team.jpg') }}" alt="img"
                            style="width:100%; height:50vh">
                    </div>
                </div>
                <div class="col-lg-12 p-3">
                    <div class="">
                        <h2 class="name">Daria Andaloro</h2>
                        <span>Veterinary Technician</span>
                        <p>{!! $page->content !!}</p>
                        <div class="experience-wrap">
                            <h5>Last Update</h5>
                            <p>{{ $page->updated_at->format('j F,Y') }}</p>
                        </div>


                    </div>
                </div>


            </div>
        </div>
    </section>
@endsection
