<?PHP
require('Connect.php');
$del_id=$_POST['del_id'];
$sql="DELETE FROM StoredPass WHERE ID='".$del_id."'";
$sql2="ALTER TABLE StoredPass AUTO INCREMENT=$id;";
$result1=mysqli_query($conn,$sql);
$result2=mysqli_query($conn,$sql2);
     echo "<script> location.href='index.php'; </script>";
?>