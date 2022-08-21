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
        $result = $conn->query($sql);
        $sql = "SELECT * FROM user_order order by ordernumber desc limit 1";
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

            //Insert to stockroom to reduce quantity
            $sql = "INSERT into stockroom(productID,quantity) values ('$id',-$quantity)";
            $conn->query($sql);
            //insert to products to increase the sell quantity
            $sql = "UPDATE products SET sell_quantity = sell_quantity +" . $quantity . " where productID =" . $productID;
            $conn->query($sql);
            //
        }
        //check out complete, cleanup cookie
        unset($_COOKIE['Clarins']);
        setcookie('Clarins', '', time() - 3600);
        if (isset($_POST["rememberme"])) {
            $rememberme = [];
            $rememberme["name"] = $_POST["name"];
            $rememberme["email"] = $_POST["email"];
            $rememberme["address"] = $_POST["address"];
            $rememberme["phone"] = $_POST["phone"];
            setcookie('user', json_encode($rememberme), time() + 3600 * 24 * 30);
        }
        //display message
        include("header.php");
        echo ('<div class="container text-center py-5 px-0">');
        echo ("Thank you for puschasing our product!");
        echo ('</div>');
        include("footer.php");
    }

    ?>