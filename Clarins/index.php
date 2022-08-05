<?php
$page = "index";
include("header.php");
?>
<!-- Carousel Start -->
<div class="container-fluid p-0 mb-5 pb-5">
    <div id="header-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="img/natural2.jpg" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h4 class="text-white text-uppercase mb-md-3">SUSTAINABLE COMMITMENT</h4>
                        <h1 class="display-3 text-white mb-md-4">With A Wide Variety Of Products</h1>
                        <a href="product.php" class="btn btn-primary py-md-3 px-md-5 mt-2">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="img/natural.jpg" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h4 class="text-white text-uppercase mb-md-3">SUSTAINABLE COMMITMENT</h4>
                        <h1 class="display-3 text-white mb-md-4">Made From Natural Ingredients</h1>
                        <a href="product.php" class="btn btn-primary py-md-3 px-md-5 mt-2">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
            <div class="btn btn-secondary px-0" style="width: 45px; height: 45px;">
                <span class="carousel-control-prev-icon mb-n1"></span>
            </div>
        </a>
        <a class="carousel-control-next" href="#header-carousel" data-slide="next">
            <div class="btn btn-secondary px-0" style="width: 45px; height: 45px;">
                <span class="carousel-control-next-icon mb-n1"></span>
            </div>
        </a>
    </div>
</div>
<!-- Carousel End -->


<!-- About Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <h1 class="section-title position-relative text-center mb-5">Sustainable commitment to product quality</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 py-5">
                <h4 class="font-weight-bold mb-3">About Us</h4>
                <p>We are proud to bear the B Corp ™ certification, recognized as one of 3,000 businesses worldwide with the highest social and environmental standards, and that drives us to a commitment to sustainability. , starting with packaging from Community Trade Recycled Plastics.</p>
                <a href="about.php" class="btn btn-secondary mt-2">Learn More</a>
            </div>
            <div class="col-lg-4" style="min-height: 400px;">
                <div class="position-relative h-100 rounded overflow-hidden">
                    <img class="position-absolute w-100 h-100" src="img/picture.jpg" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-4 py-5">
                <h4 class="font-weight-bold mb-3">Our Features</h4>
                <p>This French brand was established in 1954, specializing in the production of high-class skin care products and makeup cosmetics, extracted mainly from plants.</p>
                <h5 class="text-muted mb-3"><i class="fa fa-check text-secondary mr-3"></i>healthy products</h5>
                <h5 class="text-muted mb-3"><i class="fa fa-check text-secondary mr-3"></i>clear ingredients</h5>
                <h5 class="text-muted mb-3"><i class="fa fa-check text-secondary mr-3"></i>high efficiency</h5>
                <a href="product.php" class="btn btn-primary mt-2">Learn More</a>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Promotion Start -->
<div class="container-fluid my-5 py-5 px-0">
    <div class="row bg-primary m-0">
        <div class="col-md-6 px-0" style="min-height: 500px;">
            <div class="position-relative h-100">
                <img class="position-absolute w-100 h-100" src="img/order.jpg" style="object-fit: cover;">
            </div>
        </div>
        <div class="col-md-6 py-5 py-md-0 px-0">
            <div class="h-100 d-flex flex-column align-items-center justify-content-center text-center p-5">
                <div class="d-flex align-items-center justify-content-center bg-white rounded-circle mb-4" style="width: 100px; height: 100px;">
                    <h3 class="font-weight-bold text-secondary mb-0">$199</h3>
                </div>
                <h3 class="font-weight-bold text-white mt-3 mb-4">"Love the texture"</h3>
                <p class="text-white mb-4">I started using this a month ago, and I have seen great results.
                    I love the texture of the serum and I love the fact that its very smooth and light.</p>
                <a href="prd_detail.php" class="btn btn-secondary py-3 px-5 mt-2">Order Now</a>
            </div>
        </div>
    </div>
</div>
<!-- Promotion End -->


<!-- Video Modal Start -->
<div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                16:9 aspect ratio
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="" id="video" allowscriptaccess="always" allow="autoplay"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Video Modal End -->

<!-- Testimonial Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <h1 class="section-title position-relative text-center mb-5">Customers' Feedback
                </h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="owl-carousel testimonial-carousel">
                    <div class="text-center">
                        <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                        <h4 class="font-weight-light mb-4">Dolor eirmod diam stet kasd sed. Aliqu rebum est eos.
                            Rebum elitr dolore et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet
                            eirmod eos labore diam</h4>
                        <img class="img-fluid mx-auto mb-3" src="img/testimonial-1.jpg" alt="">
                        <h5 class="font-weight-bold m-0">Client Name</h5>
                        <span>Profession</span>
                    </div>
                    <div class="text-center">
                        <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                        <h4 class="font-weight-light mb-4">Dolor eirmod diam stet kasd sed. Aliqu rebum est eos.
                            Rebum elitr dolore et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet
                            eirmod eos labore diam</h4>
                        <img class="img-fluid mx-auto mb-3" src="img/testimonial-2.jpg" alt="">
                        <h5 class="font-weight-bold m-0">Client Name</h5>
                        <span>Profession</span>
                    </div>
                    <div class="text-center">
                        <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                        <h4 class="font-weight-light mb-4">Dolor eirmod diam stet kasd sed. Aliqu rebum est eos.
                            Rebum elitr dolore et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet
                            eirmod eos labore diam</h4>
                        <img class="img-fluid mx-auto mb-3" src="img/testimonial-3.jpg" alt="">
                        <h5 class="font-weight-bold m-0">Client Name</h5>
                        <span>Profession</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->

<?php
include("footer.php");
?>