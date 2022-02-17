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
                                            <div class="card-body media align-items-center text-dark">
                                                <i class="lnr lnr-clock display-4 d-block text-warning"></i>
                                                <span class="media-body d-block ml-3">
                                                    <span class="text-big"><span class="mr-1 text-warning">
                                                    @php
                                                    $date_paid = \DB::table('users')->where('id',auth()->user()->id)->get();
                                                    @endphp
                                                   @foreach($date_paid as $i =>$days) 
                                                    {{\Carbon\Carbon::now()->diffInDays(\Carbon\Carbon::parse($days->payment_date))}}
                                                    @endforeach
                                                    </span>Days Remaining</span>
                                                    <br>
                                                    <small class="text-success font-weight-bold">Subscription Time</small>
                                                </span>
                                            </div>
                                            </div>
                                            <div class="col-sm-6 text-right">
                                                <button class="btn btn-success btn-sm btn-round mb-3" data-toggle="modal" data-target="#propertys"><i class="feather icon-plus"></i> Add property</button>
                                                
                                            </div>
                                        </div>
                                        <div class="table-responsive">
                                            <table id="report-table" class="table table-bordered table-striped mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Category Name</th>
                                                        <th>Owner</th>
                                                        <th>Property Size</th>
                                                        <th>Bedroom</th>
                                                        <th>Bathroom</th>
                                                        <th>Garage</th>
                                                        <th>Location</th>
                                                        <th>Description</th>
                                                        <th>Price</th>
                                                        <th>Photo</th>
                                                        <th>Property Status</th>
                                                        <th>Status</th>
                                                        @can('isAdmin')
                                                        <th>Options</th>
                                                        @endcan
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($get_property as $i =>$property)
                                                    <tr>
                                                        <td>
                                                            {{ $i + 1}}
                                                        </td>
                                                        <td>{{$property->category_name}}</td>
                                                        <td>{{$property->name}}</td>
                                                        <td>{{$property->property_size}}</td>
                                                        <td>{{$property->bedroom}}</td>
                                                        <td>{{$property->bathroom}}</td>
                                                        <td>{{$property->garage}}</td>
                                                        <td>{{$property->location}}</td>
                                                        <td>{{$property->description}}</td>
                                                        <td>{{$property->price}}</td>
                                                        <td><img style="width:50px; height:40px;" src="{{ asset('property_photos/'.$property->photo)}}"></td>
                                                        <td>{{$property->property_status}}</td>
                                                        <td>{{$property->status}}</td>
                                                        @can('isAdmin')
                                                        <td>
                                                            <a href="/edit-property/{{$property->id}}" class="btn btn-info btn-sm"><i class="feather icon-edit"></i>&nbsp;Edit </a>
                                                            <a href="/mark-as-taken/{{$property->id}}" class="btn btn-success btn-sm"><i class="feather icon-check"></i>&nbsp;Mark as Taken </a>
                                                            <a href="/delete-property/{{$property->id}}" class="btn btn-danger btn-sm"><i class="feather icon-trash-2"></i>&nbsp;Delete </a>
                                                        </td>
                                                        @endcan
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
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
    <script>
        // DataTable start
        $('#report-table').DataTable();
        // DataTable end
    </script>
    <div class="modal fade" id="propertys" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Property</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="/create-property" enctype="multipart/form-data">
                    @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="floating-label" for="name">Category</label>
                                    {{--<input type="text" name="category_id" class="form-control" id="category_id" placeholder="" required>--}}
                                    <select class="custom-select is-valid" name="category_id" class="form-control" id="category_id">
                                    @foreach($get_category as $category)
                                        <option value="{{$category->id}}">{{$category->category_name}}</option>
                                    @endforeach
                                   </select>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="floating-label" for="property_size">Property size</label>
                                    <input type="text" name="property_size" class="form-control" id="property_size" placeholder="" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="floating-label" for="bedroom">Bedroom</label>
                                    <input type="text" name="bedroom" class="form-control" id="bedroom" placeholder="">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="floating-label" for="bathroom">BatheRoom</label>
                                    <input type="text" name="bathroom" class="form-control" id="bathroom" placeholder="">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="floating-label" for="garage">Garage</label>
                                    <input type="text" name="garage" class="form-control" id="garage" placeholder="">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="floating-label" for="location">Location</label>
                                    <input type="text" name="location" class="form-control" id="location" placeholder="" required>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="floating-label" for="description">Description</label>
                                    <input type="text" name="description" class="form-control" id="description" placeholder="" required>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="floating-label" for="price">Price </label>
                                    <input type="text" name="price" class="form-control" id="price" placeholder="">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="floating-label" for="property_status">Property Status</label>
                                    <select class="custom-select" name="property_status" class="form-control" id="property_status">
                                        <option value="For sale">For sale</option>
                                        <option value="Hire">Hire</option>
                                        <option value="Rent">Rent</option>
                                    </select>
                                </div>
                                </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="floating-label" for="photo">Photo</label>
                                    <input type="file" name="photo" class="form-control" id="photo" placeholder="" required>
                                </div>
                            </div>
                            <div class="col-sm-12 text-center">
                                <button type="submit" class="btn btn-primary btn-round">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
