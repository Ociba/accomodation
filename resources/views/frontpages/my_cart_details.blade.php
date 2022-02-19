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
                              @foreach($my_cart as $i=>$cart)
                              <form action="/update-cart/{{$cart->id}}" method="get">
                                 <tr>
                                    <td>{{$i + 1}}</td>
                                    <td>{{$cart->item}}</td>
                                    <td><img src="{{ asset('super_market_photos/'.$cart->photo)}}" style="width:50px; height:40px;" alt="Image" class="img-responsive"></td>
                       
                                    <td>
                                    <fieldset class="last-child">
                                       <div class="form-group">
                                          <label class="col-sm-2 control-label">Select</label>
                                          <div class="col-sm-10">
                                             <select name="quantity" value="{{$cart->quantity}}" class="form-control m-b">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">12</option>
                                                <option value="13">13</option>
                                                <option value="14">14</option>
                                                <option value="15">15</option>
                                                <option value="16">16</option>
                                                <option value="17">17</option>
                                                <option value="18">18</option>
                                                <option value="19">19</option>
                                                <option value="20">20</option>
                                                <option value="21">21</option>
                                             </select>
                                          </div>
                                       </div>
                                    </fieldset>  {{$cart->quantity}}
                                    </td>
                                    <td>Ugx:{{ number_format($cart->price)}}</td>
                                    <td style="color:black; font-weight:bold;">Ugx: {{ number_format($cart->price * $cart->quantity)}}</td>
                                    <td><a href="/remove-from-cart-list/{{$cart->id}}" class="text-danger" style="text-align:center;"><i class="fa fa-times"></i></td>
                                 </tr>
                                 @endforeach
                                 <tr>
                                 <td colspan="4"  style="color:black; font-weight:bold;">Total Amount</td>
                                 <td style="font-weight:bold;">Ugx: {{number_format($my_cart_total)}}</td>
                                 <td style="color:black; font-weight:bold;">Ugx: {{ number_format($my_cart_total)}}</td>
                                 </tr>
                              </tbody>
                           </table>
                           <div class="row pull-right" style="margin-right:4px;">
                              <button type="submit" class="btn btn-sm btn-primary">Update Cart</button>
                           </div>
                           </form>
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