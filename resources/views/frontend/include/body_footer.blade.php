<!-- footer of the page -->
<footer id="footer" class="bg-full" style="background-image: url({{ asset('public/frontend/images/img13.jpg') }} )">
    <!-- footer holder of the page -->
    <div class="footer-holder container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-3">
                <img src="{{ asset('public/frontend/images/logo/logo.png')}}" alt="logo" style="hight: 300px; width: 250px;padding-top: 50px;padding-bottom: 25px"</a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <h3>About us</h3>
                <p>Leo Global Logistics providers face a highly competitive marketplace where success depends on being cost-competitive while accommodating rapidly changing customer demands. On-boarding new customers quickly and successfully requires teamwork from all areas of your company, industries and place.</p>
                <!-- Socail network of the page -->
<!--                <ul class="list-unstyled socail-network">
                    <li><a href="#"><i class="social_facebook"></i></a></li>
                    <li><a href="#"><i class="social_googleplus"></i></a></li>
                    <li><a href="#"><i class="social_twitter"></i></a></li>
                    <li><a href="#"><i class="social_linkedin"></i></a></li>
                    <li><a href="#"><i class="social_pinterest"></i></a></li>
                </ul>-->
                <!-- Socail network of the page end -->
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <h3 class="mar">Our Services</h3>
                <!-- f nav of the page -->
                <ul class="list-unstyled f-nav">
                    <li><a href="{{ route('international') }}">International Freight Forwarding</a></li>
                    <li><a href="{{ route('shipment') }}">LCL / FCL Shipment</a></li>
                    <li><a href="{{ route('break-bulk') }}">Break Bulk</a></li>
                    <li><a href="{{ route('air-cargo') }}">Air Cargo</a></li>
                    <li><a href="{{ route('3pl') }}">3PL</a></li>
                    <li><a href="{{ route('project-cargo') }}">Project Cargo</a></li>
                    <li><a href="{{ route('chartering') }}">Chartering</a></li>
                    <li><a href="{{ route('custom-clearance') }}">Custom Clearance</a></li>
                </ul>
                <!-- f nav of the page end -->
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <h3>Contact Us</h3>
                <!-- contact list of the page -->
                <ul class="list-unstyled contactlist">
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
                            <a href="mailto:info@nam-logistics.com">info@nam-logistics.com</a>
                            <a href="mailto:office@nam-logistics.com">office@nam-logistics.com</a>
                        </span>
                    </li>
                </ul>
                <!-- contact list of the page end -->
            </div>
        
        </div>
    </div>
    <!-- footer area of the page -->
    <div class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <p>Copyrights © {{ date('Y') }} Leo Global Logistic. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer of the page end -->