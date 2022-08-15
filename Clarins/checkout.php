 <?php
    require_once("dbconnect.php");
    // commit to database

    //

    if ($_POST) {
        $name = $_POST['name'] ?? '';
        $id = intval($_POST['id'] ?? 0);
        $email = $_POST['email'] ?? '';
        $phone = $_POST['phone'] ?? '';
        $address = $_POST['address'] ?? '';
        $paymethod = $_POST['paymethod'] ?? '';
        $sql = "INSERT INTO user_order (name,email,phone,address,paymethod) VALUES('$name','$email','$phone','$address','$paymethod')";
        $conn->query($sql);
        $sql = "SELECT * FROM user_order WHERE name = '$name'";
        $result = $conn->query($sql);
        $product = $result->fetch_assoc();
        $order_number = $product['ordernumber'];

        $products = json_decode($_COOKIE["Clarins"], true);

        foreach ($products as $productID => $quantity) {

            $sql = "SELECT price from products where productID =" . $productID;
            $result = $conn->query($sql);
            $product = $result->fetch_assoc();
            $id = $productID;
            $price = $product['price'];
            $sql = "INSERT into orders(ordernumber,productID,quantity,price) VALUES('$order_number','$id','$quantity','$price')";
            $conn->query($sql);

            //Inset to stockroom to reduce quantity
            $sql = "INSERT into stockroom(productID,quantity) values ('$id',-$quantity)";
            $conn->query($sql);
        }
        //check out complete, cleanup cookie
        unset($_COOKIE['Clarins']);
        setcookie('Clarins', '', time() - 3600);

        include("header.php");
        echo ('<div class="container text-center py-5 px-0">');
        echo ("Thank you for puschasing our product!");
        echo ('</div>');
        include("footer.php");
    }




    ?>