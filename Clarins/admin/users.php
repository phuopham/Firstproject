<?php
// header
include("header.php");

// get user data
require_once("../dbconnect.php");
$sql = "SELECT * from users";
$result = $conn->query($sql);
$userlist = $result->fetch_all(MYSQLI_ASSOC);
//get user data end

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
                                    <tr>
                                        <form action="adduser.php" method="post">
                                            <td></td>
                                            <td>
                                                <input type="text" name="username" placeholder="Username" require>
                                            </td>
                                            <td>
                                                <input type="text" name="email" placeholder="Email" require>
                                            </td>
                                            <td>
                                                <input type="number" name="phone" placeholder="Phonenumber" require>
                                            </td>
                                            <td><button class="btn btn-primary">Add user</button></td>

                                        </form>
                                    </tr>

                                    <?php
                                    foreach ($userlist as $id => $user) {
                                        echo ("<tr>");
                                        echo ("<td>" . ($id + 1) . "</td>");
                                        echo ("<td>" . $user["username"] . "</td>");
                                        echo ("<td>" . $user["email"] . "</td>");
                                        echo ("<td>" . $user["phone"] . "</td>");
                                        echo ('<td><a class="btn btn-danger" href="adduser.php?remove=' . $user["username"] . '">Remove</a></td>');
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
if (isset($_GET["success"])) {
    echo ('<script>alert("New user added successfully!");</script>');
}
if (isset($_GET["error"])) {
    echo ('<script>alert("Error! Please check the requirement!");</script>');
}
if (isset($_GET["rmsuccess"])) {
    echo ('<script>alert("Remove user successfully");</script>');
}
//footer
include("footer.php");
?>