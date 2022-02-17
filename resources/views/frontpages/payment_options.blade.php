<!DOCTYPE html>
<html lang="en" class="no-ie">
<head>
   <!-- Meta-->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
   <meta name="description" content="">
   <meta name="keywords" content="">
   <meta name="author" content="">
   @include('layouts.title')
   <!-- Bootstrap CSS-->
   <link rel="stylesheet" href="{{ asset('front/app/css/bootstrap.css')}}">
   <!-- Vendor CSS-->
   <link rel="stylesheet" href="{{ asset('front/vendor/fontawesome/css/font-awesome.min.css')}}">
   <link rel="stylesheet" href="{{ asset('front/vendor/animo/animate%2banimo.css')}}">
   <!-- App CSS-->
   <link rel="stylesheet" href="{{ asset('front/app/css/app.css')}}">
   <link rel="stylesheet" href="{{ asset('front/app/css/common.css')}}">
   <!-- Modernizr JS Script-->
   <script src="{{ asset('front/vendor/modernizr/modernizr.js')}}" type="application/javascript"></script>
   <!-- FastClick for mobiles-->
   <script src="{{ asset('front/vendor/fastclick/fastclick.js')}}" type="application/javascript"></script>
</head>

<body>
   <!-- START wrapper-->
   <div class="row row-table page-wrapper" style="background:white;">
   <div class="row pull-center">
  @include('layouts.messages')
  </div>
        <section class="col-lg-6 col-md-12 col-sm-12 col-xs-12" style="background: #e6e6ff;">
            <div class="container">
      <div class="col-lg-3 col-md-6 col-sm-8 col-xs-12 align-middle">
         <!-- START panel-->
         <div data-toggle="play-animation" data-play="fadeIn" data-offset="0" class="panel panel-dark panel-flat">
            <div class="panel-heading text-center">
               <p class="text-center mt-lg">
               <img src="{{ asset('admin/assets/img/payment/mtnz.png')}}" style="height:180px;" alt="Image" class="block-center img-rounded">
               </p>
               <form method="get" action="/pay-with-mtn" role="form"  class="mb-lg">
                 @csrf
                 <input type="text" name="id" style="color:red;" value="{{auth()->user()->id}}">
                 <div class="form-group has-feedback">
                     <input id="amount" placeholder="UGX:50,000" for="amount" type="text" name="amount" class="form-control">
                     {{--<span class="fa fa-user form-control-feedback text-muted"></span>--}}
                  </div>
                  <button type="submit" class="btn btn-block btn-success mt-3">Pay Now</button>
                </form>
            </div>
         </div>
         <!-- END panel-->
      </div>
      <div class="col-lg-3 col-md-6 col-sm-8 col-xs-12 align-middle">
         <!-- START panel-->
         <div data-toggle="play-animation" data-play="fadeIn" data-offset="0" class="panel panel-dark panel-flat">
            <div class="panel-heading text-center">
               <p class="text-center mt-lg">
               <img src="{{ asset('admin/assets/img/payment/airtel.png')}}" style="width:200px; height:180px;" alt="Image" class="block-center img-rounded">
               </p>
               <form method="get" action="/pay-with-airtel" role="form"  class="mb-lg">
                 @csrf
                 <input type="text" name="id" style="color:red;" value="{{auth()->user()->id}}">
                 <div class="form-group has-feedback">
                     <input id="amount" placeholder="UGX:50,000" for="amount" type="text" name="amount" class="form-control">
                     {{--<span class="fa fa-user form-control-feedback text-muted"></span>--}}
                  </div>
                  <button type="submit" class="btn btn-block btn-success mt-3">Pay Now</button>
                </form>
            </div>
         </div>
         <!-- END panel-->
      </div></div></div>
   </div>
   <!-- END wrapper-->
   <!-- START Scripts-->
   <!-- Main vendor Scripts-->
   <script src="{{ asset('front/vendor/jquery/jquery.min.js')}}"></script>
   <script src="{{ asset('front/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
   <!-- Animo-->
   <script src="{{ asset('front/vendor/animo/animo.min.js')}}"></script>
   <!-- Custom script for pages-->
   <script src="{{ asset('front/app/js/pages.js')}}"></script>
   <!-- END Scripts-->
</body>
</html>
