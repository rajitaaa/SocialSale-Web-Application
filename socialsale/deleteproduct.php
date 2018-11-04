
<?php
session_start();
include_once('phplib/db_config.php');
global $con;

$productid=$_GET['productid'];

$username = $_SESSION['username'];

$sql="DELETE FROM `products` WHERE username='$username' and `productid`='".mysqli_real_escape_string($con,$productid)."'";

$result = $con->query($sql);

if ($result->num_rows > 0) {
	echo '<script>alert("Product removed!")</script>';
   header("location:myitems.php");
}
else{

	echo '<script>alert("Nothing to remove!")</script>';
        header("location:myitems.php");
}


?>