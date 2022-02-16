{{--<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
--}}
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
               <a href="#">
                  <img src="{{ asset('admin/assets/img/house.ico')}}" alt="Image" class="block-center img-rounded"> <br>JJOOME
               </a>
               <p class="text-center mt-lg">
                  <strong>SIGN UP TO YOUR CREDENTIALS</strong>
               </p>
            </div>
            <div class="panel-body">
            @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif
               <form method="POST" action="/signup" role="form" enctype="multipart/form-data" class="mb-lg">
                 @csrf
                 <div class="form-group has-feedback">
                     <input id="name" placeholder="Enter Your Full Names" for="name" type="text" name="name" :value="old('name')"  required autofocus autocomplete="off"  class="form-control">
                     <span class="fa fa-user form-control-feedback text-muted"></span>
                  </div>
                  <div class="form-group has-feedback">
                     <input id="phone_number" placeholder="Enter Your phone number" for="name" type="text" name="phone_number" :value="old('phone_number')"  required autofocus autocomplete="off"  class="form-control">
                     <span class="fa fa-phone form-control-feedback text-muted"></span>
                  </div>
                  <div class="form-group has-feedback">
                     <input id="location" placeholder="Enter Your property location" for="location" type="text" name="location" :value="old('location')"  required autofocus autocomplete="off"  class="form-control">
                     <span class="fa fa-globe form-control-feedback text-muted"></span>
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
