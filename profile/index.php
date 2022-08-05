<?php
session_start();
if (isset($_SESSION["username"])) {
    header('location:main.php');
}
if (isset($_GET['success'])) {
    echo "Register successfully!";
};
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
    <a href="registerform.php">Register</a>
    <h2>Login</h2>
    <form action="validate.php" method="post">
        <div>Username
            <input type="text" name="username" id="" required>
            <?php
            if (isset($_GET['error1'])) {
                echo "Username cannot be blank";
            };
            if (isset($_GET['error3'])) {
                echo "Username required at least 5 characters";
            }
            ?>
        </div>
        <div>Password
            <input type="password" name="password" id="">
            <?php
            if (isset($_GET['error2'])) {
                echo "Password cannot be blank";
            };
            if (isset($_GET['error4'])) {
                echo "Password required at least 5 characters";
            }
            ?>
        </div>
        <?php
        if (isset($_GET['error5'])) {
            echo "username or password is invalid";
        }
        ?>
        <div>
            <a href="validateuser.php">Reset password</a>
            <button type="submit">Login</button>
        </div>
    </form>
</body>

</html>