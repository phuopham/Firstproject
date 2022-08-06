<?php
require_once("../dbconnect.php");
// customer count//
$sql = "SELECT * from visitorcount where IP = '" . $_SERVER['REMOTE_ADDR'] . "' and timestampdiff(hour, view_at, now()) <1";
$result = $conn->query($sql);
//$output = $result->fetch_all();
if (mysqli_num_rows($result) == 0) {
  $sql = "INSERT into visitorcount (ip) values ('" . $_SERVER['REMOTE_ADDR'] . "');";
  $result = $conn->query($sql);
};
$result = $conn->query("SELECT id from visitorcount");
$visitorcount = mysqli_num_rows($result);
//customer count end//

//header
include("header.php");
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Homepage</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Homepage</a></li>
            <li class="breadcrumb-item active"></li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- /.col-md-6 -->
        <div class="col-lg-6">
          <div class="card">
            <div class="card-header">
              <h5 class="m-0">Welcome to Clarins Admin page</h5>
            </div>
            <div class="card-body">
              <h6 class="card-title">Please take time to read our guide</h6>

              <p class="card-text">The guide document below is really helpful to get start using Admin page.</p>
              <a href="#" class="btn btn-primary">Go to guide</a>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h2 class="text-center">Visitor count: <?php echo ($visitorcount) ?> </h2>

            </div>
          </div>
        </div>
        <!-- /.col-md-6 -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
  <div class="p-3">
    <h5>Title</h5>
    <p>Sidebar content</p>
  </div>
</aside>
<!-- /.control-sidebar -->

<?php
include("footer.php");
?>