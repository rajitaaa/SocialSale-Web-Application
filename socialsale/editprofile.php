 <?php


    include_once('header.php');
    

              $connect = mysqli_connect("localhost", "root", "", "socialsale");  
            
		if (isset($_POST['insert'])) {

               $newemail = mysqli_real_escape_string($connect,$_POST['email']);
               $username = mysqli_real_escape_string($connect,$_POST['username']);
               $username2 = $_SESSION["username"];
               $newpassword =mysqli_real_escape_string($connect, md5($_POST['password']));
               $newpassword1 =mysqli_real_escape_string($connect, md5($_POST['confirmation']));
	       $phone = mysqli_real_escape_string($connect,$_POST['phone']);
               $college = mysqli_real_escape_string($connect,$_POST['college']);
               $address = mysqli_real_escape_string($connect,$_POST['address']);
           
              if($newpassword==$newpassword1 && $username==$username2){
              $query = "UPDATE user_login SET email_id ='$newemail', password ='$newpassword' WHERE l_username='$username2'";
              if(strlen($phone))
              $query1 = "UPDATE user_login SET phone_no ='$phone' WHERE l_username='$username2'";
              if(strlen($college))
              $query2 = "UPDATE user_login SET college ='$college' WHERE l_username='$username2'";
               if(strlen($address))
              $query3 = "UPDATE user_login SET address ='$address' WHERE l_username='$username2'";
              
           
              
             

        if(mysqli_query($connect, $query))  
      {    
           echo '<script>alert("Database updated")</script>'; 
          header("location:index2.php"); 
      }  
else
        echo '<script>alert("Enter correct details")</script>';
 if(mysqli_query($connect, $query1))  
      {    
           echo '<script>alert("Database updated")</script>';  
          header("location:index.php");
      }  
else
        echo '<script>alert("Enter correct details")</script>';
           header("location:index.php");


 if(mysqli_query($connect, $query2))  
      {    
           echo '<script>alert("Database updated")</script>';  
          header("location:index.php");
      }  
else
        echo '<script>alert("Enter correct details")</script>';
 if(mysqli_query($connect, $query3))  
      {    
           echo '<script>alert("Database updated")</script>';
 header("location:index.php");  
      }  
else
        echo '<script>alert("Enter correct details")</script>';
}}
   
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

    
    <!-- ##### Right Side Cart End ##### -->
    
    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb_area breadcumb-style-two bg-img" style="background-image: url(img/bg-img/breadcumb2.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="page-title text-center">
                        <h2 style="color: darkcyan">PROFILE</h2>
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
					Edit Profile
				</span>

				<div class="wrap-input100 validate-input bg1" data-validate=$_SESSION["username"]>
					<span class="label-input100">Username</span>
					<input class="input100" type="text" name="username" placeholder="Enter your username">
				</div>
                                <div class="wrap-input100 validate-input bg1" data-validate="Please Type your email-id">
					<span class="label-input100">Email-Id</span>
					<input class="input100" type="text" name="email" placeholder="Enter your email-id">
				</div>

				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate = "New Password">
					<span class="label-input100">New Password </span>
					<input class="input100" type="password" name="password" placeholder="Enter password" required>
                                       
				</div>

				<div class="wrap-input100 bg1 rs1-wrap-input100" data-validate = "Confirm your Password again">
					<span class="label-input100">Confirm Password</span>
					<input class="input100" type="password" name="confirmation" placeholder="Enter password again" required>
				</div>

			<div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate = "Please type your phone number" >
			      <span class="label-input100">Phone number</span>
			      <input class="input100" type="text" name="phone" placeholder="Enter your phone number" required>
			    </div>
                         <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate = "Please type your college name" >
			      <span class="label-input100">College name</span>
			      <input class="input100" type="text" name="college" placeholder="Enter your college name" required>
			    </div>
                       <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate = "Please type your contact address" >
			      <span class="label-input100">Contact address</span>
			      <input class="input100" type="text" name="address" placeholder="Enter your address" required>
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
