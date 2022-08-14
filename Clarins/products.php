<?php
require_once("dbconnect.php");
// top product sold
$sql = "SELECT * FROM products ORDER BY sell_quantity DESC LIMIT 5";
$result = $conn->query($sql);
$topsells = $result->fetch_all(MYSQLI_ASSOC);
$page = "product";
include("header.php");
?>

<div>
    <img src="img/bg2.jpg" style="background-repeat: no-repeat;position: fixed;width: -webkit-fill-available; max-height: -webkit-fill-available;margin-top: -9%; height:200%;z-index:-1; ">
    <div style="background-color:rgb(0,0,0,0.6);">   
        <!-- Products Start -->
        <div class="container-fluid py-5 px-0" style="margin-top:-5%;">
            <div class="container pt-5">
                <div class="row justify-content-center">
                    <div class="col-lg-5 pt-5">
                        <h1 class="section-title position-relative text-center mb-5 text-white">EVENTS DISCOUNT!!!</h1>
                    </div>
                </div>
                <div class="row portfolio-container">
                    <div class="col-lg-3 col-md-6 mb-4 pb-2 portfolio-item second">
                        <div class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-3">
                            <div class="bg-primary mt-n5 py-3" style="width: 80px;">
                                <h4 class="font-weight-bold text-white mb-0">$99</h4>
                            </div>
                            <div class="position-relative bg-primary rounded-circle mt-n3 mb-4 p-3" style="width: 150px; height: 150px;">
                                <img class="rounded-circle w-100 h-100" src="img/product-1.jpg" style="object-fit: cover;">
                            </div>
                            <h5 class="font-weight-bold mb-4">Vanilla Ice Cream</h5>
                            <a href="prd_detail.php" class="btn btn-sm btn-secondary">Order Now</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4 pb-2 portfolio-item third">
                        <div class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-3">
                            <div class="bg-primary mt-n5 py-3" style="width: 80px;">
                                <h4 class="font-weight-bold text-white mb-0">$99</h4>
                            </div>
                            <div class="position-relative bg-primary rounded-circle mt-n3 mb-4 p-3" style="width: 150px; height: 150px;">
                                <img class="rounded-circle w-100 h-100" src="img/product-1.jpg" style="object-fit: cover;">
                            </div>
                            <h5 class="font-weight-bold mb-4">Vanilla Ice Cream</h5>
                            <a href="prd_detail.php" class="btn btn-sm btn-secondary">Order Now</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4 pb-2 portfolio-item fourth">
                        <div class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-3">
                            <div class="bg-primary mt-n5 py-3" style="width: 80px;">
                                <h4 class="font-weight-bold text-white mb-0">$99</h4>
                            </div>
                            <div class="position-relative bg-primary rounded-circle mt-n3 mb-4 p-3" style="width: 150px; height: 150px;">
                                <img class="rounded-circle w-100 h-100" src="img/product-1.jpg" style="object-fit: cover;">
                            </div>
                            <h5 class="font-weight-bold mb-4">Vanilla Ice Cream</h5>
                            <a href="prd_detail.php" class="btn btn-sm btn-secondary">Order Now</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4 pb-2 portfolio-item first">
                        <div class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-3">
                            <div class="bg-primary mt-n5 py-3" style="width: 80px;">
                                <h4 class="font-weight-bold text-white mb-0">$99</h4>
                            </div>
                            <div class="position-relative bg-primary rounded-circle mt-n3 mb-4 p-3" style="width: 150px; height: 150px;">
                                <img class="rounded-circle w-100 h-100" src="img/product-1.jpg" style="object-fit: cover;">
                            </div>
                            <h5 class="font-weight-bold mb-4 ">Vanilla Ice Cream</h5>
                            <a href="prd_detail.php" class="btn btn-sm btn-secondary">Order Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Products Start -->
        <!-- Top sell Start -->
        <div class="container-fluid py-5" >
            <div class="container py-5">
                <div class="row">
                    <div class="col-lg-6">
                        <h1 class="section-title position-relative mb-5 mt-5 text-white">Our best sell products</h1>
                    </div>
                    <div class="col-lg-6 mb-5 mb-lg-0 pb-5 pb-lg-0"></div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="owl-carousel service-carousel">
                            <?php
                            foreach ($topsells as $id => $item) {
                                echo ('<div class="service-item"><div class="service-img mx-auto">');
                                echo ('<img class="rounded-circle w-100 h-100 bg-light p-3" src="' . $item["pic1"] . '" style="object-fit: cover;"></div>');
                                echo ('<div class="position-relative text-center bg-light rounded p-4 pb-5" style="margin-top: -75px;">');
                                echo ('<h5 class="font-weight-semi-bold mt-5 mb-3 pt-5">' . $item["name"] . '</h5>');
                                echo ('<p>' . substr($item["description"], 0, 100) . '</p>');
                                echo ('<a href="detail.php?prod=' . $item["productID"] . '" class="btn btn-primary">Buy now</a>');
                                echo ('</div></div>');
                            }
                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Top sell End -->

        <!-- Products Start -->
        <div class="container-fluid py-5 px-0">
            <div class="container py-5">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <h1 class="section-title position-relative text-center mb-5 text-white">All products</h1>
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
                <div class="row portfolio-container">
                    <div class="col-lg-3 col-md-6 mb-4 pb-2 portfolio-item second">
                        <div class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-3">
                            <div class="bg-primary mt-n5 py-3" style="width: 80px;">
                                <h4 class="font-weight-bold text-white mb-0">$99</h4>
                            </div>
                            <div class="position-relative bg-primary rounded-circle mt-n3 mb-4 p-3" style="width: 150px; height: 150px;">
                                <img class="rounded-circle w-100 h-100" src="img/product-1.jpg" style="object-fit: cover;">
                            </div>
                            <h5 class="font-weight-bold mb-4">Vanilla Ice Cream</h5>
                            <a href="prd_detail.php" class="btn btn-sm btn-secondary">Order Now</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4 pb-2 portfolio-item third">
                        <div class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-3">
                            <div class="bg-primary mt-n5 py-3" style="width: 80px;">
                                <h4 class="font-weight-bold text-white mb-0">$99</h4>
                            </div>
                            <div class="position-relative bg-primary rounded-circle mt-n3 mb-4 p-3" style="width: 150px; height: 150px;">
                                <img class="rounded-circle w-100 h-100" src="img/product-1.jpg" style="object-fit: cover;">
                            </div>
                            <h5 class="font-weight-bold mb-4">Vanilla Ice Cream</h5>
                            <a href="prd_detail.php" class="btn btn-sm btn-secondary">Order Now</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4 pb-2 portfolio-item fourth">
                        <div class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-3">
                            <div class="bg-primary mt-n5 py-3" style="width: 80px;">
                                <h4 class="font-weight-bold text-white mb-0">$99</h4>
                            </div>
                            <div class="position-relative bg-primary rounded-circle mt-n3 mb-4 p-3" style="width: 150px; height: 150px;">
                                <img class="rounded-circle w-100 h-100" src="img/product-1.jpg" style="object-fit: cover;">
                            </div>
                            <h5 class="font-weight-bold mb-4">Vanilla Ice Cream</h5>
                            <a href="prd_detail.php" class="btn btn-sm btn-secondary">Order Now</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4 pb-2 portfolio-item first">
                        <div class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-3">
                            <div class="bg-primary mt-n5 py-3" style="width: 80px;">
                                <h4 class="font-weight-bold text-white mb-0">$99</h4>
                            </div>
                            <div class="position-relative bg-primary rounded-circle mt-n3 mb-4 p-3" style="width: 150px; height: 150px;">
                                <img class="rounded-circle w-100 h-100" src="img/product-1.jpg" style="object-fit: cover;">
                            </div>
                            <h5 class="font-weight-bold mb-4 ">Vanilla Ice Cream</h5>
                            <a href="prd_detail.php" class="btn btn-sm btn-secondary">Order Now</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4 pb-2 portfolio-item sixth">
                        <div class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-3">
                            <div class="bg-primary mt-n5 py-3" style="width: 80px;">
                                <h4 class="font-weight-bold text-white mb-0">$99</h4>
                            </div>
                            <div class="position-relative bg-primary rounded-circle mt-n3 mb-4 p-3" style="width: 150px; height: 150px;">
                                <img class="rounded-circle w-100 h-100" src="img/product-1.jpg" style="object-fit: cover;">
                            </div>
                            <h5 class="font-weight-bold mb-4">Vanilla Ice Cream</h5>
                            <a href="prd_detail.php" class="btn btn-sm btn-secondary">Order Now</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4 pb-2 portfolio-item second">
                        <div class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-3">
                            <div class="bg-primary mt-n5 py-3" style="width: 80px;">
                                <h4 class="font-weight-bold text-white mb-0">$99</h4>
                            </div>
                            <div class="position-relative bg-primary rounded-circle mt-n3 mb-4 p-3" style="width: 150px; height: 150px;">
                                <img class="rounded-circle w-100 h-100" src="img/product-1.jpg" style="object-fit: cover;">
                            </div>
                            <h5 class="font-weight-bold mb-4">Vanilla Ice Cream</h5>
                            <a href="prd_detail.php" class="btn btn-sm btn-secondary">Order Now</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4 pb-2 portfolio-item third">
                        <div class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-3">
                            <div class="bg-primary mt-n5 py-3" style="width: 80px;">
                                <h4 class="font-weight-bold text-white mb-0">$99</h4>
                            </div>
                            <div class="position-relative bg-primary rounded-circle mt-n3 mb-4 p-3" style="width: 150px; height: 150px;">
                                <img class="rounded-circle w-100 h-100" src="img/product-1.jpg" style="object-fit: cover;">
                            </div>
                            <h5 class="font-weight-bold mb-4">Vanilla Ice Cream</h5>
                            <a href="prd_detail.php" class="btn btn-sm btn-secondary">Order Now</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4 pb-2 portfolio-item second">
                        <div class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-3">
                            <div class="bg-primary mt-n5 py-3" style="width: 80px;">
                                <h4 class="font-weight-bold text-white mb-0">$99</h4>
                            </div>
                            <div class="position-relative bg-primary rounded-circle mt-n3 mb-4 p-3" style="width: 150px; height: 150px;">
                                <img class="rounded-circle w-100 h-100" src="img/product-1.jpg" style="object-fit: cover;">
                            </div>
                            <h5 class="font-weight-bold mb-4">Vanilla Ice Cream</h5>
                            <a href="prd_detail.php" class="btn btn-sm btn-secondary">Order Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Products Start -->
    </div>
</div>

<?php
include("footer.php");
?>