<?php
require_once("dbconnect.php");
// commit to database

//

$sql = "INSERT into user_order ('name', 'email','address') values ('....')";


$products = json_decode($_COOKIE["Clarins"], true);
foreach($product as $productID => $quantity){
    $productID;
    $quantity;
    $conn->query  >>>> $price;

    $sql = "INSERT into orders ........"
}

//check out complete
setcookie('Clarins', "", time() - 864);
header("location:index.php");