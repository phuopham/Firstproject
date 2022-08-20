<?php
$priv = 2;
require_once('../dbconnect.php');
$ulen = 5;
$pwlen = 5;

if ($_SERVER["REQUEST_METHOD"] == "POST") :
    $password = "Clarins";
    if (!isset($_POST['username'])) {
        header("location:users.php?error");
    }
    $username = htmlspecialchars($_POST['username']);
    if (!isset($_POST['email'])) {
        header("location:users.php?error");
    }
    $email = htmlspecialchars($_POST['email']);
    if ($phone = intval($_POST['phone'])) {
        header("location:users.php?error");
    }
    if (strlen($username) < $ulen) :  header("location:users.php?error");
    endif;

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) :
        header("location:users.php?error");
    endif;

    if ($_POST["type"] > 2 && $_POST["type"] < 0) {
        header("location:users.php?error");
    }

    $c_user = mysqli_escape_string($conn, $username);
    $c_email = mysqli_escape_string($conn, $email);
    $password_hash = sha1($password);

    $query = sprintf("INSERT INTO `users` (`username`, `password`, `email`, `phone`, `type`) VALUES ('%s','%s','%s', %d, %d)", $c_user, $password_hash, $c_email, $phone, $_POST["type"]);
    $conn->query($query);
    header("location:users.php?success");


endif;
