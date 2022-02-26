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
                        <h4 class="font-weight-bold py-3 mb-0">Invoice</h4>
                        <div class="text-muted small mt-0 mb-4 d-block breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
                                <li class="breadcrumb-item active">Invoice</li>
                            </ol>
                        </div>
                        <div class="card">
                            <div class="card-body p-5">
                                <div class="row">
                                    <div class="col-sm-6 pb-4">
                                        <div class="media align-items-center mb-4">
                                            <a href="index.html" class="navbar-brand app-brand demo py-0 mr-4">
                                                <span class="app-brand-logo demo">
                                                    <img src="{{ asset('admin/assets/img/house.ico')}}" alt="Brand Logo" class="img-fluid">
                                                </span>
                                                <span class="app-brand-text demo font-weight-bold text-dark ml-2">JJOOME</span>
                                            </a>
                                        </div>
                                        <div class="mb-1">Office 154, 330 North Brand Boulevard</div>
                                        <div class="mb-1">Glendale, CA 91203, USA</div>
                                        <div>+0 (123) 456 7891, +9 (876) 543 2198</div>
                                    </div>
                                    <div class="col-sm-6 text-right pb-4">
                                        <h6 class="text-big text-large font-weight-bold mb-3">INVOICE #49029</h6>
                                        <div class="mb-1">Date:
                                            <strong class="font-weight-semibold">January 12, 2015</strong>
                                        </div>
                                        <div>Due date:
                                            <strong class="font-weight-semibold">May 12, 2015</strong>
                                        </div>
                                    </div>
                                </div>
                                <hr class="mb-4">
                                <div class="row">
                                    <div class="col-sm-6 mb-4">
                                        <div class="font-weight-bold mb-2">Invoice To:</div>
                                        <div>Alice Robart</div>
                                        <div>Company LTD</div>
                                        <div>09 Bowman St.</div>
                                        <div>South Windsor, CT 06074</div>
                                        <div>United States</div>
                                        <div>+91 (999) 999 9999</div>
                                        <div>dummy@mail.com</div>
                                    </div>
                                    <div class="col-sm-6 mb-4">
                                        <div class="font-weight-bold mb-2">Payment Details:</div>
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td class="pr-3">Total Due:</td>
                                                    <td>
                                                        <strong>$6,095.25</strong>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="pr-3">Bank name:</td>
                                                    <td>Finance Bank</td>
                                                </tr>
                                                <tr>
                                                    <td class="pr-3">Country:</td>
                                                    <td>United States</td>
                                                </tr>
                                                <tr>
                                                    <td class="pr-3">City:</td>
                                                    <td>West New York, NJ 07093</td>
                                                </tr>
                                                <tr>
                                                    <td class="pr-3">Address:</td>
                                                    <td>23 Sussex Ave.</td>
                                                </tr>
                                                <tr>
                                                    <td class="pr-3">IBAN:</td>
                                                    <td>ETD85039283901259</td>
                                                </tr>
                                                <tr>
                                                    <td class="pr-3">SWIFT code:</td>
                                                    <td>AS4F1</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="table-responsive mb-4">
                                    <table class="table m-0">
                                        <thead>
                                            <tr>
                                                <th class="py-3">
                                                    Task description
                                                </th>
                                                <th class="py-3">
                                                    Rate
                                                </th>
                                                <th class="py-3">
                                                    Hours
                                                </th>
                                                <th class="py-3">
                                                    Line total
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="py-3">
                                                    <div class="font-weight-semibold">Website design and development</div>
                                                    <div class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</div>
                                                </td>
                                                <td class="py-3">
                                                    <strong>$50.00</strong>
                                                </td>
                                                <td class="py-3">
                                                    <strong>63</strong>
                                                </td>
                                                <td class="py-3">
                                                    <strong>$3,150.00</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="py-3">
                                                    <div class="font-weight-semibold">Branding</div>
                                                    <div class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</div>
                                                </td>
                                                <td class="py-3">
                                                    <strong>$47.95</strong>
                                                </td>
                                                <td class="py-3">
                                                    <strong>36</strong>
                                                </td>
                                                <td class="py-3">
                                                    <strong>$1,726.20</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="3" class="text-right py-3">
                                                    Subtotal:
                                                    <br> Tax(25%):
                                                    <br>
                                                    <span class="d-block text-big mt-2">Total:</span>
                                                </td>
                                                <td class="py-3">
                                                    <strong>$4,876.20</strong>
                                                    <br>
                                                    <strong>$1,219.05</strong>
                                                    <br>
                                                    <strong class="d-block text-big mt-2">$6,095.25</strong>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="text-muted">
                                    <strong>Note:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras laoreet, dolor id dapibus dapibus, neque mi tincidunt quam, quis congue ligula risus vitae magna. Curabitur ultrices nisi massa,
                                    nec viverra lorem feugiat sed.
                                    Mauris non porttitor nunc. Integer eu orci in magna auctor vestibulum.
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <a href="/print-now" target="_blank" class="btn btn-default"><i class="ion ion-md-print"></i>&nbsp; Print Now</a>
                            </div>
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
    <script src="{{ asset('admin/assets/js/pace.js')}}"></script>
    <script src="{{ asset('admin/assets/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{ asset('admin/assets/libs/popper/popper.js')}}"></script>
    <script src="{{ asset('admin/assets/js/bootstrap.js')}}"></script>
    <script src="{{ asset('admin/assets/js/sidenav.js')}}"></script>
    <script src="{{ asset('admin/assets/js/layout-helpers.js')}}"></script>
    <script src="{{ asset('admin/assets/js/material-ripple.js')}}"></script>

    <!-- Libs -->
    <script src="{{ asset('admin/assets/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script src="{{ asset('admin/assets/libs/datatables/datatables.js')}}"></script>

    <!-- Demo -->
    <script src="{{ asset('admin/assets/js/demo.js')}}"></script>
    <script>
        // DataTable start
        $('#report-table').DataTable();
        // DataTable end
    </script>
</body>
</html>
