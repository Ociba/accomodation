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
                                <span class="top-left badge orange">New</span>
                            </div>
                            <div class="panel-body">
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
                                        <span class="text-primary" style="font-weight:bold;">Ugx.{{ number_format($property->price)}}</span>
                                    </div>
                                    <div class="col-xs-6">
                                        <span class="text-primar"><strong>Location:</strong> {{$property->location}}</span>
                                    </div>
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
                        <div class="panel widget" style="height:590px;" >
                            <p style="text-align:center; color:blue;">Joome  Property Limited</p>
                            <p class="text-center">We provide you with accomodation at cheap and affordable prices, we deal with single roooms, Double,House, Hostels, Apartments, Stores, Shops, Land and Plots in all sizes.</p>
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
                                            <input type="text" class="form-control mb-3" name="phone_number" placeholder="Your Phone number">
                                        </div>
                                    </div>
                                    <div class="row row-table mb-3">
                                        <div class="col-xs-12">
                                            <label>Your Name (Optional)</label>
                                            <input type="text" class="form-control mb-3" name="client_name" placeholder="Your Name">
                                        </div>
                                    </div>
                                        
                                </div>
                                <div class="row row-table mb-3">
                                    <div class="col-xs-12">
                                        <button type="submit" class="btn btn-primary mb-5 form-control">Submit Now</button>
                                    </div>
                            </div>
                          </form>
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
        <!-- END Scripts-->
    </body>
</html>