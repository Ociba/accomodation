<!DOCTYPE html>

<html lang="en" class="default-style layout-fixed layout-navbar-fixed">
<head>
    @include('layouts.title')

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="" />
   @include('layouts.styling')
   <link rel="stylesheet" href="{{ asset('admin/assets/libs/datatables/datatables.css')}}">
</head>

<body>
     @include('layouts.preloader')
    <!-- [ Layout wrapper ] Start -->
    <div class="layout-wrapper layout-2">
        <div class="layout-inner">
            <!-- [ Layout sidenav ] Start -->
             @include('layouts.sidebar')
            <!-- [ Layout sidenav ] End -->
            <!-- [ Layout container ] Start -->
            <div class="layout-container">
                <!-- [ Layout navbar ( Header ) ] Start -->
                 @include('layouts.navbar')
                <!-- [ Layout navbar ( Header ) ] End -->

                <!-- [ Layout content ] Start -->
                <div class="layout-content">

                    <!-- [ content ] Start -->
                    <div class="container-fluid flex-grow-1 container-p-y">
                        @include('layouts.breadcrumb')

                        <h4 class="font-weight-bold py-3 mb-0"></h4>
                        <div class="row">
                            <!-- Staustic card 8 Start -->
                            <div class="col-xl-3 col-md-6">
                                <div class="card  mb-4">
                                    <div class="card-body text-center">
                                        <i class="feather icon-user bg-primary ui-rounded-icon"></i>
                                        <h4 class="mt-2"><span class="text-primary"> Clients</span></h4>
                                        <p class="mb-3">Todays Clients</p>
                                        <a href="/project" button class="btn btn-primary btn-sm btn-round">View</button></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card  mb-4">
                                    <div class="card-body text-center">
                                        <i class="feather icon-briefcase bg-success ui-rounded-icon"></i>
                                        <h4 class="mt-2"><span class="text-success"> Property</span></h4>
                                        <p class="mb-3">Available Property</p>
                                        <a href="/get-comments" button class="btn btn-success btn-sm btn-round">Check them out</button></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card  mb-4">
                                    <div class="card-body text-center">
                                        <i class="feather icon-check-square bg-danger ui-rounded-icon"></i>
                                        <h4 class="mt-2"><span class="text-danger">  Property</span></h4>
                                        <p class="mb-3">Property Taken</p>
                                        <a href="/get-material" button class="btn btn-danger btn-sm btn-round">View</button></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card  mb-4">
                                    <div class="card-body text-center">
                                        <i class="feather icon-users bg-warning ui-rounded-icon"></i>
                                        <h4 class="mt-2"><span class="text-warning"> Owners</span></h4>
                                        <p class="mb-3">Property Owners</p>
                                        <a href="/contact-messages" button class="btn btn-warning btn-sm btn-round text-white">View</button></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Staustic card 8 Start -->
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-pattern-3-dark mb-4">
                                    <div class="card-body text-center">
                                    <i class="ion ion-md-ribbon display-4"></i>
                                        <h4 class="mt-2"><span class="text-primary">8.62k</span> Brokers</h4>
                                        <p class="mb-3">Active Registered Brokers</p>
                                        <button class="btn btn-primary btn-sm btn-round">View</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-pattern-3-dark mb-4">
                                    <div class="card-body text-center">
                                        <i class="lnr lnr-calendar-full mr-2 display-4"></i>
                                        <h4 class="mt-2"><span class="text-success">+40</span> Users</h4>
                                        <p class="mb-3">Active Users</p>
                                        <button class="btn btn-success btn-sm btn-round">View</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-pattern-3-dark mb-4">
                                    <div class="card-body text-center">
                                    <i class="ion ion-ios-wallet display-4"></i>
                                        <h4 class="mt-2"><span class="text-primary">+40</span> Owners Fee</h4>
                                        <p class="mb-3">Subscription Fee</p>
                                        <button class="btn btn-danger btn-sm btn-round">View</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-pattern-3-dark mb-4">
                                    <div class="card-body text-center">
                                    <i class="ion ion-ios-card display-4"></i>
                                        <h4 class="mt-2"><span class="text-warning">10%</span> Brokers Fee</h4>
                                        <p class="mb-3">Money Collected</p>
                                        <button class="btn btn-warning btn-sm btn-round text-white">View</button>
                                    </div>
                                </div>
                            </div>
                            <!-- Staustic card 8 end -->
                            <!-- Staustic card 8 end -->
                            <!-- Chart card 11 Start -->
                            <!-- Chart card 11 end -->
                        </div>
                    </div>
                    <!-- [ content ] End -->

                    <!-- [ Layout footer ] Start -->
                     @include('layouts.footer')
                    <!-- [ Layout footer ] End -->

                </div>
                <!-- [ Layout content ] Start -->

            </div>
            <!-- [ Layout container ] End -->

        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-sidenav-toggle"></div>
    </div>
    <!-- [ Layout wrapper ] end -->

    <!-- Core scripts -->
    @include('layouts.javascript')
    <script src="{{ asset('admin/assets/libs/datatables/datatables.js')}}"></script>
    
    <script>
        // DataTable start
        $('#report-table').DataTable();
        // DataTable end
    </script>
    <div class="modal fade" id="projects" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Project</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="get" action="/save-project">
                    @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="floating-label" for="Title">Title</label>
                                    <input type="text" name="title" class="form-control" id="Title" placeholder="" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="floating-label" for="amount">Amount</label>
                                    <input class="form-control" name="amount" id="amount" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="floating-label" for="location">Location</label>
                                    <input class="form-control" name="location" id="location" rows="3" required>                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="floating-label" for="Organization">Organisation</label>
                                    <input class="form-control" name="organization" id="organization" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group fill">
                                    <label class="floating-label" for="deadline">Deadline</label>
                                    <input type="date" class="form-control" name="deadline" id="deadline" placeholder="date" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group fill">
                                    <label class="floating-label" for="head_of_project">Head of Project</label>
                                    <input type="text" class="form-control" name="head_of_project" id="head_of_project" placeholder="" required>
                                </div>
                            </div>
                            <div class="col-sm-12 text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
