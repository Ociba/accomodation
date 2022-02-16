<!DOCTYPE html>
<html lang="en" class="no-ie">
    <head>
        <!-- Meta-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">
        @include('frontlayouts.css')
        <link rel="stylesheet" type="text/css" href="{{ asset('front/owl-carousel/dist/assets/owl-carousel.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('front/owl-carousel/dist/assets/owl-theme-default.css')}}">
        <style>
            .image-slideshow {
            width: 600px;
            height: 500px;
            overflow: hidden;
            white-space: nowrap;
            font-size: 0;
            position: relative;
            }
            .image-slideshow > div {
            width: 600px;
            height: 300px;
            animation: move 15s ease-in-out 2s infinite alternate;
            display:inline-block;
            }
            .image-slideshow > div div {
            position: absolute;
            bottom: 0;
            background: rgba(0,0,0,0.4);
            width: 100%;
            }
            .image-slideshow h2 {
            padding: 15px;
            margin: 0;
            font-size: 18px;
            color: #f9f9f9;
            }
            .image-slideshow p {
            padding: 0 15px 15px 15px;
            margin: 0;
            font-size: 14px;
            color: #dddddd;
            }
            @keyframes move {
            0%,30% { transform: translateX(0); }
            40%,70% { transform: translateX(-600px); }
            80%,100% { transform: translateX(-1200px); }
            }
        </style>
    </head>
    <body>
        <!-- START wrapper-->
        <header>
            <div class="container">
                <nav class="row navbar navbar-default navbar-top navbar-fixed-top">
                    <div class="col-md-2 app-logo">
                        <a href="#" class="logo-wrapper">
                        <img src="{{ asset('admin/assets/img/house.ico')}}" alt="App Name" class="img-responsive">
                        </a>
                        <a href="#">
                        <strong>JOOME PROPERTY LTD</strong>
                        </a>
                    </div>
                    <div class="col-md-10">
                        <ul class="list-inline menuapp-buttons">
                            <li class="mr-lg">
                                <a href="/">
                                <strong>Home</strong>
                                </a>
                            </li>
                            <li class="mr-lg dropdown dropdown-list">
                                <a href="#" data-toggle="dropdown" data-play="fadeIn" class="dropdown-toggle">
                                <strong>Accomodation</strong>
                                </a>
                                <!-- START Dropdown menu-->
                                <ul class="dropdown-menu">
                                    <li>
                                        <!-- START list group-->
                                        <div class="list-group">
                                            <!-- list item-->
                                            <a href="/get-room" class="list-group-item ">
                                                <div class="media">
                                                    <div class="media-body clearfix">
                                                        <div class="media-heading text-center">Single Room</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <!-- list item-->
                                            <a href="/get-room" class="list-group-item">
                                                <div class="media">
                                                    <div class="media-body clearfix">
                                                        <div class="media-heading text-center">Double Room</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <!-- list item-->
                                            <a href="/get-hostel" class="list-group-item">
                                                <div class="media">
                                                    <div class="media-body clearfix">
                                                        <div class="media-heading text-center">Hostel</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <!-- last list item -->
                                            <a href="/get-house" class="list-group-item">
                                                <div class="media">
                                                    <div class="media-body clearfix">
                                                        <div class="media-heading text-center">House</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="/get-apartment" class="list-group-item">
                                                <div class="media">
                                                    <div class="media-body clearfix">
                                                        <div class="media-heading text-center">Apartment</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="/get-plots-and-land" class="list-group-item">
                                                <div class="media">
                                                    <div class="media-body clearfix">
                                                        <div class="media-heading text-center">Plots & Land</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="/get-flats-and-mansions" class="list-group-item">
                                                <div class="media">
                                                    <div class="media-body clearfix">
                                                        <div class="media-heading text-center">Flats And Mansions</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="/get-store" class="list-group-item">
                                                <div class="media">
                                                    <div class="media-body clearfix">
                                                        <div class="media-heading text-center">Store</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="/get-office" class="list-group-item">
                                                <div class="media">
                                                    <div class="media-body clearfix">
                                                        <div class="media-heading text-center">Office</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="/get-shop" class="list-group-item">
                                                <div class="media">
                                                    <div class="media-body clearfix">
                                                        <div class="media-heading text-center">Shop</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <!-- END list group-->
                                    </li>
                                </ul>
                                <!-- END Dropdown menu-->
                            </li>
                            <li class="mr-lg">
                                <a href="/contact">
                                <strong>Contact</strong>
                                </a>
                            </li>
                            <li class="mr-lg">
                                <a href="{{ route('register')}}">
                                <strong>Sign up</strong>
                                </a>
                            </li>
                            <li class="mr-lg">
                                <a href="{{ route('login') }}">
                                <strong>Login</strong>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="header-content">
                    <div class="row row-flush row-table">
                        <div class="col-xs-12 col-lg-6 align-middle">
                            <div data-toggle="play-animation" data-play="fadeInLeft" data-offset="0" class="app-presentation">
                                {{--<img src="{{ asset('front/apartments/apaart2.jpg')}}" style="height: 40%;" alt="App Name" class="img-responsive">--}}
                                <div class="image-slideshow">
                                    <div>
                                        <img src="{{ asset('front/apartments/apaart2.jpg')}}"  alt="">
                                        <div>
                                            <h2>Example Photo 1</h2>
                                            <p>Example description for the photo...</p>
                                        </div>
                                    </div>
                                    <div>
                                        <img src="{{ asset('front/apartments/hhouse1.jpg')}}" alt="">
                                        <div>
                                            <h2>Example Photo 2</h2>
                                            <p>Example description for the photo...</p>
                                        </div>
                                    </div>
                                    <div>
                                        <img src="{{ asset('front/apartments/hhouse2.jpg')}}"  alt="">
                                        <div>
                                            <h2>Example Photo 3</h2>
                                            <p>Example description for the photo...</p>
                                        </div>
                                    </div>
                                    <div>
                                        <img src="{{ asset('front/apartments/hhouse3.jpg')}}"  alt="">
                                        <div>
                                            <h2>Example Photo 3</h2>
                                            <p>Example description for the photo...</p>
                                        </div>
                                    </div>
                                    <div>
                                        <img src="{{ asset('front/apartments/hhouse4.jpg')}}"  alt="">
                                        <div>
                                            <h2>Example Photo 3</h2>
                                            <p>Example description for the photo...</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-lg-6 align-middle">
                            <div class="side-presentation">
                                <div class="h2 header-title">Better &amp; Affordable Accomodation</div>
                                <br>
                                <p class="header-subtitle">Get your Accomodation now comfortable, Affordable , Standard Space both Rooms & Parking and self contained.</p>
                                <br>
                                <div class="header-button">
                                    <a href="#" class="btn btn-primary btn-lg btn-fw">
                                    <strong>Discover Now</strong>
                                    </a>
                                </div>
                                <br>
                                <br>
                                <p>Available on</p>
                                <ul class="list-inline store-list">
                                    <li>
                                        <a href="#">
                                        <img src="{{ asset('front/app/img/landing/store-apple.png')}}" alt="App Name" class="img-responsive">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                        <img src="{{ asset('front/app/img/landing/store-google.png')}}" alt="App Name" class="img-responsive">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <section>
            <div class="container">
                <h2 class="section-header">Our Current Available Apartments
                    <br>
                    <small class="text-muted text-center">Wintermin makes your life easier. The best choice for your next project.</small>
                </h2>
                <div class="row">
                    <div class="col-lg-3">
                        <!-- START widget-->
                        <div class="panel widget">
                            <img src="{{ asset('front/apartments/apart5.jpeg')}}" style="width:318px; height:190px;" alt="Image" class="img-responsive">
                            <div class="badge-overlay">
                                <!-- Change Badge Position, Color, Text here-->
                                <span class="top-left badge orange">New</span>
                            </div>
                            <div class="panel-body">
                                <div class="row row-table text-center">
                                    <div class="col-xs-6">
                                        <p>5 Rooms</p>
                                    </div>
                                    <div class="col-xs-6">
                                        <p>Status:Rent</p>
                                    </div>
                                </div>
                                <div class="row row-table text-center">
                                    <div class="col-xs-6">
                                        <span class="text-primar">Ugx.250,000</span>
                                    </div>
                                    <div class="col-xs-6">
                                        <span class="text-primar">Kawempe</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END widget-->
                    </div>
                    <div class="col-lg-3">
                        <!-- START widget-->
                        <div class="panel widget">
                            <img src="{{ asset('front/apartments/apart4.jpeg')}}" style="width:318px; height:190px;" alt="Image" class="img-responsive">
                            <div class="badge-overlay">
                                <!-- Change Badge Position, Color, Text here-->
                                <span class="top-left badge orange">New</span>
                            </div>
                            <div class="panel-body">
                                <div class="row row-table text-center">
                                    <div class="col-xs-6">
                                        <p>5 Rooms</p>
                                    </div>
                                    <div class="col-xs-6">
                                        <p>Status:Rent</p>
                                    </div>
                                </div>
                                <div class="row row-table text-center">
                                    <div class="col-xs-6">
                                        <span class="text-primar">Ugx.250,000</span>
                                    </div>
                                    <div class="col-xs-6">
                                        <span class="text-primar">Bwaise</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END widget-->
                    </div>
                    <div class="col-lg-3">
                        <!-- START widget-->
                        <div class="panel widget">
                            <img src="{{ asset('front/apartments/apart6.jpeg')}}" style="width:318px; height:190px;" alt="Image" class="img-responsive">
                            <div class="badge-overlay">
                                <!-- Change Badge Position, Color, Text here-->
                                <span class="top-left badge orange">New</span>
                            </div>
                            <div class="panel-body">
                                <div class="row row-table text-center">
                                    <div class="col-xs-6">
                                        <p>5 Rooms</p>
                                    </div>
                                    <div class="col-xs-6">
                                        <p>Status:Rent</p>
                                    </div>
                                </div>
                                <div class="row row-table text-center">
                                    <div class="col-xs-6">
                                        <span class="text-primar">Ugx.250,000</span>
                                    </div>
                                    <div class="col-xs-6">
                                        <span class="text-primar">Natete</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END widget-->
                    </div>
                    <!-- END row-->
                    <div class="col-lg-3">
                        <!-- START widget-->
                        <div class="panel widget">
                            {{--<a href="#" class="btn btn-green">
                            <strong>Watch Now</strong>
                            </a>
                            </p>--}}   <img src="{{ asset('front/apartments/apart4.jpeg')}}" style="width:318px; height:190px;" alt="Image" class="img-responsive">
                            <div class="badge-overlay">
                                <!-- Change Badge Position, Color, Text here-->
                                <span class="top-left badge orange">New</span>
                            </div>
                            <div class="panel-body">
                                <div class="row row-table text-center">
                                    <div class="col-xs-6">
                                        <p>5 Rooms</p>
                                    </div>
                                    <div class="col-xs-6">
                                        <p>Status:Rent</p>
                                    </div>
                                </div>
                                <div class="row row-table text-center">
                                    <div class="col-xs-6">
                                        <span class="text-primar">Ugx.250,000</span>
                                    </div>
                                    <div class="col-xs-6">
                                        <span class="text-primar">Makerere</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END widget-->
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-white">
            <div class="container">
                <div class="row">
                    <div data-toggle="play-animation" data-play="fadeInLeft" data-offset="-250" class="col-lg-8">
                        <div class="col-sm-12 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="owl-carousel carousel-dot owl-theme">
                                <div class="item">
                                    <img class="d-block img-fluid"
                                        src="{{ asset('front/apartments/apart4.jpeg')}}" style="height:300px;"
                                        alt="Third slide">
                                </div>
                                <div class="item">
                                    <img class="d-block img-fluid"
                                        src="{{ asset('front/apartments/apart5.jpeg')}}" style="height:300px;"
                                        alt="Third slide">
                                </div>
                                <div class="item">
                                    <img class="d-block img-fluid"
                                        src="{{ asset('front/apartments/apart6.jpeg')}}" style="height:300px;"
                                        alt="Third slide">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Carousel wrapper -->
                    <div class="col-lg-4">
                        <h2 class="page-header">Awesome Apartments</h2>
                        <p class="text-md">Present your app information in a simple and easy to understand way. Display any data set with Flot Charts.</p>
                        <p>Wintermin includes Area Charts, Simple and Stacked Bar Charts, Line Charts and Pie and Donuts Charts.</p>
                        <p>Customize the chart by simpli editing a PHP file or provide a json file on every request.</p>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row">
                    <div class="text-center">
                        <h2 class="page-header">Discover the most luxurious apartments & vacation rentals in Kampala</h2>
                        <p>Wintermin comes with a full set of utility classes ready to create widgets for your app.</p>
                        <p>Compress your user information in a single panel y customize the elements inside.</p>
                        <p>All components are responsive and ready for mobile devices.</p>
                        <br>
                        <p>
                    </div>
                    <div data-toggle="play-animation" data-play="fadeInRight" data-offset="-250" class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading"></div>
                            <div class="panel-body text-center">
                                <!-- Nav tabs -->
                                <ul class="nav nav-pills">
                                    <li class="active"><a href="#home-pills" data-toggle="tab">All</a>
                                    </li>
                                    <li><a href="#profile-pills" data-toggle="tab">Furnished</a>
                                    </li>
                                    <li><a href="#messages-pills" data-toggle="tab">Unfurnished</a>
                                    </li>
                                    <li><a href="#settings-pills" data-toggle="tab">Residence</a>
                                    </li>
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div id="home-pills" class="tab-pane fade in active">
                                        <div>
                                            <div class="col-lg-4">
                                                <!-- START widget-->
                                                <div class="panel widget">
                                                    <img src="{{ asset('front/apartments/apart5.jpeg')}}" style="width:318px; height:190px;" alt="Image" class="img-responsive">
                                                    <div class="badge-overlay">
                                                        <!-- Change Badge Position, Color, Text here-->
                                                        <span class="top-left badge orange">New</span>
                                                    </div>
                                                    <div class="panel-body">
                                                        <div class="row row-table text-center">
                                                            <div class="col-xs-6">
                                                                <p>5 Rooms</p>
                                                            </div>
                                                            <div class="col-xs-6">
                                                                <p>Status:Rent</p>
                                                            </div>
                                                        </div>
                                                        <div class="row row-table text-center">
                                                            <div class="col-xs-6">
                                                                <span class="text-primar">Ugx.250,000</span>
                                                            </div>
                                                            <div class="col-xs-6">
                                                                <span class="text-primar">Kawempe</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- END widget-->
                                            </div>
                                            <div class="col-lg-4">
                                                <!-- START widget-->
                                                <div class="panel widget">
                                                    <img src="{{ asset('front/apartments/apart4.jpeg')}}" style="width:318px; height:190px;" alt="Image" class="img-responsive">
                                                    <div class="badge-overlay">
                                                        <!-- Change Badge Position, Color, Text here-->
                                                        <span class="top-left badge orange">New</span>
                                                    </div>
                                                    <div class="panel-body">
                                                        <div class="row row-table text-center">
                                                            <div class="col-xs-6">
                                                                <p>5 Rooms</p>
                                                            </div>
                                                            <div class="col-xs-6">
                                                                <p>Status:Rent</p>
                                                            </div>
                                                        </div>
                                                        <div class="row row-table text-center">
                                                            <div class="col-xs-6">
                                                                <span class="text-primar">Ugx.250,000</span>
                                                            </div>
                                                            <div class="col-xs-6">
                                                                <span class="text-primar">Bwaise</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- END widget-->
                                            </div>
                                            <div class="col-lg-4">
                                                <!-- START widget-->
                                                <div class="panel widget">
                                                    <img src="{{ asset('front/apartments/apart4.jpeg')}}" style="width:318px; height:190px;" alt="Image" class="img-responsive">
                                                    <div class="badge-overlay">
                                                        <!-- Change Badge Position, Color, Text here-->
                                                        <span class="top-left badge orange">New</span>
                                                    </div>
                                                    <div class="panel-body">
                                                        <div class="row row-table text-center">
                                                            <div class="col-xs-6">
                                                                <p>5 Rooms</p>
                                                            </div>
                                                            <div class="col-xs-6">
                                                                <p>Status:Rent</p>
                                                            </div>
                                                        </div>
                                                        <div class="row row-table text-center">
                                                            <div class="col-xs-6">
                                                                <span class="text-primar">Ugx.250,000</span>
                                                            </div>
                                                            <div class="col-xs-6">
                                                                <span class="text-primar">Bwaise</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- END widget-->
                                            </div>
                                            <div class="col-lg-4">
                                                <!-- START widget-->
                                                <div class="panel widget">
                                                    <img src="{{ asset('front/apartments/apart5.jpeg')}}" style="width:318px; height:190px;" alt="Image" class="img-responsive">
                                                    <div class="badge-overlay">
                                                        <!-- Change Badge Position, Color, Text here-->
                                                        <span class="top-left badge orange">New</span>
                                                    </div>
                                                    <div class="panel-body">
                                                        <div class="row row-table text-center">
                                                            <div class="col-xs-6">
                                                                <p>5 Rooms</p>
                                                            </div>
                                                            <div class="col-xs-6">
                                                                <p>Status:Rent</p>
                                                            </div>
                                                        </div>
                                                        <div class="row row-table text-center">
                                                            <div class="col-xs-6">
                                                                <span class="text-primar">Ugx.250,000</span>
                                                            </div>
                                                            <div class="col-xs-6">
                                                                <span class="text-primar">Kawempe</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- END widget-->
                                            </div>
                                            <div class="col-lg-4">
                                                <!-- START widget-->
                                                <div class="panel widget">
                                                    <img src="{{ asset('front/apartments/apart5.jpeg')}}" style="width:318px; height:190px;" alt="Image" class="img-responsive">
                                                    <div class="badge-overlay">
                                                        <!-- Change Badge Position, Color, Text here-->
                                                        <span class="top-left badge orange">New</span>
                                                    </div>
                                                    <div class="panel-body">
                                                        <div class="row row-table text-center">
                                                            <div class="col-xs-6">
                                                                <p>5 Rooms</p>
                                                            </div>
                                                            <div class="col-xs-6">
                                                                <p>Status:Rent</p>
                                                            </div>
                                                        </div>
                                                        <div class="row row-table text-center">
                                                            <div class="col-xs-6">
                                                                <span class="text-primar">Ugx.250,000</span>
                                                            </div>
                                                            <div class="col-xs-6">
                                                                <span class="text-primar">Kawempe</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- END widget-->
                                            </div>
                                            <div class="col-lg-4">
                                                <!-- START widget-->
                                                <div class="panel widget">
                                                    <img src="{{ asset('front/apartments/apart5.jpeg')}}" style="width:318px; height:190px;" alt="Image" class="img-responsive">
                                                    <div class="badge-overlay">
                                                        <!-- Change Badge Position, Color, Text here-->
                                                        <span class="top-left badge orange">New</span>
                                                    </div>
                                                    <div class="panel-body">
                                                        <div class="row row-table text-center">
                                                            <div class="col-xs-6">
                                                                <p>5 Rooms</p>
                                                            </div>
                                                            <div class="col-xs-6">
                                                                <p>Status:Rent</p>
                                                            </div>
                                                        </div>
                                                        <div class="row row-table text-center">
                                                            <div class="col-xs-6">
                                                                <span class="text-primar">Ugx.250,000</span>
                                                            </div>
                                                            <div class="col-xs-6">
                                                                <span class="text-primar">Kawempe</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- END widget-->
                                            </div>
                                        </div>
                                    </div>
                                    <div id="profile-pills" class="tab-pane fade">
                                        <div class="col-lg-4">
                                            <!-- START widget-->
                                            <div class="panel widget">
                                                <img src="{{ asset('front/apartments/apart5.jpeg')}}" style="width:318px; height:190px;" alt="Image" class="img-responsive">
                                                <div class="badge-overlay">
                                                    <!-- Change Badge Position, Color, Text here-->
                                                    <span class="top-left badge orange">New</span>
                                                </div>
                                                <div class="panel-body">
                                                    <div class="row row-table text-center">
                                                        <div class="col-xs-6">
                                                            <p>5 Rooms</p>
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <p>Status:Rent</p>
                                                        </div>
                                                    </div>
                                                    <div class="row row-table text-center">
                                                        <div class="col-xs-6">
                                                            <span class="text-primar">Ugx.250,000</span>
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <span class="text-primar">Kawempe</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END widget-->
                                        </div>
                                        <div class="col-lg-4">
                                            <!-- START widget-->
                                            <div class="panel widget">
                                                <img src="{{ asset('front/apartments/apart5.jpeg')}}" style="width:318px; height:190px;" alt="Image" class="img-responsive">
                                                <div class="badge-overlay">
                                                    <!-- Change Badge Position, Color, Text here-->
                                                    <span class="top-left badge orange">New</span>
                                                </div>
                                                <div class="panel-body">
                                                    <div class="row row-table text-center">
                                                        <div class="col-xs-6">
                                                            <p>5 Rooms</p>
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <p>Status:Rent</p>
                                                        </div>
                                                    </div>
                                                    <div class="row row-table text-center">
                                                        <div class="col-xs-6">
                                                            <span class="text-primar">Ugx.250,000</span>
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <span class="text-primar">Kawempe</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END widget-->
                                        </div>
                                        <div class="col-lg-4">
                                            <!-- START widget-->
                                            <div class="panel widget">
                                                <img src="{{ asset('front/apartments/apart5.jpeg')}}" style="width:318px; height:190px;" alt="Image" class="img-responsive">
                                                <div class="badge-overlay">
                                                    <!-- Change Badge Position, Color, Text here-->
                                                    <span class="top-left badge orange">New</span>
                                                </div>
                                                <div class="panel-body">
                                                    <div class="row row-table text-center">
                                                        <div class="col-xs-6">
                                                            <p>5 Rooms</p>
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <p>Status:Rent</p>
                                                        </div>
                                                    </div>
                                                    <div class="row row-table text-center">
                                                        <div class="col-xs-6">
                                                            <span class="text-primar">Ugx.250,000</span>
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <span class="text-primar">Kawempe</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END widget-->
                                        </div>
                                    </div>
                                    <div id="messages-pills" class="tab-pane fade">
                                        <div class="col-lg-4">
                                            <!-- START widget-->
                                            <div class="panel widget">
                                                <img src="{{ asset('front/apartments/apart5.jpeg')}}" style="width:318px; height:190px;" alt="Image" class="img-responsive">
                                                <div class="badge-overlay">
                                                    <!-- Change Badge Position, Color, Text here-->
                                                    <span class="top-left badge orange">New</span>
                                                </div>
                                                <div class="panel-body">
                                                    <div class="row row-table text-center">
                                                        <div class="col-xs-6">
                                                            <p>5 Rooms</p>
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <p>Status:Rent</p>
                                                        </div>
                                                    </div>
                                                    <div class="row row-table text-center">
                                                        <div class="col-xs-6">
                                                            <span class="text-primar">Ugx.250,000</span>
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <span class="text-primar">Kawempe</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END widget-->
                                        </div>
                                        <div class="col-lg-4">
                                            <!-- START widget-->
                                            <div class="panel widget">
                                                <img src="{{ asset('front/apartments/apart5.jpeg')}}" style="width:318px; height:190px;" alt="Image" class="img-responsive">
                                                <div class="badge-overlay">
                                                    <!-- Change Badge Position, Color, Text here-->
                                                    <span class="top-left badge orange">New</span>
                                                </div>
                                                <div class="panel-body">
                                                    <div class="row row-table text-center">
                                                        <div class="col-xs-6">
                                                            <p>5 Rooms</p>
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <p>Status:Rent</p>
                                                        </div>
                                                    </div>
                                                    <div class="row row-table text-center">
                                                        <div class="col-xs-6">
                                                            <span class="text-primar">Ugx.250,000</span>
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <span class="text-primar">Kawempe</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END widget-->
                                        </div>
                                        <div class="col-lg-4">
                                            <!-- START widget-->
                                            <div class="panel widget">
                                                <img src="{{ asset('front/apartments/apart5.jpeg')}}" style="width:318px; height:190px;" alt="Image" class="img-responsive">
                                                <div class="badge-overlay">
                                                    <!-- Change Badge Position, Color, Text here-->
                                                    <span class="top-left badge orange">New</span>
                                                </div>
                                                <div class="panel-body">
                                                    <div class="row row-table text-center">
                                                        <div class="col-xs-6">
                                                            <p>5 Rooms</p>
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <p>Status:Rent</p>
                                                        </div>
                                                    </div>
                                                    <div class="row row-table text-center">
                                                        <div class="col-xs-6">
                                                            <span class="text-primar">Ugx.250,000</span>
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <span class="text-primar">Kawempe</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END widget-->
                                        </div>
                                    </div>
                                    <div id="settings-pills" class="tab-pane fade">
                                        <div class="col-lg-4">
                                            <!-- START widget-->
                                            <div class="panel widget">
                                                <img src="{{ asset('front/apartments/apart5.jpeg')}}" style="width:318px; height:190px;" alt="Image" class="img-responsive">
                                                <div class="badge-overlay">
                                                    <!-- Change Badge Position, Color, Text here-->
                                                    <span class="top-left badge orange">New</span>
                                                </div>
                                                <div class="panel-body">
                                                    <div class="row row-table text-center">
                                                        <div class="col-xs-6">
                                                            <p>5 Rooms</p>
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <p>Status:Rent</p>
                                                        </div>
                                                    </div>
                                                    <div class="row row-table text-center">
                                                        <div class="col-xs-6">
                                                            <span class="text-primar">Ugx.250,000</span>
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <span class="text-primar">Kawempe</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END widget-->
                                        </div>
                                        <div class="col-lg-4">
                                            <!-- START widget-->
                                            <div class="panel widget">
                                                <img src="{{ asset('front/apartments/apart5.jpeg')}}" style="width:318px; height:190px;" alt="Image" class="img-responsive">
                                                <div class="badge-overlay">
                                                    <!-- Change Badge Position, Color, Text here-->
                                                    <span class="top-left badge orange">New</span>
                                                </div>
                                                <div class="panel-body">
                                                    <div class="row row-table text-center">
                                                        <div class="col-xs-6">
                                                            <p>5 Rooms</p>
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <p>Status:Rent</p>
                                                        </div>
                                                    </div>
                                                    <div class="row row-table text-center">
                                                        <div class="col-xs-6">
                                                            <span class="text-primar">Ugx.250,000</span>
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <span class="text-primar">Kawempe</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END widget-->
                                        </div>
                                        <div class="col-lg-4">
                                            <!-- START widget-->
                                            <div class="panel widget">
                                                <img src="{{ asset('front/apartments/apart5.jpeg')}}" style="width:318px; height:190px;" alt="Image" class="img-responsive">
                                                <div class="badge-overlay">
                                                    <!-- Change Badge Position, Color, Text here-->
                                                    <span class="top-left badge orange">New</span>
                                                </div>
                                                <div class="panel-body">
                                                    <div class="row row-table text-center">
                                                        <div class="col-xs-6">
                                                            <p>5 Rooms</p>
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <p>Status:Rent</p>
                                                        </div>
                                                    </div>
                                                    <div class="row row-table text-center">
                                                        <div class="col-xs-6">
                                                            <span class="text-primar">Ugx.250,000</span>
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <span class="text-primar">Kawempe</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END widget-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/.panel-body -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="testimonial" class="bg-primary">
            <div class="container">
                <div id="carousel-testimonial" data-ride="carousel" class="carousel slide">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-testimonial" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-testimonial" data-slide-to="1"></li>
                        <li data-target="#carousel-testimonial" data-slide-to="2"></li>
                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="row">
                                <div class="col-xs-8 col-xs-offset-2">
                                    <h4>
                                        <em>Etiam id nunc felis. Quisque quam turpis, viverra sit amet auctor laoreet, aliquam vitae neque. Integer sagittis ultricies neque vitae suscipit. Integer ut convallis dui. Praesent vel nisi nibh. Nunc lacinia, sem ac laoreet
                                        egestas, risus lacus vulputate dui, quis pellentesque eros est id nisi.</em>
                                    </h4>
                                    <p>
                                        <strong>- John Titor</strong>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="col-xs-8 col-xs-offset-2">
                                    <h4>
                                        <em>Etiam id nunc felis. Quisque quam turpis, viverra sit amet auctor laoreet, aliquam vitae neque. Integer sagittis ultricies neque vitae suscipit. Integer ut convallis dui. Praesent vel nisi nibh. Nunc lacinia, sem ac laoreet
                                        egestas, risus lacus vulputate dui, quis pellentesque eros est id nisi.</em>
                                    </h4>
                                    <p>
                                        <strong>- Mary Mayer</strong>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="col-xs-8 col-xs-offset-2">
                                    <h4>
                                        <em>Quisque non lacinia lacus. Pellentesque odio purus, egestas ac luctus gravida, rutrum ut quam. Quisque quam turpis, viverra sit amet auctor laoreet, aliquam vitae neque. Curabitur nec congue erat. Aliquam erat volutpat. Phasellus
                                        ullamcorper rhoncus sagittis. Sed vestibulum quam ut arcu tempus sed placerat nibh venenatis.</em>
                                    </h4>
                                    <p>
                                        <strong>- John Mayer</strong>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Controls -->
                    <a href="#carousel-testimonial" data-slide="prev" class="left carousel-control">
                    <em class="fa fa-chevron-circle-left"></em>
                    </a>
                    <a href="#carousel-testimonial" data-slide="next" class="right carousel-control">
                    <em class="fa fa-chevron-circle-right"></em>
                    </a>
                </div>
            </div>
        </section>
        <section id="clients" class="bg-white">
            <div class="container">
                <h2 class="section-header">What we offer
                    <br>
                    <small class="text-muted text-center">Wintermin makes your life easier. The best choice for your next project.</small>
                </h2>
                <div class="row">
                    <div class="col-lg-2 col-md-4 col-xs-6 text-center">
                        <i class='fa fa-car' style='font-size:48px;color:#1a1a4c'></i>
                        <h5><strong>Ample Parking</strong></h5>
                        <p>We provide ample parking space at our properties</p>
                    </div>
                    <div class="col-lg-2 col-md-4 col-xs-6">
                        <i class='fa fa-smile-o' style='font-size:48px;color:#1a1a4c'></i>
                        <h5><strong>Confortable Rest</strong></h5>
                        <p>Your comfort comes first at our furnished apartments</p>
                    </div>
                    <div class="col-lg-2 col-md-4 col-xs-6">
                        <i class='fa fa-eye' style='font-size:48px;color:#1a1a4c'></i>
                        <h5><strong>Serene Views</strong></h5>
                        <p>We have the best views of Kampala city & it’s surroundings</p>
                    </div>
                    <div class="col-lg-2 col-md-4 col-xs-6">
                        <i class='fa fa-rocket' style='font-size:48px;color:#1a1a4c'></i>
                        <h5><strong>Modern Service</strong></h5>
                        <p>We provide the best support services to all our tenants</p>
                    </div>
                    <div class="col-lg-2 col-md-4 col-xs-6">
                        <i class='fa fa-hand-o-right' style='font-size:48px;color:#1a1a4c'></i>
                        <h5><strong>Laundry</strong></h5>
                        <p>We have a provision for laundry services at our apartments</p>
                    </div>
                    <div class="col-lg-2 col-md-4 col-xs-6">
                        <i class='fa fa-lock' style='font-size:48px;color:#1a1a4c'></i>
                        <h5><strong>Security</strong></h5>
                        <p>Your comfort comes first at our furnished apartments</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-primary">
            <div class="container">
                <h2 data-toggle="play-animation" data-play="fadeInUp" data-offset="0" class="section-header">Short Links
                    <br>
                    <small class="text-white text-center">Wintermin comes packed with tons of feature ready to use.</small>
                </h2>
                <div class="row">
                    <div class="col-lg-3">
                        <ul class="feature-list">
                            <li data-toggle="play-animation" data-play="fadeInUp" data-offset="0">
                                <h4>
                                    <span class="point point-primary point-lg"></span>Agents
                                </h4>
                                <p>Quisque luctus vehicula massa quis ultrices. Nunc et magna in metus pharetra ultricies ac sit amet justo.</p>
                            </li>
                            <li data-toggle="play-animation" data-play="fadeInUp" data-offset="0">
                                <h4>
                                    <span class="point point-primary point-lg"></span>Apartments
                                </h4>
                                <p>Cras dolor ligula, laoreet ac vestibulum sed, molestie id odio. Donec convallis arcu sit amet tortor sagittis in convallis metus facilisis.</p>
                            </li>
                            <li data-toggle="play-animation" data-play="fadeInUp" data-offset="0">
                                <h4>
                                    <span class="point point-primary point-lg"></span>Contact
                                </h4>
                                <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In ante nisi, mollis nec egestas eget, viverra in mi.</p>
                            </li>
                            <li data-toggle="play-animation" data-play="fadeInUp" data-offset="0">
                                <h4>
                                    <span class="point point-primary point-lg"></span>Payments
                                </h4>
                                <p>Quisque et nulla in tortor posuere accumsan eget non magna. Vestibulum a ipsum lectus, ac congue sapien.</p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <img src="{{ asset('front/app/img/landing/iphone.png')}}" alt="App Name" class="img-responsive center-block">
                    </div>
                    <div class="col-lg-3">
                        <ul class="feature-list">
                            <li data-toggle="play-animation" data-play="fadeInUp" data-offset="0">
                                <h4>
                                    <span class="point point-primary point-lg"></span>Others
                                </h4>
                                <p>Quisque luctus vehicula massa quis ultrices. Nunc et magna in metus pharetra ultricies ac sit amet justo.</p>
                            </li>
                            <li data-toggle="play-animation" data-play="fadeInUp" data-offset="0">
                                <h4>
                                    <span class="point point-primary point-lg"></span>Chats
                                </h4>
                                <p>Cras dolor ligula, laoreet ac vestibulum sed, molestie id odio. Donec convallis arcu sit amet tortor sagittis in convallis metus facilisis.</p>
                            </li>
                            <li data-toggle="play-animation" data-play="fadeInUp" data-offset="0">
                                <h4>
                                    <span class="point point-primary point-lg"></span>Google Map
                                </h4>
                                <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In ante nisi, mollis nec egestas eget, viverra in mi.</p>
                            </li>
                            <li data-toggle="play-animation" data-play="fadeInUp" data-offset="0">
                                <h4>
                                    <span class="point point-primary point-lg"></span>Our Customers
                                </h4>
                                <p>Quisque et nulla in tortor posuere accumsan eget non magna. Vestibulum a ipsum lectus, ac congue sapien.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section id="callout">
            <div data-toggle="play-animation" data-play="fadeInLeftBig" data-offset="-200" class="container text-center">
                <h1>Ready to start? Try this App today</h1>
                <h4>And see why people around the world choose this APP to create great cross-platform websites</h4>
                <ul class="list-inline store-list">
                    <li>
                        <a href="#">
                        <img src="{{ asset('front/app/img/landing/store-apple.png')}}" alt="App Name" class="img-responsive">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                        <img src="{{ asset('front/app/img/landing/store-google.png')}}" alt="App Name" class="img-responsive">
                        </a>
                    </li>
                </ul>
                <p>
                    <br>
                    <a href="#" class="btn btn-primary btn-lg btn-oval btn-fw">
                    <strong>Join Now!</strong>
                    </a>
                </p>
            </div>
        </section>
        <footer class="footer-1 bg-primary">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2 col-xs-6">
                        <nav>
                            <h5>PRODUCT</h5>
                            <ul class="list-unstyled">
                                <li><a href="#">Documentation</a>
                                </li>
                                <li><a href="#">Customers</a>
                                </li>
                                <li><a href="#">Tour</a>
                                </li>
                                <li><a href="#">Pricing</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-sm-2 col-xs-6">
                        <nav>
                            <h5>CONTACT</h5>
                            <ul class="list-unstyled">
                                <li><a href="#">Support</a>
                                </li>
                                <li><a href="#">Sales</a>
                                </li>
                                <li><a href="#">Forum</a>
                                </li>
                                <li><a href="#">Blog</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-sm-2 col-xs-6">
                        <nav>
                            <h5>COMPANY</h5>
                            <ul class="list-unstyled">
                                <li><a href="#">About</a>
                                </li>
                                <li><a href="#">Press Kit</a>
                                </li>
                                <li><a href="#">Education</a>
                                </li>
                                <li><a href="#">Non-profits</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-sm-2 col-xs-6">
                        <nav>
                            <h5>Say HI</h5>
                            <ul class="list-unstyled">
                                <li><a href="#">Twitter</a>
                                </li>
                                <li><a href="#">Facebook</a>
                                </li>
                                <li><a href="#">Google+</a>
                                </li>
                                <li><a href="#">Blog</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-4 col-xs-12">
                        <form action="#" method="post">
                            <h5>SUBSCRIBE TO OUR NEWSLETTER!</h5>
                            <div class="input-group">
                                <input type="email" name="email" placeholder="mail@example.com" required="" class="form-control">
                                <span class="input-group-btn">
                                <button type="submit" class="btn btn-info">Join</button>
                                </span>
                            </div>
                            <!--/input-group -->
                        </form>
                        <p class="text-muted">
                            <small>We will never send spam and you can unsubscribe any time</small>
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <footer class="footer-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <p>Copyright {{ date('Y')}} | <a href="#">Terms of Service </a>| <a href="#">Privacy Policy</a>
                        </p>
                    </div>
                    <div class="col-lg-4"></div>
                    <div class="col-lg-4">
                        <p>Designed By
                            <em class="fa fa-check text-danger fa-fw"></em>
                            <span>Jits</span>
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- END wrapper-->
        <!-- START Scripts-->
        <!-- Main vendor Scripts-->
        @include('frontlayouts.javascript')
        <script type="text/javascript" src="{{ asset('front/owl-carousel.min.js')}}"></script>
        <script type="text/javascript" src="{{ asset('front/owl-custom.js')}}"></script>
        <!-- END Scripts-->
    </body>
</html>