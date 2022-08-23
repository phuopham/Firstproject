<?php
require_once("dbconnect.php");
//all product
$sql = "SELECT products.`productID`, products.`name`, products.`catalogID`, products.`description`, products.`brandID`, products.`sell_quantity`, products.`price`, products.`discount`, products.`pic1`, products.`pic2`, products.`pic3`, products.`pic4`, products.`create_by`, catalogs.category FROM `products` JOIN catalogs WHERE products.catalogID = catalogs.catalogID ORDER BY discount desc LIMIT 50;";
$result = $conn->query($sql);
$allproducts = $result->fetch_all(MYSQLI_ASSOC);
// //discount
// $sql="UPDATE products SET price= price-(price*(discount/100))";
$sql = "SELECT * FROM products where discount > 0 && discount < 100 ";
$result = $conn->query($sql);
$discounts = $result->fetch_all(MYSQLI_ASSOC);

//header
$page = "product";
include("header.php");
?>

<div>
    <img src="img/bg2.jpg" style="background-repeat: no-repeat;position: fixed;width: -webkit-fill-available; max-height: -webkit-fill-available;margin-top: -8%; height:200%;z-index:-1; ">
    <div style="background-color:rgb(0,0,0,0.6);">
        <!-- discount  -->
        <div class="container-fluid pt-5 px-0" style="margin-top:-5%;">
            <div class="container py-5 mt-5">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <h1 class="section-title position-relative text-center mb-5 text-white">EVENTS DISCOUNT!!!</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="owl-carousel team-carousel">
                            <?php foreach ($discounts as $id => $discount) :
                                $pricedc = $discount["price"] - ($discount["price"] * ($discount["discount"] / 100)); ?>
                                <div class="team-item">
                                    <div class="team-img mx-auto">
                                        <img class="rounded-circle w-100 h-100" src="<?php echo ($discount["pic1"]) ?>" style="object-fit: cover;">
                                    </div>
                                    <div class="position-relative text-center bg-light rounded px-4 py-5" style="margin-top: -100px;">
                                        <h3 class="font-weight-bold mt-5 mb-3 pt-5"><?php echo ($discount["name"]) ?></h3>
                                        <h3 class="font-weight-bold mb-3 text-primary">Only $<?php echo ($pricedc) ?> </h3>
                                        <h6 class="text-muted mb-4" style="height:3rem"><?php echo (substr($discount["description"], 0, 100)) ?></h6>
                                        <div class="d-flex justify-content-center pt-1">
                                            <a href="detail.php?prod=<?php echo ($discount["productID"]) ?>" class=" btn btn-sm btn-secondary" style="z-index:2;">Order Now</a>
                                        </div>
                                    </div>
                                </div>

                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- discount end -->

        <?php include("bestsells.php") ?>

        <!-- Products Start -->
        <div class="container-fluid py-5 px-0">
            <div class="container py-5">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <h1 class="section-title position-relative text-center mb-5 text-white">Top 50 products</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <ul class="list-inline mb-4 pb-2" id="portfolio-flters">
                            <li class="btn btn-sm btn-outline-primary m-1 active" data-filter="*">All</li>
                            <li class="btn btn-sm btn-outline-primary m-1" data-filter=".cat1">Hair</li>
                            <li class="btn btn-sm btn-outline-primary m-1" data-filter=".cat2">Makeup</li>
                            <li class="btn btn-sm btn-outline-primary m-1" data-filter=".cat3">Perfumes</li>
                            <li class="btn btn-sm btn-outline-primary m-1" data-filter=".cat4">Face</li>
                            <li class="btn btn-sm btn-outline-primary m-1" data-filter=".cat5">Body</li>
                            <li class="btn btn-sm btn-outline-primary m-1" data-filter=".cat6">Suncream</li>
                        </ul>
                    </div>
                </div>
                <div class="row portfolio-container">
                    <?php foreach ($allproducts as $id => $allproduct) {
                        $pricedc = $allproduct["price"] - ($allproduct["price"] * ($allproduct["discount"] / 100));
                        echo ('<div class="col-lg-4 col-md-6 mb-4 pb-2 portfolio-item cat' . $allproduct["category"] . '">');
                        echo ('<div class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-3">');
                        echo ('<div class="bg-primary mt-n5 py-3" style="width: 80px;">');
                        if ($allproduct["discount"] > 0 && $allproduct["discount"] < 100) {
                            echo ('<h4 class="font-weight-bold text-danger mb-0">$' . $pricedc . '</h4>');
                        } else {
                            echo ('<h4 class="font-weight-bold mb-0">$' . $pricedc . '</h4>');
                        }
                        echo ("</div>");
                        echo ('<div class="position-relative bg-primary rounded-circle mt-n3 mb-4 p-3" style="width: 150px; height: 150px;">');
                        echo ('<img class="rounded-circle w-100 h-100" src="' . $allproduct['pic1'] . '" style="object-fit: cover;">');
                        echo ('</div>');
                        echo ('<h5 class="font-weight-semi-bold text-danger" style="height:2em;">');
                        if ($allproduct["discount"] > 0 && $allproduct["discount"] < 100) {
                            echo ("EVENT DISCOUNT!!!");
                        }
                        echo ('</h5>');
                        echo ('<h5 class="font-weight-bold mb-4">' . $allproduct["name"] . '</h5>');
                        echo ('<a href="detail.php?prod=' . $allproduct["productID"] . '" class="btn btn-sm btn-secondary" style="z-index:2;">Order Now</a>');
                        echo ('</div>');
                        echo ('</div>');
                    } ?>
                </div>
            </div>
        </div>

        <!-- Products End -->
        <!-- catalogs -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <h1 class="section-title position-relative text-center mb-5 text-white">Cannot find your favorite product?</h1>
                    <h4 class="text-center text-white">You can search by catalog:</h4>
                </div>
            </div>
            <div class="d-md-flex row bg-secondary pb-3">
                <div class="col-md-4 pt-3">
                    <div class="text-white rounded-pill bg-primary text-center p-3 w-100 mb-2">HAIR</div>
                    <?php
                    foreach ($hair_list as $id => $item) {
                        echo ('<a href="catalog.php?catalog=' . $item["catalogID"] . '" class="dropdown-item">' . $item["name"] . '</a>');
                    }
                    ?>
                </div>

                <div class="col-md-4 pt-3">
                    <div class="text-white rounded-pill bg-primary text-center p-3 w-100 mb-2">MAKEUP</div>
                    <?php
                    foreach ($makeup_list as $id => $item) {
                        echo ('<a href="catalog.php?catalog=' . $item["catalogID"] . '" class="dropdown-item">' . $item["name"] . '</a>');
                    }
                    ?>
                </div>
                <div class="col-md-4 pt-3">
                    <div class="text-white rounded-pill bg-primary text-center p-3 w-100 mb-2">PERFUMES</div>
                    <?php
                    foreach ($perfumes_list as $id => $item) {
                        echo ('<a href="catalog.php?catalog=' . $item["catalogID"] . '" class="dropdown-item">' . $item["name"] . '</a>');
                    }
                    ?>
                </div>
                <div class="col-md-4 pt-3">
                    <div class="text-white rounded-pill bg-primary text-center p-3 w-100 mb-2">FACE</div>
                    <?php
                    foreach ($face_list as $id => $item) {
                        echo ('<a href="catalog.php?catalog=' . $item["catalogID"] . '" class="dropdown-item">' . $item["name"] . '</a>');
                    }
                    ?>
                </div>
                <div class="col-md-4 pt-3">
                    <div class="text-white rounded-pill bg-primary text-center p-3 w-100 mb-2">BODY</div>
                    <?php
                    foreach ($body_list as $id => $item) {
                        echo ('<a href="catalog.php?catalog=' . $item["catalogID"] . '" class="dropdown-item">' . $item["name"] . '</a>');
                    }
                    ?>
                </div>
                <div class="col-md-4 pt-3">
                    <div class="text-white rounded-pill bg-primary text-center p-3 w-100 mb-2">SUNCREAM</div>
                    <?php
                    foreach ($suncream_list as $id => $item) {
                        echo ('<a href="catalog.php?catalog=' . $item["catalogID"] . '" class="dropdown-item">' . $item["name"] . '</a>');
                    }
                    ?>
                </div>
            </div>
        </div>

        <!-- catalogs -->

    </div>
</div>

<?php
include("footer.php");
?>