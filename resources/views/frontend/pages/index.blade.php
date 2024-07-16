@extends('layouts.app')
@section('title', 'Home')
@section('content')
<!-- breaking news start -->
<div class="breaking-news">
    <div class="container">
        <div class="breaking-title" style="background-image: url('{{asset('/')}}frontend/assets/img/banner/01.png')">Breaking News</div>
        <div class="breaking-news-slider nav-style-base owl-carousel">
            <div class="item">
                <p>Another Big Apartment Project Slated for Broad Ripple Company...</p>
            </div>
            <div class="item">
                <p>Another Big Apartment Project Slated for Broad Ripple Company...</p>
            </div>
        </div>
    </div>
</div>
<!-- breaking news end -->

<!-- banner area start -->
<div class="banner-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="single-post-wrap">
                    <div class="thumb">
                        <img src="{{asset('/')}}frontend/assets/img/post/42.png" alt="img">
                        <a class="tag-base tag-purple" href="cat-lifestyle.html">Lifestyle</a>
                    </div>
                    <div class="details">
                        <div class="post-meta-single mb-1">
                            <ul>
                                <li><i class="fa fa-user"></i>Magpie</li>
                                <li><i class="fa fa-clock-o"></i> April 7, 2021</li>
                            </ul>
                        </div>
                        <h6 class="title"><a href="blog-details.html">Magpie Fast UX Research An Easier Speed Up The</a></h6>
                    </div>
                </div>
                <div class="single-post-wrap">
                    <div class="thumb">
                        <img src="{{asset('/')}}frontend/assets/img/post/43.png" alt="img">
                        <a class="tag-base tag-red" href="cat-fashion.html">Music</a>
                    </div>
                    <div class="details">
                        <div class="post-meta-single mb-1">
                            <ul>
                                <li><i class="fa fa-user"></i>Magpie</li>
                                <li><i class="fa fa-clock-o"></i> April 7, 2021</li>
                            </ul>
                        </div>
                        <h6 class="title"><a href="blog-details.html">An Easier Speed Up The Fast UX Research Magpie</a></h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="single-post-wrap">
                    <div class="thumb">
                        <img src="{{asset('/')}}frontend/assets/img/banner/2.png" alt="img">
                        <a class="tag-base tag-red" href="cat-fashion.html">HEALTH</a>
                    </div>
                    <div class="details">
                        <div class="post-meta-single mb-1">
                            <ul>
                                <li><i class="fa fa-user"></i>Magpie</li>
                                <li><i class="fa fa-clock-o"></i> April 7, 2021</li>
                            </ul>
                        </div>
                        <h5 class="title"><a href="blog-details.html">Fast UX Research An Easier Way To Engage Stakeholders And Speed Up The Research Process</a></h5>
                        <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a ...</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="single-post-wrap">
                    <div class="thumb">
                        <img src="{{asset('/')}}frontend/assets/img/post/44.png" alt="img">
                        <a class="tag-base tag-green" href="cat-fashion.html">Fashion</a>
                    </div>
                    <div class="details">
                        <div class="post-meta-single mb-1">
                            <ul>
                                <li><i class="fa fa-user"></i>Magpie</li>
                                <li><i class="fa fa-clock-o"></i> April 7, 2021</li>
                            </ul>
                        </div>
                        <h6 class="title"><a href="blog-details.html">Fashion UX Research An Easier Speed Up The</a></h6>
                    </div>
                </div>
                <div class="single-post-wrap">
                    <div class="thumb">
                        <img src="{{asset('/')}}frontend/assets/img/post/45.png" alt="img">
                        <a class="tag-base tag-blue" href="cat-fashion.html">Business</a>
                    </div>
                    <div class="details">
                        <div class="post-meta-single mb-1">
                            <ul>
                                <li><i class="fa fa-user"></i>Magpie</li>
                                <li><i class="fa fa-clock-o"></i> April 7, 2021</li>
                            </ul>
                        </div>
                        <h6 class="title"><a href="blog-details.html">Business Fast An Easier Speed Up The April</a></h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- banner area end -->

<!-- trending area end -->
<div class="trending-area pd-top-30 pd-bottom-30">
    <div class="container">
        <div class="section-title style-two">
            <h6 class="title">Trending News</h6>
        </div>
        <div class="trending-slider dots-style-base nav-right-top owl-carousel">
            <div class="item">
                <div class="single-post-wrap">
                    <div class="thumb">
                        <img src="{{asset('/')}}frontend/assets/img/post/46.png" alt="img">
                    </div>
                    <div class="details">
                        <a class="tag-base tag-blue mb-3" href="cat-tech.html">Tech</a>
                        <h6 class="title mb-2"><a href="blog-details.html">Maluma Collaborated With Balmain on a Miami Vice–Style Capsule</a></h6>
                        <div class="post-meta-single">
                            <ul>
                                <li><i class="fa fa-user"></i>Magpie</li>
                                <li><i class="fa fa-clock-o"></i> April 7, 2021</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="single-post-wrap">
                    <div class="thumb">
                        <img src="{{asset('/')}}frontend/assets/img/post/45.png" alt="img">
                    </div>
                    <div class="details">
                        <a class="tag-base tag-blue mb-3" href="cat-fashion.html">Business</a>
                        <h6 class="title mb-2"><a href="blog-details.html">Balmain on a Miami Vice–Style Capsule Aaluma Collaborated With</a></h6>
                        <div class="post-meta-single">
                            <ul>
                                <li><i class="fa fa-user"></i>Magpie</li>
                                <li><i class="fa fa-clock-o"></i> April 7, 2021</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="single-post-wrap">
                    <div class="thumb">
                        <img src="{{asset('/')}}frontend/assets/img/post/43.png" alt="img">
                    </div>
                    <div class="details">
                        <a class="tag-base tag-red mb-3" href="cat-fashion.html">Music</a>
                        <h6 class="title mb-2"><a href="blog-details.html">Vice–Style Capsule Collaborated With Balmain on a Miami </a></h6>
                        <div class="post-meta-single">
                            <ul>
                                <li><i class="fa fa-user"></i>Magpie</li>
                                <li><i class="fa fa-clock-o"></i> April 7, 2021</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="single-post-wrap">
                    <div class="thumb">
                        <img src="{{asset('/')}}frontend/assets/img/post/33.png" alt="img">
                    </div>
                    <div class="details">
                        <a class="tag-base tag-red mb-3" href="cat-fashion.html">Health</a>
                        <h6 class="title mb-2"><a href="blog-details.html">Maluma Collaborated With Balmain on a Miami Vice–Style Capsule</a></h6>
                        <div class="post-meta-single">
                            <ul>
                                <li><i class="fa fa-user"></i>Magpie</li>
                                <li><i class="fa fa-clock-o"></i> April 7, 2021</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- trending area end -->

<!-- populer area start -->
<div class="populer-area bg-sky pd-top-55 pd-bottom-25">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="section-title style-two">
                    <h6 class="title">Popular News</h6>
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="single-post-wrap">
                            <div class="thumb">
                                <img src="{{asset('/')}}frontend/assets/img/banner/3.png" alt="img">
                                <a class="tag-base tag-purple" href="cat-fashion.html">Fashion</a>
                            </div>
                            <div class="details">
                                <div class="post-meta-single mb-1">
                                    <ul>
                                        <li><i class="fa fa-user"></i>Magpie</li>
                                        <li><i class="fa fa-clock-o"></i> April 7, 2021</li>
                                    </ul>
                                </div>
                                <h5 class="title"><a href="blog-details.html">Fashion UX Research An Easier Way To Engage And Speed Up The Research Process</a></h5>
                                <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a ...</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-post-wrap">
                            <div class="thumb">
                                <img src="{{asset('/')}}frontend/assets/img/post/47.png" alt="img">
                                <a class="tag-base tag-blue" href="cat-tech.html">Tech</a>
                            </div>
                            <div class="details">
                                <div class="post-meta-single mb-1">
                                    <ul>
                                        <li><i class="fa fa-user"></i>Magpie</li>
                                        <li><i class="fa fa-clock-o"></i> April 7, 2021</li>
                                    </ul>
                                </div>
                                <h6 class="title"><a href="blog-details.html">Tech UX Research An Easier Speed Up The</a></h6>
                            </div>
                        </div>
                        <div class="single-post-wrap">
                            <div class="thumb">
                                <img src="{{asset('/')}}frontend/assets/img/post/45.png" alt="img">
                                <a class="tag-base tag-blue" href="cat-fashion.html">Business</a>
                            </div>
                            <div class="details">
                                <div class="post-meta-single mb-1">
                                    <ul>
                                        <li><i class="fa fa-user"></i>Magpie</li>
                                        <li><i class="fa fa-clock-o"></i> April 7, 2021</li>
                                    </ul>
                                </div>
                                <h6 class="title"><a href="blog-details.html">Business on Research An Easier Speed Up The</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="section-title style-two">
                    <h6 class="title">Top Stories</h6>
                </div>
                <div class="widget-tab-inner">
                    <div class="nxp-tab-inner-2 nxp-tab-post">
                        <ul class="nav nav-tabs" id="enx1" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="enx1-tab-1" data-toggle="pill" href="#enx1-tabs-1" role="tab" aria-selected="true">
                                    <i class="fa fa-clock-o"></i> All
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="enx1-tab-2" data-toggle="pill" href="#enx1-tabs-2" role="tab" aria-selected="false">
                                    <i class="fa fa-heart-o"></i> Lifestyle        
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content" id="enx1-content">
                        <div class="tab-pane fade show active" id="enx1-tabs-1" role="tabpanel">
                            <ul class="p-0 m-0">
                                <li>
                                    <div class="single-post-wrap">
                                        <div class="details">
                                            <h6 class="title mb-1"><a href="blog-details.html">An Easier Speed Up The Fast UX Research</a></h6>
                                            <div class="post-meta-single">
                                                <ul>
                                                    <li><i class="fa fa-user"></i>Magpie</li>
                                                    <li><i class="fa fa-clock-o"></i> April 7, 2021</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="single-post-wrap">
                                        <div class="details">
                                            <h6 class="title mb-1"><a href="blog-details.html">Research An Easier Speed Fast UX Up The</a></h6>
                                            <div class="post-meta-single">
                                                <ul>
                                                    <li><i class="fa fa-user"></i>Magpie</li>
                                                    <li><i class="fa fa-clock-o"></i> April 7, 2021</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="single-post-wrap">
                                        <div class="details">
                                            <h6 class="title mb-1"><a href="blog-details.html">Speed Up The Fast UX Research An Easier </a></h6>
                                            <div class="post-meta-single">
                                                <ul>
                                                    <li><i class="fa fa-user"></i>Magpie</li>
                                                    <li><i class="fa fa-clock-o"></i> April 7, 2021</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="single-post-wrap">
                                        <div class="details">
                                            <h6 class="title mb-1"><a href="blog-details.html">Fast UX Research An Easier Speed Up The</a></h6>
                                            <div class="post-meta-single">
                                                <ul>
                                                    <li><i class="fa fa-user"></i>Magpie</li>
                                                    <li><i class="fa fa-clock-o"></i> April 7, 2021</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="single-post-wrap">
                                        <div class="details">
                                            <h6 class="title mb-1"><a href="blog-details.html">Fast UX Research An Easier Speed Up The</a></h6>
                                            <div class="post-meta-single">
                                                <ul>
                                                    <li><i class="fa fa-user"></i>Magpie</li>
                                                    <li><i class="fa fa-clock-o"></i> April 7, 2021</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane fade show" id="enx1-tabs-2" role="tabpanel">
                            <ul class="p-0 m-0">
                                <li>
                                    <div class="single-post-wrap">
                                        <div class="details">
                                            <h6 class="title mb-1"><a href="blog-details.html">Fast UX Research An Easier Speed Up The</a></h6>
                                            <div class="post-meta-single">
                                                <ul>
                                                    <li><i class="fa fa-user"></i>Magpie</li>
                                                    <li><i class="fa fa-clock-o"></i> April 7, 2021</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="single-post-wrap">
                                        <div class="details">
                                            <h6 class="title mb-1"><a href="blog-details.html">Fast UX Research An Easier Speed Up The</a></h6>
                                            <div class="post-meta-single">
                                                <ul>
                                                    <li><i class="fa fa-user"></i>Magpie</li>
                                                    <li><i class="fa fa-clock-o"></i> April 7, 2021</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="single-post-wrap">
                                        <div class="details">
                                            <h6 class="title mb-1"><a href="blog-details.html">Fast UX Research An Easier Speed Up The</a></h6>
                                            <div class="post-meta-single">
                                                <ul>
                                                    <li><i class="fa fa-user"></i>Magpie</li>
                                                    <li><i class="fa fa-clock-o"></i> April 7, 2021</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="single-post-wrap">
                                        <div class="details">
                                            <h6 class="title mb-1"><a href="blog-details.html">Fast UX Research An Easier Speed Up The</a></h6>
                                            <div class="post-meta-single">
                                                <ul>
                                                    <li><i class="fa fa-user"></i>Magpie</li>
                                                    <li><i class="fa fa-clock-o"></i> April 7, 2021</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="single-post-wrap">
                                        <div class="details">
                                            <h6 class="title mb-1"><a href="blog-details.html">Fast UX Research An Easier Speed Up The</a></h6>
                                            <div class="post-meta-single">
                                                <ul>
                                                    <li><i class="fa fa-user"></i>Magpie</li>
                                                    <li><i class="fa fa-clock-o"></i> April 7, 2021</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- populer area end -->

<!-- new post area start -->
<div class="new-post-area pd-top-55 pd-bottom-30">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-title style-two">
                    <h6 class="title">Fashion & Lifestyle</h6>
                </div>
                <div class="single-post-slider nav-style-base nav-right-top owl-carousel">
                    <div class="item">
                        <div class="single-post-wrap style-overlay">
                            <div class="thumb">
                                <img src="{{asset('/')}}frontend/assets/img/post/6.png" alt="img">
                                <div class="post-meta-single">
                                    <ul>
                                        <li><i class="fa fa-user"></i>Magpie</li>
                                        <li><i class="fa fa-clock-o"></i> April 7, 2021</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="details">
                                <div class="post-meta-single mb-3">
                                    <ul>
                                        <li><a class="tag-base tag-purple" href="cat-fashion.html">Fashion</a></li>
                                        <li><a class="tag-base tag-green" href="cat-lifestyle.html">Lifestyle</a></li>
                                    </ul>
                                </div>
                                <h3 class="title"><a href="blog-details.html">Fashion secret to moving this ancient sphinx</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="single-post-wrap style-overlay">
                            <div class="thumb">
                                <img src="{{asset('/')}}frontend/assets/img/post/7.png" alt="img">
                                <div class="post-meta-single">
                                    <ul>
                                        <li><i class="fa fa-user"></i>Magpie</li>
                                        <li><i class="fa fa-clock-o"></i> April 7, 2021</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="details">
                                <div class="post-meta-single mb-3">
                                    <ul>
                                        <li><a class="tag-base tag-blue" href="cat-fashion.html">HEALTH</a></li>
                                        <li><a class="tag-base tag-red" href="cat-fashion.html">COVID-19</a></li>
                                    </ul>
                                </div>
                                <h3 class="title"><a href="blog-details.html">The secret to moving this ancient sphinx screening</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="section-title style-two">
                    <h6 class="title">Whats News</h6>
                </div>
                <div class="single-post-list-wrap style-two pt-1">
                    <div class="media">
                        <div class="media-left">
                            <img src="{{asset('/')}}frontend/assets/img/post/8.png" alt="img">
                        </div>
                        <div class="media-body align-self-center">
                            <div class="details">
                                <div class="details">
                                    <a class="cat-text cat-red" href="cat-tech.html">HEALTH</a>
                                    <h5><a href="blog-details.html">Global Covid-19 tops 132.2m</a></h5>
                                    <p class="mb-2">The overall global Covid-19 caseload has topped 132.2 million, while the deaths have surged</p>
                                    <div class="post-meta-single">
                                        <ul>
                                            <li><i class="fa fa-user"></i>Magpie</li>
                                            <li><i class="fa fa-clock-o"></i> April 7, 2021</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-post-list-wrap style-two">
                    <div class="media">
                        <div class="media-left">
                            <img src="{{asset('/')}}frontend/assets/img/post/9.png" alt="img">
                        </div>
                        <div class="media-body align-self-center">
                            <div class="details">
                                <div class="details">
                                    <a class="cat-text cat-blue" href="cat-tech.html">BUSINEDD</a>
                                    <h5><a href="blog-details.html">Business Covid-19 tops 132.2m</a></h5>
                                    <p>The overall global Covid-19 caseload has topped 132.2 million, while the deaths have surged</p>
                                    <div class="post-meta-single">
                                        <ul>
                                            <li><i class="fa fa-user"></i>Magpie</li>
                                            <li><i class="fa fa-clock-o"></i> April 7, 2021</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-post-list-wrap style-two">
                    <div class="media">
                        <div class="media-left">
                            <img src="{{asset('/')}}frontend/assets/img/post/10.png" alt="img">
                        </div>
                        <div class="media-body align-self-center">
                            <div class="details">
                                <div class="details">
                                    <a class="cat-text cat-red" href="cat-tech.html">FASHION</a>
                                    <h5><a href="blog-details.html">Fashion world caseload tops 156</a></h5>
                                    <p>The overall global Covid-19 caseload has topped 132.2 million, while the deaths have surged</p>
                                    <div class="post-meta-single">
                                        <ul>
                                            <li><i class="fa fa-user"></i>Magpie</li>
                                            <li><i class="fa fa-clock-o"></i> April 7, 2021</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>  
        </div>
    </div>
</div>
<!-- new post area end -->

<!-- add area start -->
<div class="add-area">
    <div class="container">
        <div class="thumb">
            <img src="{{asset('/')}}frontend/assets/img/add/3.png" alt="img">
        </div>
    </div>
</div>
<!-- add area end -->

<!-- post area start -->
<div class="post-area pd-top-60 pd-bottom-40">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="section-title">
                    <h6 class="title">Sports News</h6>
                </div>
                <div class="single-post-wrap border-bottom pb-3">
                    <div class="thumb">
                        <img src="{{asset('/')}}frontend/assets/img/post/48.png" alt="img">
                        <a class="tag-base tag-blue" href="cat-tech.html">Sports</a>
                    </div>
                    <div class="details">
                        <div class="post-meta-single mb-1">
                            <ul>
                                <li><i class="fa fa-user"></i>Magpie</li>
                                <li><i class="fa fa-clock-o"></i> April 7, 2021</li>
                            </ul>
                        </div>
                        <h5 class="title mb-2"><a href="blog-details.html">Sports Global 12 tops caseload nation of 1 base world</a></h5>
                    </div>
                </div>
                <div class="single-post-list-wrap style-bg">
                    <div class="media">
                        <div class="media-left">
                            <img src="{{asset('/')}}frontend/assets/img/post/20.png" alt="img">
                        </div>
                        <div class="media-body align-self-center">
                            <div class="details">
                                <h6 class="title mb-1"><a href="blog-details.html">Ratcliffe to be Director of nation talent</a></h6>
                                <div class="post-meta-single mb-0">
                                    <ul>
                                        <li><i class="fa fa-user"></i>Magpie</li>
                                        <li><i class="fa fa-clock-o"></i> April 7, 2021</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-post-list-wrap style-bg">
                    <div class="media">
                        <div class="media-left">
                            <img src="{{asset('/')}}frontend/assets/img/post/21.png" alt="img">
                        </div>
                        <div class="media-body align-self-center">
                            <div class="details">
                                <h6 class="title mb-1"><a href="blog-details.html">Ratcliffe to be Director of nation talent</a></h6>
                                <div class="post-meta-single mb-0">
                                    <ul>
                                        <li><i class="fa fa-user"></i>Magpie</li>
                                        <li><i class="fa fa-clock-o"></i> April 7, 2021</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-post-list-wrap style-bg">
                    <div class="media">
                        <div class="media-left">
                            <img src="{{asset('/')}}frontend/assets/img/post/22.png" alt="img">
                        </div>
                        <div class="media-body align-self-center">
                            <div class="details">
                                <h6 class="title mb-1"><a href="blog-details.html">Ratcliffe to be Director of nation talent</a></h6>
                                <div class="post-meta-single mb-0">
                                    <ul>
                                        <li><i class="fa fa-user"></i>Magpie</li>
                                        <li><i class="fa fa-clock-o"></i> April 7, 2021</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="section-title">
                    <h6 class="title">Politics News</h6>
                </div>
                <div class="single-post-wrap border-bottom pb-3">
                    <div class="thumb">
                        <img src="{{asset('/')}}frontend/assets/img/post/49.png" alt="img">
                        <a class="tag-base tag-red" href="cat-fashion.html">Politics</a>
                    </div>
                    <div class="details">
                        <div class="post-meta-single mb-1">
                            <ul>
                                <li><i class="fa fa-user"></i>Magpie</li>
                                <li><i class="fa fa-clock-o"></i> April 7, 2021</li>
                            </ul>
                        </div>
                        <h5 class="title mb-2"><a href="blog-details.html">Politics tops caseload nation of Ratcliffe</a></h5>
                    </div>
                </div>
                <div class="single-post-list-wrap style-bg">
                    <div class="media">
                        <div class="media-left">
                            <img src="{{asset('/')}}frontend/assets/img/post/23.png" alt="img">
                        </div>
                        <div class="media-body align-self-center">
                            <div class="details">
                                <h6 class="title mb-1"><a href="blog-details.html">Ratcliffe to be Director of nation talent</a></h6>
                                <div class="post-meta-single mb-0">
                                    <ul>
                                        <li><i class="fa fa-user"></i>Magpie</li>
                                        <li><i class="fa fa-clock-o"></i> April 7, 2021</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-post-list-wrap style-bg">
                    <div class="media">
                        <div class="media-left">
                            <img src="{{asset('/')}}frontend/assets/img/post/24.png" alt="img">
                        </div>
                        <div class="media-body align-self-center">
                            <div class="details">
                                <h6 class="title mb-1"><a href="blog-details.html">Politics to be Director of nation talent</a></h6>
                                <div class="post-meta-single mb-0">
                                    <ul>
                                        <li><i class="fa fa-user"></i>Magpie</li>
                                        <li><i class="fa fa-clock-o"></i> April 7, 2021</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-post-list-wrap style-bg">
                    <div class="media">
                        <div class="media-left">
                            <img src="{{asset('/')}}frontend/assets/img/post/25.png" alt="img">
                        </div>
                        <div class="media-body align-self-center">
                            <div class="details">
                                <h6 class="title mb-1"><a href="blog-details.html">Ratcliffe to be Politics of nation talent</a></h6>
                                <div class="post-meta-single mb-0">
                                    <ul>
                                        <li><i class="fa fa-user"></i>Magpie</li>
                                        <li><i class="fa fa-clock-o"></i> April 7, 2021</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="section-title">
                    <h6 class="title">Business News</h6>
                </div>
                <div class="single-post-wrap border-bottom pb-3">
                    <div class="thumb">
                        <img src="{{asset('/')}}frontend/assets/img/post/50.png" alt="img">
                        <a class="tag-base tag-blue" href="cat-fashion.html">Business</a>
                    </div>
                    <div class="details">
                        <div class="post-meta-single mb-1">
                            <ul>
                                <li><i class="fa fa-user"></i>Magpie</li>
                                <li><i class="fa fa-clock-o"></i> April 7, 2021</li>
                            </ul>
                        </div>
                        <h5 class="title mb-2"><a href="blog-details.html">Global Business tops caseload nation of nation</a></h5>
                    </div>
                </div>
                <div class="single-post-list-wrap style-bg">
                    <div class="media">
                        <div class="media-left">
                            <img src="{{asset('/')}}frontend/assets/img/post/26.png" alt="img">
                        </div>
                        <div class="media-body align-self-center">
                            <div class="details">
                                <h6 class="title mb-1"><a href="blog-details.html">Ratcliffe to be Director of nation talent</a></h6>
                                <div class="post-meta-single mb-0">
                                    <ul>
                                        <li><i class="fa fa-user"></i>Magpie</li>
                                        <li><i class="fa fa-clock-o"></i> April 7, 2021</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-post-list-wrap style-bg">
                    <div class="media">
                        <div class="media-left">
                            <img src="{{asset('/')}}frontend/assets/img/post/27.png" alt="img">
                        </div>
                        <div class="media-body align-self-center">
                            <div class="details">
                                <h6 class="title mb-1"><a href="blog-details.html">talent Ratcliffe to be Director of nation</a></h6>
                                <div class="post-meta-single mb-0">
                                    <ul>
                                        <li><i class="fa fa-user"></i>Magpie</li>
                                        <li><i class="fa fa-clock-o"></i> April 7, 2021</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-post-list-wrap style-bg">
                    <div class="media">
                        <div class="media-left">
                            <img src="{{asset('/')}}frontend/assets/img/post/24.png" alt="img">
                        </div>
                        <div class="media-body align-self-center">
                            <div class="details">
                                <h6 class="title mb-1"><a href="blog-details.html">Ratcliffe to be Director of nation talent</a></h6>
                                <div class="post-meta-single mb-0">
                                    <ul>
                                        <li><i class="fa fa-user"></i>Magpie</li>
                                        <li><i class="fa fa-clock-o"></i> April 7, 2021</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- post area end -->

<!-- sports area end -->
<div class="sports-area pd-top-80 pd-bottom-30">
    <div class="container">
        <div class="section-title style-two">
            <h6 class="title">Entertainment News</h6>
        </div>
        <div class="row">
            <div class="col-lg-9">
                <div class="single-post-slider nav-style-base nav-right-top owl-carousel">
                    <div class="item">
                        <div class="single-post-wrap">
                            <div class="thumb">
                                <img src="{{asset('/')}}frontend/assets/img/post/40.png" alt="img">
                            </div>
                            <div class="details">
                                <div class="post-meta-single mb-1">
                                    <ul>
                                        <li><i class="fa fa-user"></i>Magpie</li>
                                        <li><i class="fa fa-clock-o"></i> April 7, 2021</li>
                                    </ul>
                                </div>
                                <h5 class="title"><a href="blog-details.html">Entertainment base An Easier Way To Engage Ragres And Speed Up The Research  Stakeholders Process</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="single-post-wrap">
                            <div class="thumb">
                                <img src="{{asset('/')}}frontend/assets/img/post/40.png" alt="img">
                            </div>
                            <div class="details">
                                <div class="post-meta-single mb-1">
                                    <ul>
                                        <li><i class="fa fa-user"></i>Magpie</li>
                                        <li><i class="fa fa-clock-o"></i> April 7, 2021</li>
                                    </ul>
                                </div>
                                <h5 class="title"><a href="blog-details.html">Fast UX Research An Easier Way To Engage Ragres And Speed Up The Research  Stakeholders Process</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="add-thumb mb-4">
                    <img src="{{asset('/')}}frontend/assets/img/add/4.png" alt="img">
                </div>
                <div class="single-post-wrap">
                    <div class="thumb">
                        <img src="{{asset('/')}}frontend/assets/img/post/41.png" alt="img">
                    </div>
                    <div class="details">
                        <a class="tag-base tag-blue mb-3" href="cat-tech.html">Tech</a>
                        <h6 class="title mb-2"><a href="blog-details.html">An Easier Speed Up The</a></h6>
                        <div class="post-meta-single">
                            <ul>
                                <li><i class="fa fa-user"></i>Magpie</li>
                                <li><i class="fa fa-clock-o"></i> April 7, 2021</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-post-wrap">
                    <div class="thumb">
                        <img src="{{asset('/')}}frontend/assets/img/post/51.png" alt="img">
                    </div>
                    <div class="details">
                        <div class="post-meta-single mb-1">
                            <ul>
                                <li><i class="fa fa-user"></i>Magpie</li>
                                <li><i class="fa fa-clock-o"></i> April 7, 2021</li>
                            </ul>
                        </div>
                        <h5 class="title"><a href="blog-details.html">Maluma Collaborated With Balmain on a Miami Vice–Style Capsule</a></h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-6">
                <div class="single-post-wrap">
                    <div class="thumb">
                        <img src="{{asset('/')}}frontend/assets/img/post/52.png" alt="img">
                    </div>
                    <div class="details">
                        <div class="post-meta-single mb-1">
                            <ul>
                                <li><i class="fa fa-user"></i>Magpie</li>
                                <li><i class="fa fa-clock-o"></i> April 7, 2021</li>
                            </ul>
                        </div>
                        <h5 class="title"><a href="blog-details.html">Balmain on a Miami Vice–Style Maluma Collaborated With Capsule</a></h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-post-wrap">
                    <div class="thumb">
                        <img src="{{asset('/')}}frontend/assets/img/post/45.png" alt="img">
                    </div>
                    <div class="details">
                        <a class="tag-base tag-red mb-3" href="cat-fashion.html">Tech</a>
                        <h6 class="title mb-2"><a href="blog-details.html">Easier Speed Fast UX An Up The on a Miami Vice</a></h6>
                        <div class="post-meta-single">
                            <ul>
                                <li><i class="fa fa-user"></i>Magpie</li>
                                <li><i class="fa fa-clock-o"></i> April 7, 2021</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- sports area end -->


<!-- health area end -->
<div class="health-area pd-top-55 pd-bottom-25">
    <div class="container">
        <div class="section-title style-two">
            <h6 class="title">Health & Fitness</h6>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="single-post-wrap">
                    <div class="thumb">
                        <img src="{{asset('/')}}frontend/assets/img/post/59.png" alt="img">
                    </div>
                    <div class="details">
                        <div class="post-meta-single mb-1">
                            <ul>
                                <li><i class="fa fa-user"></i>Magpie</li>
                                <li><i class="fa fa-clock-o"></i> April 7, 2021</li>
                            </ul>
                        </div>
                        <h5 class="title"><a href="blog-details.html">HEALTH Collaborated With Balmain on a Miami Vice–Style Capsule</a></h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-md-6">
                        <div class="single-post-wrap">
                            <div class="thumb">
                                <img src="{{asset('/')}}frontend/assets/img/post/60.png" alt="img">
                            </div>
                            <div class="details">
                                <div class="post-meta-single mb-1">
                                    <ul>
                                        <li><i class="fa fa-user"></i>Magpie</li>
                                        <li><i class="fa fa-clock-o"></i> April 7, 2021</li>
                                    </ul>
                                </div>
                                <h6 class="title"><a href="blog-details.html">The Fast UX Research An Easier Speed Up Magpie</a></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="single-post-wrap">
                            <div class="thumb">
                                <img src="{{asset('/')}}frontend/assets/img/post/61.png" alt="img">
                            </div>
                            <div class="details">
                                <div class="post-meta-single mb-1">
                                    <ul>
                                        <li><i class="fa fa-user"></i>Magpie</li>
                                        <li><i class="fa fa-clock-o"></i> April 7, 2021</li>
                                    </ul>
                                </div>
                                <h6 class="title"><a href="blog-details.html">Magpie Easier Speed Up Fast UX Research An The</a></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="single-post-wrap">
                            <div class="thumb">
                                <img src="{{asset('/')}}frontend/assets/img/post/60.png" alt="img">
                            </div>
                            <div class="details">
                                <div class="post-meta-single mb-1">
                                    <ul>
                                        <li><i class="fa fa-user"></i>Magpie</li>
                                        <li><i class="fa fa-clock-o"></i> April 7, 2021</li>
                                    </ul>
                                </div>
                                <h6 class="title"><a href="blog-details.html">An Easier Speed Fast UX Research Up Magpie</a></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="single-post-wrap">
                            <div class="thumb">
                                <img src="{{asset('/')}}frontend/assets/img/post/61.png" alt="img">
                            </div>
                            <div class="details">
                                <div class="post-meta-single mb-1">
                                    <ul>
                                        <li><i class="fa fa-user"></i>Magpie</li>
                                        <li><i class="fa fa-clock-o"></i> April 7, 2021</li>
                                    </ul>
                                </div>
                                <h6 class="title"><a href="blog-details.html">Research UX An Easier Speed of Fast Up The</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- health area end -->

<!-- add area start -->
<div class="add-area">
    <div class="container">
        <div class="thumb">
            <img src="{{asset('/')}}frontend/assets/img/add/3.png" alt="img">
        </div>
    </div>
</div>
<!-- add area end -->

<!-- sports area end -->
<div class="sports-area pd-top-60 pd-bottom-30">
    <div class="container">
        <div class="section-title style-two">
            <h6 class="title">Entertainment News</h6>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="single-post-slider nav-style-base nav-right-top owl-carousel">
                    <div class="item">
                        <div class="single-post-wrap">
                            <div class="thumb">
                                <img src="{{asset('/')}}frontend/assets/img/post/62.png" alt="img">
                            </div>
                            <div class="details">
                                <div class="post-meta-single mb-1">
                                    <ul>
                                        <li><i class="fa fa-user"></i>Magpie</li>
                                        <li><i class="fa fa-clock-o"></i> April 7, 2021</li>
                                    </ul>
                                </div>
                                <h5 class="title"><a href="blog-details.html">Entertainment Maluma With Balmain on a Miami Engage Ragres Vice–Style Capsule</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="single-post-wrap">
                            <div class="thumb">
                                <img src="{{asset('/')}}frontend/assets/img/post/63.png" alt="img">
                            </div>
                            <div class="details">
                                <div class="post-meta-single mb-1">
                                    <ul>
                                        <li><i class="fa fa-user"></i>Magpie</li>
                                        <li><i class="fa fa-clock-o"></i> April 7, 2021</li>
                                    </ul>
                                </div>
                                <h5 class="title"><a href="blog-details.html">Maluma Collaborated With Balmain on a Miami Engage Ragres Vice–Style Capsule</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mt-5 mt-lg-0">
                <div class="single-post-slider nav-style-base nav-right-top owl-carousel">
                    <div class="item">
                        <div class="single-post-wrap">
                            <div class="thumb">
                                <img src="{{asset('/')}}frontend/assets/img/post/63.png" alt="img">
                            </div>
                            <div class="details">
                                <div class="post-meta-single mb-1">
                                    <ul>
                                        <li><i class="fa fa-user"></i>Magpie</li>
                                        <li><i class="fa fa-clock-o"></i> April 7, 2021</li>
                                    </ul>
                                </div>
                                <h5 class="title"><a href="blog-details.html">Balmain on Maluma Collaborated With a Miami Engage Ragres Vice–Style Capsule</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="single-post-wrap">
                            <div class="thumb">
                                <img src="{{asset('/')}}frontend/assets/img/post/62.png" alt="img">
                            </div>
                            <div class="details">
                                <div class="post-meta-single mb-1">
                                    <ul>
                                        <li><i class="fa fa-user"></i>Magpie</li>
                                        <li><i class="fa fa-clock-o"></i> April 7, 2021</li>
                                    </ul>
                                </div>
                                <h5 class="title"><a href="blog-details.html">Maluma Collaborated With Balmain on a Miami Engage Ragres Vice–Style Capsule</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="single-post-wrap">
                    <div class="thumb">
                        <img src="{{asset('/')}}frontend/assets/img/post/55.png" alt="img">
                    </div>
                    <div class="details">
                        <div class="post-meta-single mb-1">
                            <ul>
                                <li><i class="fa fa-user"></i>Magpie</li>
                                <li><i class="fa fa-clock-o"></i> April 7, 2021</li>
                            </ul>
                        </div>
                        <h6 class="title"><a href="blog-details.html">Fast UX Research An Easier Speed Up The April 7</a></h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-post-wrap">
                    <div class="thumb">
                        <img src="{{asset('/')}}frontend/assets/img/post/56.png" alt="img">
                    </div>
                    <div class="details">
                        <div class="post-meta-single mb-1">
                            <ul>
                                <li><i class="fa fa-user"></i>Magpie</li>
                                <li><i class="fa fa-clock-o"></i> April 7, 2021</li>
                            </ul>
                        </div>
                        <h6 class="title"><a href="blog-details.html">Speed Up The Fast UX An Easier April 7 Research</a></h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-post-wrap">
                    <div class="thumb">
                        <img src="{{asset('/')}}frontend/assets/img/post/57.png" alt="img">
                    </div>
                    <div class="details">
                        <div class="post-meta-single mb-1">
                            <ul>
                                <li><i class="fa fa-user"></i>Magpie</li>
                                <li><i class="fa fa-clock-o"></i> April 7, 2021</li>
                            </ul>
                        </div>
                        <h6 class="title"><a href="blog-details.html">Research An Fast UX Easier 7 Speed Up The</a></h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-post-wrap">
                    <div class="thumb">
                        <img src="{{asset('/')}}frontend/assets/img/post/58.png" alt="img">
                    </div>
                    <div class="details">
                        <div class="post-meta-single mb-1">
                            <ul>
                                <li><i class="fa fa-user"></i>Magpie</li>
                                <li><i class="fa fa-clock-o"></i> April 7, 2021</li>
                            </ul>
                        </div>
                        <h6 class="title"><a href="blog-details.html">Easier Speed Fast UX Rese arch An Up The</a></h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- sports area end -->

<!-- life-style area end -->
<div class="life-style-area pd-top-60 pd-bottom-30">
    <div class="container">
        <div class="section-title pl-3 pl-lg-0">
            <h6 class="title">Life Style</h6>
        </div>
        <div class="row no-gutters no-gutters-md">
            <div class="col-lg-3 col-md-6">
                <div class="single-post-wrap style-overlay-visible">
                    <div class="thumb">
                        <img src="{{asset('/')}}frontend/assets/img/post/36.png" alt="img">
                    </div>
                    <div class="details">
                        <div class="post-meta-single mb-3">
                            <ul>
                                <li><a class="tag-base tag-purple" href="cat-lifeStyle.html">LifeStyle</a></li>
                            </ul>
                        </div>
                        <h5 class="title"><a href="blog-details.html">Global LifeStyle Covid-19 tops caseload</a></h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-post-wrap style-overlay-visible">
                    <div class="thumb">
                        <img src="{{asset('/')}}frontend/assets/img/post/37.png" alt="img">
                    </div>
                    <div class="details">
                        <div class="post-meta-single mb-3">
                            <ul>
                                <li><a class="tag-base tag-purple" href="cat-lifeStyle.html">LifeStyle</a></li>
                            </ul>
                        </div>
                        <h5 class="title"><a href="blog-details.html">LifeStyle Feb 19 tops caseload world</a></h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-post-wrap style-overlay-visible">
                    <div class="thumb">
                        <img src="{{asset('/')}}frontend/assets/img/post/38.png" alt="img">
                    </div>
                    <div class="details">
                        <div class="post-meta-single mb-3">
                            <ul>
                                <li><a class="tag-base tag-purple" href="cat-lifeStyle.html">LifeStyle</a></li>
                            </ul>
                        </div>
                        <h5 class="title"><a href="blog-details.html">Global Covid-19 tops caseload 132.2m</a></h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-post-wrap style-overlay-visible">
                    <div class="thumb">
                        <img src="{{asset('/')}}frontend/assets/img/post/39.png" alt="img">
                    </div>
                    <div class="details">
                        <div class="post-meta-single mb-3">
                            <ul>
                                <li><a class="tag-base tag-purple" href="cat-lifeStyle.html">LifeStyle</a></li>
                            </ul>
                        </div>
                        <h5 class="title"><a href="blog-details.html">Global Covid-19 tops caseload 132.2m</a></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- life-style area end -->
@endsection