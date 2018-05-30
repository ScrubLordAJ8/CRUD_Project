<?php
require('Connect.php');
$id = $_POST["mod_id"];
$username = $_POST["mod_User"];
$password = $_POST["mod_Pass"];
$storedUsername = "SELECT Username FROM storedPass WHERE Id='".$id."'";
$storedPassword ="SELECT Password FROM storedPass WHERE Id='".$id."'";
if (empty($username)) {
    $username = $storedUsername;
}
if (empty($password)) {
    $password = $storedPassword;
}
$sql = "UPDATE StoredPass SET Username = '".$username."' WHERE ID='".$id."'";
$sql2 = "UPDATE StoredPass SET Password = '".$password."' WHERE ID='".$id."'";
$result1 = mysqli_query($conn, $sql);
$result2 = mysqli_query($conn,$sql2);
 echo "<script> location.href='index.php'; </script>";
?>