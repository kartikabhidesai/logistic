@extends('frontend.layout.app')
@section('content')

<main id="main">
    <!-- main slider of the page -->
    <section class="main-slider slider3">
        <!-- slide of the page -->
        <div class="slide bg-full overlay" style="background-image: url({{ asset('public/frontend/images/custom_clearance.jpg')}})">
            <div class="holder text-center">
                <h2 class="heading text-uppercase">CUSTOM CLEARANCE</h2>
            </div>
        </div>
        <!-- slide of the page end -->
    </section>

    <nav class="breadcrumbs text-center text-uppercase">
        <ul class="list-unstyled">
            <li><a href="{{route('home')}}">Home</a></li>
            <li>/</li>
            <li>CUSTOM CLEARANCE</li>
        </ul>
    </nav>
    <!-- breadcrumbs of the page end -->
    <section class="service-detail container">
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
                <!-- widget of the page -->
                <div class="widget">
                    <ul class="side-nav list-unstyled">
                        <li><a href="{{ route('international') }}">INTERNATIONAL FREIGHT FORWARDING</a></li>
                        <li><a href="{{ route('shipment') }}">LCL/FCL SHIPMENTS</a></li>
                        <li><a href="{{ route('break-bulk') }}">BREAK BULK</a></li>
                        <li><a href="{{ route('air-cargo') }}">AIR CARGO</a></li>
                        <li><a href="{{ route('3pl') }}">3PL</a></li>
                        <li><a href="{{ route('project-cargo') }}">PROJECT CARGO</a></li>
                        <li><a href="{{ route('chartering') }}">CHARTERING</a></li>
                        <li><a href="{{ route('custom-clearance') }}">CUSTOM CLEARANCE</a></li>
                    </ul>
                </div>
                <!-- widget of the page end -->
            </div>
            <div class="col-xs-12 col-sm-8 col-md-9 col-lg-8 col-lg-offset-1">
                <h1 style="font-family: serif ">CUSTOM CLEARANCE</h1>
                <div class="img-holder">
                    <img style="height: 400px;width: 770px;" src="{{  url('public/frontend/images/custom_clearance_in.png') }}" alt="image description" class="img-responsive">
                </div>
                <h2>Our expert team is handle all aspects of customs processes, including: import / export clearance, declarations, Perform invoices and certificates of origin. Our expertise in the field also covers customs regulations, bond requirements, duty rates, and petition procedures.</h2>
                <p><i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp;Import and export customs clearance (air and ocean).</p>
                <p><i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp;Technical assistance in valuation procedures.</p>
                <p><i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp;Filing and cancellation of bonds.</p>
                <p><i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp;Refund claims.</p>
            </div>
        </div>
    </section>
</main>
@endsection