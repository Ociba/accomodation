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
        <link rel="stylesheet" type="text/css" href="{{ asset('advert/js/owl.carousel/dist/assets/owl.carousel.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('advert/js/owl.carousel/dist/assets/owl.theme.default.css')}}">
    </head>
    <body>
        <!-- START wrapper-->
        @include('frontlayouts.menu')
        <section class="bg-white">
            <div class="container  margintop">
                <h2 class="section-header">Thank You For Choosing This Property
                    <br>
                    <small class="text-muted text-center">We Request You give Us Your Contact So that We get In Touch Soon</small>
                </h2>
                @foreach($get_property as $property)
                <div class="row">
                    <div class="col-lg-9">
                        <!-- START widget-->
                        <div class="panel widget">
                            <img src="{{ asset('property_photos/'.$property->photo)}}" style="width:1000px; height:500px;" alt="Image" class="img-responsive">
                            <div class="badge-overlay">
                                <!-- Change Badge Position, Color, Text here-->
                                {{--<span class="top-left badge orange">New</span>--}}
                            </div>
                            <div class="panel-body" style="background-color:#333399; color:#fff;">
                                <div class="row row-table text-center">
                                    <div class="col-xs-6">
                                        <p><strong>Size: </strong> {{$property->property_size}}</p>
                                    </div>
                                    <div class="col-xs-6">
                                        <p><strong>Status:</strong> {{$property->property_status}}</p>
                                    </div>
                                </div>
                                <div class="row row-table text-center">
                                    <div class="col-xs-6">
                                        <span class="text-primar"><strong>Room:</strong>: {{$property->bedroom}}</span>
                                    </div>
                                    <div class="col-xs-6">
                                        <span class="text-primar"><strong>Location:</strong> {{$property->location}}</span>
                                    </div>
                                </div>
                                <div class="row row-table text-center">
                                    <em>{{$property->description}}</em>
                                </div>
                            </div>
                        </div>
                        <!-- END widget-->
                        {{--<div class="text-primary">
                        <a href="#" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> View Contact</a>
                        </div>
                        --}}
                    </div>
                    <div class="col-lg-3">
                        @include('layouts.messages')
                        <!-- START widget-->
                        <div class="panel widget" style="height:610px;" >
                            <p style="text-align:center; color:#ffffff; font-weight:bold; font-size:20px;background-color:#333399;">Joome  Property Limited</p>
                            <div class="owl-carousel carousel-dot owl-theme text-center">
                                <div class="item">
                                    <img class="d-block img-fluid"
                                        src="{{ asset('advert/adv1.png')}}" style="width:280px; height:120px;"
                                        alt="Third slide">
                                </div>
                                <div class="item">
                                    <img class="d-block img-fluid"
                                        src="{{ asset('advert/adv5.jpg')}}" style="width:260px; height:120px;"
                                        alt="Third slide">
                                </div>
                                <div class="item">
                                    <img class="d-block img-fluid"
                                        src="{{ asset('advert/adv6.jpg')}}" style="width:260px; height:120px;"
                                        alt="Third slide">
                                </div>
                                <div class="item">
                                    <img class="d-block img-fluid"
                                        src="{{ asset('advert/adv7.jpg')}}" style="width:260px; height:120px;"
                                        alt="Third slide">
                                </div>
                                <div class="item">
                                    <img class="d-block img-fluid"
                                        src="{{ asset('advert/adv9.jpg')}}" style="width:260px; height:120px;"
                                        alt="Third slide">
                                </div>
                                <div class="item">
                                    <img class="d-block img-fluid"
                                        src="{{ asset('advert/advert2.png')}}" style="width:260px; height:120px;"
                                        alt="Third slide">
                                </div>
                                <div class="item">
                                    <img class="d-block img-fluid"
                                        src="{{ asset('advert/advertt.jpg')}}" style="width:260px; height:120px;"
                                        alt="Third slide">
                                </div>
                                <div class="item">
                                    <img class="d-block img-fluid"
                                        src="{{ asset('advert/adverty.jpg')}}" style="width:260px; height:120px;"
                                        alt="Third slide">
                                </div>
                            </div>
                            <div class="" style="background-color:#333399; padding-bottom:10px; color:#ffffff;">
                            <p class="text-center font-weight-9000"><strong>Our Location</strong></p>
                            <p class="text-center">Soroti Municipality</p>
                            <p class="text-center">Opposite Soroti University</p>
                            <p class="text-center">Main Gate</p>
                            <p class="text-center">0775401793</p>
                            <p class="text-center">ocibajames@gmail.com</p>
                                <form action="/send-number/{{request()->route()->property_id}}" method="get">
                                @csrf
                                <input type="hidden" name="property_id" value="{{request()->route()->property_id}}">
                                <div class="panel-body">
                                    <div class="row row-table mb-3">
                                        <div class="col-xs-12">
                                            <label>Your Phone Number</label>
                                            <input type="text" class="form-control mb-3" name="phone_number" placeholder="Your Phone number" required>
                                        </div>
                                    </div>
                                    <div class="row row-table mb-3">
                                        <div class="col-xs-12">
                                            <label>Your Name (Optional)</label>
                                            <input type="text" class="form-control mb-3" name="client_name" placeholder="Your Name">
                                        </div>
                                    </div>
                                        
                                </div>
                                <div class="row row-table">
                                    <div class="col-xs-12">
                                        <button type="submit" class="btn btn-primary mb-5 form-control">Submit Now</button>
                                    </div>
                            </div>
                          </form>
                        </div>
                        </div>
                        <!-- END widget-->
                    </div>
                </div>
                @endforeach
            </div>
        </section>
        @include('frontlayouts.testimonial')
        @include('frontlayouts.offer')
        @include('frontlayouts.link')
        @include('frontlayouts.footer')
        <!-- END wrapper-->
        <!-- START Scripts-->
        <!-- Main vendor Scripts-->
        @include('frontlayouts.javascript')
        <script type="text/javascript" src="{{ asset('advert/js/owl.carousel/dist/owl.carousel.min.js')}}"></script>
        <script type="text/javascript" src="{{ asset('advert/js/owl-custom.js')}}"></script>
        <!-- END Scripts-->
    </body>
</html>