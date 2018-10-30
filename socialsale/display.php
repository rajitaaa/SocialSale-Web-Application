  

<?php  
    $sql = "SELECT * FROM products ORDER BY productid DESC";  
    include_once('view.php');
    SearchResults($sql);
?> 