@extends('frontend.layouts.app')
@section('frontend_content')
    <!-- breadcrumb-area -->
    <section class="breadcrumb__area fix">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="breadcrumb__content">
                        <h3 class="title">Contact Page</h3>
                        <nav class="breadcrumb">
                            <span property="itemListElement" typeof="ListItem">
                                <a href="index.html">Home</a>
                            </span>
                            <span class="breadcrumb-separator"><i class="flaticon-right-arrow-angle"></i></span>
                            <span property="itemListElement" typeof="ListItem">Contact</span>
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

    <!-- contact-area -->
    <section class="contact__area">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="contact__content">
                        <div class="section__title mb-30">
                            <h2 class="title">We Are Always Available For You & Your Pets</h2>
                            <p>Maecenas quis viverra metus, et efficitur ligula. Nam coueaugue congue sed luctus lectus
                                conIn onondimentum .</p>
                        </div>
                        <div class="contact__info-wrap">
                            <h6 class="title">Information:</h6>
                            <ul class="list-wrap">
                                <li>
                                    <div class="icon">
                                        <i class="flaticon-phone"></i>
                                    </div>
                                    <a href="{{ $settings?->site_phone }}">{{ $settings?->site_phone }}</a>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="flaticon-placeholder"></i>
                                    </div>
                                    {{ $settings?->site_address }}
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="flaticon-mail"></i>
                                    </div>
                                    <a href="{{ $settings?->site_email }}">{{ $settings?->site_email }}</a>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-share-alt"></i>
                                    </div>
                                    <ul class="list-wrap contact__social">
                                        <li><a href="https://www.facebook.com/" target="_blank"><i
                                                    class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="https://twitter.com/" target="_blank"><i
                                                    class="fab fa-twitter"></i></a></li>
                                        <li><a href="https://www.instagram.com/" target="_blank"><i
                                                    class="fab fa-instagram"></i></a></li>
                                        <li><a href="https://www.linkdin.com/" target="_blank"><i
                                                    class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="contact__form-wrap">
                        <form action="https://themedox.com/demo/petpal/{{ asset('frontend') }}/assets/mail.php"
                            method="POST" id="contact-form" class="contact__form">
                            <h2 class="title">Post a comment</h2>
                            <span>Your email address will not be published. Required fields are marked *</span>
                            <div class="row gutter-20">
                                <div class="col-md-6">
                                    <div class="form-grp">
                                        <input name="name" type="text" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-grp">
                                        <input name="email" type="email" placeholder="E-mail">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-grp">
                                        <input name="website" type="url" placeholder="Website">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-grp">
                                        <textarea name="message" placeholder="Message"></textarea>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn">Send Us Message <img
                                    src="{{ asset('frontend') }}/assets/img/icon/right_arrow.svg" alt=""
                                    class="injectable"></button>
                        </form>
                        <p class="ajax-response mb-0"></p>
                    </div>
                </div>
            </div>
            <!-- contact-map -->
            <div class="contact-map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48409.69813174607!2d-74.05163325136718!3d40.68264649999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25bae694479a3%3A0xb9949385da52e69e!2sBarclays%20Center!5e0!3m2!1sen!2sbd!4v1684309529719!5m2!1sen!2sbd"
                    style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <!-- contact-map-end -->
        </div>
    </section>
    <!-- contact-area-end -->
@endsection
