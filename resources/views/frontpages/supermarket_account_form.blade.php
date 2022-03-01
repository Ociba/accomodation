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
   <div class="row row-table page-wrapper">
   <div class="row pull-center">
  @include('layouts.messages')
  </div>
      <div class="col-lg-3 col-md-6 col-sm-8 col-xs-12 align-middle">
         <!-- START panel-->
         <div data-toggle="play-animation" data-play="fadeIn" data-offset="0" class="panel panel-dark panel-flat">
            <div class="panel-heading text-center">
               {{--<a href="#">
                  <img src="{{ asset('admin/assets/img/house.ico')}}" alt="Image" class="block-center img-rounded"> <br>JJOOME
               </a>--}}
               <p class="text-center mt-lg" style="height:10px;">
                  <strong>ENTER YOUR DETAILS</strong>
               </p>
            </div>
            <div class="panel-body">
            @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif
               <form method="POST" action="/register-account" role="form" enctype="multipart/form-data" class="mb-lg">
                 @csrf
                 <div class="form-group has-feedback">
                     <input id="name" placeholder="Enter Your Full Names" for="name" type="text" name="name" :value="old('name')"  required autofocus autocomplete="off"  class="form-control">
                     <span class="fa fa-user form-control-feedback text-muted"></span>
                  </div>
                  <div class="form-group has-feedback">
                     <input id="contact" placeholder="Enter Your phone number" for="contact" type="text" name="contact" :value="old('contact')"  required autofocus autocomplete="off"  class="form-control">
                     <span class="fa fa-phone form-control-feedback text-muted"></span>
                  </div>
                  <div class="form-group has-feedback">
                     <input id="profile_photo_path" placeholder="Enter Your photo" for="profile_photo_path" type="file" name="profile_photo_path" :value="old('profile_photo_path')"  required autofocus autocomplete="off"  class="form-control">
                     <span class="fa fa-image form-control-feedback text-muted"></span>
                  </div>
                  <div class="form-group has-feedback">
                     <input id="email" placeholder="Enter email" for="email" type="email" name="email" :value="old('email')" required autofocus class="form-control">
                     <span class="fa fa-envelope form-control-feedback text-muted"></span>
                  </div>
                  <div class="form-group has-feedback">
                     <input id="password" type="password" name="password"  required autocomplete="new-password" placeholder="Enter Password"  class="form-control">
                     <span class="fa fa-lock form-control-feedback text-muted"></span>
                  </div>
                  <div class="form-group has-feedback">
                     <input id="password_confirmation" type="password" name="password_confirmation" placeholder="Confirm Password"  required autocomplete="new-password"  class="form-control">
                     <span class="fa fa-lock form-control-feedback text-muted"></span>
                  </div>
                  <div class="clearfix">
                     <div class="pull-center mb-3"><a href="{{ route('login') }}" class="text-blue">Already have an account?</a>
                     </div>
                  </div>
                  <button type="submit" class="btn btn-block btn-success mt-3">Sign Up</button>
               </form>
            </div>
         </div>
         <!-- END panel-->
      </div>
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
