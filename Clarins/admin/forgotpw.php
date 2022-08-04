<?php
// USER VALIDATION start //

//USER VALIDATION end //
?>

<?php
require_once 'dbconnect.php';

function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

if(isset($_POST['submit'])){
    $username = htmlspecialchars($_POST['username']) ;
    $conn->real_escape_string($username);
    $password = htmlspecialchars($_POST['password']) ;
    $conn->real_escape_string($password);
    $sql = "SELECT username from users where username = '$username' AND [password] = '$password'";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
        $newpass = generateRandomString();
        $newpass_hash = sha1($newpass);
        $sql = "UPDATE users SET password = '$newpass_hash' WHERE username = '$username' AND [password] = '$password'";
        if($conn->query($sql) === TRUE){
            echo "Your new password is: $newpass";
        }else{
            echo "<p style=\"color:red;\">Error: " . $sql . "<br>" . $conn->error . "</p>";
        }
    }else{
        echo "<p style=\"color:red;\">Username or password is not exist</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Log in</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="../css/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../css/adminlte.min.css">
  </head>
</head>

<body>

  <body class="login-page" style="min-height: 496.8px;">
    <div class="login-box">
      <div class="login-logo">
        <a href="../../index2.html"><b>Admin</b> Clarins</a>
      </div>
      <div class="card">
        <div class="card-body login-card-body">
          <p class="login-box-msg">You forgot your password? Here you can easily retrieve a new password.</p>

          <form action="recover-password.html" method="post">
            <div class="input-group mb-3">
              <input type="email" class="form-control" placeholder="Email">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <button type="submit" class="btn btn-primary btn-block">Request new password</button>
              </div>
              <!-- /.col -->
            </div>
          </form>

          <p class="mt-3 mb-1">
            <a href="login.html">Login</a>
          </p>
          <p class="mb-0">
            <a href="register.html" class="text-center">Register a new membership</a>
          </p>
        </div>
        <!-- /.login-card-body -->
      </div>
    </div>
    <!-- /.login-box -->

    <!-- Jquerry + bootstrap -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../js/adminlte.min.js"></script>

  </body>

</html>