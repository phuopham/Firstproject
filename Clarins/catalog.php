<?php
require_once("dbconnect.php");
// all product in catalog
if (isset($_GET["catalog"])) {
    $sql = "SELECT * FROM products where catalogID =" . $_GET["catalog"];
    $result = $conn->query($sql);
    if ($result->num_rows == 0) {
        header("location:products.php");
        die();
    }
    $products = $result->fetch_all(MYSQLI_ASSOC);
} else {
    header("location:products.php");
}

// get all brandID related
$sql = "SELECT brandID FROM products where catalogID =" . $_GET["catalog"] . " GROUP BY brandID ";
$result = $conn->query($sql);
$brands = $result->fetch_all(MYSQLI_ASSOC);

//get catalog name
$sql = "SELECT name from catalogs where catalogID =" . $products[0]["catalogID"];
$result = $conn->query($sql);
$catalog = $result->fetch_assoc();
//header
include("header.php");
?>

<div>
    <img src="img/bg2.jpg" style="background-repeat: no-repeat;position: fixed;width: -webkit-fill-available; max-height: -webkit-fill-available;margin-top: -8%; height:200%;z-index:-1; ">
    <div style="background-color:rgb(0,0,0,0.6);">
        <!-- Products Start -->
        <div class="container-fluid py-5 px-0">
            <div class="container py-5">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <h1 class="section-title position-relative text-center mb-5 text-white"><?php echo ($catalog["name"]) ?> catalog</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <ul class="list-inline mb-4 pb-2" id="portfolio-flters">
                            <li class="btn btn-sm btn-outline-primary m-1 active" data-filter="*">All</li>
                            <?php
                            foreach ($brands as $id => $brand) {
                                $sql = "SELECT name from brands where brandID =" . $brand["brandID"];
                                $result = $conn->query($sql);
                                $brandname = $result->fetch_column();
                                echo ('<li class="btn btn-sm btn-outline-primary m-1" data-filter=".' . $brand['brandID'] . '">' . $brandname . '</li>');
                            } ?>
                        </ul>
                    </div>
                </div>
                <div class="row portfolio-container">
                    <?php foreach ($products as $id => $product) {

                        echo ('<div class="col-lg-3 col-md-6 mb-4 pb-2 portfolio-item ' . $product['brandID'] . '">');
                        echo ('<div class="product-item d-flex flex-column justify-content-between align-items-center text-center bg-light rounded py-5" style="height:30em">');
                        echo ('<div class="d-flex flex-column align-items-center ">');
                        echo ('<div class="bg-primary mt-n5 py-3" style="width: 80px;">');
                        echo ('<h4 class="font-weight-bold text-white mb-0">$' . ($product["price"] * (100 - $product["discount"]) / 100) . '</h4>');
                        echo ("</div>");
                        echo ('<div class="position-relative bg-primary rounded-circle mt-n3 mb-4 p-3" style="width: 150px; height: 150px;">');
                        echo ('<img class="rounded-circle w-100 h-100" src="' . $product['pic1'] . '" style="object-fit: cover;">');
                        echo ('</div>');
                        echo ('</div>');
                        echo ('<h5 class="font-weight-bold text-white mb-4 bg-secondary w-100">' . ($product["discount"] > 0 ? 'Discount ' . $product["discount"] . '%' : '') . '</h5>');
                        echo ('<h5 class="font-weight-bold mb-4 px-3">' . $product["name"] . '</h5>');
                        echo ('<a href="detail.php?prod=' . $product["productID"] . '" style="z-index: 30;" class="btn btn-sm btn-secondary">Order Now</a>');
                        echo ('</div>');
                        echo ('</div>');
                    } ?>

                </div>
            </div>
        </div>

        <!-- Products Start -->
    </div>
</div>

<?php
echo ('<div class="bg-secondary">');
include("bestsells.php");
echo ('</div>');
include("footer.php");
?>