<?php
$priv = [1, 2];
require_once("../dbconnect.php");
// insert stockroom
if ($_SERVER["REQUEST_METHOD"] == "POST") :
    $sql = "INSERT INTO stockroom(productID, quantity, username) VALUES (" . $_POST["productID"] . "," . $_POST["quantity"] . ",'" . $_POST["username"] . "')";
    $result = $conn->query($sql);
    header("location:stockroom.php?success");
    die();
endif;

// get good data
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["prod"])) :
    $sql = "SELECT * from stockroom WHERE productID=" . $_GET["prod"];
    $result = $conn->query($sql);
    $goodstocks = $result->fetch_all(MYSQLI_ASSOC);
else :
    header("location:stockroom.php");
endif;

//get product name
$result = $conn->query("SELECT name from products where productID ='" . $_GET["prod"] . "'");
$pname = $result->fetch_column();
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
                                        <th>ProductID</th>
                                        <th>Quantity</th>
                                        <th>Username</th>
                                        <th>Stock time</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <form action="addstockroom.php" method="post">
                                            <td>
                                                <?php echo ($pname); ?>
                                                <input type="text" class="form-control d-none" name="productID" value="<?php echo ($_GET["prod"]) ?>">
                                            </td>
                                            <td>
                                                <input class="form-control" type="number" name="quantity" placeholder="Quantity" required>
                                            </td>
                                            <td>
                                                <?php echo ($_SESSION["username"]) ?>
                                                <input class="form-control d-none" type="text" name="username" value="<?php echo ($_SESSION["username"]) ?>">
                                            </td>
                                            <td>
                                                <button type="submit" class="btn btn-primary form-control">Add good</button>
                                            </td>
                                        </form>
                                    </tr>


                                    </tr>

                                    <?php
                                    foreach ($goodstocks as $id => $good) {
                                        if (!empty($good["username"])) :
                                            echo ('<tr>');
                                            echo ("<td>" . $pname . "</td>");
                                            echo ("<td>" . $good["quantity"] . "</td>");
                                            echo ("<td>" . $good["username"] . "</td>");
                                            echo ("<td>" . $good["create_by"] . "</td>");
                                            echo ("</tr>");
                                        endif;
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