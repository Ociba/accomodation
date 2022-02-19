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
        @if(auth()->user()->type=='supermarket'){
            @include('frontlayouts.logged-in-menu')
        }@else(
        @include('frontlayouts.menu')
        )
        @endif
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
                            
                           <table class="table table-striped table-bordered table-hover">
                              <thead>
                              @php
                              $my_cart_total =\DB::table('carts')->join('super_markets','super_markets.id','carts.item_id')
                              ->where('carts.user_id',auth()->user()->id)
                              ->sum('price');
                              @endphp
                                 <tr>
                                    <th>#</th>
                                    <th>Name of Item</th>
                                    <th>Photo</th>
                                    <th>Date</th>
                                    <th>Price</th>
                                 </tr>
                              </thead>
                              <tbody>
                              @foreach($my_cart as $i=>$cart)
                                 <tr>
                                    <td>{{$i + 1}}</td>
                                    <td>{{$cart->item}}</td>
                                    <td><img src="{{ asset('super_market_photos/'.$cart->photo)}}" style="width:50px; height:40px;" alt="Image" class="img-responsive"></td>
                                    <td>{{$cart->created_at}}</td>
                                    <td>Ugx:{{ number_format($cart->price)}}</td>
                                 </tr>
                                 @endforeach
                                 <tr>
                                 <td colspan="4"  style="color:black; font-weight:bold;">Total Amount</td>
                                 <td style="color:black; font-weight:bold;">Ugx: {{ number_format($my_cart_total)}}</td>
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
        @include('frontlayouts.more-items')
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