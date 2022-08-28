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
    <meta content="width=device-width, initial-scale=0.9" name="viewport">
    <meta content="Clarins" name="keywords">
    <meta content="Clarins" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-primary py-1 d-none d-sm-block">
        <div class="container-fluid container-md">
            <div class="row">
                <div class="col-4">

                </div>
                <div class="col-4 px-2 text-center">
                    <a href="index.php" class="navbar-brand px-5 py-0 m-0">
                        <h1 class="d-none d-lg-block text-white m-0"><span class="text-secondary">C</span>LARINS</h1>
                    </a>
                </div>
                <div class="col-4 text-right">
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
            <nav class="col-12 navbar navbar-expand-lg bg-light navbar-light shadow p-lg-0">
                <a href="index.php" class="navbar-brand d-block d-lg-none">
                    <h1 class="m-0 display-4 text-primary"><span class="text-secondary">C</span>LARINS</h1>
                </a>
                <div class="d-block d-lg-none ml-auto px-3">
                    <a href="cart.php" class="nav-item btn 
                            <?php if ($page == "cart") :
                                echo ("btn-secondary");
                            else :
                                echo ("btn-primary");
                            endif;; ?>
                            ">Cart</a>
                </div>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="col-12 collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-lg-auto py-0 col-lg-5 ">
                        <a href="index.php" class="col nav-item nav-link text-lg-center 
                        <?php
                        if ($page == "index") {
                            echo ("active");
                        };
                        ?>
                        ">Home</a>
                        <a href="gallery.php" class="col nav-item nav-link text-lg-center
                        <?php
                        if ($page == "gallery") {
                            echo ("active");
                        };
                        ?>
                        "><i class=" fas fa-images d-none d-lg-inline"></i>
                            <span class="d-lg-none">Gallery</span>
                        </a>
                        <a href="about.php" class="col nav-item nav-link text-lg-center 
                        <?php
                        if ($page == "about") {
                            echo ("active");
                        };
                        ?>
                        ">About</a>
                        <a href="products.php" class="col nav-item nav-link text-lg-center
                        <?php
                        if ($page == "product") {
                            echo ("active");
                        };
                        ?>
                        ">Products</a>
                    </div>
                    <img src="img/skin-care.png" class="p-0 col-2 mx-xl-3 d-none d-lg-block " style="max-width:8%;">
                    <div class="navbar-nav mr-lg-auto py-0 col-lg-5 d-lg-flex">
                        <div class=" order-lg-2">
                            <a href="contact.php" class="nav-item nav-link text-lg-center
                            <?php if ($page == "contact") {
                                echo ("active");
                            }; ?>
                            ">Contact</a>
                        </div>
                        <div class="d-none d-lg-flex container-fluid justify-content-lg-end px-lg-3 order-lg-3 position-relative">
                            <a href="cart.php" class="nav-item btn 
                            <?php if ($page == "cart") :
                                echo ("btn-secondary");
                            else :
                                echo ("btn-primary");
                            endif;; ?>
                            ">Cart</a>
                            <?php
                            if (isset($_COOKIE["Clarins"])) {
                                if (count(json_decode($_COOKIE["Clarins"])) != 0) {
                                    echo ('<div class="position-absolute bg-info border rounded-circle" style="width:1em; height:1em; top:1em; right:1em"></div>');
                                }
                            }
                            ?>
                        </div>
                        <div class="order-lg-1">
                            <a onclick="categories()" class="nav-item nav-link text-lg-center" style="cursor:pointer">Catalogs</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <!-- catergories dropdown -->
    <div class="position-relative" id="categories" style="display:none">
        <div class="position-absolute w-100 " style="top:0px; z-index:30; opacity:0.92">
            <div class="d-md-flex justify-content-start justify-content-lg-center bg-primary">
                <div class="d-xl-flex justify-content-around">
                    <div>
                        <div class="dropdown-header h4">HAIR</div>
                        <?php
                        foreach ($hair_list as $id => $item) {
                            echo ('<a href="catalog.php?catalog=' . $item["catalogID"] . '" class="dropdown-item">' . $item["name"] . '</a>');
                        }
                        ?>
                    </div>
                    <div>
                        <div class="dropdown-header h4">MAKEUP</div>
                        <?php
                        foreach ($makeup_list as $id => $item) {
                            echo ('<a href="catalog.php?catalog=' . $item["catalogID"] . '" class="dropdown-item">' . $item["name"] . '</a>');
                        }
                        ?>
                    </div>
                </div>
                <div class="d-xl-flex justify-content-around">
                    <div>
                        <div class="dropdown-header h4">PERFUMES</div>
                        <?php
                        foreach ($perfumes_list as $id => $item) {
                            echo ('<a href="catalog.php?catalog=' . $item["catalogID"] . '" class="dropdown-item">' . $item["name"] . '</a>');
                        }
                        ?>
                    </div>
                    <div>
                        <div class="dropdown-header h4">FACE</div>
                        <?php
                        foreach ($face_list as $id => $item) {
                            echo ('<a href="catalog.php?catalog=' . $item["catalogID"] . '" class="dropdown-item">' . $item["name"] . '</a>');
                        }
                        ?>
                    </div>
                </div>
                <div class="d-xl-flex justify-content-around">
                    <div>
                        <div class="dropdown-header h4">BODY</div>
                        <?php
                        foreach ($body_list as $id => $item) {
                            echo ('<a href="catalog.php?catalog=' . $item["catalogID"] . '" class="dropdown-item">' . $item["name"] . '</a>');
                        }
                        ?>
                    </div>
                    <div>
                        <div class="dropdown-header h4">SUNCREAM</div>
                        <?php
                        foreach ($suncream_list as $id => $item) {
                            echo ('<a href="catalog.php?catalog=' . $item["catalogID"] . '" class="dropdown-item">' . $item["name"] . '</a>');
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->