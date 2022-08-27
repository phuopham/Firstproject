<?php
require_once("dbconnect.php");
$page = "index";

include("header.php");
?>
<!-- Carousel Start -->
<div>
    <img src="img/bg.jpg" style="background-repeat: no-repeat;position: fixed;width: -webkit-fill-available; max-height: -webkit-fill-available;margin-top: -9%; height:200%;z-index:-1; ">
    <div style="background-color:rgb(0,0,0,0.6);">
        <div class="container-fluid p-0 mb-5 pb-5">
            <div id="header-carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="w-100" src="img/natural2.jpg" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 900px;">
                                <h4 class="text-white text-uppercase mb-md-3">SUSTAINABLE COMMITMENT</h4>
                                <h1 class="display-3 text-white mb-md-4">With A Wide Variety Of Products</h1>
                                <a href="gallery.php" class="btn btn-primary py-md-3 px-md-5 mt-2">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="w-100" src="img/natural.jpg" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 900px;">
                                <h4 class="text-white text-uppercase mb-md-3">SUSTAINABLE COMMITMENT</h4>
                                <h1 class="display-3 text-white mb-md-4">Made From Natural Ingredients</h1>
                                <a href="products.php" class="btn btn-primary py-md-3 px-md-5 mt-2">Learn More</a>
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

        <!-- discount -->
        <button type="button" class="btn btn-danger" onclick=(discount()) style="position: fixed;top: 50%;z-index: 5;margin-left: 20px;">
            EVENT!
        </button>

        <!-- About Start -->
        <div class="container-fluid py-5">
            <div class="container py-5">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <h1 class="section-title position-relative text-center mb-5 text-white">Sustainable commitment to product quality</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 py-5 text-white">
                        <h4 class="font-weight-bold mb-3 text-white">About Us</h4>
                        <p>We are proud to bear the B Corp ™ certification, recognized as one of 3,000 businesses worldwide with the highest social and environmental standards, and that drives us to a commitment to sustainability. , starting with packaging from Community Trade Recycled Plastics.</p>
                        <a href="about.php" class="btn btn-secondary mt-2">Learn More</a>
                    </div>
                    <div class="col-lg-4" style="min-height: 400px;">
                        <div class="position-relative h-100 rounded overflow-hidden">
                            <img class="position-absolute w-100 h-100" src="img/picture.jpg" style="object-fit: cover;">
                        </div>
                    </div>
                    <div class="col-lg-4 py-5 text-white">
                        <h4 class="font-weight-bold mb-3 text-white">Our Features</h4>
                        <p>This French brand was established in 1954, specializing in the production of high-class skin care products and makeup cosmetics, extracted mainly from plants.</p>
                        <h5 class="text-white mb-3"><i class="fa fa-check text-secondary mr-3"></i>healthy products</h5>
                        <h5 class="text-white mb-3"><i class="fa fa-check text-secondary mr-3"></i>clear ingredients</h5>
                        <h5 class="text-white mb-3"><i class="fa fa-check text-secondary mr-3"></i>high efficiency</h5>
                        <a href="products.php" class="btn btn-primary mt-2">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Promotion Start -->
        <?php
        $result = $conn->query("SELECT * from products order by sell_quantity desc limit 1");
        $best_sells = $result->fetch_all(MYSQLI_ASSOC);
        ?>
        <?php foreach ($best_sells as $id => $item) : ?>
            <div class="container-fluid my-5 py-5 px-0">
                <div class="row bg-primary m-0">
                    <div class="col-md-6 px-0" style="min-height: 500px;">
                        <div class="position-relative h-100">
                            <img class="position-absolute w-100 h-100" src="<?php echo ($item["pic1"]) ?>" style="object-fit: cover;">
                        </div>
                    </div>

                    <div class="col-md-6 py-5 py-md-0 px-0">
                        <div class="h-100 d-flex flex-column align-items-center justify-content-center text-center p-5">
                            <div class="d-flex align-items-center justify-content-center bg-white rounded-circle mb-4" style="width: 100px; height: 100px;">
                                <h3 class="font-weight-bold text-secondary mb-0">$<?php echo ($item["price"])  ?></h3>
                            </div>
                            <h3 class="font-weight-bold text-white mt-3 mb-4 text-white"><?php echo ($item['name']) ?></h3>
                            <p class="text-white mb-4 text-white"><?php echo ($item["description"])  ?></p>
                            <a href="detail.php?prod=<?php echo ($item['productID']) ?>" class="btn btn-secondary py-3 px-5 mt-2">Order Now</a>
                        </div>
                    </div>
                <?php endforeach ?>
                </div>
            </div>
            <!-- Promotion End -->

            <!-- Testimonial Start -->
            <div class="container-fluid py-5">
                <div class="container py-5">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <h1 class="section-title position-relative text-center mb-5 text-white">Customers' Feedback
                            </h1>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="owl-carousel testimonial-carousel">
                                <div class="text-center">
                                    <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                                    <h4 class="font-weight-light mb-4 text-white">The face wash arrived quickly, was well-packaged, and seems to
                                        work wonders. It doesn't leave my face feeling oily or stripped. Some face washes leave a weird residue
                                        behind but not this one!</h4>
                                    <img class="img-fluid mx-auto mb-3" src="img/ngan.jpg" alt="">
                                    <h5 class="font-weight-bold m-0 text-primary">Ngan</h5>
                                </div>
                                <div class="text-center">
                                    <i class="fa fa-3x fa-quote-left text-primary mb-4 text-white"></i>
                                    <h4 class="font-weight-light mb-4 text-white">Always great and a pleasure to do business with this company.
                                        Cream is excellent. I have been using it for years. Thanks.</h4>
                                    <img class="img-fluid mx-auto mb-3" src="img/ngan5.jpg" alt="">
                                    <h5 class="font-weight-bold m-0 text-primary">Anna</h5>
                                </div>
                                <div class="text-center">
                                    <i class="fa fa-3x fa-quote-left text-primary mb-4 text-white"></i>
                                    <h4 class="font-weight-light mb-4 text-white">Love the smell!! Fantastic products! Great present for my other
                                        half who loved them also, will definitely be buying again :-) love the little bag they come in with nice
                                        printed lining! Just fantastic! Thank you!</h4>
                                    <img class="img-fluid mx-auto mb-3" src="img/ngan1.jpg" alt="">
                                    <h5 class="font-weight-bold m-0 text-primary">Giang</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Testimonial End -->
    </div>
</div>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    const sabootstrap = Swal.mixin({
        width: '70vw',
        showConfirmButton: false,
        showCloseButton: true,
        closeButtonHtml: '&times;'
    })
    sabootstrap.fire({
        imageUrl: 'img/contact.jpg',
        imageWidth: '90%',
        imageHeight: 'auto',
        imageAlt: 'Custom image'
    })

    function discount() {
        sabootstrap.fire({
            imageUrl: 'img/contact.jpg',
            imageWidth: '90%',
            imageHeight: 'auto',
            imageAlt: 'Custom image'
        })
    }
</script>
<?php
include("footer.php");
?>