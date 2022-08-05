<?php
// Validate session
session_start();
if (!isset($_SESSION['username'])) :
    header('location:validateuser.php');
endif;
$username = $_SESSION['username'];
// validate session end
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
    <form action="resetpw.php" method="post">
        <div>New password:
            <input type="password" name="password" id="">
        </div>
        <div> Retype password:
            <input type="password" name="password2" id="">
        </div>
        <?php
        if (isset($_GET['error'])) {
            echo "password does not match";
        };
        ?>
        <div><button type="submit">Submit</button></div>
    </form>
</body>

</html>