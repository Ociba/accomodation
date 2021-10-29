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
        @include('frontlayouts.menu')
        <section class="bg-white">
            <div class="container">
                <div class="row">
                    <div data-toggle="play-animation" data-play="fadeInLeft" data-offset="-250" class="col-lg-6">
                        <img src="{{ asset('front/apartments/apartment5.jpeg')}}" style="width:500px;" alt="App Name" class="img-responsive">
                    </div>
                    <div class="col-lg-6">
                        <h2 class="page-header">Our Contacts</h2>
                        <p class="text-md"><strong>Phone Number :</strong> 0775401793</p>
                        <p><strong>Email:</strong> joome@gmail.com</p>
                        <p><strong>Location:</strong> Plot 345 Opposite University Main Gate, Moroto Road</p>
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