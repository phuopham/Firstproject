if ($_POST) {
$name = $_POST['name'] ?? '';
$id = intval($_POST['id'] ?? 0);
$email = $_POST['email'] ?? '';
$phone = $_POST['phone'] ?? '';
$address = $_POST['address'] ?? '';
// $paymethod = $_POST['paymethod'] ?? '';
$sql = "INSERT INTO user_order (name,email,phone,address,paymethod) VALUES('$name','$email','$phone','$address')";
$conn->query($sql);
}