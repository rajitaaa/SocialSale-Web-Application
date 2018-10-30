<?php
session_start();
include_once('phplib/db_config.php');
global $con;
$productid=$_GET['productid'];

$username = $_SESSION["username"];
$sql="SELECT * FROM `wishlist` WHERE username='$username' and `product_id`='".mysqli_real_escape_string($con,$productid)."'";

$result = $con->query($sql);

if ($result->num_rows > 0) {
	echo '<script>alert("Product already in wishlist!:)")</script>';
   header("location:wishlist.php");
}
else{
$sqlcommand="INSERT INTO `wishlist`(`username`, `product_id`) VALUES ('".$username."','".$productid."')";
if($con->query($sqlcommand))
{
	echo '<script>alert("Product added to wishlist!")</script>';
        header("location:wishlist.php");
}
}

?>
