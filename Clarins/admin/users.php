<?php
// header
include("header.php");

// get user data
require_once("../dbconnect.php");
$sql = "SELECT * from users";
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
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Users</li>
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
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>User</th>
                                        <th>email</th>
                                        <th>phone</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($userlist as $id => $user) {
                                        echo ("<tr>");
                                        echo ("<td>$id</td>");
                                        echo ("<td>" . $user["username"] . "</td>");
                                        echo ("<td>" . $user["email"] . "</td>");
                                        echo ("<td>" . $user["phone"] . "</td>");
                                        echo ('<td><a class="btn btn-primary" href="">Remove</a></td>');
                                        echo ("</tr>");
                                    };
                                    ?>

                                    <tr>
                                        <form action="">
                                            <td></td>
                                            <td>
                                                <input type="text" name="username" placeholder="Username" require>
                                            </td>
                                            <td>
                                                <input type="text" name="username" placeholder="Username" require>
                                            </td>
                                            <td>
                                                <input type="text" name="username" placeholder="Username" require>
                                            </td>
                                            <td><button class="btn btn-primary">Add user</button></td>

                                        </form>
                                    </tr>


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