@extends('layouts.app')
@section('title', 'epaper_details')

@section('content')
    <!-- single blog page -->
    <div class="main-blog-area pd-top-60 pd-bottom-60">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-12">
                    <div class="single-blog-card mb-0">
                        <div class="blog-content mb-4">
                            <h4>{{$poem->title}}</h4>
                           <Strong><span class="date">{{$poem->banglaPublishedDate}}</span></Strong> 
                        </div>
                    </div>
                    <div class="blog-details-content-inner">
                        {!!$poem->content!!}
                    </div>
                </div>
                <!-- sidebar -->
                <div class="col-lg-4 col-12">
                    <div class="td-sidebar mt-5 mt-lg-0">
                        <div class="widget widget_search">
                            <form class="search-form">
                                <div class="form-group">
                                    <input type="text" placeholder="Search">
                                </div>
                                <button class="submit-btn" type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>                  
                        <div class="widget widget-recent-post">                            
                            <h4 class="widget-title">Recent Post</h4>
                            <ul>
                                <li>
                        
                                </li>
                            </ul>
                        </div>    

                    </div>
                </div>
                <!-- /.sidebar -->
            </div>
        </div>
    </div>
    <!-- single blog page end -->
@endsection
