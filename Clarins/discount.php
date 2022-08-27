<?php
// discount list
$sql = "SELECT * FROM products where discount > 0 && discount < 100 ";
$result = $conn->query($sql);
$discounts = $result->fetch_all(MYSQLI_ASSOC);
?>
<!-- discount start -->
<div class="container-fluid pt-5 px-0" style="margin-top:-5%;">
    <div class="container py-5 mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <h1 class="section-title position-relative text-center mt-5 mt-md-0 mb-md-5 text-white">EVENTS DISCOUNT!!!</h1>
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
                                <h6 class="text-muted mb-4 mt-auto"><?php echo (substr($discount["description"], 0, 100)) ?></h6>
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