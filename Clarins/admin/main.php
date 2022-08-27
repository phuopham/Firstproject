<?php
$priv = [0, 1, 2];
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

// best sell products
$result = $conn->query("SELECT name, sell_quantity from products order by sell_quantity desc limit 10");
$best_sells = $result->fetch_all(MYSQLI_ASSOC);

// stockroom

$result = $conn->query("SELECT productID, SUM(quantity) as quantity from stockroom group by productID order by quantity limit 10");
$stockroom = $result->fetch_all(MYSQLI_ASSOC);

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
          <!-- total order -->
          <div class="small-box bg-gradient-info">
            <div class="inner">
              <h3><?php echo ($total_order) ?></h3>

              <p>Total Orders</p>
            </div>
            <div class="icon">
              <i class="fas fa-shopping-cart"></i>
            </div>
            <a href="orders.php" class="small-box-footer">
              More info <i class="fas fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <div class="col-lg-3 col-6">
          <!-- total products sell this month -->
          <div class="small-box bg-gradient-info">
            <div class="inner">
              <h3><?php echo ($best_sells[0]['name']) ?></h3>

              <p>Best sell product</p>
            </div>
            <div class="icon">
              <i class="fa fa-gift"></i>
            </div>
            <a href="orders.php" class="small-box-footer">
              More info <i class="fas fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>

      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Top 10 product sells</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <?php foreach ($best_sells as $id => $item) : ?>
                <div class="progress">
                  <div class="progress-bar bg-primary" role="progressbar" style="width: <?php echo (($item['sell_quantity'] / $best_sells[0]['sell_quantity']) * 100) ?>%">
                  </div>
                </div>
              <?php

                echo ('<div class="d-flex justify-content-between mb-3"><div>' . $item["name"] . '</div><div>' . $item['sell_quantity'] . '</div></div>');
              endforeach; ?>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col (left) -->

        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Top 10 lowest quantity in stockroom</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <?php foreach ($stockroom as $id => $item) : ?>
                <div class="progress">
                  <div class="progress-bar bg-danger" role="progressbar" style="width: <?php echo ($item['quantity']) ?>%">
                  </div>
                </div>
              <?php $sql = "SELECT name from products where productID ='" . $item["productID"] . "';";
                $result = $conn->query($sql);
                echo ('<div class="d-flex justify-content-between mb-3"><div>' . $result->fetch_column() . '</div><div>' . $item['quantity'] . '</div></div>');
              endforeach; ?>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col (left) -->

        <!-- col-md-6 -->
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
        <!-- /.col-md-6 -->
      </div>
      <div class="row">

      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php
include("footer.php");
?>