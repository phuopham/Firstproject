<?php
// fetch product
require_once("dbconnect.php");
if ($_SERVER["REQUEST_METHOD"] == "GET") :
    if (!isset($_GET['prod'])) :
        header("location:product.php");
    endif;
    $sql = "SELECT * from products where productID = '" . $_GET['prod'] . "';";
    $result = $conn->query($sql);
    $product = $result->fetch_assoc();

    // fetch catalog
    $sql =  "SELECT name, category from catalogs where catalogID ='" . $product["catalogID"] . "';";
    $result = $conn->query($sql);
    $catalog = $result->fetch_assoc();

    // fetch brand
    $sql =  "SELECT name, description from brands where brandID ='" . $product["brandID"] . "';";
    $result = $conn->query($sql);
    $brand = $result->fetch_assoc();

// fetch comment
// $sql = "SELECT name, message where productID = '" . $product["productID"] . "' AND visible = 0 ORDER BY sell_quantity;";
// $result = $conn->query($sql);
// $comments = $result->fetch_all(MYSQLI_ASSOC);


else :
    header("location:product.php");
endif;

// header
$page = "product";
include('header.php');

?>
<div class="container my-5">
    <div class="row">
        <div class="col-md-5">
            <div class=" px-0" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img id="product-img" class="position-absolute w-100 h-100" src="<?php echo ($product["pic1"]) ?>" style="object-fit: cover; max-width:370px;min-height:480px;">
                </div>
            </div>
            <div class="d-flex">
                <div class="small-img-col col-3">
                    <img src="<?php echo ($product["pic1"]) ?>" width="100%" class="small-img">
                </div>
                <div class="small-img-col col-3">
                    <img src="<?php echo ($product["pic2"]) ?>" width="100%" class="small-img">
                </div>
                <div class="small-img-col col-3">
                    <img src="<?php echo ($product["pic3"]) ?>" width="100%" class="small-img">
                </div>
                <div class="small-img-col col-3">
                    <img src="<?php echo ($product["pic4"]) ?>" width="100%" class="small-img">
                </div>
            </div>
        </div>

        <div class="col-md-7">
            <p class="text-uppercase">HOME / PRODUCTS / <?php echo ($catalog["category"] . " / " . $catalog["name"]) ?></p>
            <h1 class="text-uppercase"><?php echo ($product["name"]) ?></h1>
            <h4>$<?php echo ($product["price"]) ?></h4>
            <div>
                <p style="height:150px;"> <?php echo ($product["description"]); ?></p>
            </div>
            <form action="cartcookie.php" method="get">
                <input type="number" hidden name="product" value="<?php echo ($product["productID"]); ?>">
                <input class="form-control ml-4" type="number" name="quantity" value="1" min="0" style="max-width: 100px; text-align: center;">
                <div><button class="btn btn-secondary py-3 px-5 mt-2">Add To Cart</button></div>
            </form>
        </div>
    </div>
</div>
<div class="container border rounded pb-5" style=" background:lavenderblush;">
    <div class="row justify-content-center pt-5">
        <div class="col-lg-6">
            <h1 class=" position-relative mb-3
            ">Comments</h1>
        </div>
    </div>
    <div class="mb-3 row">
        <div class="col-md-1"></div>
        <div class="col-md-1 d-none d-md-block text-right">
            <img src="img/testimonial-1.jpg" class="img-fluid rounded-circle">
        </div>
        <div class="col-md-9 border rounded" style=" background: lightgray;">
            <div>
                <h5>Ngan</h5>
            </div>
            <div>
                <p>I love the texture of the serum and I love the fact that its very smooth and light.</p>
            </div>
        </div>
    </div>
    <div class="mb-3 row">
        <div class="col-md-1"></div>
        <div class="col-md-1 d-none d-md-block text-right">
            <img src="img/testimonial-1.jpg" class="img-fluid rounded-circle">
        </div>
        <div class="col-md-9 border rounded" style=" background: lightgray;">
            <div>
                <h5>Hieu</h5>
            </div>
            <div>
                <p>I love the texture of the serum and I love the fact that its very smooth and light.</p>
            </div>
        </div>
    </div>
    <div class="mb-3 row">
        <div class="col-md-1"></div>
        <div class="col-md-1 d-none d-md-block text-right">
            <img src="img/testimonial-1.jpg" class="img-fluid rounded-circle">
        </div>
        <div class="col-md-9 border rounded" style=" background: lightgray;">
            <div>
                <h5>Phuong</h5>
            </div>
            <div>
                <p>I love the texture of the serum and I love the fact that its very smooth and light.</p>
            </div>
        </div>
    </div>
    <div class="mb-3
     row">
        <div class="col-md-1"></div>
        <div class="col-md-1 d-none d-md-block text-right">
            <img src="img/testimonial-1.jpg" class="img-fluid rounded-circle">
        </div>
        <div class="col-md-9 border rounded" style=" background: lightgray;">
            <div>
                <h5>An</h5>
            </div>
            <div>
                <p>I love the texture of the serum and I love the fact that its very smooth and light.</p>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid pb-5">
    <div class="container pb-5">
        <div class="row justify-content-center">
            <div class="col-lg-9 p-2">
                <div class="contact-form rounded p-sm-3">
                    <div id="success"></div>
                    <form name="sentFeedback" id="commentForm" method="POST">
                        <input class="d-none" type="number" value="<?php echo ($product["productID"]) ?>">
                        <div class="form-row">
                            <div class="col-sm-4 control-group">
                                <input type="text" class="form-control p-4" id="name" name="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="col-sm-8 control-group">
                                <input type="email" class="form-control p-4" id="email" name="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="control-group">
                            <textarea class="form-control p-4" id="message" name="message" placeholder="Comment" required="required" data-validation-required-message="Please enter your message"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div>
                            <button class="btn btn-primary btn-block py-3 px-5" type="submit" id="sendFeedbackButton">Send Feedback</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var ProductImg = document.getElementById("product-img");
    var SmallImg = document.getElementsByClassName("small-img");

    SmallImg[0].onclick = function() {
        ProductImg.src = SmallImg[0].src;
    }
    SmallImg[1].onclick = function() {
        ProductImg.src = SmallImg[1].src;
    }
    SmallImg[2].onclick = function() {
        ProductImg.src = SmallImg[2].src;
    }
    SmallImg[3].onclick = function() {
        ProductImg.src = SmallImg[3].src;
    }
</script>

<?php
include('footer.php');
?>