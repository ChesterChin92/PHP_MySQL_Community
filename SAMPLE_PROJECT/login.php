<?php


require_once('dbcon.php');
var_dump($_POST);


$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM user WHERE username = '$username' AND password ='$password'";

$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    echo "Tahniah!! Anda Pengguna Yang Sah.";
    //header("main.php");
} else {
    echo "Harap Maaf. Anda Pengguna Tidak Sah.";
    //header("loginForm.php");
}
$con->close();


?>

<script>
alert("Sending you to a new page.");
window.location.href = "index.php";

</script>