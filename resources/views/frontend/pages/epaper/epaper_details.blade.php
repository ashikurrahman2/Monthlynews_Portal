@extends('layouts.app')
@section('title', 'epaper_details')

@section('content')
<div class="health-area pd-top-55 pd-bottom-25">
  <div class="container">
      <div class="section-title style-two">
          <h4 class="text-center">ই ইতিহাস অন্বেষা {{$epapers->paper_date}} </h4>
      </div>
      <div class="row">
          <div class="col-lg-8">
            <div class="row">
              <div class="col-md-12">
                <div class="_df_book" id="flipbok_example" height=500 backgroundcolor="teal"  source="{{ asset($epapers->Paper_pdf) }}"></div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
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
                              {{-- <h6 class="title"><a href="">{{$epaper->paper_title}}</a></h6> --}}
                          </div>
                      </div>
                  </div>
              </div>
              
          </div>
      </div>
  </div>
</div>
@endsection
