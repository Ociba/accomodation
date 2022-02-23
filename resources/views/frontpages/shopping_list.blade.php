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
        @include('frontlayouts.logged-in-menu')
        <section class="bg-white" style="margin-top:-30px;">
            <div class="container">
                <h2 class="section-header">Thank You For Choosing This Item
                    <br>
                    <small class="text-muted text-center">We Request You give Us Your Contact So that We get In Touch Soon</small>
                </h2>
                <div class="row">
                    <div class="col-lg-12">
                        <!-- START panel-->
                        <div class="panel panel-default">
                            <div class="panel-heading text-center">Shopping Cart Items</div>
                            <div class="panel-body">
                                <!-- START table-responsive-->
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" style="margin-bottom:5px;">
                                        <thead>
                                            @php
                                            $my_cart_total =\DB::table('carts')->join('super_markets','super_markets.id','carts.item_id')
                                            ->where('carts.user_id',auth()->user()->id)
                                            ->sum('price');

                                            $price=\DB::table('carts')->join('super_markets','super_markets.id','carts.item_id')
                                            ->where('carts.user_id',auth()->user()->id)
                                            ->value('price');
                                            @endphp
                                            <tr>
                                                <th>#</th>
                                                <th>Name of Item</th>
                                                <th>Photo</th>
                                                <th>Quantity</th>
                                                <th>Price</th>
                                                <th>Unit Price</th>
                                                <th>Remove</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($cart_details as $i=> $item)
                                            <tr>
                                                <td>{{$i + 1}}</td>
                                                <td>{{$item['item']}}</td>
                                                <td><img src="{{ asset('super_market_photos/'.$item->photo)}}" style="width:50px; height:40px;" alt="Image" class="img-responsive"></td>
                                                <td>
                                                    <form action="/update-quantity/{{$item->id}}" method="get">
                                                        @csrf
                                                        <input type="hidden" name="id" value="{{$item->id}}" >
                                                        <input type="number" name="quantity" style="width:40px;" value="{{ $item->quantity }}" 
                                                            class="w-6 text-center bg-gray-300" />
                                                        <button type="submit" class="btn-sm btn btn-primary"><i class="fa fa-plus"></i></button>
                                                    </form>
                                                </td>
                                                <td>Ugx:{{ number_format($item['price'])}}
                                                </td>
                                                <td style="color:black; font-weight:bold;">Ugx: {{ number_format($item['price'] * $item['quantity'])}}</td>
                                                <td>
                                                    <a href="/delete-from-cart-list/{{$item->id}}" class="text-danger" style="text-align:center;"><i class="fa fa-times"></i></a>
                                                </td>
                                            </tr>
                                            @endforeach
                                            <tr>
                                                <td colspan="5"  style="color:black; font-weight:bold;">Total Amount</td>
                                                <td style="font-weight:bold;">Ugx:  {{\Cart::session(auth()->user()->id)->getTotal();}} </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END table-responsive-->
                            </div>
                        </div>
                        <!-- END panel-->
                    </div>
                </div>
            </div>
        </section>
        @include('frontlayouts.more-items2')
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