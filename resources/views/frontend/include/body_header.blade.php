@php
$currRoute = Route::current()->getName();
@endphp
<!-- header of the page -->
<div id="navbar" class="navbar fixed-top navbar-light bg-light">
    <header id="header" style="height: 00px;">
        <div class="container">
            <!-- header holder of the page -->
            <div class="row header-holder">
                <div class="col-xs-12">
                    <div class="logo text-uppercase">
                        <a href="{{route('home')}}"> 
                            <img src="{{ asset('public/frontend/images/logo/logo.png')}}" alt="logo" style="hight: 150px; width: 150px;"</a>
                    </div>
                    <a href="#" class="nav-opener"><i class="fa fa-bars"></i></a>
                    <!-- Nav of the page -->
                    <nav id="nav">
                        <ul class="list-unstyled" style="padding-top: 20px">
                            <li class="{{ ($currRoute == 'home')  ? 'active' : '' }}">
                                <a href="{{ route('home') }}">Home</a>
<!--                                <ul class="list-unstyled drop-down">
                                    <li><a href="home.html" >Homepage 1</a></li>
                                    <li><a href="home2.html">Homepage 2</a></li>
                                    <li><a href="home3.html">Homepage 3</a></li>
                                </ul>-->
                            </li>
                            <li class="{{ ($currRoute == 'international' || $currRoute == 'shipment' || $currRoute == 'break-bulk' || $currRoute == 'air-cargo' || $currRoute == '3pl' || $currRoute == 'project-cargo' || $currRoute == 'chartering' || $currRoute == 'custom-clearance')  ? 'active' : '' }}">
                                <a href="#">SERVICES</a>
                                <ul class="list-unstyled drop-down">
                                    <li><a href="{{ route('international') }}">INTERNATIONAL FREIGHT FORWARDING</a></li>
                                    <li><a href="{{ route('shipment') }}">LCL/FCL SHIPMENTS</a></li>
                                    <li><a href="{{ route('break-bulk') }}">BREAK BULK</a></li>
                                    <li><a href="{{ route('air-cargo') }}">AIR CARGO</a></li>
                                    <li><a href="{{ route('3pl') }}">3PL</a></li>
                                    <li><a href="{{ route('project-cargo') }}">PROJECT CARGO</a></li>
                                    <li><a href="{{ route('chartering') }}">CHARTERING</a></li>
                                    <li><a href="{{ route('custom-clearance') }}">CUSTOM CLEARANCE</a></li>
                                </ul>
                            </li>
                            <li class="{{ ($currRoute == 'aboutus')  ? 'active' : '' }}"><a href="{{route('aboutus')}}">ABOUTS US</a></li>
                            <li class="{{ ($currRoute == 'contactus')  ? 'active' : '' }}"><a href="{{route('contactus')}}">CONTACT</a></li>
                        </ul>
                    </nav>
                    <!-- Nav of the page end -->
                </div>
            </div>
            <!-- header holder of the page end -->
        </div>
    </header>
</div>

<!-- header of the page end -->
<span id="back-top" class="text-center md-round fa fa-angle-up"></span>
<!-- loader of the page -->
<div id="loader" class="loader-holder">
    <div class="block"><img src="{{ asset('public/frontend/images/svg/bars.svg') }}" width="60" alt="loader"></div>
</div>