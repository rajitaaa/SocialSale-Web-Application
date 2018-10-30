<?php
session_start();
session_unset($_SESSION['UserEmail']);
session_unset($_SESSION['UserFullName']);
$_SESSION['logged_in']=false;
header('Location:index.php');
session_destroy();
exit();

?>