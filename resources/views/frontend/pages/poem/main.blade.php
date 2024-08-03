@extends('layouts.app')
@section('title', 'Home')
@section('content')

<!-- poem area end -->
<div class="sports-area pd-top-60 pd-bottom-30">
    <div class="container">
        <div class="section-title style-two">
            <h4 class="text-center">ইতিহাস অন্বেষা কবিতা</h4>
        </div>
        <div class="row">
            @foreach ($poems as $poem )
            <div class="col-lg-4 col-md-6">
                <div class="single-post-wrap">
                    <div>
                        <h4>{{$poem->title}}</h4>
                    </div>
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
</div>

@endsection