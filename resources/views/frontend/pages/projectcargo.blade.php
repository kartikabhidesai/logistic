@extends('frontend.layout.app')
@section('content')

<main id="main">
    <!-- main slider of the page -->
    <section class="main-slider slider3">
        <!-- slide of the page -->
        <div class="slide bg-full overlay" style="background-image: url({{ asset('public/frontend/images/project_cargo.jpg')}})">
            <div class="holder text-center">
                <h2 class="heading text-uppercase">PROJECT CARGO</h2>
            </div>
        </div>
        <!-- slide of the page end -->
    </section>

    <nav class="breadcrumbs text-center text-uppercase">
        <ul class="list-unstyled">
            <li><a href="{{route('home')}}">Home</a></li>
            <li>/</li>
            <li>PROJECT CARGO</li>
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
                <h1 style="font-family: serif ">PROJECT CARGO</h1>
                <div class="img-holder">
                    <img style="height: 400px;width: 770px;" src="{{  url('public/frontend/images/project_cargo_in.jpg') }}" alt="image description" class="img-responsive">
                </div>
                <h2>Managing heavy lift projects requires special expertise, care and detailing. We have built a formidable reputation in Project Cargo Logistics and heavy lift shipments with our dedicated operations team who have a thorough understanding of handling cargo’s with ports, customs and transport agencies. </h2>
                <p><i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp;Site inspection and project planning</p>
                <p><i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp;Route surveys and selection of reliable carriers</p>
                <p><i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp;Customs clearance</p>
                <p><i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp;Final stage delivery with closing report</p>
            </div>
        </div>
    </section>
</main>
@endsection