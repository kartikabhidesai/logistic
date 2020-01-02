@extends('frontend.layout.app')
@section('content')

<main id="main">
    <!-- main slider of the page -->
    <section class="main-slider slider3">
        <!-- slide of the page -->
        <div class="slide bg-full overlay" style="background-image: url({{ asset('public/frontend/images/img11.jpg')}})">
            <div class="holder text-center">
                <h2 class="heading text-uppercase">3PL</h2>
            </div>
        </div>
        <!-- slide of the page end -->
    </section>

    <nav class="breadcrumbs text-center text-uppercase">
        <ul class="list-unstyled">
            <li><a href="{{route('home')}}">Home</a></li>
            <li>/</li>
            <li>3PL</li>
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
                <h1 style="font-family: serif ">3PL</h1>
                <div class="img-holder">
                    <img style="height: 400px;width: 770px;" src="{{  url('public/frontend/images/3pl_in.png') }}" alt="image description" class="img-responsive">
                </div>
                <h2>Leo Global Logistic AS Third party logistics providers typically specialize in integrated operation, warehousing and transportation services which can be scaled and customized to customer, companies and client's, needs based on market conditions, such as the demands and delivery service requirements for their products and materials. Leo Global Logistic provides supply chain solutions that deliver the greatest return on investment for your products.</h2>
                <p><i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp;Product packaging, postponement and kitting and assembly combined with distribution operations.</p>
                <p><i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp;Warehouse design and management and distribution services in both dedicated and shared, multi-customer environments.</p>
                <p><i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp;Complete managed transportation services, as well as parcel, supply chain engineering and freight solutions.</p>
                <p><i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp;Management of the reverse flow of product, information and cash, including value-added services such as test, repair and refurbishment; product recall management; and recycling services.</p>
            </div>
        </div>
    </section>
</main>
@endsection