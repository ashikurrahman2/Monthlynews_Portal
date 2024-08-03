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
<div class="banner-area pt-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="single-post-slider banner-slider-2 owl-carousel">
                    <div class="item">
                        @foreach ($epapers as $epaper)
                            <div class="single-post-wrap style-overlay">
                                <div class="thumb">
                                    <img src="{{asset($epaper->Paper_image)}}" alt="img" style="height: 500px">
                                    <div class="post-meta-single">
                                        <ul>
                                            {{-- <li><i class="fa fa-user"></i>Magpie</li> --}}
                                            <li><i class="fa fa-clock-o"></i> {{$epaper->banglaPublishedDate}}</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="details">
                                    <h3 class="title"><a href="{{route('epapers.epaperdetails',$epaper->paper_slug)}}">{{$epaper->paper_title}}</a></h3>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- banner area end -->


<!-- Article area start -->
<div class="populer-area bg-sky pd-top-55 pd-bottom-25">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="section-title style-two">
                    <h6 class="title">Articles</h6>
                </div>
            
                <div class="row">
                    @foreach ($articles as $article)
                        <div class="col-lg-6">
                            <div class="single-post-wrap">
                                {{-- <div class="thumb">
                                    <img src="{{asset('/')}}frontend/assets/img/post/47.png" alt="img">
                                    <a class="tag-base tag-blue" href="cat-tech.html">Tech</a>
                                </div> --}}
                                <h4 class="title"><a href="{{route('articles.articledetails',$article->article_slug )}}">{{($article->article_title) }}</a></h4>
                                <div class="details">
                                    <div class="post-meta-single mb-1">
                                        <ul>
                                            <li><i class="fa fa-user"></i>{{$article->Author_name}}</li>
                                            <li><i class="fa fa-clock-o"></i>{{$article->banglaPublishedDate}}</li>
                                        </ul>
                                    </div>
                                    <h6 class="title"><a href="{{route('articles.articledetails',$article->article_slug )}}">{{ strip_tags($article->content) }}</a></h6>
                                </div>
                            </div>
                        </div> 
                    @endforeach
                   
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
                        </ul>
                    </div>
                    <div class="tab-content" id="enx1-content">
                        <div class="tab-pane fade show active" id="enx1-tabs-1" role="tabpanel">
                            <ul class="p-0 m-0">
                                @foreach ($epapers as $epaper)
                                    <li>
                                        <div class="single-post-wrap">
                                            <div class="details">
                                                <h6 class="title mb-1"><a href="{{route('epapers.epaperdetails',$epaper->paper_slug)}}">{{($epaper->paper_title) }}</a></h6>
                                                <div class="post-meta-single">
                                                    <ul>
                                                        <li><i class="fa fa-clock-o"></i> {{$epaper->banglaPublishedDate}}</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- populer area end -->

<!-- Poem area end -->

<div class="populer-area bg-sky pd-top-55 pd-bottom-25">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="section-title style-two">
                    <h6 class="title">Poem</h6>
                </div>
                <div class="row">
                    @foreach ($poems as $poem )
                        <div class="col-lg-6">
                            <div class="single-post-wrap">
                                {{-- <div class="thumb">
                                    <img src="{{asset('/')}}frontend/assets/img/post/47.png" alt="img">
                                    <a class="tag-base tag-blue" href="cat-tech.html">Tech</a>
                                </div> --}}
                                <h4 class="title"><a href="{{route('poems.poemdetails',$poem->slug)}}">{{$poem->title}}</a></h4>
                                <div class="details">
                                    <div class="post-meta-single mb-1">
                                        <ul>
                                            <li><i class="fa fa-user"></i>{{$poem->Author_name}}</li>
                                            <li><i class="fa fa-clock-o"></i> {{$poem->banglaPublishedDate }}</li>
                                        </ul>
                                    </div>
                                    <h6 class="title"><a href="{{route('poems.poemdetails',$poem->slug)}}">{{ strip_tags($poem->short_description) }}</a></h6>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-3">
                <div class="widget-tab-inner">
                    <div class="tab-content" id="enx1-content">
                        <div class="thumb">
                            <img src="{{asset('/')}}frontend/assets/img/post/47.png" alt="img">
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Poem area end -->
@endsection