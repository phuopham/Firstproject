<?php
$host = 'localhost';
$user  = 'root';
$psw = '';
$db = 'Clarins';
$conn = new mysqli($host, $user, $psw, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

function output($output)
{
    echo ("<pre>");
    echo (var_dump($output));
    echo ("</pre>");
}
