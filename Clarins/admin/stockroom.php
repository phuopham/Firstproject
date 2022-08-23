<?php
$priv = [0, 1, 2];
require_once("../dbconnect.php");


// count products
$sql = "SELECT productID, SUM(quantity) as total from stockroom GROUP BY productID";
$result = $conn->query($sql);
$countproducts = $result->fetch_all(MYSQLI_ASSOC);
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
                    <h1>Stockroom</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="main.php">Home</a></li>
                        <li class="breadcrumb-item active">Stockroom</li>
                    </ol>

                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-10">

                </div>
                <div class="col-12">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-wrap">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Product</th>
                                        <th>Quantity</th>
                                        <th>Last update</th>
                                        <th><a href="auditstockroom.php" class="btn btn-danger <?php echo ($elm['type'] == 0 ? "disabled" : "") ?>">Audit stockroom</a></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($countproducts as $id => $good) {
                                        echo ('<tr>');
                                        echo ("<td>" . ($id + 1) . "</td>");
                                        $result = $conn->query("SELECT name from products where productID ='" . $good["productID"] . "'");
                                        echo ("<td>" . $result->fetch_column() . "</td>");
                                        echo ("<td>" . $good["total"] . "</td>");
                                        $result = $conn->query("SELECT create_by from stockroom where productID ='" . $good["productID"] . "' order by create_by desc");
                                        echo ("<td>" . $result->fetch_column() . "</td>");
                                        echo ('<td><a class="btn btn-primary" href="addstockroom.php?prod=' . $good["productID"] . '">Add more</a></td>');
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
            <p class="bg-warning">
                If you need to add a product but cannot find it here, you need to contact an operator or administrator to add it for you for the first time
            </p>
        </div>
    </section>
</div>
<?php
//footer
include("footer.php");
?>