<?php
require_once("dbconnect.php");

//visitor count

$sql = "SELECT * from visitorcount where IP = '" . $_SERVER['REMOTE_ADDR'] . "' and timestampdiff(hour, view_at, now()) <1";
$result = $conn->query($sql);
if (mysqli_num_rows($result) == 0) {
    $sql = "INSERT into visitorcount (ip) values ('" . $_SERVER['REMOTE_ADDR'] . "');";
    $result = $conn->query($sql);
}
$result = $conn->query("SELECT id from visitorcount");
$visitorcount = mysqli_num_rows($result);

// fetch catalog
// face = 1
$sql = "SELECT name, catalogID from catalogs where category = 1";
$result = $conn->query($sql);
$hair_list = $result->fetch_all(MYSQLI_ASSOC);
// body = 2
$sql = "SELECT name, catalogID from catalogs where category = 2";
$result = $conn->query($sql);
$makeup_list = $result->fetch_all(MYSQLI_ASSOC);

// parfumes = 3
$sql = "SELECT name, catalogID from catalogs where category = 3";
$result = $conn->query($sql);
$perfumes_list = $result->fetch_all(MYSQLI_ASSOC);
// face = 4
$sql = "SELECT name, catalogID from catalogs where category = 4";
$result = $conn->query($sql);
$face_list = $result->fetch_all(MYSQLI_ASSOC);
// body = 5
$sql = "SELECT name, catalogID from catalogs where category = 5";
$result = $conn->query($sql);
$body_list = $result->fetch_all(MYSQLI_ASSOC);
//  suncream = 6
$sql = "SELECT name, catalogID from catalogs where category = 6";
$result = $conn->query($sql);
$suncream_list = $result->fetch_all(MYSQLI_ASSOC);

include("config.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>CLARINS</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Clarins" name="keywords">
    <meta content="Clarins" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-primary py-1 d-none d-md-block">
        <div class="container">
            <div class="row">
                <div class="col-4">

                </div>
                <div class="col-4 px-2 text-center">
                    <a href="index.php" class="navbar-brand px-5 py-0 m-0">
                        <h1 class="d-block text-white m-0"><span class="text-secondary">C</span>LARINS</h1>
                    </a>
                </div>
                <div class="col-md-4 text-center text-lg-right">
                    <div class="d-inline-flex align-items-center">
                        Visitor count: <?php echo ($visitorcount); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->
    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
            <nav class="col-12 navbar navbar-expand-lg bg-white navbar-light shadow p-lg-0">

                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="col-12 collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-lg-auto py-0 col-4 ">
                        <a href="index.php" class="col nav-item nav-link 
                        <?php
                        if ($page == "index") {
                            echo ("active");
                        };
                        ?>
                        ">Home</a>
                        <a href="gallery.php" class="col nav-item nav-link text-lg-center"><i class=" fas fa-map-marker-alt"></i></a>
                        <a href="about.php" class="col nav-item nav-link
                        <?php
                        if ($page == "about") {
                            echo ("active");
                        };
                        ?>
                        ">About</a>
                        <a href="products.php" class="col nav-item nav-link
                        <?php
                        if ($page == "product") {
                            echo ("active");
                        };
                        ?>
                        ">Products</a>
                    </div>
                    <img src="img/skin-care.png" class="p-0 col-2 mx-xl-3 d-none d-lg-block " style="max-width:8%;">
                    <div class="col-lg-4 navbar-nav mr-auto py-0">
                        <div class="dropdown show col-xs-3">
                            <a href="#" class="nav-item nav-link dropdown-toggle" role="button" id="dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Catergoies</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown" style="left:-400% !important">
                                <div class="d-lg-flex">
                                    <div>
                                        <div class="dropdown-header">HAIR</div>
                                        <?php
                                        foreach ($hair_list as $id => $item) {
                                            echo ('<a href="catalog.php?catalog=' . $item["catalogID"] . '" class="dropdown-item">' . $item["name"] . '</a>');
                                        }
                                        ?>
                                    </div>
                                    <div>
                                        <div class="dropdown-header">MAKEUP</div>
                                        <?php
                                        foreach ($makeup_list as $id => $item) {
                                            echo ('<a href="catalog.php?catalog=' . $item["catalogID"] . '" class="dropdown-item">' . $item["name"] . '</a>');
                                        }
                                        ?>
                                    </div>
                                    <div>
                                        <div class="dropdown-header">PERFUMES</div>
                                        <?php
                                        foreach ($perfumes_list as $id => $item) {
                                            echo ('<a href="catalog.php?catalog=' . $item["catalogID"] . '" class="dropdown-item">' . $item["name"] . '</a>');
                                        }
                                        ?>
                                    </div>
                                    <div>
                                        <div class="dropdown-header">FACE</div>
                                        <?php
                                        foreach ($face_list as $id => $item) {
                                            echo ('<a href="catalog.php?catalog=' . $item["catalogID"] . '" class="dropdown-item">' . $item["name"] . '</a>');
                                        }
                                        ?>
                                    </div>
                                    <div>
                                        <div class="dropdown-header">BODY</div>
                                        <?php
                                        foreach ($body_list as $id => $item) {
                                            echo ('<a href="catalog.php?catalog=' . $item["catalogID"] . '" class="dropdown-item">' . $item["name"] . '</a>');
                                        }
                                        ?>
                                    </div>
                                    <div>
                                        <div class="dropdown-header">SUNCREAM</div>
                                        <?php
                                        foreach ($suncream_list as $id => $item) {
                                            echo ('<a href="catalog.php?catalog=' . $item["catalogID"] . '" class="dropdown-item">' . $item["name"] . '</a>');
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <a href="contact.php" class="nav-item nav-link
                            <?php if ($page == "contact") {
                                echo ("active");
                            }; ?>
                            ">Contact</a>
                        </div>
                        <div class="container-fluid col">
                            <a href="cart.php" class="nav-item btn 
                            <?php if ($page == "cart") :
                                echo ("btn-secondary");
                            else :
                                echo ("btn-primary");
                            endif;; ?>
                            ">Cart</a>
                        </div>

                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->