<?php
$ulen = 5;
$pwlen = 5;
if ($_POST['username'] == null) : header("location:index.php?error1");
endif;
$username = htmlspecialchars($_POST['username']);
if ($_POST['password'] == null) : header("location:index.php?error2");
endif;
$password = htmlspecialchars($_POST['password']);

require_once('../dbconnect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") :
    if (strlen($username) < $ulen || strlen($password) < $pwlen) : header("location:index.php?error");
    endif;

    $escape_tring_user = mysqli_escape_string($conn, $username);
    $password_hash = sha1($password);
    $query = sprintf("select username, password from users where username = '%s' or email = '%s'", $escape_tring_user, $escape_tring_user);
    $result = $conn->query($query);
    $user = $result->fetch_array(MYSQLI_ASSOC);

    if ($password_hash == $user['password']) :
        session_start();
        $_SESSION['username'] = $user["username"];
        header('location:main.php');
    else :
        header("location:index.php?error");
    endif;
endif;
