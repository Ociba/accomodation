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
        <style>
            .beddings-area {
  background: #6cbe03;
  position: relative; }
  .beddings-area::before {
    position: absolute;
    content: '';
    left: 0;
    top: 0;
    height: 100%;
    width: 100%;
    background-image: url(../images/beddings-pattern.png);
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat; }
  @media only screen and (min-width: 768px) and (max-width: 991px) {
    .beddings-area .beddings-content {
      margin-bottom: 30px; } }
  @media (max-width: 767px) {
    .beddings-area .beddings-content {
      margin-bottom: 30px; } }
  .beddings-area .beddings-content span {
    font-size: 20px;
    font-weight: 700;
    text-transform: capitalize;
    color: #fff;
    padding-left: 65px;
    position: relative; }
    .beddings-area .beddings-content span::before {
      position: absolute;
      content: '';
      left: 0;
      top: 50%;
      transform: translateY(-50%);
      height: 3px;
      width: 45px;
      background: #fff; }
  .beddings-area .beddings-content .title {
    font-size: 50px;
    line-height: 55px;
    color: #fff;
    letter-spacing: -1px;
    padding-top: 25px;
    padding-bottom: 21px; }
    @media only screen and (min-width: 992px) and (max-width: 1200px) {
      .beddings-area .beddings-content .title {
        font-size: 40px;
        line-height: 46px; } }
  .beddings-area .beddings-content p {
    color: #fff;
    padding-right: 5px; }
    @media only screen and (min-width: 992px) and (max-width: 1200px) {
      .beddings-area .beddings-content p {
        font-size: 15px; } }
  .beddings-area .beddings-item {
    padding-top: 50px;
    border-radius: 15px; }
    .beddings-area .beddings-item img {
      display: inline-block; }
    .beddings-area .beddings-item .beddings-title {
      padding: 44px 35px 8px; }
      .beddings-area .beddings-item .beddings-title .title {
        font-size: 24px; }
        @media only screen and (min-width: 992px) and (max-width: 1200px) {
          .beddings-area .beddings-item .beddings-title .title {
            font-size: 20px; } }
        @media (max-width: 767px) {
          .beddings-area .beddings-item .beddings-title .title {
            font-size: 20px; } }
        @media only screen and (min-width: 576px) and (max-width: 767px) {
          .beddings-area .beddings-item .beddings-title .title {
            font-size: 24px; } }
      .beddings-area .beddings-item .beddings-title span {
        font-size: 14px;
        color: #989898; }
        .beddings-area .beddings-item .beddings-title span i {
          color: #f4a700;
          padding-right: 5px; }
    .beddings-area .beddings-item .beddings-price {
      padding-left: 35px;
      padding-right: 35px;
      padding-bottom: 45px; }
      .beddings-area .beddings-item .beddings-price p {
        font-size: 18px;
        font-weight: 700;
        color: #fe2000; }
      .beddings-area .beddings-item .beddings-price ul li {
        display: inline-block; }
        .beddings-area .beddings-item .beddings-price ul li i {
          color: #f4a700;
          font-size: 14px;
          padding-left: 4px; }
  .beddings-area .beddings-active .slick-arrow {
    position: absolute;
    bottom: 29px;
    z-index: 9;
    cursor: pointer;
    height: 60px;
    width: 60px;
    text-align: center;
    line-height: 54px;
    border: 3px solid #fff;
    border-radius: 50%;
    color: #fff;
    font-size: 18px;
    -webkit-transition: all 0.3s ease-out 0s;
    -moz-transition: all 0.3s ease-out 0s;
    -ms-transition: all 0.3s ease-out 0s;
    -o-transition: all 0.3s ease-out 0s;
    transition: all 0.3s ease-out 0s; }
    @media only screen and (min-width: 992px) and (max-width: 1200px) {
      .beddings-area .beddings-active .slick-arrow {
        bottom: 35px; } }
    .beddings-area .beddings-active .slick-arrow:hover {
      background: #fff;
      color: #6cbe03; }
    .beddings-area .beddings-active .slick-arrow.prev {
      left: -385px; }
      @media only screen and (min-width: 992px) and (max-width: 1200px) {
        .beddings-area .beddings-active .slick-arrow.prev {
          left: -310px; } }
    .beddings-area .beddings-active .slick-arrow.next {
      left: -315px; }
      @media only screen and (min-width: 992px) and (max-width: 1200px) {
        .beddings-area .beddings-active .slick-arrow.next {
          left: -230px; } }
        </style>
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
        @include('frontlayouts.menu')
        @include('frontlayouts.social-links')
        <section>
            <div class="container">
                <h2 class="section-header">Our Current Available Accomodations & Properties With Discount
                    <br>
                    <small class="text-muted text-center">Wintermin makes your life easier. The best choice for your next project.</small>
                </h2>
                <div class="row">
                    @foreach($supermarket_items_with_discount as $discount)
                    <div class="col-lg-3">
                        @php
                        $percentage_discount =\DB::table('super_markets')->where('id',$discount->id)->value('discount');
                        $original_price =\DB::table('super_markets')->where('id',$discount->id)->value('price');
                        $actual_percentage_discount =($percentage_discount * 0.01);

                        //$calculate_discount =$original_price * $actual_percentage_discount;

                        //$new_price =$original_price-$calculate_discount;

                        $item_category_id =\DB::table('super_markets')->where('id',$discount->id)->value('discount');
                        @endphp
                        <!-- START widget-->
                        <div class="panel widget">
                            <img src="{{ asset('super_market_photos/'.$discount->photo)}}" style="width:318px; height:190px;" alt="Image" class="img-responsive">
                            <div class="badge-overlay">
                                <!-- Change Badge Position, Color, Text here-->
                                <button type="button" class="btn btn-pill-left btn-warning">{{$percentage_discount}} %</button>
                            </div>
                            <div class="panel-body">
                                <div class="row row-table text-center">
                                    <div class="col-xs-6">
                                        <p>{{$discount->item}}</p>
                                    </div>
                                    <div class="col-xs-6">
                                        <p><strong>{{$discount->status}}</strong></p>
                                    </div>
                                </div>
                                <div class="row row-table text-center">
                                    <div class="col-xs-6">
                                        <span class="text-primary"><del>Ugx.{{ number_format($discount->price)}}</del></span>
                                        <span class="text-warning font-weight-bold"><strong>Ugx:{{ number_format($discount->new_price)}}</strong></span>
                                    </div>
                                    <div class="col-xs-6">
                                        <span class="text-primar">{{$discount->location}}</span>
                                    </div>
                                </div>
                                <div class="row row-table">
                                    <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" value="{{ $discount->id }}" name="id">
                                        <input type="hidden" value="{{ $discount->item }}" name="name">
                                        <input type="hidden" value="{{ $discount->new_price }}" name="price">
                                        <input type="hidden" value="{{ $discount->photo }}"  name="image">
                                        <input type="hidden" value="1" name="quantity">
                                        <div class="col-xs-6">
                                            <button class="btn btn-bloc btn-primary">Add To Cart</button>
                                         </div>
                                        <div class="col-xs-6">
                                           <a href="/cart" class="btn btn-warning">View Cart</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- END widget-->
                    </div>
                    @endforeach
                    <!-- END row-->
                </div>
            </div>
        </section>
        @include('frontlayouts.slider')
        <section class="bg-white">
            <div class="container">
                <div class="row">
                    <div data-toggle="play-animation" data-play="fadeInRight" data-offset="-250" class="col-lg-12">
                        <div class="pane panel-default">
                            <div class="panel-heading text-center"><h1>More Accomodation & Propertiies</h4></div>
                            <div class="panel-body">
                                <!-- Nav tabs -->
                                <ul class="nav nav-pills text-center">
                                    <li class="active"><a href="#all-pills" data-toggle="tab">All</a>
                                    </li>
                                    <li><a href="#clothes-pills" data-toggle="tab">Clothes</a>
                                    </li>
                                    <li><a href="#shoes-pills" data-toggle="tab">Shoes</a>
                                    </li>
                                    <li><a href="#phones-pills" data-toggle="tab">Phones</a>
                                    </li>
                                    <li><a href="#fruits-pills" data-toggle="tab">Fruits</a>
                                    </li>
                                    <li><a href="#veges-pills" data-toggle="tab">Vegetables</a>
                                    </li>
                                    <li><a href="#utensils-pills" data-toggle="tab">Utensils</a>
                                   </li>
                                   <li><a href="#beddings-pills" data-toggle="tab">Beddings</a>
                                    </li>
                                    <li><a href="#electronics-pills" data-toggle="tab">Electronics</a>
                                    </li>
                                    <li><a href="#computers-pills" data-toggle="tab">Computers</a>
                                    </li>
                                    <li><a href="#bags-pills" data-toggle="tab">Bags</a>
                                    </li>
                                    <li><a href="#saloons-pills" data-toggle="tab">Saloons</a>
                                    </li>
                                    <li><a href="#schools-pills" data-toggle="tab">Schools</a>
                                    </li>
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div id="all-pills" class="tab-pane fade in active">
                                        <div>
                                            @foreach($get_all_the_supermarket_items as $all)
                                            <div class="col-lg-4">
                                                <!-- START widget-->
                                                <div class="panel widget">
                                                    <img src="{{ asset('super_market_photos/'.$all->photo)}}" style="width:318px; height:190px;" alt="Image" class="img-responsive">
                                                    <div class="badge-overlay">
                                                        <!-- Change Badge Position, Color, Text here-->
                                                    @if($all->created_at < now()->subWeek()) 
                                                    <span class="top-left badge primary">Old</span>
                                                    @else
                                                    <span class="top-left badge orange ">New</span>
                                                    @endif
                                                    </div>
                                                    <div class="panel-body">
                                                        <div class="row row-table text-center">
                                                            <div class="col-xs-6">
                                                                <span style="color:black;">{{$all->item}}</span>
                                                            </div>
                                                            <div class="col-xs-6">
                                                                <span class="text-primary">Ugx.{{$all->price}}</span>
                                                            </div>
                                                        </div>
                                                        <div class="row row-table">
                                                            <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                                                @csrf
                                                                <input type="hidden" value="{{ $all->id }}" name="id">
                                                                <input type="hidden" value="{{ $all->item }}" name="name">
                                                                <input type="hidden" value="{{ $all->price }}" name="price">
                                                                <input type="hidden" value="{{ $all->photo }}"  name="image">
                                                                <input type="hidden" value="1" name="quantity">
                                                                <div class="col-xs-12">
                                                                    <button class="btn btn-primary">Add To Cart</button>
                                                                    <a href="/cart" class="btn btn-warning">View Cart</a>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- END widget-->
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div id="clothes-pills" class="tab-pane fade">
                                        @foreach($get_clothes as $clothes)
                                        <div class="col-lg-4">
                                            <!-- START widget-->
                                            <div class="panel widget">
                                                <img src="{{ asset('super_market_photos/'.$clothes->photo)}}" style="width:318px; height:190px;" alt="Image" class="img-responsive">
                                                <div class="badge-overlay">
                                                    <!-- Change Badge Position, Color, Text here-->
                                                    @if($clothes->created_at < now()->subWeek()) 
                                                    <span class="top-left badge primary">Old</span>
                                                    @else
                                                    <span class="top-left badge orange ">New</span>
                                                    @endif
                                                </div>
                                                <div class="panel-body"> 
                                                    <div class="row row-table text-center">
                                                        <div class="col-xs-6">
                                                            <span style="color:black;">{{$clothes->item}}</span>
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <span class="text-primary">Ugx.{{$clothes->price}}</span>
                                                        </div>
                                                    </div>
                                                    <div class="row row-table">
                                                        <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                                            @csrf
                                                            <input type="hidden" value="{{ $clothes->id }}" name="id">
                                                            <input type="hidden" value="{{ $clothes->item }}" name="name">
                                                            <input type="hidden" value="{{ $clothes->price }}" name="price">
                                                            <input type="hidden" value="{{ $clothes->photo }}"  name="image">
                                                            <input type="hidden" value="1" name="quantity">
                                                            <div class="col-xs-12">
                                                                <button class="btn btn-primary">Add To Cart</button>
                                                                <a href="/cart" class="btn btn-warning">View Cart</a>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END widget-->
                                        </div>
                                        @endforeach
                                    </div>
                                    <div id="shoes-pills" class="tab-pane fade">
                                        @foreach($shoes as $shoe)
                                        <div class="col-lg-4">
                                            <!-- START widget-->
                                            <div class="panel widget">
                                                <img src="{{ asset('super_market_photos/'.$shoe->photo)}}" style="width:318px; height:190px;" alt="Image" class="img-responsive">
                                                <div class="badge-overlay">
                                                    <!-- Change Badge Position, Color, Text here-->
                                                    @if($shoe->created_at < now()->subWeek()) 
                                                    <span class="top-left badge primary">Old</span>
                                                    @else
                                                    <span class="top-left badge orange ">New</span>
                                                    @endif
                                                </div>
                                                <div class="panel-body">
                                                    <div class="row row-table text-center">
                                                        <div class="col-xs-6">
                                                            <span style="color:black">Ugx.{{$shoe->price}}</span>
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <span class="text-primary">Ugx:{{$shoe->price}}</span>
                                                        </div>
                                                    </div>
                                                    <div class="row row-table">
                                                        <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                                            @csrf
                                                            <input type="hidden" value="{{ $shoe->id }}" name="id">
                                                            <input type="hidden" value="{{ $shoe->item }}" name="name">
                                                            <input type="hidden" value="{{ $shoe->price }}" name="price">
                                                            <input type="hidden" value="{{ $shoe->photo }}"  name="image">
                                                            <input type="hidden" value="1" name="quantity">
                                                            <div class="col-xs-12">
                                                                <button class="btn btn-primary">Add To Cart</button>
                                                                <a href="/cart" class="btn btn-warning">View Cart</a>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END widget-->
                                        </div>
                                        @endforeach
                                    </div>
                                    <div id="phones-pills" class="tab-pane fade">
                                        @foreach($phones as $phones)
                                        <div class="col-lg-4">
                                            <!-- START widget-->
                                            <div class="panel widget">
                                                <img src="{{ asset('super_market_photos/'.$phones->photo)}}" style="width:318px; height:190px;" alt="Image" class="img-responsive">
                                                <div class="badge-overlay">
                                                    <!-- Change Badge Position, Color, Text here-->
                                                    @if($phones->created_at < now()->subWeek()) 
                                                    <span class="top-left badge primary">Old</span>
                                                    @else
                                                    <span class="top-left badge orange ">New</span>
                                                    @endif
                                                </div>
                                                <div class="panel-body">
                                                    <div class="row row-table text-center">
                                                        <div class="col-xs-6">
                                                            <span style="color:black">Ugx.{{$phones->item}}</span>
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <span class="text-primary">Ugx:{{$phones->price}}</span>
                                                        </div>
                                                    </div>
                                                    <div class="row row-table">
                                                        <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                                            @csrf
                                                            <input type="hidden" value="{{ $phones->id }}" name="id">
                                                            <input type="hidden" value="{{ $phones->item }}" name="name">
                                                            <input type="hidden" value="{{ $phones->price }}" name="price">
                                                            <input type="hidden" value="{{ $phones->photo }}"  name="image">
                                                            <input type="hidden" value="1" name="quantity">
                                                            <div class="col-xs-12">
                                                                <button class="btn btn-primary">Add To Cart</button>
                                                                <a href="/cart" class="btn btn-warning">View Cart</a>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END widget-->
                                        </div>
                                        @endforeach
                                    </div>
                                    <div id="fruits-pills" class="tab-pane fade">
                                       @foreach($fruits as $fruit)
                                        <div class="col-lg-4">
                                            <!-- START widget-->
                                            <div class="panel widget">
                                                <img src="{{ asset('super_market_photos/'.$fruit->photo)}}" style="width:318px; height:190px;" alt="Image" class="img-responsive">
                                                <div class="badge-overlay">
                                                    <!-- Change Badge Position, Color, Text here-->
                                                    @if($fruit->created_at < now()->subWeek()) 
                                                    <span class="top-left badge primary">Old</span>
                                                    @else
                                                    <span class="top-left badge orange ">New</span>
                                                    @endif
                                                </div>
                                                <div class="panel-body">
                                                    <div class="row row-table text-center">
                                                        <div class="col-xs-6">
                                                            <span style="color:black;">Ugx.{{$fruit->item}}</span>
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <span class="text-primary">Ugx:{{$fruit->price}}</span>
                                                        </div>
                                                    </div>
                                                    <div class="row row-table">
                                                        <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                                            @csrf
                                                            <input type="hidden" value="{{ $fruit->id }}" name="id">
                                                            <input type="hidden" value="{{ $fruit->item }}" name="name">
                                                            <input type="hidden" value="{{ $fruit->price }}" name="price">
                                                            <input type="hidden" value="{{ $fruit->photo }}"  name="image">
                                                            <input type="hidden" value="1" name="quantity">
                                                            <div class="col-xs-12">
                                                                <button class="btn btn-primary">Add To Cart</button>
                                                                <a href="/cart" class="btn btn-warning">View Cart</a>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END widget-->
                                        </div>
                                        @endforeach
                                    </div>
                                    <div id="veges-pills" class="tab-pane fade">
                                       @foreach($vegetables as $veges)
                                        <div class="col-lg-4">
                                            <!-- START widget-->
                                            <div class="panel widget">
                                                <img src="{{ asset('super_market_photos/'.$veges->photo)}}" style="width:318px; height:190px;" alt="Image" class="img-responsive">
                                                <div class="badge-overlay">
                                                    <!-- Change Badge Position, Color, Text here-->
                                                    @if($veges->created_at < now()->subWeek()) 
                                                    <span class="top-left badge primary">Old</span>
                                                    @else
                                                    <span class="top-left badge orange ">New</span>
                                                    @endif
                                                </div>
                                                <div class="panel-body">
                                                    <div class="row row-table text-center">
                                                        <div class="col-xs-6">
                                                            <span style="color:black;">{{$veges->item}}</span>
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <span class="text-primary">Ugx:{{$veges->price}}</span>
                                                        </div>
                                                    </div>
                                                    <div class="row row-table">
                                                        <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                                            @csrf
                                                            <input type="hidden" value="{{ $veges->id }}" name="id">
                                                            <input type="hidden" value="{{ $veges->item }}" name="name">
                                                            <input type="hidden" value="{{ $veges->price }}" name="price">
                                                            <input type="hidden" value="{{ $veges->photo }}"  name="image">
                                                            <input type="hidden" value="1" name="quantity">
                                                            <div class="col-xs-12">
                                                                <button class="btn btn-primary">Add To Cart</button>
                                                                <a href="/cart" class="btn btn-warning">View Cart</a>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END widget-->
                                        </div>
                                        @endforeach
                                    </div>
                                    <div id="utensils-pills" class="tab-pane fade">
                                       @foreach($utensils as $utensil)
                                        <div class="col-lg-4">
                                            <!-- START widget-->
                                            <div class="panel widget">
                                                <img src="{{ asset('super_market_photos/'.$utensil->photo)}}" style="width:318px; height:190px;" alt="Image" class="img-responsive">
                                                <div class="badge-overlay">
                                                    <!-- Change Badge Position, Color, Text here-->
                                                    @if($utensil->created_at < now()->subWeek()) 
                                                    <span class="top-left badge primary">Old</span>
                                                    @else
                                                    <span class="top-left badge orange ">New</span>
                                                    @endif
                                                </div>
                                                <div class="panel-body">
                                                    
                                                    <div class="row row-table text-center">
                                                        <div class="col-xs-6">
                                                            <span style="color:black;">{{$utensil->item}}</span>
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <span class="text-primary">Ugx:{{$utensil->price}}</span>
                                                        </div>
                                                    </div>
                                                    <div class="row row-table">
                                                        <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                                            @csrf
                                                            <input type="hidden" value="{{ $utensil->id }}" name="id">
                                                            <input type="hidden" value="{{ $utensil->item }}" name="name">
                                                            <input type="hidden" value="{{ $utensil->price }}" name="price">
                                                            <input type="hidden" value="{{ $utensil->photo }}"  name="image">
                                                            <input type="hidden" value="1" name="quantity">
                                                            <div class="col-xs-12">
                                                                <button class="btn btn-primary">Add To Cart</button>
                                                                <a href="/cart" class="btn btn-warning">View Cart</a>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END widget-->
                                        </div>
                                        @endforeach
                                    </div>
                                    <div id="beddings-pills" class="tab-pane fade">
                                       @foreach($beddings as $beddings)
                                        <div class="col-lg-4">
                                            <!-- START widget-->
                                            <div class="panel widget">
                                                <img src="{{ asset('super_market_photos/'.$beddings->photo)}}" style="width:318px; height:190px;" alt="Image" class="img-responsive">
                                                <div class="badge-overlay">
                                                    <!-- Change Badge Position, Color, Text here-->
                                                    @if($beddings->created_at < now()->subWeek()) 
                                                    <span class="top-left badge primary">Old</span>
                                                    @else
                                                    <span class="top-left badge orange ">New</span>
                                                    @endif
                                                </div>
                                                <div class="panel-body">
                                                    <div class="row row-table text-center">
                                                        <div class="col-xs-6">
                                                            <span style="color:black">{{$beddings->item}}</span>
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <span class="text-primary">Ugx:{{$beddings->price}}</span>
                                                        </div>
                                                    </div>
                                                    <div class="row row-table">
                                                        <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                                            @csrf
                                                            <input type="hidden" value="{{ $beddings->id }}" name="id">
                                                            <input type="hidden" value="{{ $beddings->item }}" name="name">
                                                            <input type="hidden" value="{{ $beddings->price }}" name="price">
                                                            <input type="hidden" value="{{ $beddings->photo }}"  name="image">
                                                            <input type="hidden" value="1" name="quantity">
                                                            <div class="col-xs-12">
                                                                <button class="btn btn-primary">Add To Cart</button>
                                                                <a href="/cart" class="btn btn-warning">View Cart</a>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END widget-->
                                        </div>
                                        @endforeach
                                    </div>
                                    <div id="electronics-pills" class="tab-pane fade">
                                       @foreach($electronics as $electronic)
                                        <div class="col-lg-4">
                                            <!-- START widget-->
                                            <div class="panel widget">
                                                <img src="{{ asset('super_market_photos/'.$electronic->photo)}}" style="width:318px; height:190px;" alt="Image" class="img-responsive">
                                                <div class="badge-overlay">
                                                    <!-- Change Badge Position, Color, Text here-->
                                                    @if($electronic->created_at < now()->subWeek()) 
                                                    <span class="top-left badge primary">Old</span>
                                                    @else
                                                    <span class="top-left badge orange ">New</span>
                                                    @endif
                                                </div>
                                                <div class="panel-body">
                                                    <div class="row row-table text-center">
                                                        <div class="col-xs-6">
                                                            <span style="color:black;">Ugx.{{$office->item}}</span>
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <span class="text-primary">Ugx:{{$electronic->price}}</span>
                                                        </div>
                                                    </div>
                                                    <div class="row row-table">
                                                        <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                                            @csrf
                                                            <input type="hidden" value="{{ $electronic->id }}" name="id">
                                                            <input type="hidden" value="{{ $electronic->item }}" name="name">
                                                            <input type="hidden" value="{{ $electronic->price }}" name="price">
                                                            <input type="hidden" value="{{ $electronic->photo }}"  name="image">
                                                            <input type="hidden" value="1" name="quantity">
                                                            <div class="col-xs-12">
                                                                <button class="btn btn-primary">Add To Cart</button>
                                                                <a href="/cart" class="btn btn-warning">View Cart</a>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END widget-->
                                        </div>
                                        @endforeach
                                    </div>
                                    <div id="computers-pills" class="tab-pane fade">
                                       @foreach($computers as $computer)
                                        <div class="col-lg-4">
                                            <!-- START widget-->
                                            <div class="panel widget">
                                                <img src="{{ asset('super_market_photos/'.$computer->photo)}}" style="width:318px; height:190px;" alt="Image" class="img-responsive">
                                                <div class="badge-overlay">
                                                    <!-- Change Badge Position, Color, Text here-->
                                                    @if($computer->created_at < now()->subWeek()) 
                                                    <span class="top-left badge primary">Old</span>
                                                    @else
                                                    <span class="top-left badge orange ">New</span>
                                                    @endif
                                                </div>
                                                <div class="panel-body">
                                                    <div class="row row-table text-center">
                                                        <div class="col-xs-6">
                                                            <span style="color:black;">Ugx.{{$computer->item}}</span>
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <span class="text-primary">{{$computer->price}}</span>
                                                        </div>
                                                    </div>
                                                    <div class="row row-table">
                                                        <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                                            @csrf
                                                            <input type="hidden" value="{{ $computer->id }}" name="id">
                                                            <input type="hidden" value="{{ $computer->item }}" name="name">
                                                            <input type="hidden" value="{{ $computer->price }}" name="price">
                                                            <input type="hidden" value="{{ $computer->photo }}"  name="image">
                                                            <input type="hidden" value="1" name="quantity">
                                                            <div class="col-xs-12">
                                                                <button class="btn btn-primary">Add To Cart</button>
                                                                <a href="/cart" class="btn btn-warning">View Cart</a>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END widget-->
                                        </div>
                                        @endforeach
                                    </div>
                                    <div id="bags-pills" class="tab-pane fade">
                                       @foreach($bags as $bag)
                                        <div class="col-lg-4">
                                            <!-- START widget-->
                                            <div class="panel widget">
                                                <img src="{{ asset('super_market_photos/'.$bag->photo)}}" style="width:318px; height:190px;" alt="Image" class="img-responsive">
                                                <div class="badge-overlay">
                                                    <!-- Change Badge Position, Color, Text here-->
                                                    @if($bag->created_at < now()->subWeek()) 
                                                    <span class="top-left badge primary">Old</span>
                                                    @else
                                                    <span class="top-left badge orange ">New</span>
                                                    @endif
                                                </div>
                                                <div class="panel-body">
                                                    <div class="row row-table text-center">
                                                        <div class="col-xs-6">
                                                            <span style="color:black;">Ugx.{{$bag->item}}</span>
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <span class="text-primary">{{$bag->price}}</span>
                                                        </div>
                                                    </div>
                                                    <div class="row row-table">
                                                        <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                                            @csrf
                                                            <input type="hidden" value="{{ $bag->id }}" name="id">
                                                            <input type="hidden" value="{{ $bag->item }}" name="name">
                                                            <input type="hidden" value="{{ $bag->price }}" name="price">
                                                            <input type="hidden" value="{{ $bag->photo }}"  name="image">
                                                            <input type="hidden" value="1" name="quantity">
                                                            <div class="col-xs-12">
                                                                <button class="btn btn-primary">Add To Cart</button>
                                                                <a href="/cart" class="btn btn-warning">View Cart</a>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END widget-->
                                        </div>
                                        @endforeach
                                    </div>
                                    <div id="saloons-pills" class="tab-pane fade">
                                       @foreach($saloon_products as $saloon)
                                        <div class="col-lg-4">
                                            <!-- START widget-->
                                            <div class="panel widget">
                                                <img src="{{ asset('super_market_photos/'.$saloon->photo)}}" style="width:318px; height:190px;" alt="Image" class="img-responsive">
                                                <div class="badge-overlay">
                                                    <!-- Change Badge Position, Color, Text here-->
                                                    @if($saloon->created_at < now()->subWeek()) 
                                                    <span class="top-left badge primary">Old</span>
                                                    @else
                                                    <span class="top-left badge orange ">New</span>
                                                    @endif
                                                </div>
                                                <div class="panel-body">
                                                    <div class="row row-table text-center">
                                                        <div class="col-xs-6">
                                                            <span style="color:black;">Ugx.{{$saloon->item}}</span>
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <span class="text-primary">{{$saloon->price}}</span>
                                                        </div>
                                                    </div>
                                                    <div class="row row-table">
                                                        <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                                            @csrf
                                                            <input type="hidden" value="{{ $saloon->id }}" name="id">
                                                            <input type="hidden" value="{{ $saloon->item }}" name="name">
                                                            <input type="hidden" value="{{ $saloon->price }}" name="price">
                                                            <input type="hidden" value="{{ $saloon->photo }}"  name="image">
                                                            <input type="hidden" value="1" name="quantity">
                                                            <div class="col-xs-12">
                                                                <button class="btn btn-primary">Add To Cart</button>
                                                                <a href="/cart" class="btn btn-warning">View Cart</a>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END widget-->
                                        </div>
                                        @endforeach
                                    </div>
                                    <div id="schools-pills" class="tab-pane fade">
                                       @foreach($scholastic_materials as $schools)
                                        <div class="col-lg-4">
                                            <!-- START widget-->
                                            <div class="panel widget">
                                                <img src="{{ asset('super_market_photos/'.$schools->photo)}}" style="width:318px; height:190px;" alt="Image" class="img-responsive">
                                                <div class="badge-overlay">
                                                    <!-- Change Badge Position, Color, Text here-->
                                                    @if($schools->created_at < now()->subWeek()) 
                                                    <span class="top-left badge primary">Old</span>
                                                    @else
                                                    <span class="top-left badge orange ">New</span>
                                                    @endif
                                                </div>
                                                <div class="panel-body">
                                                    <div class="row row-table text-center">
                                                        <div class="col-xs-6">
                                                            <span style="color:black;">Ugx.{{$schools->item}}</span>
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <span class="text-primary">{{$schools->price}}</span>
                                                        </div>
                                                    </div>
                                                    <div class="row row-table">
                                                        <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                                            @csrf
                                                            <input type="hidden" value="{{ $schools->id }}" name="id">
                                                            <input type="hidden" value="{{ $schools->item }}" name="name">
                                                            <input type="hidden" value="{{ $schools->price }}" name="price">
                                                            <input type="hidden" value="{{ $schools->photo }}"  name="image">
                                                            <input type="hidden" value="1" name="quantity">
                                                            <div class="col-xs-12">
                                                                <button class="btn btn-primary">Add To Cart</button>
                                                                <a href="/cart" class="btn btn-warning">View Cart</a>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END widget-->
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <!--/.panel-body -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
            <section>
            <div class="container">
                <div class="row">
                <div class="text-center">
                        <h2 class="page-header">Discover the most luxurious fruits & vacation rentals in Kampala</h2>
                        <p>Wintermin comes with a full set of utility classes ready to create widgets for your app.</p>
                        <p>Compress your user information in a single panel y customize the elements inside.</p>
                        <p>All components are responsive and ready for mobile devices.</p>
                        <br>
                        <p>
                    </div>
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
                        <p>Your comfort comes first at our furnished fruits</p>
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
                        <p>We have a provision for laundry services at our fruits</p>
                    </div>
                    <div class="col-lg-2 col-md-4 col-xs-6">
                        <i class='fa fa-lock' style='font-size:48px;color:#1a1a4c'></i>
                        <h5><strong>Security</strong></h5>
                        <p>Your comfort comes first at our furnished fruits</p>
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
                                    <span class="point point-primary point-lg"></span>fruits
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
                <ul class="list-inline beddings-list">
                    <li>
                        <a href="#">
                        <img src="{{ asset('front/app/img/landing/beddings-apple.png')}}" alt="App Name" class="img-responsive">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                        <img src="{{ asset('front/app/img/landing/beddings-google.png')}}" alt="App Name" class="img-responsive">
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
                            <span>JJOOME Property Ltd</span>
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