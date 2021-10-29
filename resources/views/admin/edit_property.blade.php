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
   <link rel="stylesheet" href="{{ asset('admin/assets/libs/datatables/datatables.css')}}">

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
                            <!-- customar property  start -->
                            <div class="col-xl-12">
                              @include('layouts.messages')
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row align-items-center m-l-0">
                                            <div class="col-sm-6">

                                            </div>
                                            <div class="col-sm-6 text-right">
                                                
                                            </div>
                                        </div>
                                        @foreach($edit_property as $property)
                                        <form method="get" action="/update-property/{{$property->id}}">
                                        @csrf
                                        <div class="row">
                                            <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="floating-label" for="property_size">Property Size</label>
                                                <input type="text" name="property_size" value="{{$property->property_size}}" class="form-control" id="property_size" placeholder="">
                                            </div>
                                        </div>
                                            <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="floating-label" for="bedroom">Bedroom</label>
                                                <input type="text" name="bedroom" value="{{$property->bedroom}}" class="form-control" id="bedroom" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="floating-label" for="bathroom">BatheRoom</label>
                                                <input type="text" name="bathroom" value="{{$property->bathroom}}" class="form-control" id="bathroom" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="floating-label" for="garage">Garage</label>
                                                <input type="text" name="garage" value="{{$property->garage}}" class="form-control" id="garage" placeholder="">
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="floating-label" for="location">Location</label>
                                                <input type="text" name="location" value="{{$property->location}}" class="form-control" id="location" placeholder="" >
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="floating-label" for="description">Description</label>
                                                <input type="text" name="description" value="{{$property->description}}" class="form-control" id="description" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="floating-label" for="price">Price</label>
                                                <input type="text" name="price" value="{{$property->price}}" class="form-control" id="price" placeholder="">
                                            </div>
                                        </div>
                                                <div class="form-group col-md-12 text-center">
                                                <a href="/property" button class="btn btn-primary btn-round">Back</button></a>
                                                <button type="submit" class="btn btn-info btn-round">Save</button>
                                                </div>
                                            </div>
                                        </form>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <!-- customar property  end -->
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
    <script src="{{ asset('admin/assets/libs/datatables/datatables.js')}}"></script>

    <!-- Demo -->
    <script src="{{ asset('admin/assets/js/demo.js')}}"></script>
</body>

</html>
