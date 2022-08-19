<?php
require_once('../dbconnect.php');

//add catalog
if ($_SERVER["REQUEST_METHOD"] == "POST") :
    if (!isset($_POST["name"])) :
        header("location:catalogs.php?error");
    endif;
    if (empty($_POST['name'])) {
        header("location:brands.php?error1");
        exit;
    };
    if (!isset($_POST["description"])) :
        header("location:catalogs.php?error");
    endif;
    if (!is_int($_POST["category"])) :
        header("location:catalogs.php?error");
    endif;

    $name = htmlspecialchars($_POST["name"]);
    $description = htmlspecialchars($_POST["description"]);
    $category = $_POST["category"];
    $sql = "INSERT into catalogs(`name`,`category`,`description`) values ('$name', $category ,'$description')";
    $result = $conn->query($sql);
    if ($result->errno) {
        header("location:catalogs.php?error");
    };
    header("location:catalogs.php?success");
endif;
// header
include("header.php");

// get catalog data
$sql = "SELECT * from catalogs";
$result = $conn->query($sql);
$catalogs = $result->fetch_all(MYSQLI_ASSOC);

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Catalogs</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="main.php">Home</a></li>
                        <li class="breadcrumb-item active">Catalogs</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!--Null-->
    <?php
    if (isset($_GET["error1"])) {
    echo ('<div class="alert alert-danger alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h5><i class="icon fas fa-ban"></i> Alert!</h5>
    You forget entering your name!
    </div>');
    }
    ?>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <th>Catalog ID</th>
                                        <th>Name</th>
                                        <th>Category</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <form action="catalogs.php" method="post">
                                            <td></td>
                                            <td>
                                                <input type="text" class="form-control" name="name" placeholder="Name">
                                            </td>
                                            <td>
                                                <select class="form-control" name="category" required>
                                                    <option value="1">Hair</option>
                                                    <option value="2">Makeup</option>
                                                    <option value="3">Parfurms</option>
                                                    <option value="4">Face</option>
                                                    <option value="5">Body</option>
                                                    <option value="6">Sunscreen</option>
                                                </select>
                        </div>
                        </td>
                        <td>
                            <button class="btn btn-primary form-control">Add catalog</button>
                        </td>
                        <tr>
                            <td colspan="4">
                                <textarea class="form-control" name="description" placeholder="Description" required></textarea>
                            </td>
                        </tr>

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
                        ?>
                        <?php
                        foreach ($catalogs as $id => $catalog) {
                            echo ('<tr data-widget="expandable-table" aria-expanded="false" tooltip title="click the row to show description">');
                            echo ("<td>" . ($id + 1) . "</td>");
                            echo ("<td>" . $catalog["name"] . "</td>");
                            echo ("<td>" . $catalog["category"] . "</td>");
                            echo ('<td></td>');
                            //echo ('<td><a class="btn btn-danger" href="remove.php?catalog=' . $catalog["catalogID"] . '">Remove</a></td>');
                            echo ("</tr>");
                            echo ('<tr class="expandable-body">');
                            echo ("<td colspan='4'><p>" . $catalog["description"] . "</p></td> </tr>");
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