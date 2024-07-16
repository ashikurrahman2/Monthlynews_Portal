<div class="navbar-area">
    <!-- topbar end-->
    <div class="topbar-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-sm-7 align-self-center">
                    <div class="topbar-menu text-md-left text-center">
                        <ul class="align-self-center">
                            <li><img src="{{asset('/')}}frontend/assets/img/icon/1.png" alt="img"> Dhaka <span>29°C </span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-5 mt-2 mt-md-0 text-md-right text-center">
                    <div class="topbar-social">
                        <div class="topbar-date d-none d-lg-inline-block"><i class="fa fa-calendar"></i>  April 7, 2021</div>
                        <ul class="social-area social-area-2">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- topbar end-->

    <!-- adbar end-->
    <div class="adbar-area d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-5 align-self-center">
                    <div class="logo text-md-left text-center">
                        <a class="main-logo" href="index.html"><img src="{{asset('/')}}frontend/assets/img/logo-3.png" alt="img"></a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7 text-md-right text-center">
                    <a href="#" class="adbar-right">
                        <img src="{{asset('/')}}frontend/assets/img/add/1.png" alt="img">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- adbar end-->

    <!-- navbar start -->
    <nav class="navbar bg-red navbar-expand-lg">
        <div class="container nav-container">
            <div class="responsive-mobile-menu">
                <div class="logo d-lg-none d-block">
                    <a class="main-logo" href="index.html"><img src="{{asset('/')}}frontend/assets/img/logo-4.png" alt="img"></a>
                </div>
                <button class="menu toggle-btn d-block d-lg-none" data-target="#nextpage_main_menu" 
                aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-left"></span>
                    <span class="icon-right"></span>
                </button>
            </div>
            <div class="nav-right-part nav-right-part-mobile">
                <a class="search header-search" href="#"><i class="fa fa-search"></i></a>
            </div>
            <div class="collapse navbar-collapse" id="nextpage_main_menu">
                <ul class="navbar-nav menu-open">
                    <li class="menu-item-has-children current-menu-item">
                        <a href="#">Home</a>
                        <ul class="sub-menu">
                            <li><a href="#">Home</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children current-menu-item">
                        <a href="#">Category</a>
                        <ul class="sub-menu">
                            <li><a href="cat-tech.html">Tech</a></li>
                            <li><a href="cat-lifestyle.html">Lifestyle</a></li>
                            <li><a href="cat-fashion.html">Fashion</a></li>
                        </ul>
                    </li>
                    <li class="menu-item current-menu-item">
                        <a href="{{route('epapers')}}">ইপেপার</a>
                    </li>
                    {{-- <li class="menu-item-has-children current-menu-item">
                        <a href="#">Blog</a>
                        <ul class="sub-menu">
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="blog-details.html">Blog Details</a></li>
                        </ul>
                    </li> --}}
                </ul>
            </div>
            <div class="nav-right-part nav-right-part-desktop">
                <ul>
                    <li><a class="nav-search" href="#"><i class="fa fa-search"></i></a></li>
                    <li><a href="#"><img src="{{asset('/')}}frontend/assets/img/icon/2.png" alt="img"></a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>