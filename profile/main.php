<?php
// Validate session
session_start();
if (!isset($_SESSION['username'])) :
    header('location:index.php');
endif;
$username = $_SESSION['username'];
// validate session end
// fetch data
require_once('SQLconnect.php');
$sql = sprintf("select username, email, phone from users where username = '%s'", $username);
$result = $conn->query($sql);
$elm = $result->fetch_array(MYSQLI_ASSOC);
//fetch data end

// logout start
if (isset($_GET['logout'])) {
    session_unset();
    header('location:index.php');
}
// logout end

// upload photo start
if (isset($_POST['submit'])) {
    echo "here";
    if (!file_exists('uploads')) {
        mkdir('uploads', 777, true);
    }
    echo '<pre>';
    var_dump($_FILES);
    echo '</pre>';

    $file = $_FILES['file'];
    $fileTmpName = $file['tmp_name'];
    $fileActualExt = strtolower(end($fileExt));
    $allowed = array('jpg', 'jpeg', 'png');
    if (in_array($fileActualExt, $allowed)) {
        if ($fileError === 0) {
            if ($fileSize < 1000000) {
                $fileNameNew = $username . strtolower(end($fileExt));
                $fileDestination = 'uploads/' . $fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
                header("Location: main.php?uploadsuccess");
            } else {
                header("Location: main.php?toobig");
            }
        } else {
            header("Location: main.php?uploaderror");
        }
    } else {
        header("Location: main.php?uploadfiletypeerror");
    }
}
// upload photo end
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="main.php?logout">Logout</a>
    <h1>Profile</h1>
    <?php
    if (!is_null($elm['avatar'])) {
        echo "<div>";
        echo '<img src="' . $elm['avatar'] . '" alt="" style="width:100px" srcset="">';
        echo "</div>";
    }
    ?>
    <div>Username: <?php echo $elm['username']; ?></div>
    <div>Email: <?php echo $elm['email']; ?> </div>
    <div>Phone: <?php echo $elm['phone']; ?></div>
    <div><a href="resetpwform.php">Change password</a></div>
    <div><a href="main.php?upload">Upload your photo</a></div>
    <?php
    if (!isset($_GET['upload'])) {
        echo "<form style='display:none'>";
    } else echo "<form method='post'>";
    ?>
    <input type="file" name="image[]" id="">
    <button type="submit" name="submit">Upload</button>
    </form>
    <?php
    if (isset($_GET['uploadsuccess'])) {
        echo "Upload success.";
    }
    if (isset($_GET['toobig'])) {
        echo "File is too big!";
    }
    if (isset($_GET['uploaderror'])) {
        echo "Cannot upload file";
    }
    if (isset($_GET['uploadsuccess'])) {
        echo "Upload success";
    }
    if (isset($_GET['uploadfiletypeerror'])) {
        echo "File is not an image";
    }
    ?>

</body>

</html>