<?php
require_once("dbconnect.php");
$total = 0;
// product cookie
if (!isset($_COOKIE["Clarins"])) :
    $empty = true;
else :
    $empty = false;
    $items = json_decode($_COOKIE["Clarins"], true);
endif;
// remember me info
$remember = json_decode($_COOKIE["user"], true);

$page = "cart";
include("header.php");

?>
<div>
    <img src="img/bg4.jpg" style="background-repeat: no-repeat;position: fixed;width: -webkit-fill-available;margin-top: -9%; height:145%;z-index:-1; ">
    <div style="background-color:rgb(0,0,0,0.7);">
        <!-- Cart Start -->
        <div class="container-fluid py-5" style="margin-top:-5%;">
            <div class="container py-5">
                <div class="row">
                    <div class="col-lg-8 py-5 mt-5">
                        <h4 class="font-weight-bold mb-3 text-primary">Shopping Cart</h4>
                        <table class="table rounded" style="background:#fff;">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th></th>
                                    <th>Name</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if ($empty) :
                                    echo ("<tr><td colspan=5> You have nothing to check out!!! </td></tr>");
                                else :
                                    foreach ($items as $key => $item) {
                                        echo ("<tr>");
                                        echo ("<td>$key</td>");
                                        $sql = "SELECT name, price, pic1,discount from products where productid = " . $key;
                                        $result = $conn->query($sql);
                                        $product = $result->fetch_assoc();
                                        $pricedc = $product["price"] - ($product["price"] * ($product["discount"] / 100));
                                        echo ('<td class="p-1" style="width:50px;"><img class="rounded w-100 h-100" src="' . $product["pic1"] . '"></td>');
                                        echo ("<td>" . $product["name"] . "</td>");
                                        echo ("<td>$item</td>");
                                        echo ("<td>$" . $pricedc . "</td>");
                                        echo ("</tr>");
                                        $total += ($item * $pricedc);
                                    }
                                endif;;
                                ?>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th>Total</th>
                                    <th>$<?php echo ($total) ?></th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-lg-4 py-5 text-white mt-5">
                        <h4 class="font-weight-bold mb-3 text-primary">Order Sumary</h4>

                        <p>Invidunt lorem justo sanctus clita. Erat lorem labore ea, justo dolor lorem ipsum ut sed eos, ipsum et dolor kasd sit ea justo. Erat justo sed sed diam. Ea et erat ut sed diam sea ipsum est dolor</p>
                        <h5 class=" mb-3 text-primary"><i class="fa fa-check text-secondary mr-3"></i>Eos kasd eos dolor</h5>
                        <h5 class=" mb-3 text-primary"><i class="fa fa-check text-secondary mr-3"></i>Eos kasd eos dolor</h5>
                        <h5 class=" mb-3 text-primary"><i class="fa fa-check text-secondary mr-3"></i>Eos kasd eos dolor</h5>
                        <?php
                        if ($empty) :
                            echo ('<button class="btn btn-primary mt-2" disabled="disabled">Check out</button>');
                        else :
                            echo ('<a href="" class="btn btn-primary mt-2" data-toggle="modal" data-target="#Checkout">Check out</a>');
                        endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- cart End -->

        <!-- Checkout Start -->

        <div class="modal fade" id="Checkout" tabindex="-1" role="dialog" aria-labelledby="CheckoutTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <form name="checkout" id="Checkout" action="checkout.php" method="post">
                        <div class="modal-header">
                            <h5 class="modal-title m-auto">Fill in to continue</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-row">
                                <div class="col-sm-6 control-group">
                                    <input type="text" class="form-control p-4" id="name" name="name" placeholder="Your Name" value="<?php echo ($remember["name"] ?? "") ?>" required="required" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="col-sm-6 control-group">
                                    <input type="email" class="form-control p-4" id="email" name="email" placeholder="Your Email" value="<?php echo ($remember["email"] ?? "") ?>" required="required" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control p-4" id="address" name="address" placeholder="Address" value="<?php echo ($remember["address"] ?? "") ?>" required="required" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-row">
                                <div class="col-sm-6 control-group">
                                    <input type="number" class="form-control p-4" id="phone" name="phone" placeholder="Your Phone" value="<?php echo ($remember["phone"] ?? "") ?>" required="required" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="col-sm-6 control-group d-flex justify-content-center pb-3">
                                    <input type="checkbox" class="align-self-center form-control p-4" id="rememberme" name="rememberme" style="display:inline-block; width:50px;" />
                                    <label for="rememberme" class="align-self-center mb-0">Remember me</label>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>

                            <div class="control-group">
                                <textarea class="form-control p-4" rows="6" id="message" name="message" placeholder="Message"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" id="orderButton">Proceed</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Checkout End -->
    </div>
</div>

<?php
include("footer.php");
?>