{{--<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>--}}

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
   <div class="row row-table page-wrapper" style="background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.40), rgba(255, 255, 255, 0.50)),
    url('admin/assets/img/bg/soroti5.jpg'); background-size:cover;">
      <div class="col-lg-3 col-md-6 col-sm-8 col-xs-12 align-middle">
         <!-- START panel-->
         <div data-toggle="play-animation" data-play="fadeIn" data-offset="0" class="panel panel-dark panel-flat">
            <div class="panel-heading text-center">
               <a href="#">
                  <img src="{{ asset('admin/assets/img/house.ico')}}" alt="Image" class="block-center img-rounded"> JOOME
               </a>
               <p class="text-center mt-lg">
                  <strong>SIGN IN TO CONTINUE.</strong>
               </p>
            </div>
            <div class="panel-body">
            @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif
               <form method="POST" action="{{ route('login') }}" role="form" class="mb-lg">
                 @csrf
                  <div class="form-group has-feedback">
                     <input id="email" placeholder="Enter email" for="email" type="email" name="email" :value="old('email')" required autofocus class="form-control">
                     <span class="fa fa-envelope form-control-feedback text-muted"></span>
                  </div>
                  <div class="form-group has-feedback">
                     <input id="password" type="password" name="password" required autocomplete="current-password" class="form-control">
                     <span class="fa fa-lock form-control-feedback text-muted"></span>
                  </div>
                  <div class="clearfix">
                     <div class="checkbox c-checkbox pull-left mt0">
                        <label for="remember_me">
                           <input type="checkbox" value="" id="remember_me" name="remember" >
                           <span class="fa fa-check"></span>Remember Me</label>
                     </div>
                     @if (Route::has('password.request'))
                     <div class="pull-right"><a href="{{ route('password.request') }}" class="text-muted">Forgot your password?</a>
                     </div>
                     @endif
                  </div>
                  <button type="submit" class="btn btn-block btn-success">Login</button>
               </form>
               <p class="text-center">
               <a href="/supermarket-account-creation" class="text-primary">create shopping account</a>
               </p>
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