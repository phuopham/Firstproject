<?php
// top product sold
$sql = "SELECT * FROM products ORDER BY sell_quantity DESC LIMIT 10";
$result = $conn->query($sql);
$topsells = $result->fetch_all(MYSQLI_ASSOC);
?>

<!-- Top sell Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <h1 class="section-title position-relative text-center mb-5 text-white">Our best sell products</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="owl-carousel service-carousel">
                    <?php
                    foreach ($topsells as $id => $item) {
                        if ($item["discount"] > 0 && $item["discount"] < 100) {
                            echo ('<div class="service-item"><div class="service-img mx-auto">');
                            echo ('<img class="rounded-circle w-100 h-100 bg-light p-3" src="' . $item["pic1"] . '" style="object-fit: cover;"></div>');
                            echo ('<div class="position-relative text-center bg-light rounded p-4 pb-5" style="margin-top: -75px;">');
                            echo ('<h5 class="font-weight-semi-bold mt-5 pt-5 text-danger">EVENT DISCOUNT!!!</h5>');
                            echo ('<h5 class="font-weight-semi-bold mb-3" style="height:3em">' . $item["name"] . '</h5>');
                            echo ('<p style="height:5rem">' . substr($item["description"], 0, 100) . '</p>');
                            echo ('<a href="detail.php?prod=' . $item["productID"] . '" class="btn btn-primary">Buy now</a>');
                            echo ('</div></div>');
                        } else {
                            echo ('<div class="service-item"><div class="service-img mx-auto">');
                            echo ('<img class="rounded-circle w-100 h-100 bg-light p-3" src="' . $item["pic1"] . '" style="object-fit: cover;"></div>');
                            echo ('<div class="position-relative text-center bg-light rounded p-4 pb-5" style="margin-top: -75px;">');
                            echo ('<h5 class="font-weight-semi-bold mt-5 pt-5"></h5>');
                            echo ('<h5 class="font-weight-semi-bold my-4" style="height:3em">' . $item["name"] . '</h5>');
                            echo ('<p style="height:5rem">' . substr($item["description"], 0, 100) . '</p>');
                            echo ('<a href="detail.php?prod=' . $item["productID"] . '" class="btn btn-primary" style="z-index:2;">Buy now</a>');
                            echo ('</div></div>');
                        }
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- Top sell End -->