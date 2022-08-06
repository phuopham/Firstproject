<?php
require_once '../dbconnect.php';

$ulen = 5;
if ($_SERVER['REQUEST_METHOD'] == "POST") :
  $username = htmlspecialchars($_POST['username']);
  $email = htmlspecialchars($_POST['email']);
  if (strlen($username) < $ulen) :  header("location:forgotpw.php?error");
  endif;
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) :
    header("location:forgotpw.php?error");
  endif;
  $sql = sprintf("select username from users where email = '%s'", $email);
  $result = $conn->query($sql);
  $uname = $result->fetch_assoc();
  var_dump($uname);
  if ($username == $uname['username']) :
    session_start();
    $_SESSION['username'] = $username;
    header('location:setpw.php');
  else :
    header("location:forgotpw.php?error");
  endif;
endif;
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
          <p class="login-box-msg">Here you can easily set a new password.</p>

          <form action="forgotpw.php" method="post">
            <?php
            if (isset($_GET["error"])) {
              echo ('<div class="border bg-warning">Username or email is not found</div>');
            }
            ?>

            <div class="input-group mb-3">
              <input type="text" name="username" class="form-control" placeholder="Username" required>
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
              <input type="email" name="email" class="form-control" placeholder="Email">
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
            <a href="index.php">Back to Login</a>
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