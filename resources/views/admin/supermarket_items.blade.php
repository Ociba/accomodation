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
                                            {{--<div class="card-body media align-items-center text-dark">
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
                                            </div>--}}
                                            <button class="btn btn-primary btn-sm btn-round mb-3" data-toggle="modal" data-target="#items"><i class="feather icon-plus"></i> Add Item Group</button>
                                            </div>
                                            <div class="col-sm-6 text-right">
                                                <button class="btn btn-success btn-sm btn-round mb-3" data-toggle="modal" data-target="#propertys"><i class="feather icon-plus"></i> Add Item</button>
                                                
                                            </div>
                                        </div>
                                        <div class="table-responsive">
                                            <table id="report-table" class="table table-bordered table-striped mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Category</th>
                                                        <th>Item</th>
                                                        <th>Contact</th>
                                                        <th>Location</th>
                                                        <th>Description</th>
                                                        <th>Price</th>
                                                        <th>Discount</th>
                                                        <th>New Price</th>
                                                        <th>Photo</th>
                                                        <th>Status</th>
                                                        <th>Created By</th>
                                                        @can('isAdmin')
                                                        <th>Options</th>
                                                        @endcan
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($get_items as $i =>$items)
                                                    <tr>
                                                        <td>{{$i + 1}}</td>
                                                        <td>{{$items->item_category}}</td>
                                                        <td>{{$items->item}}</td>
                                                        <td>{{$items->contact}}</td>
                                                        <td>{{$items->location}}</td>
                                                        <td>{{$items->description}}</td>
                                                        <td>{{ number_format($items->price)}}</td>
                                                        <td>{{$items->discount}}</td>
                                                        <td>{{number_format($items->new_price)}}</td>
                                                        <td><img style="width:50px; height:40px;" src="{{ asset('super_market_photos/'.$items->photo)}}"></td>
                                                        <td>{{$items->status}}</td>
                                                        <td>{{$items->name}}</td>
                                                        <td>
                                                          <a href="/add-supermarket-item-discount/{{$items->id}}" class="btn btn-warning btn-sm"><i class="fa fa-cut"></i>&nbsp; Discount </a>
                                                          @can('isAdmin')
                                                            <a href="/edit-item/{{$items->id}}" class="btn btn-info btn-sm"><i class="feather icon-edit"></i>&nbsp;Edit </a>
                                                            <a href="/mark-as-taken/{{$items->id}}" class="btn btn-success btn-sm"><i class="feather icon-check"></i>&nbsp;Mark as Taken </a>
                                                            <a href="/delete-item/{{$items->id}}" class="btn btn-danger btn-sm"><i class="feather icon-trash-2"></i>&nbsp;Delete </a>
                                                            @endcan
                                                        </td>
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
                    <form method="post" action="/create-supermarket-item" enctype="multipart/form-data">
                    @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="floating-label" for="name">Category</label>
                                    <select class="custom-select is-valid" name="item_group_id" class="form-control" id="item_group_id">
                                    @foreach($category as $category)
                                        <option value="{{$category->id}}">{{$category->item_category}}</option>
                                    @endforeach
                                    
                                   </select>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="floating-label" for="item">Name of Item</label>
                                    <input type="text" name="item" class="form-control" id="item" placeholder="" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="floating-label" for="location">Location</label>
                                    <input type="text" name="location" class="form-control" id="location" placeholder="">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="floating-label" for="description">Description</label>
                                    <input type="text" name="description" class="form-control" id="description" placeholder="">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="floating-label" for="price">Price</label>
                                    <input type="text" name="price" class="form-control" id="price" placeholder="">
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
    <!--Modal for adding categories-->
    <div class="modal fade" id="items" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Item Group</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="get" action="/create-item-group">
                    @csrf
                        <div class="row">

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label class="floating-label" for="item_category">Name</label>
                                    <input type="text" name="item_category" class="form-control" id="item_category" placeholder="" required>
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
