

       
 <?php  
     include_once('header.php');
     $username = $_SESSION["username"];
    $sql = "SELECT * FROM products  WHERE username='$username' ORDER BY productid DESC";  
    include_once('view.php');
    SearchResults($sql);
?> 
