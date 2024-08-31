<footer>
    <div class="footer__area">
        <div class="footer__newsletter-three">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="footer__newsletter-content">
                            <h2 class="title">Sign Up For Newsletter!</h2>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <form action="{{ route('admin.subscribers.store') }}" method="POST"
                            class="footer__newsletter-form-two">
                            @method('POST')
                            @csrf
                            <input type="email" id="email" name="email" placeholder="Type Your E-mail">
                            @error('email')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <button type="submit">Subscribe <img
                                    src="{{ asset('frontend') }}/assets/img/icon/right_arrow04.svg" alt=""
                                    class="injectable"></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__top footer__top-three fix">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="footer__widget">
                            <div class="footer__logo align-items-center">
                                <a href="{{ route('web.home') }}"><img src="{{ setting()->site_logo }}" alt="">
                                    <h3 class="text-white">{{ setting()->site_title }}</h3>
                                </a>
                            </div>
                            <div class="footer__content footer__content-two">
                                <p>{{ setting()->site_description }}</p>
                            </div>
                            <div class="footer__social">
                                <h6 class="title">Follow Us On:</h6>
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
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="footer__widget">
                            <h4 class="footer__widget-title">Quick Links</h4>
                            <div class="footer__link">
                                <ul class="list-wrap">
                                    <li><a href="animal.html">Animal Rescue</a></li>
                                    <li><a href="contact.html">Humane Education</a></li>
                                    <li><a href="contact.html">Caregivers</a></li>
                                    <li><a href="blog.html">New & Blog</a></li>
                                    <li><a href="gallery.html">Gallery</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="footer__widget">
                            <h4 class="footer__widget-title">Support</h4>
                            <div class="footer__link">
                                <ul class="list-wrap">
                                    <li><a href="about.html">About us</a></li>
                                    <li><a href="contact.html">Contact us</a></li>
                                    <li><a href="reservation.html">Book Appointment</a></li>
                                    <li><a href="faq.html">FAQ</a></li>
                                    <li><a href="contact.html">Locations</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="footer__widget">
                            <h4 class="footer__widget-title">Contact</h4>
                            <div class="footer__contact">
                                <ul class="list-wrap">
                                    <li>{{ setting()->site_address }}</li>
                                    <li> {{ setting()->site_phone }}</li>
                                    <li> {{ setting()->site_email }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__shape-wrap">
                <img src="{{ asset('frontend') }}/assets/img/images/footer_shape01.png" alt="img"
                    data-aos="fade-up-right" data-aos-delay="400">
                <img src="{{ asset('frontend') }}/assets/img/images/footer_shape02.png" alt="img"
                    data-aos="fade-up-left" data-aos-delay="400">
            </div>
        </div>
        <div class="footer__bottom footer__bottom-two">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="copyright-text copyright-text-three">
                            <p>Copyright © {{ setting()->site_footer }}</p>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="footer__bottom-menu footer__bottom-menu-two">
                            <ul class="list-wrap">
                                @foreach (getPage() as $page)
                                    <li><a href="{{ route('web.singlePage', $page->slug) }}">{{ $page->name }}</a>
                                    </li>
                                @endforeach


                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
