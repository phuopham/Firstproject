<?php
// reset cookie;
//setcookie('Clarins', "", time() - 864);
//output($_COOKIE);
require("dbconnect.php");
if ($_SERVER["REQUEST_METHOD"] == "GET") :
    if (!isset($_GET["product"]) || empty($_GET["product"])) :
        header("location:products.php");
    endif;
    $key = $_GET["product"];
    if (isset($_GET["add"]) && !isset($_GET["rm"])) :
        if (!isset($_GET["quantity"]) || empty($_GET["quantity"])) {
            header("location:products.php");
        }
        $value = $_GET["quantity"];
        $product = [];
        if (!isset($_COOKIE['Clarins'])) :
            $product[$key] = $value;
            setcookie('Clarins', json_encode($product), time() + 86400 * 30);
            header("location:detail.php?prod=" . $key);
        else :
            $product = json_decode($_COOKIE["Clarins"], true);
            if (!isset($product[$key])) :
                $product[$key] = $value;
            else :
                $product[$key] += $value;
            endif;
            setcookie('Clarins', json_encode($product), time() + 86400 * 30);
            header("location:detail.php?prod=" . $key . "&success");
            die();
        endif;
    endif;
    if (isset($_GET["rm"]) && !isset($_GET["add"])) :
        $product = json_decode($_COOKIE["Clarins"], true);
        unset($product[$key]);
        setcookie('Clarins', json_encode($product), time() + 86400 * 30);
        header("location:cart.php?removed");
        die();
    endif;
else :
    header("location:products.php");
endif;
