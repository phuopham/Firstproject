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

<!-- About Start -->
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
                <a href="" class="btn btn-primary mt-2">Check out</a>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<?php
include("footer.php");
?>