<div id="layout-sidenav" class="layout-sidenav sidenav sidenav-vertical bg-white logo-dark">
    <div class="app-brand demo">
        <span class="app-brand-logo demo">
            <img style="border-radius:50%; width:50px; height:50px;" src="{{ asset('admin/assets/img/house.ico')}}" alt="Brand Logo" class="img-fluid">
        </span>
        <a href="index.html" class="app-brand-text demo sidenav-text font-weight-normal ml-2">JOOME</a>
        <a href="javascript:" class="layout-sidenav-toggle sidenav-link text-large ml-auto">
            <i class="ion ion-md-menu align-middle"></i>
        </a>
    </div>
    <div class="sidenav-divider mt-0"></div>

    <!-- Links -->
    <ul class="sidenav-inner py-1">

        <!-- Dashboards -->
        @can('isAdmin')
        <li  @if(\Request::route()->getName() == "Dashboard") class="sidenav-item active" @else class="sidenav-item" @endif>
            <a href="/home" class="sidenav-link">
                <i class="sidenav-icon feather icon-home"></i>
                <div>Dashboards</div>
            </a>
        </li>
        @endcan
        @can('isAdmin')
        <li @if(\Request::route()->getName() == "Category")class="sidenav-item active" @else  class="sidenav-item" @endif>
            <a href="/category" class="sidenav-link">
                <i class="sidenav-icon feather icon-layers"></i>
                <div>Category</div>
            </a>
        </li>
        @endcan
        @can('isAdmin')
        <li @if(\Request::route()->getName() == "Subscribers")class="sidenav-item active" @else  class="sidenav-item" @endif>
            <a href="/subscribers" class="sidenav-link">
                <i class="sidenav-icon feather icon-layers"></i>
                <div>Subscribers</div>
            </a>
        </li>
        @endcan
        @can('isAdmin',"isPropertyOwner")
        <li @if(\Request::route()->getName() == "Property Owners")class="sidenav-item active" @else class="sidenav-item" @endif>
            <a href="/get-property-owners" class="sidenav-link">
                <i class="sidenav-icon lnr lnr-license"></i>
                <div>Property Owner</div>
            </a>
        </li>
        @endcan
        @can('isAdmin')
        <li @if(\Request::route()->getName() == "Properties Available")class="sidenav-item active" @else class="sidenav-item" @endif>
            <a href="/properties-available" class="sidenav-link">
                <i class="sidenav-icon  feather icon-image"></i>
                <div>Properties Available</div>
            </a>
        </li>
        @endcan
        @can('isPropertyOwner')
        <li @if(\Request::route()->getName() == "Property Available")class="sidenav-item active" @else class="sidenav-item" @endif>
            <a href="/property" class="sidenav-link">
                <i class="sidenav-icon  feather icon-image"></i>
                <div>Property Available</div>
            </a>
        </li>
        @endcan
        @canany(['isAdmin','isPropertyOwner'])
        <li @if(\Request::route()->getName() == "Property Taken")class="sidenav-item active" @else class="sidenav-item" @endif>
            <a href="/taken-property" class="sidenav-link">
                <i class="sidenav-icon  feather icon-check-square"></i>
                <div>Property Taken</div>
            </a>
        </li>
        @endcan
        @can('isAdmin')
        <li  @if(\Request::route()->getName() == "Clients")class="sidenav-item active" @else class="sidenav-item" @endif>
            <a href="/all-client-info" class="sidenav-link">
                <i class="sidenav-icon feather icon-mail"></i>
                <div>All Clients</div>
            </a>
        </li>
        @endcan

        @canany(['isPropertyOwner','isBroker'])
        <li  @if(\Request::route()->getName() == "Clients")class="sidenav-item active" @else class="sidenav-item" @endif>
            <a href="/clients" class="sidenav-link">
                <i class="sidenav-icon feather icon-mail"></i>
                <div>Clients</div>
            </a>
        </li>
        @endcan
        @can('isAdmin')
        <li class="sidenav-item">
            <a href="javascript:" class="sidenav-link sidenav-toggle">
                <i class="sidenav-icon fa fa-cart-plus"></i>
                <div>Supermarket</div>
            </a>
            <ul class="sidenav-menu">
                <li class="sidenav-item"><a href="/supermarket-items" class="sidenav-link"><div>Items</div></a></li>
                <li class="sidenav-item"><a href="/customers-sent-orders" class="sidenav-link"><div>Customer Orders</div></a></li>
                <li class="sidenav-item"><a href="/customer-orders-summary" class="sidenav-link"><div>Orders Summary</div></a></li>
                <li class="sidenav-item"><a href="hospital-patient.html" class="sidenav-link"><div>Patient</div></a></li>
                <li class="sidenav-item"><a href="hospital-nurse.html" class="sidenav-link"><div>Nurse</div></a></li>
                <li class="sidenav-item"><a href="hospital-pharmacist.html" class="sidenav-link"><div>Pharmacist</div></a></li>
                <li class="sidenav-item"><a href="hospital-laboratorie.html" class="sidenav-link"><div>Laboratory</div></a></li>
            </ul>
        </li>
        @endcan
        @can('isAdmin')
        <li  @if(\Request::route()->getName() == "Company Broker")class="sidenav-item active" @else class="sidenav-item" @endif>
            <a href="/get-broker" class="sidenav-link">
                <i class="sidenav-icon feather icon-message-square"></i>
                <div>Broker</div>
            </a>
        </li>
        @endcan
        @can('isAdmin')
        <li  @if(\Request::route()->getName() == "Users")class="sidenav-item active" @else class="sidenav-item" @endif>
            <a href="/get-users" class="sidenav-link">
                <i class="sidenav-icon feather icon-users"></i>
                <div>Users</div>
            </a>
        </li>
        @endcan
        @can('isAdmin')
        <li class="sidenav-item">
            <a href="javascript:" class="sidenav-link sidenav-toggle">
                <i class="sidenav-icon fa fa-balance-scale"></i>
                <div>Revenue</div>
            </a>
            <ul class="sidenav-menu">
                <li class="sidenav-item"><a href="hospital-dashboard.html" class="sidenav-link"><div>Dashboard</div></a></li>
                <li class="sidenav-item"><a href="hospital-department.html" class="sidenav-link"><div>Department</div></a></li>
                <li class="sidenav-item"><a href="hospital-doctor.html" class="sidenav-link"><div>Doctor</div></a></li>
                <li class="sidenav-item"><a href="hospital-patient.html" class="sidenav-link"><div>Patient</div></a></li>
                <li class="sidenav-item"><a href="hospital-nurse.html" class="sidenav-link"><div>Nurse</div></a></li>
                <li class="sidenav-item"><a href="hospital-pharmacist.html" class="sidenav-link"><div>Pharmacist</div></a></li>
                <li class="sidenav-item"><a href="hospital-laboratorie.html" class="sidenav-link"><div>Laboratory</div></a></li>
            </ul>
        </li>
        @endcan
    </ul>
</div>