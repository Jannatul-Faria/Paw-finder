@extends('frontend.layouts.app')
@section('frontend_content')
    <!-- breadcrumb-area -->
    <section class="breadcrumb__area fix">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="breadcrumb__content">
                        <h3 class="title">All Pets</h3>
                        <nav class="breadcrumb">
                            <span property="itemListElement" typeof="ListItem">
                                <a href="index.html">Home</a>
                            </span>
                            <span class="breadcrumb-separator"><i class="flaticon-right-arrow-angle"></i></span>
                            <span property="itemListElement" typeof="ListItem">All Pets</span>
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

    <!-- animal-area -->
    <section class="animal__area-three">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-8 order-0 order-lg-2">
                    <div class="row">
                        @foreach ($pets as $pet)
                            <div class="col-xl-4 col-md-6">
                                <div class="animal__item animal__item-two animal__item-three shine-animate-item">
                                    <div class="animal__thumb animal__thumb-two shine-animate">
                                        <a href="{{ route('web.single.pet', $pet) }}"><img src="{{ $pet->thumbnail }}"
                                                alt="img"></a>
                                        <a href="#" class="wishlist"><i class="flaticon-love"></i></a>
                                    </div>
                                    <div class="animal__content animal__content-two">
                                        <h4 class="title"><a
                                                href="{{ route('web.single.pet', $pet) }}">{{ $pet->name }}</a></h4>
                                        <div class="pet-info">
                                            <ul class="list-wrap">
                                                <li>Gender: <span>{{ $pet->gender }}</span></li>
                                                <li>Breed: <span>{{ $pet->breed }}</span></li>
                                            </ul>
                                        </div>
                                        {{-- <div class="location">
                                            <i class="flaticon-placeholder"></i>
                                            <span>{{ $city->name }}</span>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <nav class="pagination__wrap mt-50">
                        <ul class="list-wrap">
                            <li class="link-arrow"><a href="#"><img
                                        src="{{ asset('frontend') }}/assets/img/icon/pagination_icon01.svg" alt=""
                                        class="injectable"></a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="courses.html">2</a></li>
                            <li><a href="courses.html">3</a></li>
                            <li><a href="courses.html">4</a></li>
                            <li class="link-arrow"><a href="#"><img
                                        src="{{ asset('frontend') }}/assets/img/icon/pagination_icon02.svg" alt=""
                                        class="injectable"></a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-xl-3 col-lg-4">
                    <aside class="animal__sidebar">
                        <div class="animal__widget">
                            <h4 class="animal__widget-title">Filters</h4>
                            <div class="sidebar-search-form">
                                <form action="#">
                                    <input type="text" placeholder="Type Keywords. . .">
                                    <button type="submit"><i class="flaticon-loupe"></i></button>
                                </form>
                            </div>
                        </div>
                        {{-- <div class="animal__widget">
                            <h4 class="animal__widget-title">Price Range</h4>
                            <div class="price_filter">
                                <div id="slider-range"></div>
                                <div class="price_slider_amount">
                                    <input type="text" id="amount" name="price" placeholder="Add Your Price" />
                                </div>
                            </div>
                        </div> --}}
                        <div class="animal__widget">
                            <h4 class="animal__widget-title">Pet Categories</h4>
                            <div class="courses-cat-list">
                                <ul class="list-wrap">
                                    @foreach ($categories as $category)
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="cat_1">
                                                <label class="form-check-label" for="cat_1">{{ $category->name }}
                                                    <span>({{ $category->pets_count }})</span></label>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="animal__widget">
                            <h4 class="animal__widget-title">Breeds</h4>
                            <div class="courses-cat-list">
                                <ul class="list-wrap">
                                    @foreach ($pets as $pet)
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="cat_1">
                                                <label class="form-check-label" for="cat_1">{{ $pet->breed }}
                                                </label>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="animal__widget">
                            <h4 class="animal__widget-title">Gender</h4>
                            <div class="courses-cat-list">
                                <ul class="list-wrap">
                                    <li>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="gender_1">
                                            <label class="form-check-label" for="gender_1">Male (344)</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="gender_2">
                                            <label class="form-check-label" for="gender_2">Female (21)</label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="animal__widget">
                            <h4 class="animal__widget-title">Location</h4>
                            <div class="courses-cat-list">
                                <ul class="list-wrap">
                                    @foreach ($cities as $city)
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="cat_1">
                                                <label class="form-check-label" for="cat_1">{{ $city->name }}
                                                </label>
                                                <span>({{ $city->pets_count }})</span></label>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="apply-btn">
                                <a href="#" class="btn">Apply Now</a>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!-- animal-area-end -->
@endsection
