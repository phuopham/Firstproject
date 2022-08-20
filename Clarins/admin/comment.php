<?php
require_once("../dbconnect.php");
// vision change
if (isset($_GET["vision"])) :
    $sql = "SELECT commentID, visible from comments where commentID = " . $_GET["vision"];
    $result = $conn->query($sql);
    if ($result->num_rows == 0) {
        header("location: comment.php?error");
    } else {
        $com = $result->fetch_array(MYSQLI_ASSOC);
        $sql = "UPDATE comments SET visible =" . ($com["visible"] == 0 ? 1 : 0) . " WHERE commentID = " . $_GET["vision"];
        $conn->query($sql);
        header("location: comment.php?success");
    }
endif;

// get user data

$sql = "SELECT * from comments inner join products 
ON comments.productID = products.productID ";
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
                    <h1>Customers' comments on products</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Comment</li>
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
                                        <th>Comment ID</th>
                                        <th>User Name</th>
                                        <th>Email</th>
                                        <th>Message</th>
                                        <th>Product ID</th>
                                        <th>Visible</th>
                                        <th>Create by</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($userlist as $id => $user) {
                                        echo ("<tr>");
                                        echo ("<td>" . ($id + 1) . "</td>");
                                        echo ("<td>" . $user["name"] . "</td>");
                                        echo ("<td>" . $user["email"] . "</td>");
                                        echo ("<td>" . $user["message"] . "</td>");
                                        echo ("<td>" . $user["productID"] . "</td>");
                                        echo ('<td><a href="comment.php?vision=' . $user["commentID"] . '" class="btn ' . ($user["visible"] == '0' ? 'btn-primary"><i class="fas fa-eye"></i>' : 'btn-danger"><i class="fas fa-eye-slash"></i>') . '</a></td>');
                                        echo ("<td>" . $user["create_by"] . "</td>");
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