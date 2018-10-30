

  
    <?php
    include_once('header.php');

     $username = $_SESSION["username"];
    $sql = "SELECT * from products where productid IN (SELECT product_id from wishlist WHERE username='$username')"; 
    include_once('view2.php');
    SearchResults($sql);
?> 
