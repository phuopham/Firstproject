<?php
// header
include("header.php");

// get user data
require_once("../dbconnect.php");
$sql = "SELECT * from user_order";
$result = $conn->query($sql);
$userlist = $result->fetch_all(MYSQLI_ASSOC);
$sql = "SELECT * from orders inner join user_order ON orders.ordernumber = user_order.ordernumber";
$result = $conn->query($sql);
$order = $result->fetch_all(MYSQLI_ASSOC);
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
                                        <th>Pay Method</th>
                                        <th>Create By</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($userlist as $id => $user) {
                                        echo ("<tr>");
                                        echo ("<td>" . $user["name"] . "</td>");
                                        echo ("<td>" . ($id + 1) . "</td>");
                                        echo ("<td>" . $user["email"] . "</td>");
                                        echo ("<td>" . $user["phone"] . "</td>");
                                        echo ("<td>" . $user["address"] . "</td>");
                                        echo ("<td>" . $user["paymethod"] . "</td>");
                                        echo ("<td>" . $user["create_by"] . "</td>");
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
                                        <th>Order ID</th>
                                        <th>Order Number</th>
                                        <th>Product ID</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                        <th>Create By</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($order as $id => $user) {
                                        echo ("<tr>");
                                        echo ("<td>" . ($id + 1) . "</td>");
                                        echo ("<td>" . ($id + 1) . "</td>");
                                        echo ("<td>" . ($id + 1) . "</td>");
                                        echo ("<td>" . $user["quantity"] . "</td>");
                                        echo ("<td>" . $user["price"] . "</td>");
                                        echo ("<td>" . $user["create_by"] . "</td>");
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