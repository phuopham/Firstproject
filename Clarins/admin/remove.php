<?php
require_once("../dbconnect.php");
if ($_SERVER["REQUEST_METHOD"] == "GET") :
    //remove user
    if (isset($_GET['user'])) :
        $query = "SELECT username from users where username = '" . $_GET["user"] . "'";
        $result = $conn->query($query);
        if ($result->num_rows < 1) :
            header("location:users.php?error");
        else :
            $query = "DELETE FROM users WHERE `users`.`username` = '" . $_GET["user"] . "'";
            $conn->query($query);
            header("location:users.php?rmsuccess");
        endif;
    endif;

    //remove brand
    if (isset($_GET['brand'])) :
        $query = "SELECT brandID from brands where brandID = '" . (int)$_GET["brand"] . "'";
        $result = $conn->query($query);
        if ($result->num_rows < 1) :
            header("location:brands.php?error");
        else :
            $query = "DELETE FROM products WHERE `brandID` = '" . (int)$_GET["brand"] . "'";
            $conn->query($query);
            $query = "DELETE FROM brands WHERE `brands`.`brandID` = '" . (int)$_GET["brand"] . "'";
            $conn->query($query);
            header("location:brands.php?rmsuccess");
        endif;
    endif;

    // remove catalog
    if (isset($_GET['catalog'])) :
        $query = "SELECT catalogID from catalogs where catalogID = '" . (int)$_GET["catalog"] . "'";
        $result = $conn->query($query);
        if ($result->num_rows < 1) :
            header("location:catalogs.php?error");
        else :
            $query = "DELETE FROM catalogs WHERE `catalogs`.`catalogID` = '" . (int)$_GET["catalog"] . "'";
            $conn->query($query);
            header("location:catalogs.php?rmsuccess");
        endif;
    endif;

endif;
