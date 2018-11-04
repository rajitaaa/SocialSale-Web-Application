  
  <?php

     $connect = mysqli_connect("localhost", "root", "", "socialsale");
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
    $username = $_SESSION['username'];
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
                      <?php echo "<h2 style='color: darkcyan'>".$username."'s ITEMS </h2> "; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->




    <br>
      <!-- ##### Shop Grid Area Start ##### -->
    <section class="shop_grid_area section-padding-80">
        <div class="container">
            <div class="row">
                

                <div class="col-12 col-md-8 col-lg-9">
                    <div class="shop_grid_product_area">
                        <div class="row">
                            <div class="col-12">
                                <div class="product-topbar d-flex align-items-center justify-content-between">
                                    <!-- Total Products -->
                                    <div class="total-products">
                                       
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        


 <?php
    function SearchResults($query)
    {
             
                   $connect = mysqli_connect("localhost", "root", "", "socialsale");
                   echo '<div class="shop_grid_product_area">
                    <div class="row">' ;
                    $result = mysqli_query($connect, $query);  
                    if(mysqli_num_rows($result))
                    { 
                        while($row = mysqli_fetch_array($result))  
                        {  
                             echo '  
      
                                
                                <div class="col-12 col-sm-6 col-lg-4">
                                    <div class="single-product-wrapper">
                                        <!-- Product Image -->
                                        <div class="product-img">
                                            <img src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" style="width:250px;height:160px;"/>
                                           
                                            <!-- Product Badge -->
                                            

                                            <!-- Favourite -->
                                            <div class="product-favourite">
                                                <a href="#" class="favme fa fa-heart"></a>
                                            </div>
                                        </div>

                                        <!-- Product Description -->
                                        <div class="product-description">
                                           <span>' . $row['category'] . '</span>
                                            <a href="#">
                                              <h6>' .$row['name']. '</h6>
                                            </a>
                                            <p class="product-price">'.$row['price']. '</p>

                                            <!-- Hover Content -->
                                            <div class="hover-content">
                                                <!-- Add to Cart -->
                                                <div class="delete-btn">
                                                    <a href="deleteproduct.php?productid='.$row['productid'].'" class="btn essence-btn">Delete</a>
                                                </div>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                                  ';  
                                }
                            }
                            else{
                                 echo "No products found";
                            }  
                       echo '</div>
                        </div>
                        </div>
                        </div>
                        </section>
                        
                        <div>';    
                        include_once('footer.php');
                        echo '</div>';
    
                }

            ?>  


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

     </body>  
</html>  
                
