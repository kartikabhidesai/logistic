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
                        <address>Plot No.2260/11, <br>Daxinamurti Society-1,<br>Near Fulwadi Chowk, Hilldrive,<br> Bhavanagar-364001</address>
                    </li>
                    <li>
                        <span class="icon ti-headphone-alt"></span>
                        <span class="tel">
                            <a href="tel:9925395959">+91 9925 39 59 59</a>
                            <a href="tel:9925405959">+91 9925 40 59 59</a>
                        </span>
                    </li>
                    <li>
                        <span class="icon ti-email"></span>
                        <span class="mail">
                             <a href="mailto:info@nam-logistics.com">leo.global88@gmail.com</a>
                            <a href="mailto:office@nam-logistics.com">exim.india890@gmail.com</a>
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
                <iframe style="width: 100%;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3705.447541324094!2d72.15812061441974!3d21.762933467686114!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395f5a666d3ae61d%3A0x503adb49fea74f9c!2sDakshinamurti%20Society!5e0!3m2!1sen!2sin!4v1577974766502!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
    </section>
    <!-- map sec of the page end -->
</main>
@endsection