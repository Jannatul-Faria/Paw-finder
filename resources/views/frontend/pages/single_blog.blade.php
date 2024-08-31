@extends('frontend.layouts.app')
@section('frontend_content')
    <!-- breadcrumb-area -->
    <section class="breadcrumb__area fix">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="breadcrumb__content">
                        <h3 class="title">Blog Details</h3>
                        <nav class="breadcrumb">
                            <span property="itemListElement" typeof="ListItem">
                                <a href="index.html">Home</a>
                            </span>
                            <span class="breadcrumb-separator"><i class="flaticon-right-arrow-angle"></i></span>
                            <span property="itemListElement" typeof="ListItem">Blog Details</span>
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

    <!-- blog-details-area -->
    <section class="blog__details-area pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-8 order-0 order-lg-2">
                    <div class="blog__details-wrap">
                        <div class="blog__details-thumb">
                            <img src="{{ $blog->image }}" alt="img"
                                style="width: 100%; height: 550px; object-fit: cover;">
                        </div>
                        <div class="blog__details-content">
                            <h2 class="title">{{ $blog->title }}</h2>
                            <div class="blog__post-meta">
                                <ul class="list-wrap">
                                    <li><i class="flaticon-user"></i>by <a href="blog-details.html">admin</a></li>
                                    <li><i class="flaticon-calendar"></i>{{ $blog->created_at->diffForHumans() }}</li>
                                    <li>
                                        <i class="fas fa-tags"></i>
                                        <a href="blog.html">Pet,</a>
                                        <a href="blog.html">Medical</a>
                                    </li>
                                    <li><i class="far fa-comment-alt"></i><a href="blog-details.html">05 Comments</a></li>
                                </ul>
                            </div>
                            <p>{!! $blog->description !!}</p>
                            <div class="blog__details-content-bottom">
                                <div class="row align-items-center">
                                    <div class="col-md-7">
                                        <div class="post-tags">
                                            <h5 class="title">Tags:</h5>
                                            <ul class="list-wrap">
                                                @foreach ($categories as $category)
                                                    <li><a href="#">{{ $category->name }}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="blog-post-share">
                                            <h5 class="title">Share:</h5>
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
                            </div>
                        </div>
                    </div>
                    <div class="blog-avatar-wrap">
                        <div class="blog-avatar-img">
                            <a href="team-details.html"><img src="{{ asset('frontend') }}/assets/img/blog/avatar.png"
                                    alt="img"></a>
                        </div>
                        <div class="blog-avatar-info">
                            <span class="designation">Author</span>
                            <h4 class="name"><a href="#">Parker Willy</a></h4>
                            <p>Finanappreciate your trust greatly Our clients choose dentace ducr emaining essential yearl
                                ow we are the best area Awaitingare really.</p>
                        </div>
                    </div>

                </div>
                <div class="col-xl-3 col-lg-4">
                    <aside class="blog-sidebar">
                        <div class="blog-widget">
                            <h4 class="widget-title">Search</h4>
                            <div class="sidebar-search-form">
                                <form action="#">
                                    <input type="text" placeholder="Type Keywords. . .">
                                    <button type="submit"><i class="flaticon-loupe"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="blog-widget">
                            <h4 class="widget-title">Categories</h4>
                            <div class="sidebar-cat-list">
                                <ul class="list-wrap">
                                    @foreach ($categories as $category)
                                        <li><a href="#">{{ $category->name }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="blog-widget">
                            <h4 class="widget-title">Recent Post</h4>
                            <div class="rc-post-wrap">
                                <div class="rc-post-item">
                                    <div class="thumb">
                                        <a href="blog-details.html"><img
                                                src="{{ asset('frontend') }}/assets/img/blog/rc_post01.jpg"
                                                alt="img"></a>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="blog-details.html">weuine easiure and praising</a>
                                        </h4>
                                        <span class="date"><i class="flaticon-calendar"></i>Sep 15, 2024</span>
                                    </div>
                                </div>
                                <div class="rc-post-item">
                                    <div class="thumb">
                                        <a href="blog-details.html"><img
                                                src="{{ asset('frontend') }}/assets/img/blog/rc_post02.jpg"
                                                alt="img"></a>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="blog-details.html">how to pursue pleasure
                                                rationally</a></h4>
                                        <span class="date"><i class="flaticon-calendar"></i>Sep 15, 2024</span>
                                    </div>
                                </div>
                                <div class="rc-post-item">
                                    <div class="thumb">
                                        <a href="blog-details.html"><img
                                                src="{{ asset('frontend') }}/assets/img/blog/rc_post03.jpg"
                                                alt="img"></a>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="blog-details.html">there anyone who loves</a></h4>
                                        <span class="date"><i class="flaticon-calendar"></i>Sep 15, 2024</span>
                                    </div>
                                </div>
                                <div class="rc-post-item">
                                    <div class="thumb">
                                        <a href="blog-details.html"><img
                                                src="{{ asset('frontend') }}/assets/img/blog/rc_post04.jpg"
                                                alt="img"></a>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="blog-details.html">New occasionally circumstances</a>
                                        </h4>
                                        <span class="date"><i class="flaticon-calendar"></i>Sep 15, 2024</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-widget">
                            <h4 class="widget-title">Tags</h4>
                            <div class="sidebar-tag-list">
                                <ul class="list-wrap">
                                    <li><a href="#">Dogs</a></li>
                                    <li><a href="#">Pet Care</a></li>
                                    <li><a href="#">Cats</a></li>
                                    <li><a href="#">Modern Lab</a></li>
                                    <li><a href="#">Expert Vet</a></li>
                                    <li><a href="#">Grooming</a></li>
                                    <li><a href="#">Caring</a></li>
                                </ul>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!-- blog-details-area-end -->
@endsection
