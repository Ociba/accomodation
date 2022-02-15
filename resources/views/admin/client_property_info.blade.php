<!DOCTYPE html>

<html lang="en" class="default-style layout-fixed layout-navbar-fixed">
<head>
    @include('layouts.title')

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="" />
   @include('layouts.styling')

</head>

<body>
     @include('layouts.preloader')
    <!-- [ Layout wrapper ] Start -->
    <div class="layout-wrapper layout-2">
        <div class="layout-inner">
            <!-- [ Layout sidenav ] Start -->
             @include('layouts.sidebar')
            <!-- [ Layout sidenav ] End -->
            <!-- [ Layout container ] Start -->
            <div class="layout-container">
                <!-- [ Layout navbar ( Header ) ] Start -->
                 @include('layouts.navbar')
                <!-- [ Layout navbar ( Header ) ] End -->

                <!-- [ Layout content ] Start -->
                <div class="layout-content">

                    <!-- [ content ] Start -->
                    <div class="container-fluid flex-grow-1 container-p-y">
                        @include('layouts.breadcrumb')
                        <div class="row">
                            <!-- customar client  start -->
                            <div class="col-xl-12">
                              @include('layouts.messages')
                                <div class="card mb-4">
                                    <div class="card-header">Overview</div>
                                    <div class="card-body text-center">
                                        @foreach($view_client_property_info as $property)
                                        <div class="row mb-2">
                                            <div class="col-md-3 text-muted">Client Number: </div>
                                            <div class="col-md-9">
                                            {{$property->phone_number}}
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-md-3 text-muted">Size:</div>
                                            <div class="col-md-9">
                                                <a href="javascript:void(0)" class="text-dark">{{$property->property_size}}</a>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-md-3 text-muted">BedRoom:</div>
                                            <div class="col-md-9">
                                                <a href="javascript:void(0)" class="text-dark">{{$property->bedroom}}</a>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-md-3 text-muted">Bathroom:</div>
                                            <div class="col-md-9">
                                                {{$property->bathroom}}
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-md-3 text-muted">Garage:</div>
                                            <div class="col-md-9">
                                                {{$property->garage}}
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-md-3 text-muted">Location:</div>
                                            <div class="col-md-9">
                                                {{$property->location}}
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-md-3 text-muted">Description:</div>
                                            <div class="col-md-9">
                                                {{$property->description}}
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-md-3 text-muted">Price:</div>
                                            <div class="col-md-9">
                                                Ugx: {{ number_format($property->price)}}
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-md-3 text-muted">Photo:</div>
                                            <div class="col-md-9">
                                            <img style="width:50px; height:50px;" src="{{ asset('property_photos/'.$property->photo)}}">
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-md-3 text-muted">Property status:</div>
                                            <div class="col-md-9">
                                                {{$property->property_status}}
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-md-3 text-muted">Status:</div>
                                            <div class="col-md-9">
                                                {{$property->status}}
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-md-3 text-muted">Brokers Name:</div>
                                            <div class="col-md-9">
                                                {{$property->name}}
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-md-3 text-muted">Brokers Number:</div>
                                            <div class="col-md-9">
                                                {{$property->contact_number}}
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <!-- customar client  end -->
                        </div>
                    </div>
                    <!-- [ content ] End -->

                    <!-- [ Layout footer ] Start -->
                     @include('layouts.footer')
                    <!-- [ Layout footer ] End -->

                </div>
                <!-- [ Layout content ] Start -->

            </div>
            <!-- [ Layout container ] End -->

        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-sidenav-toggle"></div>
    </div>
    <!-- [ Layout wrapper ] end -->
    
    <!-- Core scripts -->
    <script src="{{ asset('admin/assets/js/pace.js')}}"></script>
    <script src="{{ asset('admin/assets/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{ asset('admin/assets/libs/popper/popper.js')}}"></script>
    <script src="{{ asset('admin/assets/js/bootstrap.js')}}"></script>
    <script src="{{ asset('admin/assets/js/sidenav.js')}}"></script>
    <script src="{{ asset('admin/assets/js/layout-helpers.js')}}"></script>
    <script src="{{ asset('admin/assets/js/material-ripple.js')}}"></script>

    <!-- Libs -->
    <script src="{{ asset('admin/assets/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>

    <!-- Demo -->
    <script src="{{ asset('admin/assets/js/demo.js')}}"></script>
</body>

</html>
