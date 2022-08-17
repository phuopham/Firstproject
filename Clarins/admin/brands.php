<?php
// get user data
require_once("../dbconnect.php");
$sql = "SELECT * from brands";
$result = $conn->query($sql);
$brandlist = $result->fetch_all(MYSQLI_ASSOC);

if ($_SERVER["REQUEST_METHOD"] == "POST") :
    if ($_POST['name'] != "") :
    else: header("location:brands.php?error1");
    endif;
    if (isset($_POST["name"])) {
        $name = htmlspecialchars($_POST["name"]);
        $sql = "SELECT name from brands where name = '" . $name . "'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) :
            header('location:brands.php?error');
        else :
            $description = htmlspecialchars($_POST["description"]);
            $sql = "INSERT into brands (`name`,`description`) values ( '" . $name . "', '" . $description . "'); ";
            $result = $conn->query($sql);
            header("location:brands.php?success");
        endif;
    }
endif;

// header
include("header.php");
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>User list</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="main.php">Home</a></li>
                        <li class="breadcrumb-item active">Brands</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-wrap">
                                <thead>
                                    <tr>
                                        <th>Brand ID</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <form action="brands.php" method="post">
                                            <td></td>
                                            <td>
                                                <input type="text" class="form-control" name="name" placeholder="Name" require>
                                            </td>
                                            <td>
                                                <textarea class="form-control" name="description" placeholder="Description" require></textarea>
                                            </td>
                                            <td>
                                                <button class="btn btn-primary form-control" type="submit">Add brand</button>
                                            </td>
                                        </form>
                                    </tr>
                                    <?php
                                    if (isset($_GET["error"])) {
                                        echo ('<div class="alert alert-danger alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <h5><i class="icon fas fa-ban"></i> Alert!</h5>
                                        Username already matches your existing name!
                                      </div>');
                                      }
                                      if (isset($_GET["error1"])) {
                                        echo ('<div class="alert alert-danger alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <h5><i class="icon fas fa-ban"></i> Alert!</h5>
                                        You forget entering your name!
                                      </div>');
                                      }
                                    ?>
                                    
                                    </tr>

                                    <?php
                                    foreach ($brandlist as $id => $brand) {
                                        echo ('<tr>');
                                        echo ("<td>" . ($id + 1) . "</td>");
                                        echo ("<td>" . $brand["name"] . "</td>");
                                        echo ("<td>" . $brand["description"] . "</td>");
                                        echo ('<td><a class="btn btn-danger" href="remove.php?brand=' . $brand["brandID"] . '">Remove</a></td>');
                                        echo ("</tr>");
                                    };
                                    ?>



                                </tbody>
                            </table>

                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
</div>
<?php
//footer
include("footer.php");
?>