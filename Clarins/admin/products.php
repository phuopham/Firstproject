<?php
$priv = [1, 2];
require_once('../dbconnect.php');

//add product

if ($_SERVER["REQUEST_METHOD"] == "POST") :
    if (!isset($_POST["name"])) :
        header("location:products.php?error1");
    endif;
    if (empty($_POST['name'])) {
        header("location:brands.php?error1");
        exit;
    };
    $name = htmlspecialchars($_POST["name"]);

    if (!isset($_POST["brand"])) :
        header("location:products.php?error");
    endif;
    $brand = htmlspecialchars($_POST["brand"]);
    if (!isset($_POST["catalogID"])) :
        header("location:products.php?error2");
    endif;
    $catalog = htmlspecialchars($_POST["catalogID"]);

    if (!isset($_POST["description"])) :
        header("location:products.php?error3");
    endif;
    $description = htmlspecialchars($_POST["description"]);

    if (!isset($_POST["price"])) :
        header("location:products.php?error4");
    endif;
    $price = htmlspecialchars($_POST["price"]);

    $discount = $_POST["discount"] == null ? "0" : $_POST["discount"];

    $sql = "INSERT into products(`name`,`brandID`,`catalogID`,`price`,`description`, `discount`,`sell_quantity`) values ('$name',$brand, $catalog , $price, '$description', $discount,0)";
    $result = $conn->query($sql);
    // if ($result->errno) {
    //     header("location:products.php?error5");
    // };
    $sql = "SELECT productID from products where name='$name' and catalogID = $catalog and price = $price";
    $result = $conn->query($sql);
    $productID = $result->fetch_column(0);
    header("location:addpic.php?prod=" . $productID);
endif;

// get product data
$result = [];
if (isset($_GET["page"]) && $_GET["page"] > 1) :
    $sql = "SELECT * from products ORDER BY productID desc LIMIT 21 OFFSET " . (((int)$_GET["page"] - 1) * 20);
    $result = $conn->query($sql);
    $products = $result->fetch_all(MYSQLI_ASSOC);
else :
    $sql = "SELECT * from products ORDER BY productID desc LIMIT 21 OFFSET 0;";
    $result = $conn->query($sql);
    $products = $result->fetch_all(MYSQLI_ASSOC);
endif;
if ($result->num_rows == 21) {
    $next = true;
} else {
    $next = false;
}
// get catalogs data
$sql = "SELECT catalogID, name from catalogs";
$result = $conn->query($sql);
$catalogs = $result->fetch_all(MYSQLI_ASSOC);

//get brands data
$sql = "SELECT brandID, name from brands";
$result = $conn->query($sql);
$brands = $result->fetch_all(MYSQLI_ASSOC);

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
                    <h1>products</h1>
                </div>

                <?php
                if (isset($_GET["error1"])) {
                    echo ('<div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-ban"></i> Alert!</h5>
                    You forget entering your name!
                  </div>');
                }
                ?>

                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="main.php">Home</a></li>
                        <li class="breadcrumb-item active">Product</li>
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
                    <p class="bg-warning">
                        A new product considered out of stock unless you add its current quantity to stockroom
                    </p>
                </div>
                <div class="col-12">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Brand</th>
                                        <th>Catalog</th>
                                        <th>Price</th>
                                        <th>Discount (%)</th>
                                        <th>edit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <form action="products.php" method="post">
                                            <td></td>
                                            <td>
                                                <input type="text" class="form-control" name="name" placeholder="Name">
                                            </td>
                                            <td>
                                                <select class="form-control" name="brand" required>
                                                    <?php
                                                    foreach ($brands as $id => $brands) {
                                                        echo ("<option value='" . $brands['brandID'] . "'>" . $brands['name'] . "</option>");
                                                    }
                                                    ?>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" name="catalogID">
                                                    <?php
                                                    foreach ($catalogs as $id => $catalog) {
                                                        echo ("<option value='" . $catalog['catalogID'] . "'>" . $catalog['name'] . "</option>");
                                                    }
                                                    ?>
                                                </select>
                                            </td>
                                            <td>
                                                <input type="number" class="form-control" name="price" placeholder="Price" required>
                                            </td>
                                            <td>
                                                <input type="number" class="form-control" name="discount" placeholder="Discount">
                                            </td>
                                            <td></td>
                                            <td>
                                                <button class="btn btn-primary form-control text-nowrap">Add product</button>
                                            </td>
                                    <tr>
                                        <td colspan="8">
                                            <textarea class="form-control" type="textarea" name="description" placeholder="Description" required></textarea>
                                        </td>
                                    </tr>

                                    </form>
                                    </tr>

                                    <?php
                                    foreach ($products as $id => $product) {
                                        $pricedc = $product["price"] - ($product["price"] * ($product["discount"] / 100));
                                        $sql = "SELECT name from brands where brandID=" . $product["brandID"];
                                        $result = $conn->query($sql);
                                        $brand = $result->fetch_column();
                                        $sql = "SELECT name from catalogs where catalogID=" . $product["catalogID"];
                                        $result = $conn->query($sql);
                                        $catalog = $result->fetch_column();

                                        echo ('<tr data-widget="expandable-table" aria-expanded="false" tooltip title="click the row to show description">');
                                        echo ("<td>" . $product["productID"] . "</td>");
                                        echo ("<td>" . $product["name"] . "</td>");
                                        echo ("<td>" . $brand . "</td>");
                                        echo ("<td>" . $catalog . "</td>");
                                        echo ("<td>" . $product["price"] . "</td>");
                                        echo ("<td>" . $product["discount"] . "</td>");
                                        echo ('<td><a href="modifyprod.php?prod=' . $product["productID"] . '" class="btn btn-primary">Edit</a></td>');
                                        echo ('<td><a class="btn btn-primary text-nowrap" href="addstockroom.php?prod=' . $product["productID"] . '">Add to stockroom</a></td>');
                                        echo ("</tr>");
                                        echo ('<tr class="expandable-body">');
                                        echo ("<td colspan='6'>");
                                        echo ('<div><div class="container-fluid"><div class="row">');
                                        echo ('<div class="col-3"><div class="m-2"><img class="img-fluid" src="../' . $product["pic1"] . '" alt=""></div>');
                                        echo ('<div class="m-2"><img class="img-fluid" src="../' . $product["pic3"] . '" alt=""></div></div>');
                                        echo ('<div class="col-3"><div class="m-2"><img class="img-fluid" src="../' . $product["pic2"] . '" alt=""></div>');
                                        echo ('<div class="m-2"><img class="img-fluid" src="../' . $product["pic4"] . '" alt=""></div></div>');
                                        echo ('<div class="col-6"><p>' . $product["description"]);
                                        echo ('</p></div></div></div></div>');
                                        // echo ("<td colspan='2'><p>" . $product["pic1"] . "</p></td>");
                                        // echo ("<td colspan='4'><p>" . $product["description"] . "</p></td>");
                                        echo ('</td><td colspan="2" ><div class="d-flex justify-content-center"><a href="addpic.php?prod=' . $product["productID"] . '" class="btn btn-primary">Add/Change picture</a></div>');
                                        echo ('<div class="d-flex justify-content-center"><a class="btn btn-danger" href="remove.php?product=' . $product["productID"] . '">Remove</a></div></td>');
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
                <div class="col-12 d-flex justify-content-center">
                    <a class="btn btn-primary" href="products.php">Firstpage</a>
                    <?php
                    if (!isset($_GET["page"]) || $_GET["page"] == 1) :
                    else :
                        echo ('<a class="btn btn-primary" href="products.php?page=' . ($_GET["page"] - 1) . '">Previous</a>');
                    endif;
                    if ($next) :
                        echo ('<a class="btn btn-primary" href="products.php?page=' . (($_GET["page"] ?? 1) + 1) . '">Next</a>');
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </section>
</div>
<?php
//footer
include("footer.php");
?>