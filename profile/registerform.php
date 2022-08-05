<?php
if (isset($_GET['error01'])) {
    echo "Username must have at least 5 characters";
};

if (isset($_GET['error02'])) {
    echo "password must have at least 5 characters";
};

if (isset($_GET['error03'])) {
    echo "password does not match";
};

if (isset($_GET['error04'])) {
    echo "invalid email address";
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
    <h1>Register new user</h1>
    <form action="register.php" method="post">
        <div>New username
            <input type="text" name="username" id="">
        </div>
        <div>New Password
            <input type="password" name="password" id="">
        </div>
        <div>Retype password
            <input type="password" name="password2" id="">
        </div>
        <div> Email
            <input type="email" name="email" id="">
        </div>
        <div>Phone
            <input type="number" name="phone" id="">
        </div>
        <div>
            <button type="reset">Reset</button>
            <button type="submit">Register</button>
        </div>
    </form>
</body>

</html>