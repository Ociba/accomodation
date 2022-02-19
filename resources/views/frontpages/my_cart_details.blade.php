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
        <section class="bg-white">
            <div class="container  margintop">
                <h2 class="section-header">Thank You For Choosing This Item
                    <br>
                    <small class="text-muted text-center">We Request You give Us Your Contact So that We get In Touch Soon</small>
                </h2>
                <div class="row">
                <div class="col-lg-12">
                  <!-- START panel-->
                  <div class="panel panel-default">
                     <div class="panel-heading">Shopping Cart Items</div>
                     <div class="panel-body">
                        <!-- START table-responsive-->
                        <div class="table-responsive">
                            
                           <table class="table table-striped table-bordered table-hover">
                              <thead>
                                 <tr>
                                    <th>#</th>
                                    <th>Name of Item</th>
                                    <th>Price</th>
                                    <th>Photo</th>
                                 </tr>
                              </thead>
                              <tbody>
                              @foreach($my_cart as $i=>$cart)
                                 <tr>
                                    <td>{{$i + 1}}</td>
                                    <td>{{$cart->item}}</td>
                                    <td>Ugx:{{$cart->price}}</td>
                                    <td><img src="{{ asset('super_market_photos/'.$cart->photo)}}" style="width:50px; height:40px;" alt="Image" class="img-responsive"></td>
                                    
                                 </tr>
                                 @endforeach
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