@extends('dashboard/partials/footer')

@section('left-bar')
<!-- ========== Left Sidebar Start ========== -->
<div class="leftside-menu">

    <!-- LOGO -->
    <a href="index.html" class="logo text-center logo-light">
        <span class="logo-lg">
            <img src="assets/images/logo.png" alt="" height="16">
        </span>
        <span class="logo-sm">
            <img src="assets/images/logo_sm.png" alt="" height="16">
        </span>
    </a>

    <!-- LOGO -->
    <a href="index.html" class="logo text-center logo-dark">
        <span class="logo-lg">
            <img src="assets/images/logo-dark.png" alt="" height="16">
        </span>
        <span class="logo-sm">
            <img src="assets/images/logo_sm_dark.png" alt="" height="16">
        </span>
    </a>

    <div class="h-100" id="leftside-menu-container" data-simplebar="">

        <!--- Sidemenu -->
        <ul class="side-nav">

            <li class="side-nav-title side-nav-item">Navigation</li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarDashboards" aria-expanded="false" aria-controls="sidebarDashboards" class="side-nav-link">
                    <i class="uil-home-alt"></i>
                    {{-- <span class="badge bg-success float-end">4</span> --}}
                    <span> Dashboard </span>
                </a>
                {{-- <div class="collapse" id="sidebarDashboards">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="dashboard-analytics.html">Analytics</a>
                        </li>
                        <li>
                            <a href="dashboard-crm.html">CRM</a>
                        </li>
                        <li>
                            <a href="index.html">Ecommerce</a>
                        </li>
                        <li>
                            <a href="dashboard-projects.html">Projects</a>
                        </li>
                    </ul>
                </div> --}}
            </li>
            @if (Auth::user()->type ==='SUPER ADMIN')

            <li class="side-nav-item">
                <a href="{{route('students')}}" class="side-nav-link">
                    <i class="uil-users-alt"></i>
                    <span> Students </span>
                </a>
            </li>
            <li class="side-nav-title side-nav-item">DHDC Account Details</li>

            <li class="side-nav-item">
                <a href="{{route('account')}}" class="side-nav-link">
                    <i class="uil-comments-alt"></i>
                    <span> Account </span>
                </a>
            </li>

            <li class="side-nav-title side-nav-item">SWALAH Account Details</li>

            <li class="side-nav-item">
                <a href="{{route('stationery')}}" class="side-nav-link">
                    <i class="uil-calender"></i>
                    <span> Stationery </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="{{route('print')}}" class="side-nav-link">
                    <i class="uil-comments-alt"></i>
                    <span> Print </span>
                </a>
            </li>
            
            <li class="side-nav-item">
                <a href="{{route('bookfair')}}" class="side-nav-link">
                    <i class="uil-comments-alt"></i>
                    <span> Book Fair </span>
                </a>
            </li>
            <li class="side-nav-item">
                <a href="{{route('printSlip')}}" class="side-nav-link">
                    <i class="uil-comments-alt"></i>
                    <span> Print Slip</span>
                </a>
            </li>
            @elseif(Auth::user()->type ==='ADMIN')
            <li class="side-nav-item">
                <a href="{{route('students')}}" class="side-nav-link">
                    <i class="uil-users-alt"></i>
                    <span> Students </span>
                </a>
            </li>
            <li class="side-nav-title side-nav-item">DHDC Account Details</li>

            <li class="side-nav-item">
                <a href="{{route('account')}}" class="side-nav-link">
                    <i class="uil-comments-alt"></i>
                    <span> Account </span>
                </a>
            </li>
            @elseif(Auth::user()->type ==='STATIONERY')
            <li class="side-nav-title side-nav-item">SWALAH Account Details</li>

            <li class="side-nav-item">
                <a href="{{route('stationery')}}" class="side-nav-link">
                    <i class="uil-calender"></i>
                    <span> Stationery </span>
                </a>
            </li>
            @elseif(Auth::user()->type ==='LIBRARY')
            <li class="side-nav-title side-nav-item">SWALAH Account Details</li>

            <li class="side-nav-item">
                <a href="{{route('stationery')}}" class="side-nav-link">
                    <i class="uil-calender"></i>
                    <span> Library </span>
                </a>
            </li>
            @elseif(Auth::user()->type ==='PUBLISHER')
            <li class="side-nav-title side-nav-item">SWALAH Account Details</li>

            <li class="side-nav-item">
                <a href="{{route('bookfair')}}" class="side-nav-link">
                    <i class="uil-comments-alt"></i>
                    <span> Book Fair </span>
                </a>
            </li>

            @elseif(Auth::user()->type ==='PRINT')
            <li class="side-nav-title side-nav-item">SWALAH Account Details</li>

            <li class="side-nav-item">
                <a href="{{route('print')}}" class="side-nav-link">
                    <i class="uil-comments-alt"></i>
                    <span> Print </span>
                </a>
            </li>
                    
            @endif
            
           
           

           
            

           

           

            
            

           

            
        </ul>

      
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->
@yield('top-bar')


@endsection