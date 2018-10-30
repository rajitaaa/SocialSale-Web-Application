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
    <link rel="icon" href="img/core-img/slogo">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="css/core-style.css">
    <link rel="stylesheet" href="style.css">

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
                    <a href="#" class="btn essence-btn">View Wishlist</a>
                </div>
            </div>
        </div>
    </div>

    <!-- ##### Right Side Cart End ##### -->




    <div class="contact-area d-flex align-items-center">

        <div class="google-map">
            <div id="googleMap"></div>
        </div>

        <div class="contact-info">
            <h2>About Us</h2>
            <p>We are third year students Ramya and Rajita, studying B.Tech in Computer Science at National Institute of Technology, Karnataka.</p>

            <div class="contact-address mt-50">
                <p><span>address:</span> NITK, Srinivas Nagar, Surathkal, Mangaluru, Karnataka 575025</p>
                <p><span>telephone:</span> +91 9008818280 </p>
                <p><a href="mailto:rajitag31@gmail.com">rajitag31@gmail.com</a> <br> <a href="mailto:ramyabygari239@gmail.com">ramyabygari239@gmail.com</a></p> 
                
            </div>
        </div>

    </div>

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
    <!-- Google Maps -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwuyLRa1uKNtbgx6xAJVmWy-zADgegA2s"></script>
    <script src="js/map-active.js"></script>

</body>

</html>