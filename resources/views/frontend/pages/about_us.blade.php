@extends('frontend.layouts.app')
@section('frontend_content')
    <!-- breadcrumb-area -->
    <section class="breadcrumb__area fix">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="breadcrumb__content">
                        <h3 class="title">About Us</h3>
                        <nav class="breadcrumb">
                            <span property="itemListElement" typeof="ListItem">
                                <a href="index.html">Home</a>
                            </span>
                            <span class="breadcrumb-separator"><i class="flaticon-right-arrow-angle"></i></span>
                            <span property="itemListElement" typeof="ListItem">About Us</span>
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

    <!-- about-area -->
    <section class="about__area-four">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <div class="about__img-four">
                        <img src="{{ asset('frontend') }}/assets/img/images/inner_about_img01.jpg" alt="img"
                            data-aos="fade-right" data-aos-delay="400">
                        <img src="{{ asset('frontend') }}/assets/img/images/inner_about_img02.jpg" alt="img"
                            data-aos="fade-left" data-aos-delay="600">
                        <div class="shape">
                            <img src="{{ asset('frontend') }}/assets/img/images/inner_about_shape.png" alt="shape"
                                data-aos="fade-down-left" data-aos-delay="800">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about__content-four">
                        <div class="section__title mb-15">
                            <span class="sub-title">About Us
                                <strong class="shake">
                                    <img src="{{ asset('frontend') }}/assets/img/icon/pet_icon02.svg" alt=""
                                        class="injectable">
                                </strong>
                            </span>
                            <h2 class="title">We'll Make Your Pets <br> Really Happy</h2>
                        </div>
                        <p>We will work with you to develop individualised care plans, including management chronic
                            diseases. We are committed to bein region’s premier healthcare network providing patient.</p>
                        <div class="about__content-inner-two">
                            <div class="experience__box">
                                <div class="experience__box-shape">
                                    <img src="{{ asset('frontend') }}/assets/img/images/experience_shape.svg" alt=""
                                        class="injectable">
                                </div>
                                <div class="experience__box-content">
                                    <h4 class="title">15 <span>Yr</span></h4>
                                    <p>Experience</p>
                                </div>
                            </div>
                            <div class="introducing__list-box introducing__list-box-two">
                                <ul class="list-wrap">
                                    <li>
                                        <span class="icon">
                                            <img src="{{ asset('frontend') }}/assets/img/icon/check_icon02.svg"
                                                alt="" class="injectable">
                                        </span>
                                        Over 10 years of experience
                                    </li>
                                    <li>
                                        <span class="icon">
                                            <img src="{{ asset('frontend') }}/assets/img/icon/check_icon02.svg"
                                                alt="" class="injectable">
                                        </span>
                                        20 talented vets ready to help you
                                    </li>
                                    <li>
                                        <span class="icon">
                                            <img src="{{ asset('frontend') }}/assets/img/icon/check_icon02.svg"
                                                alt="" class="injectable">
                                        </span>
                                        High-quality products only
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <p>We will work with you to develop individualised care plans, including management chronic
                            diseases. We are committed to bein region’s premier healthcare network providing patient.</p>
                        <a href="contact.html" class="btn">Read More <img
                                src="{{ asset('frontend') }}/assets/img/icon/right_arrow.svg" alt=""
                                class="injectable"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-area-end -->

    <!-- why-we-are-area -->
    <section class="why__we-are-area-two">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section__title text-center mb-40">
                        <span class="sub-title">Why we are the best
                            <strong class="shake">
                                <img src="{{ asset('frontend') }}/assets/img/icon/pet_icon02.svg" alt=""
                                    class="injectable">
                            </strong>
                        </span>
                        <h2 class="title">See How Petpal can Help</h2>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse <br> amily and deserves ets are
                            the best care.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="why__we-are-item">
                        <div class="why__we-are-item-icon">
                            <img src="{{ asset('frontend') }}/assets/img/icon/why_icon01.svg" alt=""
                                class="injectable">
                        </div>
                        <div class="why__we-are-item-content">
                            <h4 class="title">Health Guarantee</h4>
                            <p>Duis aute irure dolor in reprehenderit voluptate velit essed eservesets are their health best
                                care</p>
                        </div>
                        <div class="why__we-are-item-shape">
                            <div class="shape-one">
                                <img src="{{ asset('frontend') }}/assets/img/images/why_item_shape01.svg" alt=""
                                    class="injectable">
                            </div>
                            <div class="shape-two">
                                <img src="{{ asset('frontend') }}/assets/img/images/why_item_shape02.svg" alt=""
                                    class="injectable">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="why__we-are-item">
                        <div class="why__we-are-item-icon">
                            <img src="{{ asset('frontend') }}/assets/img/icon/why_icon02.svg" alt=""
                                class="injectable">
                        </div>
                        <div class="why__we-are-item-content">
                            <h4 class="title">Ethical breeding</h4>
                            <p>Duis aute irure dolor in reprehenderit voluptate velit essed eservesets are their health best
                                care</p>
                        </div>
                        <div class="why__we-are-item-shape">
                            <div class="shape-one">
                                <img src="{{ asset('frontend') }}/assets/img/images/why_item_shape01.svg" alt=""
                                    class="injectable">
                            </div>
                            <div class="shape-two">
                                <img src="{{ asset('frontend') }}/assets/img/images/why_item_shape02.svg" alt=""
                                    class="injectable">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="why__we-are-item">
                        <div class="why__we-are-item-icon">
                            <img src="{{ asset('frontend') }}/assets/img/icon/why_icon03.svg" alt=""
                                class="injectable">
                        </div>
                        <div class="why__we-are-item-content">
                            <h4 class="title">Transparent Policy</h4>
                            <p>Duis aute irure dolor in reprehenderit voluptate velit essed eservesets are their health best
                                care</p>
                        </div>
                        <div class="why__we-are-item-shape">
                            <div class="shape-one">
                                <img src="{{ asset('frontend') }}/assets/img/images/why_item_shape01.svg" alt=""
                                    class="injectable">
                            </div>
                            <div class="shape-two">
                                <img src="{{ asset('frontend') }}/assets/img/images/why_item_shape02.svg" alt=""
                                    class="injectable">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="why__shape-wrap">
            <img src="{{ asset('frontend') }}/assets/img/images/h2_why_shape01.png" alt="shape"
                data-aos="fade-down-right" data-aos-delay="400">
            <img src="{{ asset('frontend') }}/assets/img/images/h2_why_shape02.png" alt="shape" class="ribbonRotate">
        </div>
    </section>
    <!-- why-we-are-area-end -->

    <!-- counter-area -->
    <div class="counter__area-two counter__area-bg"
        data-background="{{ asset('frontend') }}/assets/img/bg/counter_bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="counter__item-two">
                        <div class="counter__item-shape">
                            <img src="{{ asset('frontend') }}/assets/img/images/h2_counter_shape.png" alt="">
                        </div>
                        <span class="count odometer" data-count="{{ $pets }}"></span>
                        <p>Total Pets</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="counter__item-two">
                        <div class="counter__item-shape">
                            <img src="{{ asset('frontend') }}/assets/img/images/h2_counter_shape.png" alt="">
                        </div>
                        <span class="count odometer" data-count="{{ $cities }}"></span>
                        <p>New Listed States</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="counter__item-two">
                        <div class="counter__item-shape">
                            <img src="{{ asset('frontend') }}/assets/img/images/h2_counter_shape.png" alt="">
                        </div>
                        <span class="count odometer" data-count="{{ $categories }}"></span>
                        <p>All Categories</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="counter__item-two">
                        <div class="counter__item-shape">
                            <img src="{{ asset('frontend') }}/assets/img/images/h2_counter_shape.png" alt="">
                        </div>
                        <span class="count odometer" data-count="{{ $blogs }}"></span>
                        <p>Total Blogs</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- counter-area-end -->

    <!-- team-area -->
    <section class="team__area-two">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section__title text-center mb-40">
                        <span class="sub-title">WE CHANGE YOUR LIFE & WORLD
                            <strong class="shake">
                                <img src="{{ asset('frontend') }}/assets/img/icon/pet_icon02.svg" alt=""
                                    class="injectable">
                            </strong>
                        </span>
                        <h2 class="title">We’re dedicated to excellent <br> service and care</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                    <div class="team__item">
                        <div class="team__item-img">
                            <div class="mask-img-wrap">
                                <img src="{{ asset('frontend') }}/assets/img/team/team_img01.jpg" alt="img">
                            </div>
                            <div class="team__item-img-shape">
                                <div class="shape-one">
                                    <img src="{{ asset('frontend') }}/assets/img/team/team_img_shape01.svg"
                                        alt="" class="injectable">
                                </div>
                                <div class="shape-two">
                                    <img src="{{ asset('frontend') }}/assets/img/team/team_img_shape02.svg"
                                        alt="" class="injectable">
                                </div>
                            </div>
                            <div class="team__social">
                                <ul class="list-wrap">
                                    <li>
                                        <a href="https://www.facebook.com/" target="_blank"><i
                                                class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://www.whatsapp.com/" target="_blank"><i
                                                class="fab fa-whatsapp"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/" target="_blank"><i
                                                class="fab fa-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://www.youtube.com/" target="_blank"><i
                                                class="fab fa-youtube"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="team__item-content">
                            <h4 class="title"><a href="team-details.html">Daria Andaloro</a></h4>
                            <span>Veterinary Technician</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                    <div class="team__item">
                        <div class="team__item-img">
                            <div class="mask-img-wrap">
                                <img src="{{ asset('frontend') }}/assets/img/team/team_img02.jpg" alt="img">
                            </div>
                            <div class="team__item-img-shape">
                                <div class="shape-one">
                                    <img src="{{ asset('frontend') }}/assets/img/team/team_img_shape01.svg"
                                        alt="" class="injectable">
                                </div>
                                <div class="shape-two">
                                    <img src="{{ asset('frontend') }}/assets/img/team/team_img_shape02.svg"
                                        alt="" class="injectable">
                                </div>
                            </div>
                            <div class="team__social">
                                <ul class="list-wrap">
                                    <li>
                                        <a href="https://www.facebook.com/" target="_blank"><i
                                                class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://www.whatsapp.com/" target="_blank"><i
                                                class="fab fa-whatsapp"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/" target="_blank"><i
                                                class="fab fa-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://www.youtube.com/" target="_blank"><i
                                                class="fab fa-youtube"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="team__item-content">
                            <h4 class="title"><a href="team-details.html">Michael Brian</a></h4>
                            <span>Medicine Specialist</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                    <div class="team__item">
                        <div class="team__item-img">
                            <div class="mask-img-wrap">
                                <img src="{{ asset('frontend') }}/assets/img/team/team_img03.jpg" alt="img">
                            </div>
                            <div class="team__item-img-shape">
                                <div class="shape-one">
                                    <img src="{{ asset('frontend') }}/assets/img/team/team_img_shape01.svg"
                                        alt="" class="injectable">
                                </div>
                                <div class="shape-two">
                                    <img src="{{ asset('frontend') }}/assets/img/team/team_img_shape02.svg"
                                        alt="" class="injectable">
                                </div>
                            </div>
                            <div class="team__social">
                                <ul class="list-wrap">
                                    <li>
                                        <a href="https://www.facebook.com/" target="_blank"><i
                                                class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://www.whatsapp.com/" target="_blank"><i
                                                class="fab fa-whatsapp"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/" target="_blank"><i
                                                class="fab fa-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://www.youtube.com/" target="_blank"><i
                                                class="fab fa-youtube"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="team__item-content">
                            <h4 class="title"><a href="team-details.html">Kenroly Gajon</a></h4>
                            <span>Food Technician</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                    <div class="team__item">
                        <div class="team__item-img">
                            <div class="mask-img-wrap">
                                <img src="{{ asset('frontend') }}/assets/img/team/team_img04.jpg" alt="img">
                            </div>
                            <div class="team__item-img-shape">
                                <div class="shape-one">
                                    <img src="{{ asset('frontend') }}/assets/img/team/team_img_shape01.svg"
                                        alt="" class="injectable">
                                </div>
                                <div class="shape-two">
                                    <img src="{{ asset('frontend') }}/assets/img/team/team_img_shape02.svg"
                                        alt="" class="injectable">
                                </div>
                            </div>
                            <div class="team__social">
                                <ul class="list-wrap">
                                    <li>
                                        <a href="https://www.facebook.com/" target="_blank"><i
                                                class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://www.whatsapp.com/" target="_blank"><i
                                                class="fab fa-whatsapp"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/" target="_blank"><i
                                                class="fab fa-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://www.youtube.com/" target="_blank"><i
                                                class="fab fa-youtube"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="team__item-content">
                            <h4 class="title"><a href="team-details.html">Lizay Arianya</a></h4>
                            <span>Veterinary Technician</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team__bottom-content">
                <p>Our Valuable Expert Doctors Team</p>
                <a href="team.html" class="btn">See All Team <img
                        src="{{ asset('frontend') }}/assets/img/icon/right_arrow.svg" alt=""
                        class="injectable"></a>
            </div>
        </div>
        <div class="team__shape-two">
            <img src="{{ asset('frontend') }}/assets/img/team/h2_team_shape.png" alt="img" class="ribbonRotate">
        </div>
    </section>
    <!-- team-area-end -->
@endsection
