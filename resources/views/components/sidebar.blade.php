<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">TIKI <sup></sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{route('dash.home')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Project
    </div>
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item ">
        <a class="nav-link collapsed" href="{{route('trip.show')}}" >

            <i class="fas fa-fw fa-cog"></i>
            <span class="">Show All Trip</span>
        </a>
        <a class="nav-link collapsed" href="{{route('trip.form')}}" >

            <i class="fas fa-fw fa-cog"></i>
            <span class="">Create a Trip</span>
        </a>
        {{--            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">--}}
            {{--                <div class="bg-white py-2 collapse-inner rounded">--}}
                {{--                    <h6 class="collapse-header">Custom Components:</h6>--}}
                {{--                    <a class="collapse-item" href="buttons.html">Buttons</a>--}}
                {{--                    <a class="collapse-item" href="cards.html">Cards</a>--}}
                {{--                </div>--}}
            {{--            </div>--}}

        <a class="nav-link collapsed" href="{{route('bus.seat')}}" >

            <i class="fas fa-fw fa-cog"></i>
            <span class="">Buy Tickets</span>
        </a>
        <a class="nav-link collapsed" href="{{route('view.sold')}}" >

            <i class="fas fa-fw fa-cog"></i>
            <span class="">Show Sold Tickets</span>
        </a>
    </li>







    <!-- Divider -->
    <hr class="sidebar-divider">





    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>



</ul>
<!-- End of Sidebar -->
