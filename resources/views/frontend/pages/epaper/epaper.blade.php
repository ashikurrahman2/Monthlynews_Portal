@extends('layouts.app')
@section('title', 'Home')
@section('content')

<!-- epaper area end -->
<div class="health-area pd-top-55 pd-bottom-25">
    <div class="container">
        <div class="section-title style-two">
            <h4 class="text-center">ই ইতিহাস অন্বেষা</h4>
        </div>
        <div class="row">
            {{-- <div class="col-lg-6">
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
            </div> --}}
            <div class="col-lg-10">
                <div class="row">
                    @foreach ($epapers as $epaper )
                    <div class="col-md-3">
                        <div class="single-post-wrap">
                            <div class="thumb">
                                
                                <img src="{{ asset($epaper->Paper_image) }}" alt="img">
                            </div>
                            <div class="details">
                                <div class="post-meta-single mb-1">
                                    <ul>
                                        {{-- <li><i class="fa fa-user"></i>Magpie</li> --}}
                                        <li><i class="fa fa-clock-o"></i> {{$epaper->paper_date}}</li>
                                    </ul>
                                </div>
                                <h6 class="title"><a href="{{route('epapers.epaperdetails',$epaper->paper_slug)}}">{{$epaper->paper_title}}</a></h6>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-2">
                <div class="row">
                   
                        <div class="col-md-12">
                        <div class="single-post-wrap">
                            <div class="thumb">
                                <img src="" alt="img">
                            </div>
                            <div class="details">
                                <div class="post-meta-single mb-1">
                                    <ul>
                                        {{-- <li><i class="fa fa-user"></i>Magpie</li> --}}
                                        <li>
                                            {{-- <i class="fa fa-clock-o"></i>  --}}
                                            </li>
                                    </ul>
                                </div>
                                <h6 class="title"><a href="">{{$epaper->paper_title}}</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
<!-- health area end -->

@endsection