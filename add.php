<?PHP
require("Connect.php");
$ID_Tag=$_POST["ID_Tag"];
$storedUsername=$_POST["storedUsername"];
$storedPassword=$_POST["storedPassword"]; //5-7: defines values
$sql = "INSERT INTO StoredPass(ID, Username, Password) VALUES('".$ID_Tag."', '".$storedUsername."', '".$storedPassword."')" ;
$result = mysqli_query($conn,$sql);
    echo "<script> location.href='index.php'; </script>";
?>