<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>SocialSale - intra-college e-market and mentoring</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="css/core-style.css">
    <link rel="stylesheet" href="style.css">

</head>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>SocialSale - intra-college e-market and mentoring</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="css/core-style.css">
    <link rel="stylesheet" href="style.css">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
* {box-sizing: border-box;}

.img-magnifier-container {
  position:relative;
}

.img-magnifier-glass {
  position: absolute;
  border: 3px solid #000;
  border-radius: 50%;
  cursor: none;
  /*Set the size of the magnifier glass:*/
  width: 100px;
  height: 100px;
}
</style>
<script>
function magnify(imgID, zoom) {
  var img, glass, w, h, bw;
  img = document.getElementById(imgID);
  /*create magnifier glass:*/
  glass = document.createElement("DIV");
  glass.setAttribute("class", "img-magnifier-glass");
  /*insert magnifier glass:*/
  img.parentElement.insertBefore(glass, img);
  /*set background properties for the magnifier glass:*/
  glass.style.backgroundImage = "url('" + img.src + "')";
  glass.style.backgroundRepeat = "no-repeat";
  glass.style.backgroundSize = (img.width * zoom) + "px " + (img.height * zoom) + "px";
  bw = 3;
  w = glass.offsetWidth / 2;
  h = glass.offsetHeight / 2;
  /*execute a function when someone moves the magnifier glass over the image:*/
  glass.addEventListener("mousemove", moveMagnifier);
  img.addEventListener("mousemove", moveMagnifier);
  /*and also for touch screens:*/
  glass.addEventListener("touchmove", moveMagnifier);
  img.addEventListener("touchmove", moveMagnifier);
  function moveMagnifier(e) {
    var pos, x, y;
    /*prevent any other actions that may occur when moving over the image*/
    e.preventDefault();
    /*get the cursor's x and y positions:*/
    pos = getCursorPos(e);
    x = pos.x;
    y = pos.y;
    /*prevent the magnifier glass from being positioned outside the image:*/
    if (x > img.width - (w / zoom)) {x = img.width - (w / zoom);}
    if (x < w / zoom) {x = w / zoom;}
    if (y > img.height - (h / zoom)) {y = img.height - (h / zoom);}
    if (y < h / zoom) {y = h / zoom;}
    /*set the position of the magnifier glass:*/
    glass.style.left = (x - w) + "px";
    glass.style.top = (y - h) + "px";
    /*display what the magnifier glass "sees":*/
    glass.style.backgroundPosition = "-" + ((x * zoom) - w + bw) + "px -" + ((y * zoom) - h + bw) + "px";
  }
  function getCursorPos(e) {
    var a, x = 0, y = 0;
    e = e || window.event;
    /*get the x and y positions of the image:*/
    a = img.getBoundingClientRect();
    /*calculate the cursor's x and y coordinates, relative to the image:*/
    x = e.pageX - a.left;
    y = e.pageY - a.top;
    /*consider any page scrolling:*/
    x = x - window.pageXOffset;
    y = y - window.pageYOffset;
    return {x : x, y : y};
  }
}
</script>
</head>



<body>

	<?php include_once('header.php');
	?>

	<!-- ##### Right Side Cart Area ##### -->
    <div class="cart-bg-overlay"> </div>

    <div class="right-side-cart-area">

        <!-- Cart Button -->
        <div class="cart-button">
            <a href="#" id="rightSideCart"><img src="img/core-img/wishlist.png" alt=""></a>
        </div>

        <div class="cart-content d-flex">
            <!-- Cart Summary -->
            <div class="cart-amount-summary">
                    <img src="img/core-img/wishlist.gif">
              
                <div class="checkout-btn mt-100">
                    <a href="wishlist.php" class="btn essence-btn">View Wishlist</a>
                </div>
            </div>
        </div>
    </div>

    <!-- ##### Right Side Cart End ##### -->

    
	  <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb_area breadcumb-style-two bg-img" style="background-image: url(img/bg-img/breadcumb2.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="page-title text-center">
                        <h2 style="color: darkcyan">PRODUCT DETAILS</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->
    <br>
    <br>
    <br>
    <br>
    <br>

     <section class="single_product_details_area d-flex align-items-center">

    <?php
	  
	  $connect = mysqli_connect("localhost", "root", "", "socialsale");
	  
	  $query = $_GET['productid'];
      
      $sql = "SELECT * FROM products
            WHERE (`productid` = ".$query.")";  

 	$result = mysqli_query($connect, $sql);  
                
    while($row = mysqli_fetch_array($result))  
    {  
      echo ' 
	   
	        <div class="single_product_thumb clearfix">    
	               <img id="myimage" src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" style="width:1200px;height:600px;margin-left: 50px"/>
                
  <div id="myresult" class="img-zoom-result"></div>
</div>
	        </div>
<script>

magnify("myimage", 3);
</script>

	        <!-- Single Product Description -->
	        <div class="single_product_desc clearfix">
	            <a href="">
	                <h2>'.$row['name'].'</h2>
	            </a>
	            <p class="product-price"> Rs. '.$row['price'].'</p>
	            <p class="product-price" style="color:cornflowerblue">(For '.$row['type'].')</p>
	            <p class="product-desc" style="font-size:20px"> Details: '.$row['details'].'</p>
	            <p class="product-price" style="color:cornflowerblue">Contact: '.$row['phone'].'</p>
	            <p class="product-price" style="color:black">Seller: '.$row['username'].'</p>
	            <br>
	            <!-- Form -->
	            <form class="cart-form clearfix" method="post">
	                
	                <!-- Cart & Favourite Box -->
	                <div class="cart-fav-box d-flex align-items-center">
	                    <!-- Cart -->
	                     <div class="add-to-cart-btn">
                                                    <a href="addtowishlist.php?productid='.$row['productid'].'" class="btn essence-btn">Add to Wishlist</a>
                                                </div>
	                    <!-- Favourite -->
	                    <div class="product-favourite ml-4">
	                        <a href="addtowishlist.php" class="favme fa fa-heart"></a>
	                    </div>
	                </div>
	            </form>
	           </div>
	        '; 
	}
	?>

		
	 </section>



<?php
    include_once('footer.php');
?>

 <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Classy Nav js -->
    <script src="js/classy-nav.min.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>

</body>

</html>
<body>   <a id="myDropdown"><img src="img/core-img/user.svg" alt=""> </a>

	<?php include_once('header.php');
	?>
	<!-- ##### Right Side Cart Area ##### -->
    <div class="cart-bg-overlay"> </div>

    <div class="right-side-cart-area">

        <!-- Cart Button -->
        <div class="cart-button">
            <a href="#" id="rightSideCart"><img src="img/core-img/wishlist.png" alt=""></a>
        </div>

        <div class="cart-content d-flex">
            <!-- Cart Summary -->
            <div class="cart-amount-summary">
                    <img src="img/core-img/wishlist.gif">
              
                <div class="checkout-btn mt-100">
                    <a href="wishlist.php" class="btn essence-btn">View Wishlist</a>
                </div>
            </div>
        </div>
    </div>

    <!-- ##### Right Side Cart End ##### -->

	  <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb_area breadcumb-style-two bg-img" style="background-image: url(img/bg-img/breadcumb2.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="page-title text-center">
                        <h2 style="color: darkcyan">PRODUCT DETAILS</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->
    <br>
    <br>
    <br>
    <br>
    <br>

     <section class="single_product_details_area d-flex align-items-center">

    <?php
	  
	  $connect = mysqli_connect("localhost", "root", "", "socialsale");
	  
	  $query = $_GET['productid'];
      
      $sql = "SELECT * FROM products
            WHERE (`productid` = ".$query.")";  

 	$result = mysqli_query($connect, $sql);  
                
    while($row = mysqli_fetch_array($result))  
    {  
      echo ' 
	   
	        <div class="single_product_thumb clearfix">    
	               <img src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" style="width:1200px;height:600px;margin-left: 50px"/>
	        </div>

	        <!-- Single Product Description -->
	        <div class="single_product_desc clearfix">
	            <a href="">
	                <h2>'.$row['name'].'</h2>
	            </a>
	            <p class="product-price"> Rs. '.$row['price'].'</p>
	            <p class="product-price" style="color:cornflowerblue">(For '.$row['type'].')</p>
	            <p class="product-desc" style="font-size:20px"> Details: '.$row['details'].'</p>
	            <p class="product-price" style="color:cornflowerblue">Contact: '.$row['phone'].'</p>
	            <p class="product-price" style="color:black">Seller: '.$row['username'].'</p>
	            <br>
	            <!-- Form -->
	            <form class="cart-form clearfix" method="post">
	                
	                <!-- Cart & Favourite Box -->
	                <div class="cart-fav-box d-flex align-items-center">
	                    <!-- Cart -->
	                    <div class="add-to-cart-btn">
                                                    <a href="addtowishlist.php?productid='.$row['productid'].'" class="btn essence-btn">Add to Wishlist</a>
                                                </div>
	                    <!-- Favourite -->
	                    <div class="product-favourite ml-4">
	                        <a href="#" class="favme fa fa-heart"></a>
	                    </div>
	                </div>
	            </form>
	           </div>
	        '; 
	}
	?>

		
	 </section>



<?php
    include_once('footer.php');
?>

 <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Classy Nav js -->
    <script src="js/classy-nav.min.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>

</body>

</html>