<!DOCTYPE html>

<html lang="en" class="default-style layout-fixed layout-navbar-fixed">
    <head>
    <title>JJOOME | Accomodation ,Property & Supermarket</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="" />
    <link rel="icon" type="image/x-icon" href="{{ asset('admin/assets/img/house.ico')}}">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

    <!-- Icon fonts -->
    <link rel="stylesheet" href="{{ asset('admin/assets/fonts/fontawesome.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/assets/fonts/ionicons.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/assets/fonts/linearicons.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/assets/fonts/open-iconic.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/assets/fonts/pe-icon-7-stroke.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/assets/fonts/feather.css')}}">

    <!-- Core stylesheets -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/bootstrap-material.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/shreerang-material.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/uikit.css')}}">

    <!-- Libs -->
    <link rel="stylesheet" href="{{ asset('admin/assets/libs/perfect-scrollbar/perfect-scrollbar.css')}}">
    <style>
        html,
        body {
            background: #fff !important;
        }

        body> :not(.invoice-print) {
            display: none !important;
        }

        .invoice-print {
            min-width: 768px !important;
            font-size: 15px !important;
        }

        .invoice-print * {
            border-color: #aaa !important;
            color: #000 !important;
        }
    </style>
</head>

<body>
    <div class="page-loader">
        <div class="bg-primary"></div>
    </div>

    <!-- Content -->

    <div class="invoice-print p-5">
        @foreach($print_orders_info as $info)
        <div class="row">
            <div class="col-sm-6 pb-4">
                <div class="media align-items-center mb-4">
                    <a href="index.html" class="navbar-brand app-brand demo py-0 mr-4">
                        <span class="app-brand-logo demo">
                            <img src="{{ asset('admin/assets/img/house.ico')}}" alt="Brand Logo" class="img-fluid">
                        </span>
                        <span class="app-brand-text demo font-weight-bold text-dark ml-2">JJOOME</span>
                    </a>
                </div>
                <div class="mb-1">Office 154, 330 North Brand Boulevard</div>
                <div class="mb-1">Glendale, CA 91203, USA</div>
                <div>+0 (123) 456 7891, +9 (876) 543 2198</div>
            </div>
            <div class="col-sm-6 text-right pb-4">
                <h6 class="text-big text-large font-weight-bold mb-3">INVOICE #000{{$info->user_id}}</h6>
                <div class="mb-1">Date:
                    <strong class="font-weight-semibold">{{date("jS F, Y", strtotime($info->created_at));}}</strong>
                </div>
                <div>Due date:
                    <strong class="font-weight-semibold">{{date("jS F, Y", strtotime($info->created_at .'+1 days'));}}</strong>
                </div>
            </div>
        </div>
        <hr class="mb-4">

        <div class="row">
            <div class="col-sm-6 col-lg-6 mb-4">
                <div class="font-weight-bold mb-2">Invoice To:</div>
                <div>Customers Name: {{$info->name}}</div>
                <div>Email :{{$info->email}}</div>
                <div>Address :{{$info->address}}</div>
                <div>Street :{{$info->street}}</div>
                <div>Town :{{$info->town}}</div>
            </div>
            <div class="col-sm-6 col-lg-6 mb-4">
                <div class="font-weight-bold mb-2">Payment Details:</div>
                <table>
                    <tbody>
                        @php
                        $user_id=request()->user_id;
                        $total_amount = \DB::table('unitprices')->where('unitprices.user_id',$user_id)->sum('total');
                        @endphp
                        <tr>
                            <td class="pr-3">Total Due:</td>
                            <td>
                                <strong>UGX: {{ number_format($total_amount)}}</strong>
                            </td>
                        </tr>
                        <tr>
                            <td class="pr-3">Phone Number:</td>
                            <td>{{$info->contact}}</td>
                        </tr>
                        <tr>
                            <td class="pr-3">Country:</td>
                            <td>{{$info->division}}</td>
                        </tr>
                        <tr>
                            <td class="pr-3">Plot Number:</td>
                            <td>{{$info->plot_number}}</td>
                        </tr>
                        <tr>
                            <td class="pr-3">Status:</td>
                            <td>{{$info->status}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="table-responsive mb-4">
            <table class="table m-0">
                <thead>
                    <tr>
                        <th class="py-3">
                            Item
                        </th>
                        <th class="py-3">
                            Picture
                        </th>
                        <th class="py-3">
                            Quantity
                        </th>
                        <th class="py-3">
                            Price
                        </th>
                        <th class="py-3">
                           Unit Price
                        </th>
                    </tr>
                </thead>
                <tbody>
                        @php
                        $user_id=request()->user_id;
                        $items_ordered = \DB::table('orders')->join('super_markets','super_markets.id','orders.item_id')
                        ->where('user_id',$user_id)->get();
                        @endphp
                        @foreach($items_ordered as $items)
                    <tr>
                        <td class="py-3">
                            <div class="font-weight-semibold">{{$items->item_name}}</div>
                        </td>
                        <td class="py-3">
                            <div>
                            <img src="{{ asset('super_market_photos/'.$items->photo)}}" style="width:40px; height:40px;">
                            </div>
                        </td>
                        <td class="py-3">
                            <strong>{{$items->quantity}}</strong>
                        </td>
                        <td class="py-3">    
                            <strong> sh. {{ number_format($items->price)}}</strong>
                        </td>
                        <td class="py-3">
                            <strong>sh .{{ number_format($items->price * $items->quantity)}}</strong>
                        </td>
                    </tr>
                    @endforeach
                    <tr>
                        <td colspan="3" class="text-right py-3">
                            Subtotal:
                            <br> Transport:
                            <br>
                            <span class="d-block text-big mt-2">Total:</span>
                        </td>
                        <td class="py-3">
                            <strong>UGX: {{ number_format($total_amount)}}</strong>
                            <br>
                            <strong>sh. 4,000</strong>
                            <br>
                            <strong class="d-block text-big mt-2">UGX: {{ number_format($total_amount + 4000)}}</strong>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="text-muted text-center">
            <strong>Note:</strong> jjoome accomodation,property & supermarket value all our customers and ready to serve you with all our beloved hearts.<br>
            
            If You get any of our lost item, please return to our office.For any inconviniences call us on 0775401793
        </div>
        @endforeach
    </div>

    <!-- / Content -->

    <!-- Core scripts -->
    <script src="{{ asset('admin/assets/js/pace.js')}}"></script>
    <script src="{{ asset('admin/assets/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{ asset('admin/assets/js/material-ripple.js')}}"></script>
    <script src="{{ asset('admin/assets/js/layout-helpers.js')}}"></script>
    <script src="{{ asset('admin/assets/libs/popper/popper.js')}}"></script>
    <script src="{{ asset('admin/assets/js/bootstrap.js')}}"></script>
    <script src="{{ asset('admin/assets/js/sidenav.js')}}"></script>

    <!-- Libs -->
    <script src="{{ asset('admin/assets/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>

    <!-- Demo -->
    <script src="{{ asset('admin/assets/js/demo.js')}}"></script><script src="{{ asset('admin/assets/js/analytics.js')}}"></script>
    <script>
        // -------------------------------------------------------------------------
        // Print on window load

        $(function() {
            window.print();
        });
    </script>
</body>

</html>
