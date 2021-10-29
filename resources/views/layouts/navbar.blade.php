<nav class="layout-navbar navbar navbar-expand-lg align-items-lg-center bg-dark container-p-x" id="layout-navbar">
    <a href="index.html" class="navbar-brand app-brand demo d-lg-none py-0 mr-4">
        <span class="app-brand-logo demo">
            <img style="border-radius:50%; width:40px; height:40px;" src="{{ asset('admin/assets/img/house.ico')}}" alt="Brand Logo" class="img-fluid">
        </span>
        <span class="app-brand-text demo font-weight-normal ml-2">JOOME</span>
    </a>
    <div class="layout-sidenav-toggle navbar-nav d-lg-none align-items-lg-center mr-auto">
        <a class="nav-item nav-link px-0 mr-lg-4" href="javascript:">
            <i class="ion ion-md-menu text-large align-middle"></i>
        </a>
    </div>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#layout-navbar-collapse">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse collapse" id="layout-navbar-collapse">
        <!-- Divider -->
        <hr class="d-lg-none w-100 my-2">

        <div class="navbar-nav align-items-lg-center">
            <!-- Search -->
            <label class="nav-item navbar-text navbar-search-box p-0 active">
                {{--<i class="feather icon-search navbar-icon align-middle"></i>--}}
                <span class="navbar-search-input pl-2">
                    <input type="hidden" class="form-control navbar-text mx-2" placeholder="Search...">
                </span>
            </label>
        </div>

        <div class="navbar-nav align-items-lg-center ml-auto">
            <div class="demo-navbar-notifications nav-item dropdown mr-lg-3">
                <a class="nav-link dropdown-toggle hide-arrow" href="#" data-toggle="dropdown">
                    <i class="feather icon-bell navbar-icon align-middle"></i>
                    <span class="badge badge-danger badge-dot indicator"></span>
                    <span class="d-lg-none align-middle">&nbsp; Notifications</span>
                </a>
                {{--<div class="dropdown-menu dropdown-menu-right">
                    <div class="bg-primary text-center text-white font-weight-bold p-3">
                        {{auth()->user()->countComments()}} New Notifications
                    </div>
                    <div class="list-group list-group-flush">
                       @foreach(auth()->user()->getComments() as $comments)  
                        <a href="/get-comments" class="list-group-item list-group-item-action media d-flex align-items-center">
                            <div class="ui-icon ui-icon-sm feather icon-user bg-secondary border-0 text-white"></div>
                            <div class="media-body line-height-condenced ml-3">
                                <div class="text-dark">{{$comments->name}}</div>
                                <div class="small mt-1">
                                    {{ substr($comments->comment,0,20)}}....
                                </div>
                                <div class="text-green small mt-1" style="color:green;">{{ date('d F Y', strtotime($comments->created_at)) }} | {{ date('g:ia', strtotime($comments->created_at))}} | {{Carbon\Carbon::parse($comments->created_at)->diffForHumans()}}</div>
                            </div>
                        </a>
                        @endforeach
                    </div>
                    <a href="/get-comments" class="d-block text-center text-light small p-2 my-1">Show all notifications</a>
                </div>
                --}}
            </div>

            <div class="demo-navbar-messages nav-item dropdown mr-lg-3">
                <a class="nav-link dropdown-toggle hide-arrow" href="#" data-toggle="dropdown">
                    <i class="feather icon-mail navbar-icon align-middle"></i>
                    <span class="badge badge-success badge-dot indicator"></span>
                    <span class="d-lg-none align-middle">&nbsp; Messages</span>
                </a>
                {{--<div class="dropdown-menu dropdown-menu-right">
                    <div class="bg-primary text-center text-white font-weight-bold p-3">
                        {{auth()->user()->countMessages()}} New Messages
                    </div>
                    <div class="list-group list-group-flush">
                      @foreach(auth()->user()->getMessages() as $contacts) 
                        <a href="javascript:" class="list-group-item list-group-item-action media d-flex align-items-center">
                        <div class="ui-icon ui-icon-sm feather icon-user bg-secondary border-0 text-white"></div>
                            <div class="media-body ml-3">
                                <div class="text-dark line-height-condenced">{{ substr($contacts->message,0,20)}}....</div>
                                <div class="text-light small mt-1">
                                <span style="color:blue;">{{$contacts ->name}}</span> &nbsp;·&nbsp; <span style="color:green;">{{ date('d F Y', strtotime($comments->created_at)) }} | {{Carbon\Carbon::parse($comments->created_at)->diffForHumans()}}</span>
                                </div>
                            </div>
                        </a>
                        @endforeach
                     </div>
                        
                    <a href="/contact-messages" class="d-block text-center text-light small p-2 my-1">Show all messages</a>
                </div>
                --}}
            </div>

            <!-- Divider -->
            <div class="nav-item d-none d-lg-block text-big font-weight-light line-height-1 opacity-25 mr-3 ml-1">|</div>
            <div class="demo-navbar-user nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                    <span class="d-inline-flex flex-lg-row-reverse align-items-center align-middle">
                        {{--<img  src="{{ asset('profile_photos/'.auth()->user()->getLoggedInUserLogo())}}" alt class="d-block ui-w-30 rounded-circle">--}}
                        <span class="px-1 mr-lg-2 ml-2 ml-lg-0">{{auth()->user()->name}}</span>
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    {{--<a href="javascript:" class="dropdown-item">
                        <i class="feather icon-user text-muted"></i> &nbsp; My profile</a>
                    <a href="javascript:" class="dropdown-item">
                        <i class="feather icon-mail text-muted"></i> &nbsp; Messages</a>
                    <a href="javascript:" class="dropdown-item">
                        <i class="feather icon-settings text-muted"></i> &nbsp; Account settings</a>
                        --}}
                    <div class="dropdown-divider"></div>
                    <a href="/logout" class="dropdown-item">
                        <i class="feather icon-power text-danger"></i> &nbsp; Log Out</a>
                </div>
            </div>
        </div>
    </div>
</nav>