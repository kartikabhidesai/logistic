<!-- header of the page -->
<div id="navbar" class="navbar navbar-light bg-light">
    <header id="header" >
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <!-- Top header of the page -->
                    <div class="top-header">
                        <!-- Align left of the page -->
                        <ul class="list-unstyled align-left">
                            <li>
                                <a href="#">Languages <i class="fa fa-angle-down"></i></a>
                                <ul class="list-unstyled drop-down">
                                    <li><a href="#">English</a></li>
                                    <li><a href="#">dutch</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Global Site <i class="fa fa-angle-down"></i></a>
                                <ul class="list-unstyled drop-down">
                                    <li><a href="#">Global Site</a></li>
                                    <li><a href="#">Global Site</a></li>
                                </ul>
                            </li>
                        </ul>
                        <!-- Align left of the page end -->
                        <!-- Socail network of the page -->
                        <ul class="list-unstyled socail-network">
                            <li><a href="#"><i class="social_facebook"></i></a></li>
                            <li><a href="#"><i class="social_googleplus"></i></a></li>
                            <li><a href="#"><i class="social_twitter"></i></a></li>
                            <li><a href="#"><i class="social_linkedin"></i></a></li>
                            <li><a href="#"><i class="social_pinterest"></i></a></li>
                        </ul>
                        <!-- Socail network of the page end -->
                    </div>
                    <!-- Top header of the page end -->
                </div>
            </div>
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
                        <ul class="list-unstyled">
                            <li class="active">
                                <a href="#">Home</a>
                                <ul class="list-unstyled drop-down">
                                    <li><a href="home.html">Homepage 1</a></li>
                                    <li><a href="home2.html">Homepage 2</a></li>
                                    <li><a href="home3.html">Homepage 3</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">SERVICES</a>
                                <ul class="list-unstyled drop-down">
                                    <li><a href="service.html">Services</a></li>
                                    <li><a href="service-detail.html">Services detail</a></li>
                                </ul>
                            </li>
                            <li><a href="{{route('AboutUs')}}">ABOUTS US</a></li>
                            <li>
                                <a href="#">PAGES</a>
                                <ul class="list-unstyled drop-down">
                                    <li><a href="404page.html">404 Page</a></li>
                                    <li><a href="faq.html">Faq</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">NEWS</a>
                                <ul class="list-unstyled drop-down">
                                    <li><a href="blog.html">News</a></li>
                                    <li><a href="blog-detail.html">News detail</a></li>
                                </ul>
                            </li>
                            <li><a href="{{route('ContactUs')}}">CONTACT</a></li>
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