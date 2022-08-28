 <?php
    require_once("dbconnect.php");
    if ($_SERVER["REQUEST_METHOD"] == "POST") :
        if (
            !isset($_POST["name"]) || empty($_POST['name']) || !isset($_POST["email"]) || empty($_POST["email"]) ||
            !isset($_POST["phone"]) || empty($_POST["phone"]) || !isset($_POST["address"]) || empty($_POST["address"])
        ) :
            header("location:cart.php?error");
        endif;
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $phone = intval($_POST['phone']);
        $address = htmlspecialchars($_POST['address']);
        $message = htmlspecialchars($_POST['message']);
        $sql = "INSERT INTO user_order (name,email,phone,address,message) VALUES('$name','$email','$phone','$address','$message')";
        $result = $conn->query($sql);
        $order_number = $conn->insert_id;

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
            $rememberme["name"] = htmlspecialchars($_POST["name"]);
            $rememberme["email"] = htmlspecialchars($_POST["email"]);
            $rememberme["address"] = htmlspecialchars($_POST["address"]);
            $rememberme["phone"] = intval($_POST["phone"]);
            setcookie('user', json_encode($rememberme), time() + 3600 * 24 * 30);
        }
        header("location:products.php?success");
        die();
    endif;
    header("location:products.php?error");
    ?>