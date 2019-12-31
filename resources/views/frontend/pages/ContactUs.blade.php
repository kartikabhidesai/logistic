@extends('frontend.layout.app')
@section('content')

<main id="main">
    <!-- main slider of the page -->
    <section class="main-slider slider3">
        <!-- slide of the page -->
        <div class="slide bg-full overlay" style="background-image: url({{ asset('public/frontend/images/contact_us.jpg')}})">
            <div class="holder text-center">
                <h2 class="heading text-uppercase">Contact</h2>
            </div>
        </div>
        <!-- slide of the page end -->
    </section>
    <!-- main slider of the page end -->
    <!-- breadcrumbs of the page -->
    <nav class="breadcrumbs text-center text-uppercase">
        <ul class="list-unstyled">
            <li><a href="{{route('home')}}">Home</a></li>
            <li>/</li>
            <li>Contact</li>
        </ul>
    </nav>
    <!-- breadcrumbs of the page end -->
    <!-- contact sec of the page -->
    <section class="content-sec container">
        <div class="row">
            <div class="col-xs-12 col-sm-4">
                <h3>Contact Info</h3>
                <!-- Contact list of the page -->
                <ul class="list-unstyled contact-list">
                    <li>
                        <span class="icon ti-map-alt"></span>
                        <address>31 Ven Ho Van Chuong Street, <br>Ha Noi City, Viet Nam</address>
                    </li>
                    <li>
                        <span class="icon ti-headphone-alt"></span>
                        <span class="tel">
                            <a href="tel:113493346823">1-1349-334-6823</a>
                            <a href="tel:282183347913">2-8218-334-7913</a>
                        </span>
                    </li>
                    <li>
                        <span class="icon ti-email"></span>
                        <span class="mail">
                            <a href="mailto:info@nam-logistics.com">&#105;&#110;&#102;&#111;&#064;&#110;&#097;&#109;&#045;&#108;&#111;&#103;&#105;&#115;&#116;&#105;&#099;&#115;&#046;&#099;&#111;&#109;</a>
                            <a href="mailto:office@nam-logistics.com">&#111;&#102;&#102;&#105;&#099;&#101;&#064;&#110;&#097;&#109;&#045;&#108;&#111;&#103;&#105;&#115;&#116;&#105;&#099;&#115;&#046;&#099;&#111;&#109;</a>
                        </span>
                    </li>
                </ul>
                <h3>Opening Hours</h3>
                <!-- Hour list of the page -->
                <ul class="list-unstyled hour-list">
                    <li>Our support  24 / 7</li>
                    <li>Monday – Friday: 9am-6pm</li>
                    <li>Saturday: 10am-4pm</li>
                    <li>Sunday: 10am-1pm</li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-8">
                <h3 class="marg">Get In Touch With Us</h3>
                <p>If you have any question, Please don’t hesitate to send us a message</p>
                <!-- Contact Form of the page -->
                <form action="#" class="contact-form">
                    <fieldset>
                        <div class="form-group">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Your Name">
                            </div>
                            <div class="col">
                                <input type="email" class="form-control" placeholder="Your Email">
                            </div>
                        </div>
                        <textarea class="form-control" placeholder="Your Message"></textarea>
                        <button type="submit" class="btn-primary text-uppercase text-center md-round">Send us</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </section>
    <!-- contact sec of the page end -->
    <!-- map sec of the page -->
    <section class="map-sec">
        <div class="map" data-lat="52.392363" data-lng="1.480408" data-zoom="8">
            <div class="map-info">
                <h2 class="text-uppercase">AMLOGISTICS</h2>
                <address>31 Ven Ho Van Chuong Street, <br>Ha Noi City, Viet Nam</address>
            </div>
        </div>
    </section>
    <!-- map sec of the page end -->
</main>
@endsection