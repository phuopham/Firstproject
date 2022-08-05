<?php
require_once('SQLconnect.php');
$ulen = 5;
$pwlen = 5;
//var_dump($_POST);
$username = htmlspecialchars($_POST['username']);
$password = htmlspecialchars($_POST['password']);
$password2 = htmlspecialchars($_POST['password2']);
$email = htmlspecialchars($_POST['email']);
$phone = intval($_POST['phone']);
$pattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i";


if ($_SERVER["REQUEST_METHOD"] == "POST") :
    if (strlen($username) < $ulen) :  header("location:registerform.php?error01");
    endif;
    if (strlen($password) < $pwlen || strlen($password2) < $pwlen) :  header("location:registerform.php?error02");
    endif;
    if (strcmp($password, $password2)) :  header("location:registerform.php?error03");
    endif;
    $matches = null;
    preg_match($pattern, $email, $matches, 0, 0);
    if (is_array($matches) && count($matches) < 1) :
        header("location:registerform.php?error04");
    endif;
    // if (!is_int($phone)) : header("location:index.php?error5");
    // endif;

    $c_user = mysqli_escape_string($conn, $username);
    $c_email = mysqli_escape_string($conn, $email);
    $password_hash = sha1($password);

    $query = sprintf("INSERT INTO `users` (`username`, `password`, `email`, `phone`) VALUES ('%s','%s','%s', '%d')", $c_user, $password_hash, $c_email, $phone);
    $conn->query($query);
    header("location:users.php?success");
endif;
