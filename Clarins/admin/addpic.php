<?php
$priv = [1, 2];
require("../dbconnect.php");
$sql = "SELECT pic1, pic2, pic3, pic4 from products where productID =" . $_GET["prod"];
$result = $conn->query($sql);
$prd = $result->fetch_array(MYSQLI_ASSOC);

if (isset($_FILES['image'])) {
    $errors = array();
    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type'];
    $file_ext = strtolower(end(explode('.', $file_name)));

    $extensions = array("jpeg", "jpg", "png");

    if (in_array($file_ext, $extensions) === false) {
        header('location:addpic.php?'  . $_POST["productID"] . '&error');
    }

    if ($file_size > 2000000) {
        header('location:addpic.php?'  . $_POST["productID"] . '&error');
    }

    move_uploaded_file($file_tmp, "../img/" . $file_name);
    $sql = "";
    if (!isset($prd["pic1"])) :
        $sql = "UPDATE products SET pic1='img/$file_name' WHERE products.productID =" . $_POST["productID"];
    else :
        if (!isset($prd["pic2"])) :
            $sql = "UPDATE products SET pic2='img/$file_name' WHERE products.productID =" . $_POST["productID"];
        else :
            if (!isset($prd["pic3"])) :
                $sql = "UPDATE products SET pic3='img/$file_name' WHERE products.productID =" . $_POST["productID"];
            else :
                if (!isset($prd["pic4"])) :
                    $sql = "UPDATE products SET pic4='img/$file_name' WHERE products.productID =" . $_POST["productID"];
                else :
                    header('location:addpic.php?'  . $_POST["productID"] . '&error');
                endif;
            endif;
        endif;
    endif;
    $result = $conn->query($sql);
    header("location:addpic.php?prod=" . $_POST["productID"] . "&success");
}
include("header.php");
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add image to product:
                        <?php
                        $sql = "SELECT name from products where productID = " . $_GET["prod"];
                        $result = $conn->query($sql);
                        echo ($result->fetch_column());
                        ?></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="main.php">Home</a>
                        </li>
                        <li class="breadcrumb-item"><a href="products.php">Products</a>
                        </li>
                        <li class="breadcrumb-item active">Add_pic</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div>
                <?php
                if (isset($_GET["success"])) {
                    echo ('<div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h5><i class="icon fas fa-thumbs-up"></i> Alert!</h5>
    File upload successfully!
    </div>');
                }
                if (isset($_GET["error"])) {
                    echo ('<div class="alert alert-danger alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h5><i class="icon fas fa-ban"></i> Alert!</h5>
    File cannot be uploaded! Please check the requirement.
    </div>');
                }
                ?>
                <p>
                    <b>REQUIREMENT:</b> Make sure you strickly follow:
                </p>
                <ul>
                    <li>Only jpg/jpeg and png file are accepted</li>
                    <li>File size should be smaller than 2MB</li>
                    <li>Filename cannot have any special chars</li>
                    <li>Maximum 4 pictures allow</li>
                </ul>
                <a href="products.php">
                    <- Back to products </a>
                        <form action="" class="row mt-3" method="POST" enctype="multipart/form-data">
                            <input type="text" name="productID" value="<?php echo ($_GET["prod"]); ?>" class="d-none">
                            <div class="form-group col-7 bg-secondary py-1 pl-4 rounded-pill">
                                <input type="file" name="image" class="form-control-file" />
                            </div>
                            <div class="form-group col-5">
                                <input type="submit" class="btn btn-primary form-control" value="Upload" />
                            </div>

                        </form>
            </div>
            <div class="row">
                <div class="col-10">
                    <h4>Current pictures of the products</h4>
                </div>
                <div class="col-3">
                    <img class="img-fluid" src="../<?php echo $prd["pic1"] ?>" alt="First picture is not set yet">
                </div>
                <div class="col-3">
                    <img class="img-fluid" src="../<?php echo $prd["pic2"] ?>" alt="Second picture is not set yet">
                </div>
                <div class="col-3">
                    <img class="img-fluid" src="../<?php echo $prd["pic3"] ?>" alt="Third picture is not set yet">
                </div>
                <div class="col-3">
                    <img class="img-fluid" src="../<?php echo $prd["pic4"] ?>" alt="Forth picture is not set yet">
                </div>
            </div>
        </div>
    </section>
</div>

<?php
include("footer.php");
?>