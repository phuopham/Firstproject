<?php
session_start();
if (!isset($_SESSION['username'])) :
    header('location:validateuser.php');
endif;
require_once('../dbconnect.php');
$username = $_SESSION['username'];
if (isset($_POST['password']) && isset($_POST['password2'])) :
    $password = htmlspecialchars($_POST['password']);
    $password2 = htmlspecialchars($_POST['password2']);
    if ($password != null && $password2 != null) :
        if (!strcmp($password, $password2)) :
            $sql = sprintf("UPDATE `users` SET `password` = '%s' WHERE `users`.`username` = '%s'", sha1($password), $username);
            $conn->query($sql);
            session_unset();
            header("location:index.php?pwsuccess");
        else :
            header("location:setpw.php?error");
        endif;
    else :
        header("location:setpw.php?error");
    endif;
else :
    header("location:setpw.php?error");
endif;
