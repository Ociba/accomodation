<header>
    <div class="container">
        <nav class="row navbar navbar-default navbar-top navbar-fixed-top">
            <div class="col-md-2 app-logo">
                <a href="#" class="logo-wrapper">
                <img src="{{ asset('admin/assets/img/house.ico')}}" alt="App Name" class="img-responsive">
                </a>
                <a href="#">
                        <strong><em>JJOOME PROPERTY LTD</em></strong>
                </a>
            </div>
            <div class="col-md-10">
                <ul class="list-inline menuapp-buttons">
                <li class="mr-lg">
                        <a href="/">
                        <strong>Home</strong>
                        </a>
                    </li>
                    <li class="mr-lg dropdown dropdown-list">
                        <a href="#" data-toggle="dropdown" data-play="fadeIn" class="dropdown-toggle">
                        <strong>Accomodation</strong>
                        </a>
                        <!-- START Dropdown menu-->
                        <ul class="dropdown-menu">
                            <li>
                                <!-- START list group-->
                                <div class="list-group">
                                <!-- list item-->
                                <a href="/get-room" class="list-group-item">
                                    <div class="media">
                                        <div class="media-body clearfix">
                                            <div class="media-heading text-center">Single Room</div>
                                        </div>
                                    </div>
                                </a>
                                <!-- list item-->
                                <a href="/get-room" class="list-group-item">
                                    <div class="media">
                                    <div class="media-body clearfix">
                                            <div class="media-heading text-center">Double Room</div>
                                        </div>
                                    </div>
                                </a>
                                <!-- list item-->
                                <a href="/get-hostel" class="list-group-item">
                                    <div class="media">
                                    <div class="media-body clearfix">
                                            <div class="media-heading text-center">Hostel</div>
                                        </div>
                                    </div>
                                </a>
                                <!-- last list item -->
                                <a href="/get-house" class="list-group-item">
                                    <div class="media">
                                    <div class="media-body clearfix">
                                            <div class="media-heading text-center">House</div>
                                        </div>
                                    </div>
                                </a>
                                <a href="/get-apartment" class="list-group-item">
                                    <div class="media">
                                    <div class="media-body clearfix">
                                            <div class="media-heading text-center">Apartment</div>
                                        </div>
                                    </div>
                                </a>
                                <a href="/get-plots-and-land" class="list-group-item">
                                    <div class="media">
                                    <div class="media-body clearfix">
                                            <div class="media-heading text-center">Plots & Land</div>
                                        </div>
                                    </div>
                                </a>
                                <a href="/get-flats-and-mansions" class="list-group-item">
                                    <div class="media">
                                    <div class="media-body clearfix">
                                            <div class="media-heading text-center">Flats and Mansions</div>
                                        </div>
                                    </div>
                                </a>
                                <a href="/get-store" class="list-group-item">
                                    <div class="media">
                                    <div class="media-body clearfix">
                                            <div class="media-heading text-center">Store</div>
                                        </div>
                                    </div>
                                </a>
                                <a href="/get-office" class="list-group-item">
                                    <div class="media">
                                    <div class="media-body clearfix">
                                            <div class="media-heading text-center">Office</div>
                                        </div>
                                    </div>
                                </a>
                                <a href="/get-shop" class="list-group-item">
                                    <div class="media">
                                    <div class="media-body clearfix">
                                            <div class="media-heading text-center">Shop</div>
                                        </div>
                                    </div>
                                </a>
                                </div>
                                <!-- END list group-->
                            </li>
                        </ul>
                        <!-- END Dropdown menu-->
                    </li>
                     <li class="mr-lg">
                        <a href="/contact">
                        <strong>Contact</strong>
                        </a>
                    </li>
                    <li class="mr-lg">
                        <a href="{{ route('register') }}">
                        <strong>Sign Up</strong>
                        </a>
                    </li>
                    <li class="mr-lg">
                        <a href="{{ route('login') }}">
                        <strong>Login</strong>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        
    </div>
</header>