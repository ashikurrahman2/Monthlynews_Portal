@extends('layouts.app')
@section('title', 'Article')
@section('content')

<!-- poem area end -->
<div class="sports-area pd-top-60 pd-bottom-30">
    <div class="container">
        <div class="section-title style-two">
            <h4 class="text-center">ইতিহাস অন্বেষা</h4>
        </div>
        <div class="row">
            @foreach ($articles as $article )
            <div class="col-lg-4 col-md-6">
                <div class="single-post-wrap">
                    <div>
                        <h4>{{$article->article_title}}</h4>
                    </div>
                    <div class="details">
                        <div class="post-meta-single mb-1">
                            <ul>
                                <li><i class="fa fa-user"></i>{{$article->Author_name}}</li>
                                <li><i class="fa fa-clock-o"></i> {{$article->banglaPublishedDate }}</li>
                            </ul>
                        </div>
                        <h6 class="title"><a href="{{route('articles.articledetails',$article->article_slug )}}">{{ strip_tags($article->content) }}</a></h6>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection