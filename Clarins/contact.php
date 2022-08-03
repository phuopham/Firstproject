<?php
$page = "contact";
include("header.php");
?>
<!-- Our store start -->
<section>
    <div class="container-fluid footer bg-light py-5" style="margin-top: 30px;">
        <div class="container text-center py-5">
            <div>
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <h1 class="section-title position-relative text-center mb-5">Our Store</h1>
                    </div>
                </div>
                <div style="display:flex; flex-wrap:wrap;">
                    <div class="col-4">
                        <div class="text-center text-sm-left border-right mb-3 mb-sm-5">
                            <h5 class="font-weight-bold mb-3">Get In Touch</h5>
                            <h5 class=" mb-3">Visit one of our agency locations or contact us today</h5>
                        </div>
                        <div class="text-center text-sm-left">
                            <h5 class="font-weight-bold mb-3">Our Store</h5>
                            <p class="mb-2">
                                <i class="fas fa-map-marker-alt"></i>
                                285 Doi Can, Ba Dinh, Ha Noi, Viet Nam
                            </p>
                            <p class="mb-0">
                                <i class="fas fa-phone"></i>
                                +012 345 67890
                            </p>
                            <p class="mb-2">
                                <i class="fas fa-clock"></i>
                                Mon – Sat, 8AM – 5PM
                            </p>
                            <p class="mb-0">Sunday: Closed</p>
                        </div>
                    </div>
                    <div class="col-8 text-center text-sm-right">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.924278651594!2d105.81684051396614!3d21.035715592918905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab145bf89bd7%3A0xd94a869b494c04b6!2zMjg1IMSQ4buZaSBD4bqlbiwgVsSpbmggUGjDuiwgQmEgxJDDrG5oLCBIw6AgTuG7mWkgMTAwMDAwLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1653971874345!5m2!1svi!2s" style="border: 0;max-width: 100%;border: 0;width: -webkit-fill-available;height: 100%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Our Store end -->

<!-- Contact start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <h1 class="section-title position-relative text-center mb-5">Contact Us For Any Query</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="contact-form bg-light rounded p-5">
                    <div id="success"></div>
                    <form name="sentMessage" id="contactForm" novalidate="novalidate">
                        <div class="form-row">
                            <div class="col-sm-6 control-group">
                                <input type="text" class="form-control p-4" id="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="col-sm-6 control-group">
                                <input type="email" class="form-control p-4" id="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control p-4" id="subject" placeholder="Subject" required="required" data-validation-required-message="Please enter a subject" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <textarea class="form-control p-4" rows="6" id="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div>
                            <button class="btn btn-primary btn-block py-3 px-5" type="submit" id="sendMessageButton">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->

<?php
include('footer.php');
?>