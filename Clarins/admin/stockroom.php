<?php
// header
include("header.php");

// get good data
require_once("../dbconnect.php");
$sql = "SELECT * from stockroom";
$result = $conn->query($sql);
$goodstocks = $result->fetch_all(MYSQLI_ASSOC);

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>good list</h1>
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
                                        <th>Stock time</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <form action="">
                                            <td></td>
                                            <td>
                                                <input type="text" class="form-control" name="name" placeholder="Name" require>
                                            </td>
                                            <td>
                                                <input class="form-control" type="textarea" name="quantity" placeholder="Quantity" require>
                                            </td>
                                            <td>
                                                <button class="btn btn-primary form-control">Add good</button>
                                            </td>
                                        </form>
                                    </tr>


                                    </tr>

                                    <?php
                                    foreach ($goodstocks as $id => $good) {
                                        echo ('<tr>');
                                        echo ("<td>" . ($id + 1) . "</td>");
                                        $result = $conn->query("SELECT name from products where productID ='" . $good["productID"] . "'");
                                        echo ("<td>" . $result->fetch_column() . "</td>");
                                        echo ("<td>" . $good["quantity"] . "</td>");
                                        echo ("<td>" . $good["create_by"] . "</td>");
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