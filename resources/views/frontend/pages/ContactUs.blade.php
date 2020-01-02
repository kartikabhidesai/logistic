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
                <form id="contactus" method="post" name="contactus" class="contact-form">@csrf
                    <fieldset>
                        <div class="form-group">
                            <div class="col">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Your Name">
                            </div>
                            <div class="col">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Your Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col">
                                <input type="text" class="form-control" id="company" name="company" placeholder="Your Company Name">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Your Mobile">
                            </div>
                        </div>
                        <textarea class="form-control" id="msg" name="msg" placeholder="Your Message"></textarea>
                        <button type="submit" class="btn-primary text-uppercase text-center md-round">Send us</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </section>
    <!-- contact sec of the page end -->
    <!-- map sec of the page -->
    <section class="">
        <div class="" >
            <div class="">
                <iframe style="width: 100%;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3672.3279247881283!2d72.521100014442!3d23.011728822509056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e85d10985e8e9%3A0x414d09be4caf2ec9!2sTitanium%20City%20Center%20(A%20To%20H%20Block)!5e0!3m2!1sen!2sin!4v1577785861176!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
        </div>
    </section>
    <!-- map sec of the page end -->
</main>
@endsection