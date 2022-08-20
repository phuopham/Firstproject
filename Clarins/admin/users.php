<?php
$priv = [2];

// get user data
require_once("../dbconnect.php");
$sql = "SELECT * from users";
$result = $conn->query($sql);
$userlist = $result->fetch_all(MYSQLI_ASSOC);
//get user data end
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
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>User type</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <form action="adduser.php" class="form-group" method="post">
                                            <td></td>
                                            <td>
                                                <input class="form-control" type="text" name="username" placeholder="Username" require>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" name="email" placeholder="Email" require>
                                            </td>
                                            <td>
                                                <input type="number" class="form-control" name="phone" placeholder="Phonenumber" require>
                                            </td>
                                            <td>
                                                <select name="type" id="">
                                                    <option value="0">Agent</option>
                                                    <option value="1">Operator</option>
                                                    <option value="2">Administrator</option>
                                                </select>
                                            </td>
                                            <td><button class="btn btn-primary form-control">Add user</button></td>

                                        </form>
                                    </tr>

                                    <?php
                                    foreach ($userlist as $id => $user) {
                                        echo ("<tr>");
                                        echo ("<td>" . ($id + 1) . "</td>");
                                        echo ("<td>" . $user["username"] . "</td>");
                                        echo ("<td>" . $user["email"] . "</td>");
                                        echo ("<td>" . $user["phone"] . "</td>");
                                        $type = ($user["type"] == 0) ? "Agent" : (($user["type"] == 1) ? "Operator" : "Administrator");
                                        echo ("<td>" . $type . "</td>");
                                        echo ('<td><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal" onclick="submit(event)" user="' . $user["username"] . '">Delete</button></td>');
                                        echo ("</tr>");
                                    };
                                    ?>
                                </tbody>
                            </table>

                        </div>
                        <!-- /.card-body -->
                        <!-- .modal -->
                        <div class="modal fade" id="deleteModal">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header bg-warning">
                                        <h4 class="modal-title">Caution!</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>You cannot revert this action. Are you sure?</p>
                                    </div>
                                    <div class="modal-footer justify-content-between">

                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
</div>

<script>
    function submit(e) {
        console.log("alo");
        var text = e.currentTarget.getAttribute("user");
        text = '<button type="button" class="btn btn-default" data-dismiss="modal">No</button><a class="btn btn-danger" href="remove.php?user=' + text + '">Yes</a>';
        console.log(text);
        $(".modal-footer").html(text);
    };
</script>

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