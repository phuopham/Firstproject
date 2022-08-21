<?php
$priv = [0, 1, 2];


// get user data
require_once("../dbconnect.php");

$sql = "SELECT * from user_order ORDER BY ordernumber desc";
$result = $conn->query($sql);
$orderlist = $result->fetch_all(MYSQLI_ASSOC);
//get user data end

// header
include("header.php");
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Orders</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Orders</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <?php foreach ($orderlist as $id => $order) :
                    $total = 0;
                    $sql = "SELECT * from orders where ordernumber =" . $order["ordernumber"];
                    $result = $conn->query($sql);
                    $items = $result->fetch_all(MYSQLI_ASSOC);
                ?>
                    <div class="col-md-6">
                        <div class="card card-default shadow-sm">
                            <div class="card-header">
                                <h3 class="card-title font-weight-bold"><?php echo ($order["ordernumber"] . " - " . $order['name']) ?></h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                </div>
                                <!-- /.card-tools -->
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive">
                                <div class="mb-2">
                                    <b>Address:</b><?php echo ($order["address"]) ?>
                                </div>
                                <div class="d-inline-block pr-3 mb-2">
                                    <b>Phone: </b><?php echo ($order["phone"]) ?>
                                </div>
                                <div class="d-inline-block mb-2">
                                    <b>Email :</b><?php echo ($order["email"]) ?>
                                </div>
                                <table class="table table-bordered">
                                    <thead class="bg-gray">
                                        <tr>
                                            <th>Product</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($items as $iid => $item) :
                                            $sql = "SELECT name from products where productID=" . $item['productID'];
                                            $result = $conn->query($sql);
                                            $itemname = $result->fetch_column();
                                            echo ('<tr><td>' . $itemname);
                                            echo ('</td><td>' . $item['quantity']);
                                            echo ('</td><td>' . ($item['quantity'] * $item['price']));
                                            $total += ($item['quantity'] * $item['price']);
                                        endforeach;
                                        ?>
                                    </tbody>
                                    <tfoot class="bg-gray">
                                        <th>Total</th>
                                        <th></th>
                                        <th>$ <?php echo ($total) ?></th>
                                    </tfoot>
                                </table>
                                <div>
                                    <b>Note from customer:</b> <?php echo ($order['message']) ?>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                <?php endforeach; ?>
            </div>
        </div>
</div>
</section>
</div>

<?php
//footer
include("footer.php");
?>