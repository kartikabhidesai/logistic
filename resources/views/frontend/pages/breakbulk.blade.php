@extends('frontend.layout.app')
@section('content')

<main id="main">
    <!-- main slider of the page -->
    <section class="main-slider slider3">
        <!-- slide of the page -->
        <div class="slide bg-full overlay" style="background-image: url({{ asset('public/frontend/images/break_bulk.jpg')}})">
            <div class="holder text-center">
                <h2 class="heading text-uppercase">BREAK BULK</h2>
            </div>
        </div>
        <!-- slide of the page end -->
    </section>

    <nav class="breadcrumbs text-center text-uppercase">
        <ul class="list-unstyled">
            <li><a href="{{route('home')}}">Home</a></li>
            <li>/</li>
            <li>BREAK BULK</li>
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
                <h1 style="font-family: serif ">BREAK BULK</h1>
                <div class="img-holder">
                    <img style="height: 400px;width: 770px;" src="{{  url('public/frontend/images/break_bulk_in.jpg') }}" alt="image description" class="img-responsive">
                </div>
                <h2>Leo Global Logistic direct contact with ship owners and cargo, we do work very closely with many associated brokers in fixing cargoes and vessels. With our shipping background and years of experience out team is able to provide ideal match between cargo and right kind of vessel.</h2>
                <p><i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp;Our experts deliver tailor-made solutions ensuring a safe and secure handling of the cargo.</p>
                <p><i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp;Our team is focused on loss and claim prevention, enabling a safe and smooth delivery.</p>
                <p><i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp;Load, lash and secure the cargo at your origin port or nearby depot.</p>
                <p><i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp;Inland collection and deliveries using variety of equipment.</p>
            </div>
        </div>
    </section>
</main>
@endsection