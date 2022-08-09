<?php
require("../dbconnect.php");
if (isset($_FILES['image'])) {
    $errors = array();
    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type'];
    $file_ext = strtolower(end(explode('.', $_FILES['image']['name'])));

    $extensions = array("jpeg", "jpg", "png");

    if (in_array($file_ext, $extensions) === false) {
        $errors[] = "extension not allowed, please choose a JPEG or PNG file.";
    }

    if ($file_size > 5000000) {
        $errors[] = 'File size must not bigger than 5 MB';
    }

    if (empty($errors) == true) {
        move_uploaded_file($file_tmp, "../img/" . $file_name);
        $sql = "SELECT pic1, pic2, pic3, pic4 from products";
        $result = $conn->query($sql);
        $prd = $result->fetch_array(MYSQLI_ASSOC);
        if (!isset($product["pic1"])) :
            $sql = "INSERT INTO products(`pic1`) values ('img/$file_name');";
        else :
            if (!isset($product["pic2"])) :
            endif;

        endif;
        header("location:addpic.php");
    } else {
        print_r($errors);
    }
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
                    <h1>Add image to product ...</h1>
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
                <form action="" class="row" method="POST" enctype="multipart/form-data">
                    <div class="form-group col-7">
                        <input type="file" name="image" class="form-control-file" />
                    </div>
                    <div class="form-group col-5">
                        <input type="submit" class="btn btn-primary form-control" value="Upload" />
                    </div>
                    <a href="products.php">
                        <- Back to products </a>
                </form>
            </div>
        </div>
    </section>
</div>

<?php
include("footer.php");
?>