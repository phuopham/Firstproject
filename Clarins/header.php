<?php
require_once("dbconnect.php");

//visitor count
include("config.php");
$sql = "SELECT * from visitorcount where IP = '" . $_SERVER['REMOTE_ADDR'] . "' and timestampdiff(hour, view_at, now()) <1";
$result = $conn->query($sql);
//$output = $result->fetch_all();
if (mysqli_num_rows($result) == 0) {
    $sql = "INSERT into visitorcount (ip) values ('" . $_SERVER['REMOTE_ADDR'] . "');";
    $result = $conn->query($sql);
}

$result = $conn->query("SELECT id from visitorcount");
$visitorcount = mysqli_num_rows($result);
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
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

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
                <div class="col-4 px-2">
                    <a href="index.php" class="navbar-brand px-5 py-0 m-0">
                        <h1 class="d-block text-white m-0 "><span class="text-secondary">C</span>LARINS</h1>
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
            <nav class="navbar navbar-expand-lg bg-white navbar-light shadow p-lg-0">

                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="index.php" class="nav-item nav-link 
                        <?php
                        if ($page == "index") {
                            echo ("active");
                        };
                        ?>
                        ">Home</a>
                        <a href="about.php" class="nav-item nav-link
                        <?php
                        if ($page == "about") {
                            echo ("active");
                        };
                        ?>
                        ">About</a>
                        <a href="product.php" class="nav-item nav-link
                        <?php
                        if ($page == "product") {
                            echo ("active");
                        };
                        ?>
                        ">Products</a>
                    </div>
                    <img src="img/skin-care.png" class="mx-5 d-none d-lg-block " style="max-width:8%;">
                    <div class="navbar-nav mr-auto py-0">
                        <div class="dropdown show">
                            <a href="#" class="nav-item nav-link dropdown-toggle" role="button" id="dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Catergoies</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown" style="left:-400% !important;">
                                <div class="d-lg-flex">
                                    <div>
                                        <div class="dropdown-header">HAIR</div>
                                        <a href="#" class="dropdown-item">Sun Protection</a>
                                        <a href="#" class="dropdown-item">After Sun</a>
                                    </div>
                                    <div>
                                        <div class="dropdown-header">MAKEUP</div>
                                        <a href="#" class="dropdown-item">Sun Protection</a>
                                        <a href="#" class="dropdown-item">After Sun</a>
                                    </div>
                                    <div>
                                        <div class="dropdown-header">PERFUMES</div>
                                        <a href="#" class="dropdown-item">Sun Protection</a>
                                        <a href="#" class="dropdown-item">After Sun</a>
                                    </div>
                                    <div>
                                        <div class="dropdown-header">FACE</div>
                                        <a href="#" class="dropdown-item">Cleaners&Toners</a>
                                        <a href="#" class="dropdown-item">Serums</a>
                                        <a href="#" class="dropdown-item">Day care</a>
                                        <a href="#" class="dropdown-item">Night care</a>
                                    </div>
                                    <div>
                                        <div class="dropdown-header">BODY</div>
                                        <a href="#" class="dropdown-item">Hand&Foot care</a>
                                        <a href="#" class="dropdown-item">Bath&Shower</a>
                                        <a href="#" class="dropdown-item">Body Firming</a>
                                        <a href="#" class="dropdown-item">Body Contouring</a>
                                    </div>
                                    <div>
                                        <div class="dropdown-header">SUNSCREEN</div>
                                        <a href="#" class="dropdown-item">Sun Protection</a>
                                        <a href="#" class="dropdown-item">After Sun</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <a href="contact.php" class="nav-item nav-link
                            <?php if ($page == "contact") {
                                echo ("active");
                            }; ?>
                            ">Contact</a>
                        </div>
                        <div class="container-fluid">
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