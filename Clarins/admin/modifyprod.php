<?php
$priv = [1, 2];
require_once("../dbconnect.php");

if (isset($_POST["productID"])) :
    if (empty($_POST["description"])) {
        header("location: modifyprod.php?error");
    }
    $sql = "UPDATE products SET description = '" . $_POST["description"] . "', price = " . $_POST["price"] . ", discount = " . $_POST["discount"] . " WHERE productID = " . $_POST["productID"];
    $conn->query($sql);
    header("location:products.php?description=success");
endif;

if (isset($_GET["prod"])) :
    $product = true;
    $sql = "SELECT name, description, price, discount from products where productID =" . $_GET["prod"];
    $result = $conn->query($sql);
    $product = $result->fetch_array(MYSQLI_ASSOC);
    // include header
    include("header.php");

?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit description of <?php echo ($product["name"]); ?>
                        </h1>
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
                <form action="modifyprod.php" method="post">
                    <input type="text" name="productID" class="d-none" value="<?php echo ($_GET["prod"]) ?>">
                    <div class="form-group row">
                        <div class="col-6">Price: <input type="number" name="price" value="<?php echo ($product['price']) ?>"></div>
                        <div class="col-6">Discount percentage: <input type="number" name="discount" value="<?php echo ($product['discount']) ?>"></div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="description"><?php echo ($product['description']) ?></textarea>
                    </div>
                    <div class="form-group d-flex justify-content-between">
                        <a href="products.php">
                            <-Back to products </a>
                                <button class="btn btn-primary position-end" type="submit">Save</button>
                    </div>
                </form>
                <div>
        </section>
    </div>
<?php
    include("footer.php");
endif;
?>