<?php
require_once('../dbconnect.php');

//add user

if ($_SERVER["REQUEST_METHOD"] == "POST") :
    if (!isset($_POST["name"])) :
        header("location:products.php?error");
    endif;
    $name = htmlspecialchars($_POST["name"]);
    if (!isset($_POST["description"])) :
        header("location:products.php?error");
    endif;
    $description = htmlspecialchars($_POST["description"]);
    $category = $_POST["category"];
    $sql = "INSERT into products(`name`,`category`,`description`) values ('$name', $category ,'$description')";
    $result = $conn->query($sql);
    if ($result->errno) {
        header("location:products.php?error");
    };
    header("location:products.php?success");
endif;

// get product data
$sql = "SELECT * from products";
$result = $conn->query($sql);
$products = $result->fetch_all(MYSQLI_ASSOC);

// get catalogs data
$sql = "SELECT catalogID, name from catalogs";
$result = $conn->query($sql);
$catalogs = $result->fetch_all(MYSQLI_ASSOC);

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
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <th>product ID</th>
                                        <th>Name</th>
                                        <th>Brand</th>
                                        <th>Catalog</th>
                                        <th>Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <form action="products.php" method="post">
                                            <td></td>
                                            <td>
                                                <input type="text" class="form-control" name="name" placeholder="Name" required>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" name="brand" placeholder="Brand" required>
                                            </td>
                                            <td>
                                                <select class="form-control" name="catalogID" required>
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
                                                <button class="btn btn-primary form-control">Add product</button>
                                            </td>
                                    <tr>
                                        <td colspan="6">
                                            <textarea class="form-control" type="textarea" name="description" placeholder="Description" required></textarea>
                                        </td>
                                    </tr>

                                    </form>
                                    </tr>

                                    <?php
                                    foreach ($products as $id => $product) {
                                        echo ('<tr data-widget="expandable-table" aria-expanded="false" tooltip title="click the row to show description">');
                                        echo ("<td>" . ($id + 1) . "</td>");
                                        echo ("<td>" . $product["name"] . "</td>");
                                        echo ("<td>" . $product["brandID"] . "</td>");
                                        echo ("<td>" . $product["catalogID"] . "</td>");
                                        echo ("<td>" . $product["price"] . "</td>");
                                        echo ('<td><a class="btn btn-danger" href="remove.php?product=' . $product["productID"] . '">Remove</a></td>');
                                        echo ("</tr>");
                                        echo ('<tr class="expandable-body">');
                                        echo ("<td colspan='6'>");
                                        echo ('<div><div class="container-fluid"><div class="row">');
                                        echo ('<div class="col-3"><div class="m-2"><img class="img-fluid" src="../' . $product["pic1"] . '" alt=""></div>');
                                        echo ('<div class="m-2"><img class="img-fluid" src="../' . $product["pic3"] . '" alt=""></div></div>');
                                        echo ('<div class="col-3"><div class="m-2"><img class="img-fluid" src="../' . $product["pic2"] . '" alt=""></div>');
                                        echo ('<div class="m-2"><img class="img-fluid" src="../' . $product["pic4"] . '" alt=""></div></div>');
                                        echo ('<div class="col-6"><p>' . $product["description"] . '</p></div></div></div></div>');
                                        // echo ("<td colspan='2'><p>" . $product["pic1"] . "</p></td>");
                                        // echo ("<td colspan='4'><p>" . $product["description"] . "</p></td>");
                                        echo ("</td></tr>");
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