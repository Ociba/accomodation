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
                <h2 class="section-header">Our Current Available Shops
                    <br>
                    <small class="text-muted text-center">Wintermin makes your life easier. The best choice for your next project.</small>
                </h2>
                <div class="row">
                    @foreach($shops as $shop)
                    <div class="col-lg-3">
                        <!-- START widget-->
                        <div class="panel widget">
                        <img src="{{ asset('property_photos/'.$shop->photo)}}" style="width:318px; height:190px;" alt="Image" class="img-responsive">
                        <div class="badge-overlay">
                            <!-- Change Badge Position, Color, Text here-->
                        @if($shop->created_at < now()->subWeek()) 
                        <span class="top-left badge primary">Old</span>
                        @else
                        <span class="top-left badge orange ">New</span>
                        @endif
                        </div>
                        <div class="panel-body">
                                <div class="row row-table text-center">
                                    <div class="col-xs-6">
                                        <p>Size: {{$shop->property_size}}</p>
                                    </div>
                                    <div class="col-xs-6">
                                        <p>Status:{{$shop->property_status}}</p>
                                    </div>
                                </div>
                                <div class="row row-table text-center">
                                    <div class="col-xs-6">
                                        <span class="text-primar">Ugx.{{$shop->price}}</span>
                                    </div>
                                    <div class="col-xs-6">
                                        <span class="text-primar">{{$shop->location}}</span>
                                    </div>
                                </div>
                                <div class="row row-table text-center">
                                    <div class="col-xs-12">
                                    <a href="/chosen-property/{{$shop->id}}"><span class="btn btn-block btn-primary">Book Now</span></a>
                                    </div>`
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
                                    <li><a href="#rooms-pills" data-toggle="tab">Rooms</a>
                                    </li>
                                    <li><a href="#houses-pills" data-toggle="tab">Houses</a>
                                    </li>
                                    <li><a href="#hostels-pills" data-toggle="tab">Hostels</a>
                                    </li>
                                    <li><a href="#apartments-pills" data-toggle="tab">Apartments</a>
                                    </li>
                                    <li><a href="#land-pills" data-toggle="tab">Plots and Land</a>
                                    </li>
                                    <li><a href="#flat-pills" data-toggle="tab">Flats and Mansions</a>
                                   </li>
                                   <li><a href="#store-pills" data-toggle="tab">Stores</a>
                                    </li>
                                    <li><a href="#offices-pills" data-toggle="tab">Offices</a>
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
                                    <div id="rooms-pills" class="tab-pane fade">
                                        @foreach($get_rooms as $room)
                                        <div class="col-lg-4">
                                            <!-- START widget-->
                                            <div class="panel widget">
                                                <img src="{{ asset('property_photos/'.$room->photo)}}" style="width:318px; height:190px;" alt="Image" class="img-responsive">
                                                <div class="badge-overlay">
                                                    <!-- Change Badge Position, Color, Text here-->
                                                    @if($room->created_at < now()->subWeek()) 
                                                    <span class="top-left badge primary">Old</span>
                                                    @else
                                                    <span class="top-left badge orange ">New</span>
                                                    @endif
                                                </div>
                                                <div class="panel-body">
                                                    <div class="row row-table text-center">
                                                        <div class="col-xs-12 font-weight-bold" style="color:black;">{{$room->category_name}}</div>
                                                    </div>
                                                    <div class="row row-table text-center">
                                                        <div class="col-xs-6">
                                                            <p>{{$room->property_size}}</p>
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <p>Status:{{$room->property_status}}</p>
                                                        </div>
                                                    </div>
                                                    <div class="row row-table text-center">
                                                        <div class="col-xs-6">
                                                            <span class="text-primary">Ugx.{{$room->price}}</span>
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <span class="text-primar">{{$room->location}}</span>
                                                        </div>
                                                    </div>
                                                    <div class="row row-table text-center">
                                                            <div class="col-xs-12">
                                                               <a href="/chosen-property/{{$room->id}}"><span class="btn btn-block btn-primary">Book Now</span></a>
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
                                    <div id="apartments-pills" class="tab-pane fade">
                                       @foreach($apartments as $apartment)
                                        <div class="col-lg-4">
                                            <!-- START widget-->
                                            <div class="panel widget">
                                                <img src="{{ asset('property_photos/'.$apartment->photo)}}" style="width:318px; height:190px;" alt="Image" class="img-responsive">
                                                <div class="badge-overlay">
                                                    <!-- Change Badge Position, Color, Text here-->
                                                    @if($apartment->created_at < now()->subWeek()) 
                                                    <span class="top-left badge primary">Old</span>
                                                    @else
                                                    <span class="top-left badge orange ">New</span>
                                                    @endif
                                                </div>
                                                <div class="panel-body">
                                                    <div class="row row-table text-center">
                                                        <div class="col-xs-6">
                                                            <p>{{$apartment->property_size}}</p>
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <p>Status:{{$apartment->property_status}}</p>
                                                        </div>
                                                    </div>
                                                    <div class="row row-table text-center">
                                                        <div class="col-xs-6">
                                                            <span class="text-primary">Ugx.{{$apartment->price}}</span>
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <span class="text-primar">{{$apartment->location}}</span>
                                                        </div>
                                                    </div>
                                                    <div class="row row-table text-center">
                                                            <div class="col-xs-12">
                                                               <a href="/chosen-property/{{$apartment->id}}"><span class="btn btn-block btn-primary">Book Now</span></a>
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END widget-->
                                        </div>
                                        @endforeach
                                    </div>
                                    <div id="land-pills" class="tab-pane fade">
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
                                                    <div class="col-xs-12 font-weight-bold" style="color:black;">{{$plot->category_name}}</div>
                                                </div>
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
                                    <div id="flat-pills" class="tab-pane fade">
                                       @foreach($flats_and_mansions as $flat)
                                        <div class="col-lg-4">
                                            <!-- START widget-->
                                            <div class="panel widget">
                                                <img src="{{ asset('property_photos/'.$flat->photo)}}" style="width:318px; height:190px;" alt="Image" class="img-responsive">
                                                <div class="badge-overlay">
                                                    <!-- Change Badge Position, Color, Text here-->
                                                    @if($flat->created_at < now()->subWeek()) 
                                                    <span class="top-left badge primary">Old</span>
                                                    @else
                                                    <span class="top-left badge orange ">New</span>
                                                    @endif
                                                </div>
                                                <div class="panel-body">
                                                    <div class="row row-table text-center">
                                                        <div class="col-xs-6">
                                                            <p>Rooms :{{$flat->bedroom}}</p>
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <p>Status:{{$flat->property_status}}</p>
                                                        </div>
                                                    </div>
                                                    <div class="row row-table text-center">
                                                        <div class="col-xs-6">
                                                            <span class="text-primary">Ugx.{{$flat->price}}</span>
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <span class="text-primar">{{$flat->location}}</span>
                                                        </div>
                                                    </div>
                                                    <div class="row row-table text-center">
                                                            <div class="col-xs-12">
                                                               <a href="/chosen-property/{{$flat->id}}"><span class="btn btn-block btn-primary">Book Now</span></a>
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END widget-->
                                        </div>
                                        @endforeach
                                    </div>
                                    <div id="store-pills" class="tab-pane fade">
                                       @foreach($stores as $store)
                                        <div class="col-lg-4">
                                            <!-- START widget-->
                                            <div class="panel widget">
                                                <img src="{{ asset('property_photos/'.$store->photo)}}" style="width:318px; height:190px;" alt="Image" class="img-responsive">
                                                <div class="badge-overlay">
                                                    <!-- Change Badge Position, Color, Text here-->
                                                    @if($store->created_at < now()->subWeek()) 
                                                    <span class="top-left badge primary">Old</span>
                                                    @else
                                                    <span class="top-left badge orange ">New</span>
                                                    @endif
                                                </div>
                                                <div class="panel-body">
                                                    <div class="row row-table text-center">
                                                        <div class="col-xs-6">
                                                            <p>Size :{{$store->property_size}}</p>
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <p>Status:{{$store->property_status}}</p>
                                                        </div>
                                                    </div>
                                                    <div class="row row-table text-center">
                                                        <div class="col-xs-6">
                                                            <span class="text-primary">Ugx.{{$store->price}}</span>
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <span class="text-primar">{{$store->location}}</span>
                                                        </div>
                                                    </div>
                                                    <div class="row row-table text-center">
                                                            <div class="col-xs-12">
                                                               <a href="/chosen-property/{{$store->id}}"><span class="btn btn-block btn-primary">Book Now</span></a>
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END widget-->
                                        </div>
                                        @endforeach
                                    </div>
                                    <div id="offices-pills" class="tab-pane fade">
                                       @foreach($offices as $office)
                                        <div class="col-lg-4">
                                            <!-- START widget-->
                                            <div class="panel widget">
                                                <img src="{{ asset('property_photos/'.$office->photo)}}" style="width:318px; height:190px;" alt="Image" class="img-responsive">
                                                <div class="badge-overlay">
                                                    <!-- Change Badge Position, Color, Text here-->
                                                    @if($office->created_at < now()->subWeek()) 
                                                    <span class="top-left badge primary">Old</span>
                                                    @else
                                                    <span class="top-left badge orange ">New</span>
                                                    @endif
                                                </div>
                                                <div class="panel-body">
                                                    <div class="row row-table text-center">
                                                        <div class="col-xs-6">
                                                            <p>Size :{{$office->property_size}}</p>
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <p>Status:{{$office->property_status}}</p>
                                                        </div>
                                                    </div>
                                                    <div class="row row-table text-center">
                                                        <div class="col-xs-6">
                                                            <span class="text-primary">Ugx.{{$office->price}}</span>
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <span class="text-primar">{{$office->location}}</span>
                                                        </div>
                                                    </div>
                                                    <div class="row row-table text-center">
                                                            <div class="col-xs-12">
                                                               <a href="/chosen-property/{{$office->id}}"><span class="btn btn-block btn-primary">Book Now</span></a>
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
</html>