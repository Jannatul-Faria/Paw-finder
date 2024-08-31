@extends('frontend.layouts.app')
@section('frontend_content')
    <!-- breadcrumb-area -->
    <section class="breadcrumb__area fix">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="breadcrumb__content">
                        <h3 class="title">Pet Details</h3>
                        <nav class="breadcrumb">
                            <span property="itemListElement" typeof="ListItem">
                                <a href="index.html">Home</a>
                            </span>
                            <span class="breadcrumb-separator"><i class="flaticon-right-arrow-angle"></i></span>
                            <span property="itemListElement" typeof="ListItem">Pet Details</span>
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

    <!-- animal-details-area -->
    <section class="animal__details-area">
        <div class="container">
            <div class="animal__details-wrap">
                <div class="row">
                    <div class="col-61">
                        <div class="animal__details-img-wrap">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="itemOne-tab-pane" role="tabpanel"
                                    aria-labelledby="itemOne-tab" tabindex="0">
                                    <div class="swiper pet-active">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img src="{{ $pet->thumbnail }}" alt="img" style="width: 550px"
                                                    height="550px">
                                            </div>

                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>
                        <div class="animal__details-description">
                            <h4 class="title">Description</h4>
                            <p>{!! $pet->details !!}</p>
                        </div>
                        <div class="animal__details-info-wrap">
                            <h4 class="title">More Additional Information</h4>
                            <p>When an unknown printer took a galley of type and scrambled ew year make a type speci awmen
                                bookbsites and e-commerce shops. We know how hard.</p>
                            <div class="introducing__list-box">
                                <ul class="list-wrap">
                                    <li>
                                        <span class="icon">
                                            <img src="{{ asset('frontend') }}/assets/img/icon/check_icon02.svg"
                                                alt="" class="injectable">
                                        </span>
                                        Vaccine Completed
                                    </li>
                                    <li>
                                        <span class="icon">
                                            <img src="{{ asset('frontend') }}/assets/img/icon/check_icon02.svg"
                                                alt="" class="injectable">
                                        </span>
                                        24/7 emergency assistance
                                    </li>
                                    <li>
                                        <span class="icon">
                                            <img src="{{ asset('frontend') }}/assets/img/icon/check_icon02.svg"
                                                alt="" class="injectable">
                                        </span>
                                        6 Month Health Insurance
                                    </li>
                                    <li>
                                        <span class="icon">
                                            <img src="{{ asset('frontend') }}/assets/img/icon/check_icon02.svg"
                                                alt="" class="injectable">
                                        </span>
                                        Health Record Profile
                                    </li>
                                    <li>
                                        <span class="icon">
                                            <img src="{{ asset('frontend') }}/assets/img/icon/check_icon02.svg"
                                                alt="" class="injectable">
                                        </span>
                                        100% Coverage
                                    </li>
                                    <li>
                                        <span class="icon">
                                            <img src="{{ asset('frontend') }}/assets/img/icon/check_icon02.svg"
                                                alt="" class="injectable">
                                        </span>
                                        NYC sales tax
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-39">
                        <aside class="animal__details-sidebar">
                            <div class="animal__details-widget">
                                <div class="animal__details-sidebar-info">
                                    <h4 class="title">{{ $pet->name }}</h4>
                                    <p>when an unknown printer took a galley offer type anaweard scramyear make a type
                                        specimen.</p>
                                    <h4 class="price">{{ $pet->fee }} BDT</h4>
                                    <ul class="list-wrap">
                                        <li><span>Available Date:</span>{{ $pet->created_at->diffForHumans() }}</li>
                                        <li><span>Location:</span> {{ $pet->cities->implode('name', ', ') }}</li>
                                        <li><span>Color:</span>Brown/white</li>
                                        <li><span>Gender:</span>{{ $pet->gender }}</li>
                                        <li><span>Weight:</span>9-12lbs</li>
                                        <li><span>Puppy ID:</span>{{ $pet->id }}</li>

                                    </ul>
                                </div>
                            </div>
                            <div class="animal__details-widget">
                                <h4 class="widget-title">Request for adopt</h4>
                                <div class="payment__type-wrap p-3">

                                    <form action="{{ route('web.adoption.store') }}" method="POST" class="contact__form">
                                        @csrf
                                        <span>Your email address will not be published. Required fields are marked *</span>
                                        <div class="row gutter-20">
                                            <div class="col-md-12">
                                                <div class="select-grp mb-3">
                                                    <select name="city_id" class="orderby">
                                                        <option value="">Select Location</option>
                                                        @foreach ($pet->cities as $city)
                                                            <option value="{{ $city->id }}">{{ $city->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-grp">
                                                    <input type="hidden" class="form-control" id="pet_id"
                                                        name="pet_id" value="{{ $pet->id }}">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-grp">
                                                    <input type="number" name="tenure" "
                                                            value="{{ old('tenure', 30) }}" min="30">
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-grp">
                                                        <textarea name="message" placeholder="Message"></textarea>
                                                    </div>
                                                </div>

                                            </div>
                                             @if (Route::has('login'))
                                                    @auth
                                                        <button type="submit" class="btn">Bring Me Home</button>
                                                    @else
                                                        <a href="{{ route('login') }}" class="btn p-3">Login
                                                            First</a>
                                                    @endauth
                                                    @endif
                                    </form>

                                    <div class="social-wrap">
                                        <h6 class="title">Share This Post:</h6>
                                        <ul class="list-wrap">
                                            <li><a href="https://www.facebook.com/" target="_blank"><i
                                                        class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="https://twitter.com/" target="_blank"><i
                                                        class="fab fa-twitter"></i></a></li>
                                            <li><a href="https://www.whatsapp.com/" target="_blank"><i
                                                        class="fab fa-whatsapp"></i></a></li>
                                            <li><a href="https://www.instagram.com/" target="_blank"><i
                                                        class="fab fa-instagram"></i></a></li>
                                            <li><a href="https://www.youtube.com/" target="_blank"><i
                                                        class="fab fa-youtube"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="animal__details-widget">
                                <div class="animal__details-map">
                                    <h4 class="widget-title">Map Location</h4>
                                    <div class="location-map">
                                        <iframe
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48409.69813174607!2d-74.05163325136718!3d40.68264649999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25bae694479a3%3A0xb9949385da52e69e!2sBarclays%20Center!5e0!3m2!1sen!2sbd!4v1684309529719!5m2!1sen!2sbd"
                                            style="border:0;" allowfullscreen="" loading="lazy"
                                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </div>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
            <div class="related__animal-area">
                <div class="row align-items-end">
                    <div class="col-md-8">
                        <h3 class="related__animal-title">You May Also Like</h3>
                    </div>
                    <div class="col-md-4">
                        <div class="pet__nav-two">
                            <button class="petTwo-button-prev"><i class="flaticon-left"></i></button>
                            <button class="petTwo-button-next"><i class="flaticon-next"></i></button>
                        </div>
                    </div>
                </div>
                <div class="swiper pet-active-two">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="animal__item animal__item-two animal__item-three shine-animate-item">
                                <div class="animal__thumb animal__thumb-two shine-animate">
                                    <a href="animal-details.html"><img
                                            src="{{ asset('frontend') }}/assets/img/shop/shop_img01.jpg"
                                            alt="img"></a>
                                    <a href="animal-details.html" class="wishlist"><i class="flaticon-love"></i></a>
                                </div>
                                <div class="animal__content animal__content-two">
                                    <h4 class="title"><a href="animal-details.html">Cute French Bulldog</a></h4>
                                    <div class="pet-info">
                                        <ul class="list-wrap">
                                            <li>Gender: <span>Male</span></li>
                                            <li>location: <span>French</span></li>
                                        </ul>
                                    </div>
                                    <div class="location">
                                        <i class="flaticon-placeholder"></i>
                                        <span>Bakersfield, California</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- animal-details-area-end -->
@endsection
