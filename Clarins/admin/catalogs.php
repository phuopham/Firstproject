<?php
// header
include("header.php");

// get user data
require_once("../dbconnect.php");
$sql = "SELECT * from catalogs";
$result = $conn->query($sql);
$userlist = $result->fetch_all(MYSQLI_ASSOC);

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
                        <li class="breadcrumb-item active">Catalogs</li>
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
                                        <form action="">
                                            <td></td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="name" placeholder="Name" require>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <select class="form-control" name="category">
                                                        <option value="face">Face</option>
                                                        <option value="body">Body</option>
                                                        <option value="sunscreen">Sunscreen</option>
                                                        <option value="hair">Body</option>
                                                        <option value="makeup">Make-up</option>
                                                        <option value="perfumes">Perfumes</option>
                                                    </select>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <button class="btn btn-primary form-control">Add user</button>
                                                </div>
                                            </td>
                                    <tr>
                                        <td colspan="4">
                                            <div class="form-group">
                                                <input class="form-control" type="textarea" name="description" placeholder="Description" require>
                                            </div>

                                        </td>
                                    </tr>

                                    </form>
                                    </tr>

                                    <?php
                                    foreach ($userlist as $id => $user) {
                                        echo ('<tr data-widget="expandable-table" aria-expanded="false" tooltip title="click the row to show description">');
                                        echo ("<td>" . ($id + 1) . "</td>");
                                        echo ("<td>" . $user["name"] . "</td>");
                                        echo ("<td>" . $user["category"] . "</td>");
                                        echo ('<td><a class="btn btn-primary" href="">Remove</a></td>');
                                        echo ("</tr>");
                                        echo ('<tr class="expandable-body">');
                                        echo ("<td colspan='4'><p>" . $user["description"] . "</p></td> </tr>");
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