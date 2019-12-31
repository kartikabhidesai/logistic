@extends('frontend.layout.app')
@section('content')

<main id="main">
    <!-- main slider of the page -->
    <section class="main-slider slider3">
        <!-- slide of the page -->
        <div class="slide bg-full overlay" style="background-image: url({{ asset('public/frontend/images/about_us.jpg')}})">
            <div class="holder text-center">
                <h2 class="heading text-uppercase">ABOUT US</h2>
            </div>
        </div>
        <!-- slide of the page end -->
    </section>

    <nav class="breadcrumbs text-center text-uppercase">
        <ul class="list-unstyled">
            <li><a href="{{route('home')}}">Home</a></li>
            <li>/</li>
            <li>ABOUT US</li>
        </ul>
    </nav>
    <!-- breadcrumbs of the page end -->
    <!-- abt detail of the page -->
    <section class="abt-detail container">
        <div class="row">
            <div class="col-xs-12">
                <h2 class="text-uppercase text-center">WHO WE ARE</h2>
                <div class="video-holder">
                    <img src="{{ asset('public/frontend/images/img44.jpg')}}" alt="image description" class="img-responsive">
                    <a href="http://www.youtube.com/embed/9bZkp7q19f0?autoplay=1" class="play-icon text-center round lightbox fancybox.iframe"><i class="ti-control-play"></i></a>
                </div>
            </div>
        </div>
        <div class="row mar display-flex">
            <div class="col-xs-12 col-sm-8 col-md-6">
                <strong class="sub-title">Aorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, </strong>
                <p>quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
                <p style="font-style: italic;">“ Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, et dolore magnam aliquam quaerat voluptatem. ”</p>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-6">
                <div class="img-holder text-center"><img src="{{ asset('public/frontend/images/icon09.jpg')}}" alt="image description" class="img-responsive"></div>
            </div>
        </div>
        <div class="row display-flex">
            <div class="col-xs-12 col-sm-4 col-md-6">
                <div class="img-holder text-center"><img src="{{ asset('public/frontend/images/icon10.jpg')}}" alt="image description" class="img-responsive"></div>
            </div>
            <div class="col-xs-12 col-sm-8 col-md-6">
                <p>Morem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
            </div>
        </div>
    </section>
    <!-- abt detail of the page end -->
    <!-- call to action of the page -->
    <section class="call-to-action style3">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-9">
                    <h2 class="heading">Not sure which solution fits you business needs? Get your shipping quote now</h2>
                </div>
                <div class="col-xs-12 col-sm-3">
                    <a href="#" class="btn-primary text-center text-uppercase md-round">Contact us</a>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection