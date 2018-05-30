<?php
require('Connect.php');
$id = $_POST["mod_ID"];
$username = $_POST["mod_User"];
$password = $_POST["mod_Pass"];
if ($username == '' or $password == '') {
    $error = 'ERROR: Please fill in all required fields!';
    die($error);
} else {
mysqli_query($conn, "UPDATE StoredPass SET Username = '".$username."', Password='".$password."' WHERE ID='".$id."'");
    echo "<script> location.href='index.php'; </script>";
}
?>