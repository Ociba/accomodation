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
                    @foreach($double_rooms as $double)
                    <div class="col-lg-3 text-center">
                        <!-- START widget-->
                        <div class="panel widget">
                            <img src="{{ asset('property_photos/'.$double->photo)}}" style="width:318px; height:190px;"alt="Image" class="img-responsive">
                            <div class="badge-overlay">
                                <!-- Change Badge Position, Color, Text here-->
                                @if($double->created_at < now()->subWeek()) 
                                <span class="top-left badge orange">Old</span>
                                @else
                                <span class="top-left badge primary">New</span>
                                @endif
                            </div>
                            <div class="panel-body">
                                <div class="row row-table text-center">
                                    <div class="col-xs-6">
                                        <p>{{$double->property_size}}</p>
                                    </div>
                                    <div class="col-xs-6">
                                        <p>Status:{{$double->property_status}}</p>
                                    </div>
                                </div>
                                <div class="row row-table text-center">
                                    <div class="col-xs-6">
                                        <span class="text-primary">Ugx.{{ number_format($double->price)}}</span>
                                    </div>
                                    <div class="col-xs-6">
                                        <span class="text-primar">{{$double->location}}</span>
                                    </div>
                                </div>
                                <div class="row row-table text-center">
                                    <div class="col-xs-12">
                                       <a href="/chosen-property/{{$double->id}}"><span class="btn btn-block btn-primary">Book Now</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END widget-->
                    </div>
                </div>
                @endforeach
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row">
                    <div data-toggle="play-animation" data-play="fadeInRight" data-offset="-250" class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading text-center">More properties</div>
                            <div class="panel-body">
                                <!-- Nav tabs -->
                                <ul class="nav nav-pills text-center">
                                    <li class="active"><a href="#all-pills" data-toggle="tab">All</a>
                                    </li>
                                    <li><a href="#hostels-pills" data-toggle="tab">Hostels</a>
                                    </li>
                                    <li><a href="#houses-pills" data-toggle="tab">Houses</a>
                                    </li>
                                    <li><a href="#plots-pills" data-toggle="tab">Plots and Land</a>
                                    </li>
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div id="all-pills" class="tab-pane fade in active">
                                        <div>
                                            @foreach($get_all_the_property as $all)
                                            <div class="col-lg-4">
                                                <!-- START widget-->
                                                <div class="panel widget">
                                                    <img src="{{ asset('property_photos/'.$all->photo)}}" style="width:318px; height:190px;" alt="Image" class="img-responsive">
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
                                                            <div class="col-xs-12 font-weight-bold" style="color:black;">{{$all->category_name}}</div>
                                                        </div>
                                                        <div class="row row-table text-center">
                                                            <div class="col-xs-6">
                                                                <p>{{$all->property_size}}</p>
                                                            </div>
                                                            <div class="col-xs-6">
                                                                <p>Status:{{$all->property_status}}</p>
                                                            </div>
                                                        </div>
                                                        <div class="row row-table text-center">
                                                            <div class="col-xs-6">
                                                                <span class="text-primary">Ugx.{{$all->price}}</span>
                                                            </div>
                                                            <div class="col-xs-6">
                                                                <span class="text-primar">{{$all->location}}</span>
                                                            </div>
                                                        </div>
                                                        <div class="row row-table text-center">
                                                            <div class="col-xs-12">
                                                               <a href="/chosen-property/{{$all->id}}"><span class="btn btn-block btn-primary">Book Now</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- END widget-->
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div id="hostels-pills" class="tab-pane fade">
                                        @foreach($hostels as $hostel)
                                        <div class="col-lg-4">
                                            <!-- START widget-->
                                            <div class="panel widget">
                                                <img src="{{ asset('property_photos/'.$hostel->photo)}}" style="width:318px; height:190px;" alt="Image" class="img-responsive">
                                                <div class="badge-overlay">
                                                    <!-- Change Badge Position, Color, Text here-->
                                                    @if($hostel->created_at < now()->subWeek()) 
                                                    <span class="top-left badge primary">Old</span>
                                                    @else
                                                    <span class="top-left badge orange ">New</span>
                                                    @endif
                                                </div>
                                                <div class="panel-body">
                                                    <div class="row row-table text-center">
                                                        <div class="col-xs-6">
                                                            <p>{{$hostel->property_size}}</p>
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <p>Status:{{$hostel->property_status}}</p>
                                                        </div>
                                                    </div>
                                                    <div class="row row-table text-center">
                                                        <div class="col-xs-6">
                                                            <span class="text-primary">Ugx.{{$hostel->price}}</span>
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <span class="text-primar">{{$hostel->location}}</span>
                                                        </div>
                                                    </div>
                                                    <div class="row row-table text-center">
                                                            <div class="col-xs-12">
                                                               <a href="/chosen-property/{{$hostel->id}}"><span class="btn btn-block btn-primary">Book Now</span></a>
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END widget-->
                                        </div>
                                        @endforeach
                                    </div>
                                    <div id="houses-pills" class="tab-pane fade">
                                        @foreach($houses as $house)
                                        <div class="col-lg-4">
                                            <!-- START widget-->
                                            <div class="panel widget">
                                                <img src="{{ asset('property_photos/'.$house->photo)}}" style="width:318px; height:190px;" alt="Image" class="img-responsive">
                                                <div class="badge-overlay">
                                                    <!-- Change Badge Position, Color, Text here-->
                                                    @if($house->created_at < now()->subWeek()) 
                                                    <span class="top-left badge primary">Old</span>
                                                    @else
                                                    <span class="top-left badge orange ">New</span>
                                                    @endif
                                                </div>
                                                <div class="panel-body">
                                                    <div class="row row-table text-center">
                                                        <div class="col-xs-6">
                                                            <p>{{$house->property_size}}</p>
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <p>Status:{{$house->property_status}}</p>
                                                        </div>
                                                    </div>
                                                    <div class="row row-table text-center">
                                                        <div class="col-xs-6">
                                                            <span class="text-primary">Ugx.{{$house->price}}</span>
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <span class="text-primar">{{$house->location}}</span>
                                                        </div>
                                                    </div>
                                                    <div class="row row-table text-center">
                                                            <div class="col-xs-12">
                                                               <a href="/chosen-property/{{$house->id}}"><span class="btn btn-block btn-primary">Book Now</span></a>
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END widget-->
                                        </div>
                                        @endforeach
                                    </div>
                                    <div id="plots-pills" class="tab-pane fade">
                                       @foreach($plots as $plot)
                                        <div class="col-lg-4">
                                            <!-- START widget-->
                                            <div class="panel widget">
                                                <img src="{{ asset('property_photos/'.$plot->photo)}}" style="width:318px; height:190px;" alt="Image" class="img-responsive">
                                                <div class="badge-overlay">
                                                    <!-- Change Badge Position, Color, Text here-->
                                                    @if($plot->created_at < now()->subWeek()) 
                                                    <span class="top-left badge primary">Old</span>
                                                    @else
                                                    <span class="top-left badge orange ">New</span>
                                                    @endif
                                                </div>
                                                <div class="panel-body">
                                                    <div class="row row-table text-center">
                                                        <div class="col-xs-6">
                                                            <p>{{$plot->property_size}}</p>
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <p>Status:{{$plot->property_status}}</p>
                                                        </div>
                                                    </div>
                                                    <div class="row row-table text-center">
                                                        <div class="col-xs-6">
                                                            <span class="text-primary">Ugx.{{$plot->price}}</span>
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <span class="text-primar">{{$plot->location}}</span>
                                                        </div>
                                                    </div>
                                                    <div class="row row-table text-center">
                                                            <div class="col-xs-12">
                                                               <a href="/chosen-property/{{$plot->id}}"><span class="btn btn-block btn-primary">Book Now</span></a>
                                                            </div>
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