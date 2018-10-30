<?php
    include_once('phplib/db_config.php');
?>
 
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>SocialSale - intra-college e-market and mentoring</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>



<?php
    $query = $_GET['search']; 
    // gets value sent over search form
     
        global $con;
        $query = htmlspecialchars($query); 
        // changes characters used in html to their equivalents, for example: < to &gt;
         
        
        $sql = "SELECT * FROM products
            WHERE (`category` LIKE '%".$query."%')";
        $raw_results = $con->query($sql) or die(mysql_error());
             
        include_once('view.php');
        SearchResults($sql);
   
?>
</body>
</html>