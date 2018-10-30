<?php
session_start();
include_once('phplib/db_config.php');
global $con;
$productid=$_GET['productid'];

$username = $_SESSION["username"];
$sql="DELETE FROM `wishlist` WHERE username='$username' and `product_id`='".mysqli_real_escape_string($con,$productid)."'";

$result = $con->query($sql);

if ($result->num_rows > 0) {
	echo '<script>alert("Product removed from wishlist!:)")</script>';
   header("location:wishlist.php");
}
else{

	echo '<script>alert("Nothing to remove from wishlist!")</script>';
        header("location:wishlist.php");
}


?>