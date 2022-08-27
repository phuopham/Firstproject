<?php
$priv = [1, 2];
require_once("../dbconnect.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") :
    if ($_POST["discount"] > 100 || $_POST["discount"] < 0 || empty($_POST["discount"])) {
        header("location: modifyprod.php?prod=" . $_POST["productID"] . "&error");
    }
    if ($_POST["price"] < 0 || empty($_POST["price"])) {
        header("location: modifyprod.php?prod=" . $_POST["productID"] . "&error");
    }
    if (empty($_POST["description"])) {
        header("location: modifyprod.php?prod=" . $_POST["productID"] . "&error");
    }
    $description = $_POST["description"];

    if (isset($_POST["productID"])) :

        $sql = "UPDATE products SET description = '" . $description . "', price = " . $_POST["price"] . ", discount = " . $_POST["discount"] . " WHERE productID = " . $_POST["productID"];
        $conn->query($sql);
        if (isset($_POST["back"])) {
            header("location:products.php?editsuccess");
        }
        if (isset($_POST["addpic"])) {
            header("location:addpic.php?prod=" . $_POST["productID"]);
        }
    endif;
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
                <?php
                if (isset($_GET["success"])) {
                    echo ('<div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h5><i class="icon fas fa-thumbs-up"></i> Alert!</h5>
    Product info update successfully!
    </div>');
                }
                if (isset($_GET["error"])) {
                    echo ('<div class="alert alert-danger alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h5><i class="icon fas fa-ban"></i> Alert!</h5>
    Product info cannot be update! Please make sure:
    <ul>
    <li>Description cannot be blank</li>
    <li>Discount percentage must be between 0 and 100</li>
    <li>Price cannot be negative</li>
    </ul>
    </div>');
                }
                ?>
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
                                <button class="btn btn-primary position-end" name="back" type="submit">Save and back to products</button>
                                <button class="btn btn-primary position-end" name="addpic" type="submit"> Save and add picture</button>
                    </div>
                </form>
                <div>
        </section>
    </div>
<?php
    include("footer.php");
endif;
?>