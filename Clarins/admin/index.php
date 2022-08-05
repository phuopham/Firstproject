<?php

// USER VALIDATION start //
    require_once '../dbconnect.php';
    session_start();
    $errors = array();
    if(isset($_POST['login'])){
        $username = htmlspecialchars($_POST['username']);
        $username = $conn->real_escape_string($username);
        $password = htmlspecialchars($_POST['password']);
        $password = $conn->real_escape_string($password);
        $password = sha1($password);
        if(empty($username)){
            $errors['username'] = "Username is required";
        }
        if(empty($password)){
            $errors['password'] = "Password is required";
        }
        $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
        $result = $conn->query($sql);
        var_dump($result->num_rows);
        if($result->num_rows > 0){
          echo "abc";
          $_SESSION['username'] = $username;
          header("main.php");
        
        }else{
          echo "Username or password is incorrect";
      }
    }
//USER VALIDATION end //

?>
<!DOCTYPE html>
<html lang="en">

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

<body>

  <body class="login-page" style="min-height: 496.8px;">
    <div class="login-box">
      <div class="login-logo">
        <a href="../../index2.html"><b>Admin</b> Clarins</a>
      </div>
      <!-- /.login-logo -->
      <div class="card">
        <div class="card-body login-card-body">
          <p class="login-box-msg">Sign in to start your session</p>

          <form action="index.php" method="post">
            <div class="input-group mb-3">
              <input type="text" name="username" value="" class="form-control" placeholder="Username" required>
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
              <input type="password" name="password" value="" class="form-control" placeholder="Password" required>
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-8">
              </div>
              <!-- /.col -->
              <div class="col-4">
                <button type="submit" name="login"  class="btn btn-primary btn-block">Sign In</button>
              </div>
              <!-- /.col -->
            </div>
          </form>

          <p class="mb-1">
            <a href="forgot-password.html">I forgot my password</a>
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