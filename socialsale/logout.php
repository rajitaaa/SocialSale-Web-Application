<?php
session_start();
session_unset($_SESSION['UserEmail']);
session_unset($_SESSION['UserFullName']);
header('Location:index.php');
exit();

?>