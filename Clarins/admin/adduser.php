<?php
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

    $c_user = mysqli_escape_string($conn, $username);
    $c_email = mysqli_escape_string($conn, $email);
    $password_hash = sha1($password);

    $query = sprintf("INSERT INTO `users` (`username`, `password`, `email`, `phone`) VALUES ('%s','%s','%s', '%d')", $c_user, $password_hash, $c_email, $phone);
    $conn->query($query);
    header("location:users.php?success");


endif;
