@extends('frontend.layouts.app')
@section('frontend_content')
    <!-- banner-area -->
    <div class="banner__bg-two" data-background="{{ asset('frontend') }}/assets/img/banner/h2_banner_bg.jpg"
        style="background-image: url(&quot;{{ asset('frontend') }}/assets/img/banner/h2_banner_bg.jpg&quot;);">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-10">
                    <div class="banner__content-two">
                        <span class="sub-title aos-init aos-animate" data-aos="fade-up">Let's get started. Search pets for
                            your home</span>
                        <h2 class="title aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">Adopt Your Pretty <img
                                src="{{ asset('frontend') }}/assets/img/banner/h3_banner_title_img.png"
                                alt=""><br>Friend</h2>
                        <div class="banner__radio-wrap aos-init aos-animate" data-aos="fade-up" data-aos-delay="600">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="dog">
                                <label class="form-check-label" for="dog">
                                    Dog
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="cat">
                                <label class="form-check-label" for="cat">
                                    Cat
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="pet">
                                <label class="form-check-label" for="pet">
                                    Other Pet
                                </label>
                            </div>
                        </div>
                        <div class="banner__search-wrap aos-init aos-animate" data-aos="fade-up" data-aos-delay="800">
                            <form action="#" class="banner__search-form">
                                <div class="select-grp">
                                    <select name="pet_type" class="orderby">
                                        <option value="Select Category">Select Category</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="select-grp select-grp-two">
                                    <select name="male" class="orderby">
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                                <div class="select-grp select-grp-two">
                                    <select name="location" class="orderby">
                                        <option value="location">Select Location</option>
                                        @foreach ($cities as $city)
                                            <option value="{{ $city->id }}">{{ $city->name }}</option>
                                        @endforeach
                                    </select>

                                </div>
                                <div class="form-grp">
                                    <input type="text" placeholder="Looking for...">
                                    <button type="submit"><i class="flaticon-loupe"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="banner__img-two">
                        <img src="{{ asset('frontend') }}/assets/img/banner/h2_banner_img.png" alt="img"
                            data-aos="fade-left" data-aos-delay="400" class="aos-init aos-animate">
                    </div>
                </div>
            </div>
        </div>
        <div class="banner__shape-wrap-two">
            <img src="{{ asset('frontend') }}/assets/img/banner/h2_banner_shape01.png" alt="shape" data-aos="fade-right"
                data-aos-delay="600" class="aos-init aos-animate">
            <img src="{{ asset('frontend') }}/assets/img/banner/h2_banner_shape02.png" alt="shape"
                data-aos="fade-up-left" data-aos-delay="600" class="aos-init aos-animate">
        </div>
    </div>
    <!-- banner-area-end -->

    <!-- about-area -->
    <section class="about__area-three">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-7">
                    <div class="about__img-three">
                        <img src="{{ asset('frontend') }}/assets/img/images/h3_about_img01.png" alt="img">
                        <div class="customer__review customer__review-two" data-aos="fade-up" data-aos-delay="400">
                            <div class="customer__review-img">
                                <ul class="list-wrap">
                                    <li><img src="{{ asset('frontend') }}/assets/img/images/author_01.png" alt="">
                                    </li>
                                    <li><img src="{{ asset('frontend') }}/assets/img/images/author_02.png" alt="">
                                    </li>
                                    <li><img src="{{ asset('frontend') }}/assets/img/images/author_03.png" alt="">
                                    </li>
                                    <li><img src="{{ asset('frontend') }}/assets/img/images/author_04.png" alt="">
                                    </li>
                                </ul>
                            </div>
                            <div class="customer__review-content">
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <span>4.7 (1,567 Reviews)</span>
                            </div>
                        </div>
                        <div class="healthy-pets healthy-pets-two" data-aos="zoom-in" data-aos-delay="400">
                            <div class="icon">
                                <img src="{{ asset('frontend') }}/assets/img/icon/pet_icon01.svg" alt=""
                                    class="injectable">
                            </div>
                            <div class="content">
                                <h6 class="circle rotateme">BETTER - HEALTHY - PETS - LOVE -</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-5 order-0 order-lg-3">
                    <div class="about__video-wrap">
                        <img src="{{ asset('frontend') }}/assets/img/images/h3_about_img02.png" alt="img">
                        <a href="https://www.youtube.com/watch?v=XdFfCPK5ycw" class="popup-video play-btn"><i
                                class="fas fa-play"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="about__content-three">
                        <div class="section__title mb-10">
                            <span class="sub-title">WE LOVE OUR JOB!
                                <strong class="shake">
                                    <img src="{{ asset('frontend') }}/assets/img/icon/pet_icon02.svg" alt=""
                                        class="injectable">
                                </strong>
                            </span>
                            <h2 class="title">Adopt Pets And Save Their Lives</h2>
                        </div>
                        <p>We will work with you to develop individualised care plans including management chronic
                            diseases. We areommit ted to being the network providing healthcare centered care that
                            inspires.</p>
                        <a href="{{ route('web.contact-us') }}" class="btn">Contact With Us <img
                                src="{{ asset('frontend') }}/assets/img/icon/right_arrow.svg" alt=""
                                class="injectable"></a>
                        <div class="shape">
                            <img src="{{ asset('frontend') }}/assets/img/images/h3_about_shape.png" alt="shape"
                                class="ribbonRotate">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-area-end -->

    <!-- brand-area -->
    <div class="brand__area-three">
        <div class="container">
            <div class="swiper brand-active-two">
                <div class="swiper-wrapper">
                    @foreach ($allBrand as $brand)
                        <div class="swiper-slide">
                            <div class="brand__item brand__item-two">
                                <img src="{{ $brand->image }}" alt="img" style="width:70px; ">
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- brand-area-end -->

    <!-- animal-area -->
    <section class="animal__area-two">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8">
                    <div class="section__title white-title text-center mb-40">
                        <h2 class="title">Available Pets For Adoption</h2>
                        <p>We will work with you to develop individualised care plans, including <br> management
                            chronic diseases.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                @foreach ($pets as $pet)
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-10">
                        <div class="animal__item animal__item-two shine-animate-item">
                            <div class="animal__thumb animal__thumb-two shine-animate">
                                <a href="{{ route('web.single.pet', $pet) }}"><img src="{{ asset($pet->thumbnail) }}"
                                        alt="img"></a>
                                <a href="{{ route('web.single.pet', $pet) }}" class="wishlist"><i
                                        class="flaticon-love"></i></a>
                            </div>
                            <div class="animal__content animal__content-two">
                                <h4 class="title"><a href="{{ route('web.single.pet', $pet) }}">{{ $pet->name }}</a>
                                </h4>
                                <div class="pet-info">
                                    <ul class="list-wrap">
                                        <li>Gender: <span>{{ $pet->gender }}</span></li>
                                        <li>Breed: <span>{{ $pet->breed }}</span></li>
                                    </ul>
                                </div>
                                <div class="location">
                                    <i class="flaticon-placeholder"></i>
                                    @foreach ($pet->cities as $city)
                                        <span>{{ $city->name }},</span>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="animal__shape-wrap">
            <img src="{{ asset('frontend') }}/assets/img/images/adoption_shape01.png" alt="shape" class="rotateme">
            <img src="{{ asset('frontend') }}/assets/img/images/adoption_shape02.png" alt="shape"
                data-aos="fade-down-left" data-aos-delay="400">
        </div>
    </section>
    <!-- animal-area-end -->

    <!-- choose-area -->
    <section class="choose__area">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 col-md-10">
                    <div class="choose__img">
                        <img src="{{ asset('frontend') }}/assets/img/images/choose_img.png" alt="img">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="choose__content">
                        <div class="section__title mb-15">
                            <span class="sub-title">Why Choose Us
                                <strong class="shake">
                                    <img src="{{ asset('frontend') }}/assets/img/icon/pet_icon02.svg" alt=""
                                        class="injectable">
                                </strong>
                            </span>
                            <h2 class="title">We thrive on building a <br> healthy community <br> for all Pets.
                            </h2>
                        </div>
                        <p>Duis aute irure dolor in reprehenderit in voWe care for the growing needs of our
                            community. We build systems for providing health services for individuals, families and
                            populations.</p>
                        <div class="why__list-box mb-30">
                            <ul class="list-wrap">
                                <li>
                                    <div class="why__list-box-item">
                                        <div class="why__list-box-item-top">
                                            <div class="icon">
                                                <img src="{{ asset('frontend') }}/assets/img/icon/check_icon.svg"
                                                    alt="" class="injectable">
                                            </div>
                                            <h4 class="title">More Experience</h4>
                                        </div>
                                        <p>Be confident in the treatment plan and your doctor’s abilities.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="why__list-box-item">
                                        <div class="why__list-box-item-top">
                                            <div class="icon">
                                                <img src="{{ asset('frontend') }}/assets/img/icon/check_icon.svg"
                                                    alt="" class="injectable">
                                            </div>
                                            <h4 class="title">Affordable Pricing</h4>
                                        </div>
                                        <p>Be confident in the treatment plan and your doctor’s abilities.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <a href="{{ route('web.contact-us') }}" class="btn">Contact With Us <img
                                src="{{ asset('frontend') }}/assets/img/icon/right_arrow.svg" alt=""
                                class="injectable"></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="choose__shape-wrap">
            <img src="{{ asset('frontend') }}/assets/img/images/choose_shape01.png" alt="shape" class="ribbonRotate">
            <img src="{{ asset('frontend') }}/assets/img/images/choose_shape02.png" alt="shape" data-aos="fade-right"
                data-aos-delay="400">
        </div>
    </section>
    <!-- choose-area-end -->

    <!-- discover-area -->
    <section class="discover__area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8">
                    <div class="section__title text-center mb-40">
                        <span class="sub-title">Discover Our Cities
                            <strong class="shake">
                                <img src="{{ asset('frontend') }}/assets/img/icon/pet_icon02.svg" alt=""
                                    class="injectable">
                            </strong>
                        </span>
                        <h2 class="title">Find Pets by state or province</h2>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse <br> amily and deserves
                            ets are the best care.</p>
                    </div>
                </div>
            </div>
            <div class="row gutter-24">
                @foreach ($cities as $city)
                    <div class="col-lg-6">
                        <div class="discover__item">
                            <div class="discover__item-img">
                                <img src="{{ asset('frontend') }}/assets/img/images/discover_img01.jpg" alt="img">
                            </div>
                            <div class="discover__item-content">
                                <h2 class="title"><a href="contact.html">{{ $city->name }}</a></h2>
                                <span> {{ $city->pets_count }} Pets</span>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
        <div class="discover__shape">
            <img src="{{ asset('frontend') }}/assets/img/images/discover_shape.png" alt="shape" class="ribbonRotate">
        </div>
    </section>
    <!-- discover-area-end -->

    <!-- cta-area -->
    <section class="cta__area fix">
        <div class="container">
            <div class="row align-items-end justify-content-center">
                <div class="col-lg-7">
                    <div class="cta__content">
                        <h2 class="title">Pets are not just animals, they are a part of your family</h2>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse We understand that your
                            furry friend is a treasured membee.</p>
                        <a href="{{ route('web.about-us') }}" class="btn">Read More <img
                                src="{{ asset('frontend') }}/assets/img/icon/right_arrow.svg" alt=""
                                class="injectable"></a>
                        <div class="shape">
                            <img src="{{ asset('frontend') }}/assets/img/images/cta_shape01.png" alt="shape"
                                data-aos="fade-up-right" data-aos-delay="400">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-8">
                    <div class="cta__img">
                        <img src="{{ asset('frontend') }}/assets/img/images/cta_img.png" alt="img">
                        <div class="cta__img-shape">
                            <img src="{{ asset('frontend') }}/assets/img/images/cta_shape02.png" alt="shape"
                                data-aos="fade-down-left" data-aos-delay="400">
                            <img src="{{ asset('frontend') }}/assets/img/images/cta_shape03.png" alt="shape"
                                data-aos="fade-up" data-aos-delay="800">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- cta-area-end -->

    <!-- testimonial-area -->
    <section class="testimonial__area-three">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-5 col-lg-6 col-md-10">
                    <div class="testimonial__img-two">
                        <div class="testimonial__img-mask-two">
                            <img src="{{ asset('frontend') }}/assets/img/images/h3_testimonial_img.jpg" alt="img">
                        </div>
                        <div class="review__box review__box-two">
                            <div class="review__box-shape">
                                <img src="{{ asset('frontend') }}/assets/img/images/review_shape.svg" alt=""
                                    class="injectable">
                            </div>
                            <div class="review__box-content">
                                <img src="{{ asset('frontend') }}/assets/img/icon/star.svg" alt=""
                                    class="injectable">
                                <h2 class="title">1500+</h2>
                                <span>Reviews</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6">
                    <div class="testimonial__content-three">
                        <div class="section__title mb-40">
                            <span class="sub-title">Testimonials
                                <strong class="shake">
                                    <img src="{{ asset('frontend') }}/assets/img/icon/pet_icon02.svg" alt=""
                                        class="injectable">
                                </strong>
                            </span>
                            <h2 class="title">Don't Just Take it From Us, <br> Hear What Our Clients Say:</h2>
                        </div>
                        <div class="swiper testimonial-active-three">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="testimonial__item-three">
                                        <div class="testimonial__item-three-top">
                                            <div class="testimonial__author-three">
                                                <img src="{{ asset('frontend') }}/assets/img/images/h3_testi_author01.png"
                                                    alt="img">
                                            </div>
                                            <div class="content">
                                                <p>“ Duis aute irure dolor in repreerit in voluptate velitesse We
                                                    understand that your irure dolor in repreerit in voluptate just
                                                    about you ”</p>
                                            </div>
                                        </div>
                                        <div class="testimonial__item-three-bottom">
                                            <div class="testimonial__icon-three">
                                                <img src="{{ asset('frontend') }}/assets/img/icon/quote.svg"
                                                    alt="" class="injectable">
                                            </div>
                                            <div class="testimonial__author-info">
                                                <div class="rating">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                                <h4 class="title">Brooklyn Simon</h4>
                                                <span>Designer</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial__item-three">
                                        <div class="testimonial__item-three-top">
                                            <div class="testimonial__author-three">
                                                <img src="{{ asset('frontend') }}/assets/img/images/h3_testi_author01.png"
                                                    alt="img">
                                            </div>
                                            <div class="content">
                                                <p>“ Duis aute irure dolor in repreerit in voluptate velitesse We
                                                    understand that your irure dolor in repreerit in voluptate just
                                                    about you ”</p>
                                            </div>
                                        </div>
                                        <div class="testimonial__item-three-bottom">
                                            <div class="testimonial__icon-three">
                                                <img src="{{ asset('frontend') }}/assets/img/icon/quote.svg"
                                                    alt="" class="injectable">
                                            </div>
                                            <div class="testimonial__author-info">
                                                <div class="rating">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                                <h4 class="title">Brooklyn Simon</h4>
                                                <span>Designer</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial__nav-wrap-two">
                            <button class="testimonial-button-prev"><img
                                    src="{{ asset('frontend') }}/assets/img/icon/right_arrow03.svg" alt=""
                                    class="injectable"></button>
                            <button class="testimonial-button-next"><img
                                    src="{{ asset('frontend') }}/assets/img/icon/right_arrow03.svg" alt=""
                                    class="injectable"></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="testimonial__shape-wrap-three">
            <img src="{{ asset('frontend') }}/assets/img/images/h3_testimonial_shape.png" alt="shape"
                data-aos="fade-down-left" data-aos-delay="400">
        </div>
    </section>
    <!-- testimonial-area-end -->

    <!-- blog-post-area -->
    <section class="blog__post-area-three">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="section__title mb-40">
                        <span class="sub-title">News & Blogs
                            <strong class="shake">
                                <img src="{{ asset('frontend') }}/assets/img/icon/pet_icon02.svg" alt=""
                                    class="injectable">
                            </strong>
                        </span>
                        <h2 class="title">Our Recent Articles</h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="view__all-btn text-end mb-40">
                        <a href="{{ route('web.blogs') }}" class="btn">See All Posts <img
                                src="{{ asset('frontend') }}/assets/img/icon/right_arrow.svg" alt=""
                                class="injectable"></a>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                @foreach ($blogs as $blog)
                    <div class="col-lg-4 col-md-6">

                        <div class="blog__post-item-three shine-animate-item">
                            <div class="blog__post-thumb-three shine-animate">
                                <a href="{{ route('web.single.blog', $blog) }}"><img src="{{ $blog->image }}"
                                        alt="img"></a>
                                <ul class="list-wrap blog__post-tag blog__post-tag-two">
                                    <li><a href="blog.html">Pet</a></li>
                                    <li><a href="blog.html">Medical</a></li>
                                </ul>
                            </div>
                            <div class="blog__post-content-three">
                                <div class="blog__post-meta">
                                    <ul class="list-wrap">
                                        <li><i class="flaticon-calendar"></i>{{ $blog->created_at->diffForHumans() }}</li>
                                        <li><i class="flaticon-user"></i>by <a href="blog-details.html">admin</a></li>
                                    </ul>
                                </div>
                                <h2 class="title"><a
                                        href="{{ route('web.single.blog', $blog) }}">{{ Str::limit($blog->title, 25, '...') }}</a>
                                </h2>
                                <p>{!! Str::limit($blog->description, 50, '...') !!}</p>
                                <a href="{{ route('web.single.blog', $blog) }}" class="btn btn-two">Read More <img
                                        src="{{ asset('frontend') }}/assets/img/icon/right_arrow.svg" alt=""
                                        class="injectable"></a>
                            </div>
                        </div>

                    </div>
                @endforeach

            </div>
        </div>
        <div class="blog__shape-wrap-three">
            <img src="{{ asset('frontend') }}/assets/img/blog/blog_shape01.png" alt="img" data-aos="fade-up-right"
                data-aos-delay="400">
        </div>
    </section>
    <!-- blog-post-area-end -->
@endsection
