<?php
require_once("dbconnect.php");
include("header.php");
$items = [1, 2, 3];
$total = 40;
foreach ($items as $key => $item) {
    $sql = "SELECT * from products where productid = $item";
    $result = $conn->query($sql);
    //echo ("<pre>");
    //var_dump($result);
    //echo ("</pre>");
};

?>

<!-- Cart Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-8 py-5">
                <h4 class="font-weight-bold mb-3">Shopping Cart</h4>
                <table class="table">
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
                        foreach ($items as $key => $item) {
                            echo ("<tr>");
                            echo ("<td>$key</td>");
                            echo ('<td class="p-1" style="width:50px;"><img class="rounded w-100 h-100" src="img/product-1.jpg"></td>');
                            echo ("<td>$item</td>");
                            echo ("<td>$item</td>");
                            echo ("<td>$item</td>");
                            echo ("</tr>");
                        };
                        ?>
                        <tr>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th><?php echo ($total) ?></th>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-4 py-5">
                <h4 class="font-weight-bold mb-3">Order Sumary</h4>

                <p>Invidunt lorem justo sanctus clita. Erat lorem labore ea, justo dolor lorem ipsum ut sed eos, ipsum et dolor kasd sit ea justo. Erat justo sed sed diam. Ea et erat ut sed diam sea ipsum est dolor</p>
                <h5 class="text-muted mb-3"><i class="fa fa-check text-secondary mr-3"></i>Eos kasd eos dolor</h5>
                <h5 class="text-muted mb-3"><i class="fa fa-check text-secondary mr-3"></i>Eos kasd eos dolor</h5>
                <h5 class="text-muted mb-3"><i class="fa fa-check text-secondary mr-3"></i>Eos kasd eos dolor</h5>
                <a href="" class="btn btn-primary mt-2" data-toggle="modal" data-target="#Checkout">Check out</a>
            </div>
        </div>
    </div>
</div>
<!-- cart End -->

<!-- Checkout Start -->

<div class="modal fade" id="Checkout" tabindex="-1" role="dialog" aria-labelledby="CheckoutTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <form name="checkout" id="Checkout">
                <div class="modal-header">
                    <h5 class="modal-title m-auto">Fill in to continue</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-row">
                        <div class="col-sm-6 control-group">
                            <input type="text" class="form-control p-4" id="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="col-sm-6 control-group">
                            <input type="email" class="form-control p-4" id="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <input type="text" class="form-control p-4" id="Address" placeholder="Address" required="required" data-validation-required-message="Please enter an address" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="form-row">
                        <div class="col-sm-6 control-group">
                            <input type="number" class="form-control p-4" id="phone" placeholder="Your Phone" required="required" data-validation-required-message="Please enter your phone" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="col-sm-6 control-group d-flex justify-content-center pb-3">
                            <input type="checkbox" class="align-self-center form-control p-4" id="rememberme" style="display:inline-block; width:50px;" />
                            <label for="rememberme" class="align-self-center mb-0">Remember me</label>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>

                    <div class="control-group">
                        <textarea class="form-control p-4" rows="6" id="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
                        <p class="help-block text-danger"></p>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Proceed</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Checkout End -->

<?php
include("footer.php");
?>