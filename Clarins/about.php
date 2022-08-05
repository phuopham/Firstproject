<?php
include("header.php");
?>

<!-- About Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <h1 class="section-title position-relative text-center mb-5">Established History</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 py-5">
                <p> <?php echo ($about_paragraph1); ?>
                </p>
            </div>
            <div class="col-lg-4" style="min-height: 400px;">
                <div class="position-relative h-100 rounded overflow-hidden">
                    <img class="position-absolute w-100 h-100" src="img/order.jpg" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-4 py-5">
                <p>The first US subsidiary was founded in January 1981. But first established in 1987 as Clarins sunscreen, this was really the company's start.
                    At the end of 2005, the group had 19 subsidiaries distributed in more than 150 countries. Serge Rosinoer, who died in 2014, is noted as an international developer.
                    Virginie Courtin-Clarins, Claire Courtin-Clarins, Prisca Courtin-Clarins and Jenna Courtin-Clarins act as brand ambassadors.</p>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

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

<!-- Promotion Start -->
<div class="container-fluid my-5 py-5 px-0">
    <div class="row bg-primary m-0">
        <div class="col-md-6 px-0" style="min-height: 500px;">
            <div class="position-relative h-100">
                <img class="position-absolute w-100 h-100" src="img/aboutus.jpg" style="object-fit: cover;">
            </div>
        </div>
        <div class="col-md-6 py-5 py-md-0 px-0">
            <div class="h-100 d-flex flex-column align-items-center justify-content-center text-center p-5">
                <h3 class="font-weight-bold text-white mt-3 mb-4">ABOUT CLARINS</h3>
                <p class="text-white mb-4">Clarins is a popular makeup and skincare brand. Featured over and over again in huge publications like Forbes, Vogue, Yahoo, Glamour, Bustle, and more, it’s safe to say that the brand is internationally successful.
                    This Clarins review will show you some highlights of the shopping experience, discuss some bestsellers, customer feedback, and answers to FAQs, all in the hopes of helping you decide if this brand fits your vibe.</p>
            </div>
        </div>
    </div>
</div>
<!-- Promotion End -->

<?php
include('footer.php');
?>