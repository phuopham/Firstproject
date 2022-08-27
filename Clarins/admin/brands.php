<?php
$priv = [1, 2];
// get user data
require_once("../dbconnect.php");
$sql = "SELECT * from brands";
$result = $conn->query($sql);
$brandlist = $result->fetch_all(MYSQLI_ASSOC);

if ($_SERVER["REQUEST_METHOD"] == "POST") :
    if (!isset($_POST["description"])) :
        header("location:catalogs.php?error");
    endif;
    $description = $_POST["description"];
    //update brand
    if (isset($_POST['brandID'])) :
        $sql = "UPDATE brands SET description ='$description' WHERE brandID =" . $_POST['brandID'];
        $result = $conn->query($sql);
        header('location:brands.php?editsuccess');
    endif;
    if (isset($_POST['name']) && empty($_POST['name'])) {
        header("location:brands.php?error");
        exit;
    };

    if (isset($_POST["name"])) {
        $name = htmlspecialchars($_POST["name"]);
        $sql = "SELECT name from brands where name = '" . $name . "'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) :
            header('location:brands.php?error');
        else :
            $description = $_POST["description"];
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
                    <h1>Brand list</h1>
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
            <?php
            if (isset($_GET["error"])) {
                echo ('<div class="alert alert-danger alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h5><i class="icon fas fa-ban"></i> Alert!</h5>
    Fields cannot be blank!
    </div>');
            }
            if (isset($_GET["editsuccess"])) {
                echo ('<div class="alert alert-success alert-dismissible">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
<h5><i class="icon fas fa-thumbs-up"></i> Alert!</h5>
Brand edited successfully!
</div>');
            }
            if (isset($_GET["rmsuccess"])) {
                echo ('<div class="alert alert-success alert-dismissible">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
<h5><i class="icon fas fa-thumbs-up"></i> Alert!</h5>
Brand remove successfully!
</div>');
            }
            if (isset($_GET["success"])) {
                echo ('<div class="alert alert-success alert-dismissible">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
<h5><i class="icon fas fa-thumbs-up"></i> Alert!</h5>
Brand create successfully!
</div>');
            }
            ?>
            <div class="row justify-content-center">
                <div class="col-10">
                    <p class="text-danger"><b>WARNING:</b> If you delete a brand, all related product will be removed too . Be careful!</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-wrap">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($brandlist as $id => $brand) {
                                        echo ('<tr>');
                                        echo ("<td >" . ($id + 1) . "</td>");
                                        echo ("<td>" . $brand["name"] . "</td>");
                                        echo ('<td><form action="brands.php" style="width:100%" method="post" id="' . $id . '">');
                                        echo ('<textarea class="form-control m-0" style="min-height:120px" name="description">' . $brand["description"] . '</textarea>');
                                        echo ('<input type="text" class="d-none" name="brandID" value="' . $brand['brandID'] . '">');
                                        echo ('<button type="submit" class="btn btn-warning mt-2 ml-2">Save edit</button></form></td>');
                                        echo ('<td><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal" onclick="submit(event)" brand="' . $brand["brandID"] . '">Delete</button></td>');

                                        echo ("</tr>");
                                    };
                                    ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <form action="brands.php" id="add" method="post">
                                            <td></td>
                                            <td>
                                                <input type="text" class="form-control" name="name" placeholder="Name">
                                            </td>
                                            <td>
                                                <textarea class="form-control" name="description" placeholder="Description"></textarea>
                                            </td>
                                            <td>
                                                <button class="btn btn-primary form-control" type="submit">Add brand</button>
                                            </td>
                                        </form>
                                    </tr>
                                </tfoot>
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
                <p>You cannot revert this action! all products associate with this brands will be removed. Are you sure to do this?</p>
            </div>
            <div class="modal-footer justify-content-between">

            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<script>
    function submit(e) {
        console.log("alo");
        var text = e.currentTarget.getAttribute("brand");
        text = '<button type="button" class="btn btn-default" data-dismiss="modal">No</button><a class="btn btn-danger" href="remove.php?brand=' + text + '">Yes</a>';
        console.log(text);
        $(".modal-footer").html(text);
    };
</script>
<?php
//footer
include("footer.php");
?>