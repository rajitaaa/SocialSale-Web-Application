 <?php  
 $connect = mysqli_connect("localhost", "root", "", "socialsale");  
 session_start();
 if(isset($_POST["insert"]))  
 {  
      $username = $_SESSION["username"];
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"])); 
      $productname = mysqli_real_escape_string($connect,$_POST['productname']);
      $price = mysqli_real_escape_string($connect,$_POST['price']);
      $phone = mysqli_real_escape_string($connect,$_POST['phone']);
      $category = mysqli_real_escape_string($connect,$_POST['category']);
      $type = mysqli_real_escape_string($connect,$_POST['type']);
      $details = mysqli_real_escape_string($connect,$_POST['details']);
      $query = "INSERT INTO products(name,price,phone,category,type,details,image,username) VALUES ('$productname','$price','$phone', '$category', '$type', '$details', '$file', '$username')";  
      if(mysqli_query($connect, $query))  
      {  
           echo '<script>alert("Product details Inserted into Database")</script>'; 
           header("location:display.php");  
      }  
 }  
 ?>  

<!DOCTYPE html>
<html lang="en">
<head>
	<title>SocialSale - intra-college e-market and mentoring</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Social Sale website">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/logo">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="css/core-style.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
    <link href="plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/responsive.css">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="vendor/noui/nouislider.min.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
    
<body>

  
    <?php
    include_once('header.php');
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
                        <h2 style="color: darkcyan">SELL / RENT</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->


	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" method="post" enctype="multipart/form-data">
				<span class="contact100-form-title">
					Product Details
				</span>

				<div class="wrap-input100 validate-input bg1" data-validate="Please Type the product name">
					<span class="label-input100">Product Name</span>
					<input class="input100" type="text" name="productname" placeholder="Enter the name of the product">
				</div>

				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate = "Product Price">
					<span class="label-input100"> Price (in Rs.) </span>
					<input class="input100" type="text" name="price" placeholder="Enter Product Price ">
				</div>

				<div class="wrap-input100 bg1 rs1-wrap-input100">
					<span class="label-input100">Contact Number</span>
					<input class="input100" type="text" name="phone" placeholder="Enter Phone Number">
				</div>

				<div class="wrap-input100 input100-select bg1">
					<span class="label-input100">Category</span>
					<div>
						<select class="js-select2" name="category">
							<option>Please choose</option>
                            <option>Hostel Necessities</option>
							<option>Clothes</option>
							<option>Accessories</option>
							<option>Footwear</option>
                            <option>Other hostel items</option>
							<option>Books</option>
							<option>Cycles</option>
                            <option>Gadgets and electrical appliances</option>
                            <option>Stationary</option>
							<option>Miscellaneous</option>
						</select>
						<div class="dropDownSelect2"></div>
					</div>
				</div>

				
					<div class="wrap-contact100-form-radio">
						<span class="label-input100">What do you want to do with the product?</span>

						<div class="contact100-form-radio m-t-15">
							<input class="input-radio100" id="radio1" type="radio" name="type" value="sell" checked="checked">
							<label class="label-radio100" for="radio1">
								Sell
							</label>
						</div>

						<div class="contact100-form-radio">
							<input class="input-radio100" id="radio2" type="radio" name="type" value="rent">
							<label class="label-radio100" for="radio2">
								Put on rent
							</label>
						</div>

					</div>

				<div class="wrap-input100 validate-input bg0 rs1-alert-validate">
					<span class="label-input100">Product Details</span>
					<textarea class="input100" name="details" placeholder="More Details about Product"></textarea>
				</div>
                <div class="wrap-contact100-form-radio">
						<span class="label-input100">Insert an image of the product</span>
                    <div>
                        <input type="file" name="image" id="image" />  
                         <br />  
                    </div>
                </div>
				<div class="container-contact100-form-btn">
					
                    <button class="contact100-form-btn" type="submit" name="insert" id="insert" value="Insert">
						<span>
							Submit
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
				</div>
			</form>
		</div>
	</div>
  

    <?php
    include_once('footer.php');
    ?>




<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});


			$(".js-select2").each(function(){
				$(this).on('select2:close', function (e){
					if($(this).val() == "Please chooses") {
						$('.js-show-service').slideUp();
					}
					else {
						$('.js-show-service').slideUp();
						$('.js-show-service').slideDown();
					}
				});
			});
		})
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="vendor/noui/nouislider.min.js"></script>
	<script>
	    var filterBar = document.getElementById('filter-bar');

	    noUiSlider.create(filterBar, {
	        start: [ 1500, 3900 ],
	        connect: true,
	        range: {
	            'min': 1500,
	            'max': 7500
	        }
	    });

	    var skipValues = [
	    document.getElementById('value-lower'),
	    document.getElementById('value-upper')
	    ];

	    filterBar.noUiSlider.on('update', function( values, handle ) {
	        skipValues[handle].innerHTML = Math.round(values[handle]);
	        $('.contact100-form-range-value input[name="from-value"]').val($('#value-lower').html());
	        $('.contact100-form-range-value input[name="to-value"]').val($('#value-upper').html());
	    });
	</script>
    
    <script>  
     $(document).ready(function(){  
          $('#insert').click(function(){  
               var image_name = $('#image').val();  
               if(image_name == '')  
               {  
                    alert("Please Select Image");  
                    return false;  
               }  
               else  
               {  
                    var extension = $('#image').val().split('.').pop().toLowerCase();  
                    if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                    {  
                         alert('Invalid Image File');  
                         $('#image').val('');  
                         return false;  
                    }  
               }  
          });  
     });  
    </script> 

<!--===============================================================================================-->
	<script src="js/main.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
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
    <script src="js/jquery-3.2.1.min.js"></script>

    <script src="styles/bootstrap4/popper.js"></script>
    <script src="styles/bootstrap4/bootstrap.min.js"></script>
    <script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
    <script src="plugins/easing/easing.js"></script>
    <script src="plugins/parallax-js-master/parallax.min.js"></script>
    <script src="plugins/colorbox/jquery.colorbox-min.js"></script>
    <script src="js/custom.js"></script>

</body>
</html>
