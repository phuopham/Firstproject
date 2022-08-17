<?php
require_once("../dbconnect.php");
// customer count//
$result = $conn->query("SELECT id from visitorcount");
$visitorcount = mysqli_num_rows($result);
//customer count end//

//order counts
$result = $conn->query("SELECT ordernumber from user_order");
$total_order = mysqli_num_rows($result);

// total comments
$result = $conn->query("SELECT commentID from comments");
$total_comment = mysqli_num_rows($result);

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
        <div class="col-lg-3 col-6">
          <!-- visitor count -->
          <div class="small-box bg-gradient-info">
            <div class="inner">
              <h3><?php echo ($visitorcount) ?></h3>

              <p>Unique Visitors</p>
            </div>
            <div class="icon">
              <i class="fas fa-chart-pie"></i>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-6">
          <!-- total order -->
          <div class="small-box bg-gradient-info">
            <div class="inner">
              <h3><?php echo ($total_order) ?></h3>

              <p>Total Orders</p>
            </div>
            <div class="icon">
              <i class="fas fa-shopping-cart"></i>
            </div>
            <a href="order.php" class="small-box-footer">
              More info <i class="fas fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <div class="col-lg-3 col-6">
          <!-- total comments -->
          <div class="small-box bg-gradient-info">
            <div class="inner">
              <h3><?php echo ($total_comment) ?></h3>

              <p>Total comments</p>
            </div>
            <div class="icon">
              <i class="far fa-comments"></i>
            </div>
            <a href="comment.php" class="small-box-footer">
              More info <i class="fas fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-6">
          <!-- total products sell this month -->
          <div class="small-box bg-gradient-info">
            <div class="inner">
              <h3>Total product sell this month</h3>

              <p>Total product sell this month</p>
            </div>
            <div class="icon">
              <i class="far fa-comments"></i>
            </div>
            <a href="order.php" class="small-box-footer">
              More info <i class="fas fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>

      </div>
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