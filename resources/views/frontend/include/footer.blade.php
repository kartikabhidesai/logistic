<!-- main container of all the page elements end -->
<a id="newsletter-hiddenlink" href="#popup1" class="lightbox" style="display: none;">Newsletter</a>
<!-- popup-holder of the page start here -->
<div class="popup-holder">
    <div id="popup1" class="lightbox">
        <!-- newsletter-block of the page start here -->
        <div class="newsletter-block bg-full" style="background-image: url({{ asset('public/frontend/images/img42.jpg')}})">
            <div class="holder text-center">
                <h2 class="main-heading text-uppercase">Subscribe</h2>
                <p>Subscribe to our mailing list to get the updates to your email inbox.</p>
            </div>
            <div class="bg-light block">
                <form action="#" class="newsletter-form">
                    <fieldset>
                        <input type="email" class="form-control" placeholder="your email here">
                        <button type="submit"><i class="fa fa-paper-plane-o"></i></button>
                    </fieldset>
                </form>
            </div>
        </div>
        <!-- newsletter-block of the page end here -->
    </div>
</div>
<!-- popup-holder of the page end here -->
<!-- include jQuery -->
<script src="{{ asset('public/frontend/js/jquery.js') }}"></script>
<!-- include jQuery -->
<script src="{{ asset('public/frontend/js/plugins.js') }}"></script>
<!-- include jQuery -->
<script src="{{ asset('public/frontend/js/jquery.main.js') }}"></script>