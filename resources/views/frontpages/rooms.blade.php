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
        <section>
            <div class="container" style="margin-top:50px;">
                <h2 class="section-header">Our Current Available Single Rooms
                    <br>
                    <small class="text-muted text-center">JOOME makes your life easier. The best choice for your Affordable and Comfortable Accomodation.</small>
                </h2>
                <div class="row">
                    @foreach($get_single_rooms as $single_rooms)
                    <div class="col-lg-3">
                        <!-- START widget-->
                        <div class="panel widget">
                            <img src="{{ asset('property_photos/'.$single_rooms->photo)}}" style="width:318px; height:190px;" alt="Image" class="img-responsive">
                            <div class="badge-overlay">
                                <!-- Change Badge Position, Color, Text here-->
                                @if($single_rooms->created_at < now()->subWeek()) 
                                <span class="top-left badge primary">Old</span>
                                @else
                                <span class="top-left badge orange ">New</span>
                                @endif
                            </div>
                            <div class="panel-body">
                                <div class="row row-table text-center">
                                    <div class="col-xs-6">
                                        <p><strong>Size:</strong> {{$single_rooms->property_size}}</p>
                                    </div>
                                    <div class="col-xs-6">
                                        <p><strong>Status:</strong>{{$single_rooms->property_status}}</p>
                                    </div>
                                </div>
                                <div class="row row-table text-center">
                                    <div class="col-xs-6">
                                        <span class="text-primary" style="font-weight:bold;">Ugx.{{ number_format($single_rooms->price)}}</span>
                                    </div>
                                    <div class="col-xs-6">
                                        <span class="text-primar">{{$single_rooms->location}}</span>
                                    </div>
                                </div>
                                <div class="row row-table text-center">
                                    <div class="col-xs-12">
                                       <a href="/chosen-property/{{$single_rooms->id}}"><span class="btn btn-block btn-primary">Book Now</span></a>
                                    </div>
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
        <section class="bg-white">
            <div class="container">
                <h2 class="section-header">Our Current Available Double Rooms
                    <br>
                    <small class="text-muted text-center">JOOME makes your life easier. The best choice for your Affordable and Comfortable Accomodation.</small>
                </h2>
                <div class="row">
                    <div class="col-lg-3">
                        <!-- START widget-->
                        <div class="panel widget">
                            <img src="{{ asset('front/apartments/apart5.jpeg')}}" style="width:318px; height:190px;" alt="Image" class="img-responsive">
                            <div class="badge-overlay">
                                <!-- Change Badge Position, Color, Text here-->
                                @if($single_rooms->created_at < now()->subWeek()) 
                                <span class="top-left badge orange">Old</span>
                                @else
                                <span class="top-left badge primary">New</span>
                                @endif
                            </div>
                            <div class="panel-body">
                                <div class="row row-table text-center">
                                    <div class="col-xs-6">
                                        <p>{{$single_rooms->property_size}}</p>
                                    </div>
                                    <div class="col-xs-6">
                                        <p>Status:{{$single_rooms->property_status}}</p>
                                    </div>
                                </div>
                                <div class="row row-table text-center">
                                    <div class="col-xs-6">
                                        <span class="text-primar">Ugx.{{ number_format($single_rooms->price)}}</span>
                                    </div>
                                    <div class="col-xs-6">
                                        <span class="text-primar">{{$single_rooms->location}}</span>
                                    </div>
                                </div>
                                <div class="row row-table text-center">
                                    <div class="col-xs-12">
                                       <a href="/chosen-property"><span class="btn btn-block btn-primary">Book Now</span></a>
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
                                <div class="row row-table text-center">
                                    <div class="col-xs-12">
                                       <a href="/chosen-property"><span class="btn btn-block btn-primary">Book Now</span></a>
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
                                <div class="row row-table text-center">
                                    <div class="col-xs-12">
                                       <a href="/chosen-property"><span class="btn btn-block btn-primary">Book Now</span></a>
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
                                        <span class="text-primar">Makerere</span>
                                    </div>
                                </div>
                                <div class="row row-table text-center">
                                    <div class="col-xs-12">
                                       <a href="/chosen-property"><span class="btn btn-block btn-primary">Book Now</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END widget-->
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row">
                    <div data-toggle="play-animation" data-play="fadeInRight" data-offset="-250" class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading text-center">More Apartments</div>
                            <div class="panel-body">
                                <!-- Nav tabs -->
                                <ul class="nav nav-pills text-center">
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
                                                        <div class="row row-table text-center">
                                                            <div class="col-xs-12">
                                                               <a href="/chosen-property"><span class="btn btn-block btn-primary">Book Now</span></a>
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
                                                        <div class="row row-table text-center">
                                                            <div class="col-xs-12">
                                                               <a href="/chosen-property"><span class="btn btn-block btn-primary">Book Now</span></a>
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
                                                        <div class="row row-table text-center">
                                                            <div class="col-xs-12">
                                                               <a href="/chosen-property"><span class="btn btn-block btn-primary">Book Now</span></a>
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
                                                        <div class="row row-table text-center">
                                                            <div class="col-xs-12">
                                                               <a href="/chosen-property"><span class="btn btn-block btn-primary">Book Now</span></a>
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
                                                        <div class="row row-table text-center">
                                                            <div class="col-xs-12">
                                                               <a href="/chosen-property"><span class="btn btn-block btn-primary">Book Now</span></a>
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
                                                        <div class="row row-table text-center">
                                                            <div class="col-xs-12">
                                                               <a href="/chosen-property"><span class="btn btn-block btn-primary">Book Now</span></a>
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
                                                    <div class="row row-table text-center">
                                                            <div class="col-xs-12">
                                                               <a href="/chosen-property"><span class="btn btn-block btn-primary">Book Now</span></a>
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
                                                    <div class="row row-table text-center">
                                                            <div class="col-xs-12">
                                                               <a href="/chosen-property"><span class="btn btn-block btn-primary">Book Now</span></a>
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
                                                    <div class="row row-table text-center">
                                                            <div class="col-xs-12">
                                                               <a href="/chosen-property"><span class="btn btn-block btn-primary">Book Now</span></a>
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END widget-->
                                        </div>
                                    </div>
                                    <div id="messages-pills" class="tab-pane fade">
                                        <h4>Messages Tab</h4>
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
                                                    <div class="row row-table text-center">
                                                            <div class="col-xs-12">
                                                               <a href="/chosen-property"><span class="btn btn-block btn-primary">Book Now</span></a>
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
                                                    <div class="row row-table text-center">
                                                            <div class="col-xs-12">
                                                               <a href="/chosen-property"><span class="btn btn-block btn-primary">Book Now</span></a>
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
                                                    <div class="row row-table text-center">
                                                            <div class="col-xs-12">
                                                               <a href="/chosen-property"><span class="btn btn-block btn-primary">Book Now</span></a>
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
                                                    <div class="row row-table text-center">
                                                            <div class="col-xs-12">
                                                               <a href="/chosen-property"><span class="btn btn-block btn-primary">Book Now</span></a>
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
                                                    <div class="row row-table text-center">
                                                            <div class="col-xs-12">
                                                               <a href="/chosen-property"><span class="btn btn-block btn-primary">Book Now</span></a>
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
                                                    <div class="row row-table text-center">
                                                            <div class="col-xs-12">
                                                               <a href="/chosen-property"><span class="btn btn-block btn-primary">Book Now</span></a>
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
    <!-- Mirrored from geedmo.com/envato/products/wintermin/pages/landing.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Dec 2020 17:42:15 GMT -->
</html>