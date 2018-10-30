<?php
    include_once('phplib/db_config.php');
?>
 
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Search results</title>
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
         
        
        // makes sure nobody uses SQL injection
        $sql = "SELECT * FROM products
            WHERE (`name` LIKE '%".$query."%') OR (`category` LIKE '%".$query."%')";
        $raw_results = $con->query($sql) or die(mysql_error());
             
        // * means that it selects all fields, you can also write: `id`, `title`, `text`
        // articles is the name of our table
         
        // '%$query%' is what we're looking for, % means anything, for example if $query is Hello
        // it will match "hello", "Hello man", "gogohello", if you want exact match use `title`='$query'
        // or if you want to match just full word so "gogohello" is out use '% $query %' ...OR ... '$query %' ... OR ... '% $query'
         
        if($raw_results->num_rows  > 0){ // if one or more rows are returned do following

            while($results = $raw_results->fetch_assoc()){
            // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
                
                include_once('view.php');
                echo "<p><h3>".$results['name']."</h3>".$results['category']."</p>";
                SearchResults($sql);
                // posts results gotten from database(title and text) you can also show id ($results['id'])
            }
             
        }
        else{ // if there is no matching rows do following
            echo "No results";
        }
         
   
?>
</body>
</html>