@extends('frontend.layouts.app')
@section('frontend_content')
    <!-- breadcrumb-area -->
    <section class="breadcrumb__area fix">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="breadcrumb__content">
                        <h3 class="title">Our Latest Blogs</h3>
                        <nav class="breadcrumb">
                            <span property="itemListElement" typeof="ListItem">
                                <a href="index.html">Home</a>
                            </span>
                            <span class="breadcrumb-separator"><i class="flaticon-right-arrow-angle"></i></span>
                            <span property="itemListElement" typeof="ListItem">All Blogs</span>
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

    <!-- blog-area -->
    <section class="blog__area pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-8 order-0 order-lg-2">
                    <div class="row">
                        @foreach ($blogs as $blog)
                            <div class="col-md-6">
                                <div class="blog__post-item-three blog__post-item-five shine-animate-item">
                                    <div class="blog__post-thumb-three blog__post-thumb-five shine-animate">
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
                                                <li><i
                                                        class="flaticon-calendar"></i>{{ $blog->created_at->diffForHumans() }}
                                                </li>
                                                <li><i class="flaticon-user"></i>by <a
                                                        href="{{ route('web.single.blog', $blog) }}">admin</a></li>
                                            </ul>
                                        </div>
                                        <h2 class="title"><a
                                                href="{{ route('web.single.blog', $blog) }}">{{ $blog->title }}</a>
                                        </h2>
                                        <p>{!! Str::limit($blog->description, 30, '...') !!}</p>
                                        <a href="{{ route('web.single.blog', $blog) }}" class="btn">Read More <img
                                                src="{{ asset('frontend') }}/assets/img/icon/right_arrow.svg"
                                                alt="" class="injectable"></a>
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
                                @foreach ($blogs as $blog)
                                    <div class="rc-post-item">
                                        <div class="thumb">
                                            <a href="{{ route('web.single.blog', $blog) }}"><img src="{{ $blog->image }}"
                                                    alt="img"></a>
                                        </div>
                                        <div class="content">
                                            <h4 class="title"><a
                                                    href="{{ route('web.single.blog', $blog) }}">{{ Str::limit($blog->title, 10, '...') }}</a>
                                            </h4>
                                            <span class="date"><i
                                                    class="flaticon-calendar"></i>{{ $blog->created_at->diffForHumans() }}</span>
                                        </div>
                                    </div>
                                @endforeach



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
    <!-- blog-area-end -->
@endsection
