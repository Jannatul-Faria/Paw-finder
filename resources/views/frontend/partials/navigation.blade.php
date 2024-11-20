<div class="row">
    <div class="col-lg-12">
        <div class="tgmenu__wrap">
            <div class="row align-items-center">
                <div class="col-xl-2 col-md-4">
                    <div class="logo text-center">
                        <a href="{{ route('web.home') }}"><img src="{{ $settings?->site_logo }}" alt="Logo"
                                style="width: 70px">
                            <h2>{{ $settings?->site_title }} </h2>

                        </a>
                    </div>
                </div>
                <div class="col-xl-5">
                    <div class="tgmenu__navbar-wrap tgmenu__main-menu d-none d-xl-flex">
                        <ul class="navigation">
                            <li><a href="{{ route('web.home') }}">Home</a></li>
                            <li><a href="{{ route('web.pets') }}">Pets</a></li>
                            <li><a href="{{ route('web.blogs') }}">Blogs</a></li>
                            <li><a href="{{ route('web.about-us') }}">About</a></li>
                            <li><a href="{{ route('web.contact-us') }}">contacts</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-xl-5 col-md-8">
                    <div class="tgmenu__action tgmenu__action-two d-none d-md-block">
                        <ul class="list-wrap">
                            <li class="header-search">
                                <a href="javascript:void(0)" class="search-open-btn">
                                    <i class="flaticon-loupe"></i>
                                </a>
                            </li>
                            <li class="header-cart">
                                <a href="javascript:void(0)">
                                    <i class="fas fa-calendar-plus"></i>
                                </a>
                            </li>
                            @if (Route::has('login'))
                                @auth
                                    <li class="header-btn"><a href="{{ route('web.home') }}" class="btn rounded-md">
                                            Home
                                        </a></li>
                                    <li class="header-btn"><a href="{{ route('user-dashboard') }}" class="btn rounded-md">
                                            Dashboard
                                        </a></li>
                                @else
                                    <li class="header-btn login-btn"><a href="{{ route('login') }}" class="btn"><i
                                                class="flaticon-locked"></i>Login</a></li>


                                    @if (Route::has('register'))
                                        <li class="header-btn register-btn"><a href="{{ route('register') }}"
                                                class="btn"><i class="flaticon-user"></i>Register</a></li>
                                    @endif
                                @endauth
                            @endif

                        </ul>
                    </div>
                </div>
            </div>
            <div class="mobile-nav-toggler">
                <i class="flaticon-layout"></i>
            </div>
        </div>

        <!-- Mobile Menu  -->
        <div class="tgmobile__menu">
            <nav class="tgmobile__menu-box">
                <div class="close-btn"><i class="fas fa-times"></i></div>
                <div class="nav-logo">
                    <a href="{{ route('web.home') }}"><img src="{{ $settings?->site_logo }}" alt="Logo">
                        <h6>{{ $settings?->site_title }}
                        </h6>
                    </a>

                </div>
                <div class="tgmobile__search">
                    <form action="#">
                        <input type="text" placeholder="Search here...">
                        <button><i class="fas fa-search"></i></button>
                    </form>
                </div>
                <div class="tgmobile__menu-outer">
                    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                </div>
                <div class="social-links">
                    <ul class="list-wrap">
                        <li><a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li><a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="https://www.whatsapp.com/" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
                        <li><a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li><a href="https://www.youtube.com/" target="_blank"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="tgmobile__menu-backdrop"></div>
        <!-- End Mobile Menu -->
    </div>
</div>
