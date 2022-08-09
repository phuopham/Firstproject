<?php
// header
include("header.php");

// get user data
require_once("../dbconnect.php");
// $sql = "SELECT * from user_order";
// $result = $conn->query($sql);
// $userlist = $result->fetch_all(MYSQLI_ASSOC);
$sql = "SELECT user_order.name, user_order.ordernumber, user_order.email,user_order.phone,user_order.address, 
orders.productID, orders.quantity,orders.price,orders.create_by  from orders inner join user_order 
ON orders.ordernumber = user_order.ordernumber";
$result = $conn->query($sql);
$orderlist = $result->fetch_all(MYSQLI_ASSOC);
//get user data end

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>User list</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Users</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Order Number</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Address</th>
                                        <th>Product ID</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                        <th>Create By</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach($orderlist as $id => $order){
                                        echo ("<tr>");
                                        echo ("<td>" . $order["name"] . "</td>");
                                        echo ("<td>" . $order["ordernumber"] . "</td>");
                                        echo ("<td>" . $order["email"] . "</td>");
                                        echo ("<td>" . $order["phone"] . "</td>");
                                        echo ("<td>" . $order["address"] . "</td>");
                                        echo ("<td>" . ($id + 1) . "</td>");
                                        echo ("<td>" . $order["quantity"] . "</td>");
                                        echo ("<td>" . $order["price"] . "</td>");
                                        echo ("<td>" . $order["create_by"] . "</td>");
                                        echo ("</tr>");
                                    };
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
</div>

<?php
//footer
include("footer.php");
?>