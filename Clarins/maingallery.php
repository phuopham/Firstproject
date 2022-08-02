<?php
include("header.php");
?>
<!-- Portfolio Start -->
<div class="container-fluid py-5 px-0">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <h1 class="section-title position-relative text-center mb-5">Best Selling Products For Beauty Lovers</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <ul class="list-inline mb-4 pb-2" id="portfolio-flters">
                    <li class="btn btn-sm btn-outline-primary m-1 active" data-filter="*">All</li>
                    <li class="btn btn-sm btn-outline-primary m-1" data-filter=".first">Cleanser</li>
                    <li class="btn btn-sm btn-outline-primary m-1" data-filter=".second">Lipstick</li>
                    <li class="btn btn-sm btn-outline-primary m-1" data-filter=".third">Perfume</li>
                    <li class="btn btn-sm btn-outline-primary m-1" data-filter=".fourth">Powder</li>
                    <li class="btn btn-sm btn-outline-primary m-1" data-filter=".fifth">Eyeliner</li>
                    <li class="btn btn-sm btn-outline-primary m-1" data-filter=".sixth">Remover</li>
                </ul>
            </div>
        </div>

        <div class="row m-0 portfolio-container">
            <div class="col-lg-4 col-md-6 p-0 portfolio-item second">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="img/gallery1.jpg" alt="">
                    <a class="portfolio-btn" href="img/gallery1.jpg" data-lightbox="portfolio">
                        <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 p-0 portfolio-item third">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="img/gallery2.png" alt="">
                    <a class="portfolio-btn" href="img/gallery2.png" data-lightbox="portfolio">
                        <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 p-0 portfolio-item fifth">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="img/gallery3.webp" alt="">
                    <a class="portfolio-btn" href="img/gallery3.webp" data-lightbox="portfolio">
                        <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 p-0 portfolio-item first">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="img/gallery4.jpg" alt="">
                    <a class="portfolio-btn" href="img/gallery4.jpg" data-lightbox="portfolio">
                        <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 p-0 portfolio-item fourth">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="img/gallery5.webp" alt="">
                    <a class="portfolio-btn" href="img/gallery5.webp" data-lightbox="portfolio">
                        <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 p-0 portfolio-item sixth">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="img/gallery6.webp" alt="">
                    <a class="portfolio-btn" href="img/gallery6.webp" data-lightbox="portfolio">
                        <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Portfolio End -->

<?php
include("footer.php");
?>