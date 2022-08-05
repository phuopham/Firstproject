<?php
//error1: username cannot be blank
//error2: password cannot be blank
//error3: username requires at least $ulen characters
//error4: password requires at least $ulen characters
//error5: username or password is not valid.
$ulen = 5;
$pwlen = 5;
$username = htmlspecialchars($_POST['username']);
$password = htmlspecialchars($_POST['password']);
//error6: Username is invalid email format
//$pattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i";
//
require_once('SQLconnect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") :
    if ($username == null) : header("location:index.php?error1");
    endif;
    if ($password == null) : header("location:index.php?error2");
    endif;
    if (strlen($username) < $ulen) : header("location:index.php?error3");
    endif;
    if (strlen($password) < $pwlen) : header("location:index.php?error4");
    endif;
    // $matches = null;
    // preg_match($pattern, $username, $matches, 0, 0);
    // if (is_array($matches) && count($matches) < 1) {
    //     header("location:index.php?error6");
    // }

    $escape_tring_user = mysqli_escape_string($conn, $username);
    $password_hash = sha1($password);
    $query = sprintf("select password from users where username = '%s'", $escape_tring_user);
    $result = $conn->query($query);
    $pw = $result->fetch_array(MYSQLI_ASSOC);

    if ($password_hash == $pw['password']) :
        session_start();
        $_SESSION['username'] = $username;
        header('location:main.php');
    else :
        header("location:index.php?error5");
    endif;
endif;
