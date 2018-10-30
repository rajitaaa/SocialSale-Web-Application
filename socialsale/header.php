
<!DOCTYPE html>
<html>
<head>

<?php
session_start();
?>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Social Sale website">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
<meta name="viewport" content="width=device-width, initial-scale=1">


<!-- Title  -->
<title>SocialSale - intra-college e-market and mentoring</title>

<!-- Favicon  -->
<link rel="icon" href="img/core-img/slogo">

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

</head>

<body>

<!-- ##### Header Area Start ##### -->
    <header class="header_area">
        <div class="classy-nav-container breakpoint-off d-flex align-items-center justify-content-between">
            <!-- Classy Menu -->
            <nav class="classy-navbar" id="essenceNav">
                <!-- Logo -->
                <a class="nav-brand" href="index2.php"><img src="img/core-img/logo.png" alt=""></a>
                <!-- Navbar Toggler -->
                <div class="classy-navbar-toggler">
                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                </div>
                <!-- Menu -->
                <div class="classy-menu">
                    <!-- close btn -->
                    <div class="classycloseIcon">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>
                    <!-- Nav Start -->
                    <div class="classynav">
                        <ul>
                            <li><a href="#">Categories</a>
                                <div class="megamenu">
                                   
                                    <ul class="single-mega cn-col-6">
                                        <li class="title">Hostel Collection</li>
                                        <li><a href="shop.html">Necessities</a></li>
                                        <li><a href="shop.html">Clothes</a></li>
                                        <li><a href="shop.html">Accessories</a></li>
                                        <li><a href="shop.html">Footwear</a></li>
                                        <li><a href="shop.html">Other Hostel Items</a></li>
                                    </ul>
                                    <ul class="single-mega cn-col-6">
                                        <li class="title">Other Collection</li>
                                        <li><a href="shop.html">Books</a></li>
                                        <li><a href="shop.html">Cycles</a></li>
                                        <li><a href="shop.html">Gadgets and electrical appliances</a></li>
                                        <li><a href="shop.html">Stationary</a></li>
                                        <li><a href="shop.html">Miscellaneous</a></li>
                                    </ul>
                                   
                                </div>
                            </li>
                            <li><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="index2.php">Home</a></li>
                                    <li><a href="display.php">Buy or Rent</a></li>
                                    <li><a href="productform.php">Sell or put on rent</a></li>
                                    <li><a href="deleteform.php">Delete a product</a></li>
                                    <li><a href="wishlist.html"> Wishlist</a></li>
                                    <li><a href="mentoring/index.php">Mentoring</a></li>
                                    <li><a href="blog.php">Blog Page</a></li>
                                    <li><a href="contact.php">Contact</a></li>
                                </ul>
                            </li>
                            <li><a href="mentoring/index.php">Mentoring</a></li>
                             <li><a href="blog.php">Blog</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </div>
                    <!-- Nav End -->
                </div>
            </nav>

            <!-- Header Meta Data -->
            <div class="header-meta d-flex clearfix justify-content-end">
                <!-- Search Area -->
                <div class="search-area">
                    <form action="search.php" method="GET">
                        <input type="search" name="search" id="headerSearch" placeholder="Type for search">
                        <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </form>
                </div>
                
                <!-- User Login Info -->
                <div class="user-login-info">
                    <li> <a href="#"><img src="img/core-img/user.svg" alt=""></a>
                    <ul class="dropdown">
                                
                                <?php
                                    if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true)
                                    {
                                        echo "
                                            <li><a href=''> Welcome </a></li>
                                            <li><a href=''>Account</a></li>
                                            <li><a href=''>Track Order</a></li>
                                            <li><a href='logout.php'>Log Out</a></li>
                                        ";
                                    }
                                    else
                                    {
                                        echo "
                                            <li><a href='index.php'>Login/Register</a></li>
                                        ";
                                    }
                                ?>
                                
                            </ul>
                        </li>

                </div><!-- Cart Area -->
                <div class="cart-area">
                    <a href="#" id="essenceCartBtn"><img src="img/core-img/wishlist.png" alt=""> </a>
                </div>
            </div>

        </div>
    </header>
    
    <!-- ##### Header Area End ##### -->
   

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