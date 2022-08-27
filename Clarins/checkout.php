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
        $message = $_POST['message'] ?? '';
        $sql = "INSERT INTO user_order (name,email,phone,address,message) VALUES('$name','$email','$phone','$address','$message')";
        $result = $conn->query($sql);
        $sql = "SELECT * FROM user_order order by ordernumber desc limit 1";
        $result = $conn->query($sql);
        $product = $result->fetch_assoc();
        $order_number = $product['ordernumber'];

        $products = json_decode($_COOKIE["Clarins"], true);

        foreach ($products as $productID => $quantity) {

            $sql = "SELECT price, discount from products where productID =" . $productID;
            $result = $conn->query($sql);
            $product = $result->fetch_assoc();
            $id = $productID;
            $price = $product['price'] * (100 - $product["discount"]) / 100;
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
        header("location:products.php?success");
        die();
    }
    header("location:products.php?error");
    ?>