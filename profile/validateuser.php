<?php
$ulen = 5;
$pattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['email']);
    // if (strlen($username) < $ulen) :  header("location:validateuser.php?error01");
    // endif;
    // $matches = null;
    // preg_match($pattern, $email, $matches, 0, 0);
    // if (is_array($matches) && count($matches) < 1) :
    //     header("location:validateuser.php?error02");
    // endif;
    require_once('SQLconnect.php');
    $sql = sprintf("select username from users where email = '%s'", $email);
    $result = $conn->query($sql);
    $uname = $result->fetch_assoc();
    var_dump($uname);
    if ($username == $uname['username']) :
        session_start();
        $_SESSION['username'] = $username;
        header('location:resetpwform.php');
    else :
        header("location:validateuser.php?error03");
    endif;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Validate user</h1>
    <?php if (isset($_GET['error01'])) {
        echo "<div>username is too short</div>";
    }
    if (isset($_GET['error03'])) {
        echo "<div>Email or username is not correct</div>";
    }
    ?>
    <form action="" method="POST">
        <div>Username
            <input type="text" name="username" id="" required>
        </div>
        <div>Email
            <input type="email" name="email" id="" requireD>
        </div>
        <div><button type="submit">Submit</button></div>
    </form>
</body>

</html>