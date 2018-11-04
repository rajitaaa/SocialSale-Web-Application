
<?php
include_once('header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>

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
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<script type="text/javascript">(function(t,e){var r=function(t){try{var r=e.head||e.getElementsByTagName("head")[0];a=e.createElement("script");a.setAttribute("type","text/javascript");a.setAttribute("src",t);r.appendChild(a);}catch(t){}};t.CollectId = "5bd43d0dd1b57956621ff5f3";r("https://collectcdn.com/launcher.js");})(window,document);</script>

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

	<div class="home">
		
		<!-- Home Slider -->

		<div class="home_slider_container">
			<div class="owl-carousel owl-theme home_slider">
				

				<!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(images/book.jpeg)"></div>
					<div class="home_slider_content">
						<div class="home_slider_content_inner">
							<div class="home_slider_title">Buy or rent items</div>
						</div>	
					</div>
				</div>

				<!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(images/cycle.jpeg)"></div>
					<div class="home_slider_content">
						<div class="home_slider_content_inner">
							<div class="home_slider_title">Sell your old stuff</div>
						</div>	
					</div>
				</div>
                
                <!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(images/beach.png)"></div>
					<div class="home_slider_content">
						<div class="home_slider_content_inner">
							<div class="home_slider_title">Ask questions and be mentors</div>
						</div>	
					</div>
				</div>
                
                <!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(images/grad.jpeg)"></div>
					<div class="home_slider_content">
						<div class="home_slider_content_inner">
							<div class="home_slider_title">Sell all your stuff before graduation!</div>
						</div>	
					</div>
				</div>

			</div>
			
			<!-- Home Slider Nav -->

			<div class="home_slider_next d-flex flex-column align-items-center justify-content-center"><img src="images/arrow_r.png" alt=""></div>

			<!-- Home Slider Dots -->

			<div class="home_slider_dots_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="home_slider_dots">
								<ul id="home_slider_custom_dots" class="home_slider_custom_dots">
									
								</ul>
							</div>
						</div>
					</div>
				</div>		
			</div>
		</div>
	</div>

	<!-- ##### Top Catagory Area Start ##### -->
    <div class="top_catagory_area section-padding-80 clearfix">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Single Catagory -->
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img" style="background-image: url(img/bg-img/books.jpg);">
                        <div class="catagory-content">
                            <a href="display.php">Buy/Rent</a>
                        </div>
                    </div>
                </div>
                <!-- Single Catagory -->
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img" style="background-image: url(img/bg-img/sell.jpg);">
                        <div class="catagory-content">
                            <a href="productform.php">Sell/Rent</a>
                        </div>
                    </div>
                </div>
                <!-- Single Catagory -->
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img" style="background-image: url(img/bg-img/mentor.png);">
                        <div class="catagory-content">
                            <a href="mentoring/index.php">Questionnaire</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Top Catagory Area End ##### -->

    <!-- New Arrivals -->

	<div class="arrivals">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<div class="section_subtitle">only the best</div>
						<div class="section_title">Gallery</div>
					</div>
				</div>
			</div>
			<div class="row products_container">

				<!-- Product -->
				<div class="col-lg-4 product_col">
					<div class="product">
						<div class="product_image">
							<img src="images/formals2.jpg" style="width:400px;height:538px;"alt="">
						</div>
						<div class="rating rating_4">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
						
					</div>
				</div>

				<!-- Product -->
				<div class="col-lg-4 product_col">
					<div class="product">
						<div class="product_image">
							<img src="images/heels2.jpg" style="width:360px;height:538px;" alt="">
						</div>
						<div class="rating rating_4">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
						
					</div>
				</div>

				<!-- Product -->
				<div class="col-lg-4 product_col">
					<div class="product">
						<div class="product_image">
							<img src="images/dress2.jpg" style="width:360px;height:538px;" alt="">
						</div>
						<div class="rating rating_4">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
						
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Extra -->

	<div class="extra clearfix">
		<div class="extra_promo extra_promo_1">
			<div class="extra_promo_image" style="background-image:url(images/extra_1.jpg)"></div>
			<div class="extra_1_content d-flex flex-column align-items-center justify-content-center text-center">
				<div class="extra_1_price">Best<span>quality</span></div>
				<div class="extra_1_title">All new products</div>
				<div class="button extra_1_button"><a href="display.php">check out</a></div>
			</div>
		</div>
		<div class="extra_promo extra_promo_2">
			<div class="extra_promo_image" style="background-image:url(images/extra_2.jpg)"></div>
			<div class="extra_2_content d-flex flex-column align-items-center justify-content-center text-center">
				<div class="extra_2_title">
					<div class="extra_2_center">&</div>
					<div class="extra_2_top">Blogs</div>
					<div class="extra_2_bottom">Articles</div>
				</div>
				<div class="extra_2_text">Read exciting blogs about various topics.</div>
				<div class="button extra_2_button"><a href="blog.php">check out</a></div>
			</div>
		</div>
	</div>

	<!-- Gallery -->

	<div class="gallery">
		<div class="gallery_image" style="background-image:url(images/gallery.jpg)"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="gallery_title text-center">
						<ul>
							<li><a href="#">#socialsale</a></li>
							<li><a href="#">#mentoring</a></li>
							<li><a href="#">#buysellrent</a></li>
						</ul>
					</div>
					<div class="gallery_text text-center"> </div>
				</div>
			</div>
		</div>	
		<div class="gallery_slider_container">
			
			<!-- Gallery Slider -->
			<div class="owl-carousel owl-theme gallery_slider">
				
				<!-- Gallery Item -->
				<div class="owl-item gallery_item">
					<a class="colorbox" href="images/gallery_1.jpg">
						<img src="images/gallery_1.jpg" alt="">
					</a>
				</div>

				<!-- Gallery Item -->
				<div class="owl-item gallery_item">
					<a class="colorbox" href="images/gallery_2.jpg">
						<img src="images/gallery_2.jpg" alt="">
					</a>
				</div>

				<!-- Gallery Item -->
				<div class="owl-item gallery_item">
					<a class="colorbox" href="images/gallery_3.jpg">
						<img src="images/gallery_3.jpg" alt="">
					</a>
				</div>

				<!-- Gallery Item -->
				<div class="owl-item gallery_item">
					<a class="colorbox" href="images/gallery_4.jpg">
						<img src="images/gallery_4.jpg" alt="">
					</a>
				</div>

				<!-- Gallery Item -->
				<div class="owl-item gallery_item">
					<a class="colorbox" href="images/gallery_5.jpg">
						<img src="images/gallery_5.jpg" alt="">
					</a>
				</div>

				<!-- Gallery Item -->
				<div class="owl-item gallery_item">
					<a class="colorbox" href="images/gallery_6.jpg">
						<img src="images/gallery_6.jpg" alt="">
					</a>
				</div>

			</div>
		</div>	
	</div>
    <!-- Gallery Area End-->

	<!-- Testimonials -->

	<div class="testimonials">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<div class="section_subtitle">only the best</div>
						<div class="section_title">testimonials</div>
					</div>
				</div>
			</div>
			<div class="row test_slider_container">
				<div class="col">

					<!-- Testimonials Slider -->
					<div class="owl-carousel owl-theme test_slider text-center">

						<!-- Testimonial Item -->
						<div class="owl-item">
							<div class="test_text">“*Great website to buy, sell and rent stuff all at one place. Very convenient to use.”</div>
							<div class="test_content">
								<div class="test_image"><img src="images/testimonials.jpg" alt=""></div>
								<div class="test_name">Shama</div>
								<div class="test_title">client</div>
							</div>
						</div>

						<!-- Testimonial Item -->
						<div class="owl-item">
							<div class="test_text">“Love the mentoring feature in this website. Can ask any kind of question and always find answers here!”</div>
							<div class="test_content">
								<div class="test_image"><img src="images/testimonials1.jpeg" alt=""></div>
								<div class="test_name">Piyush</div>
								<div class="test_title">client</div>
							</div>
						</div>

						<!-- Testimonial Item -->
						<div class="owl-item">
							<div class="test_text">“Very easy to search for products in this website. Selling and renting items makes college life so much easier.”</div>
							<div class="test_content">
								<div class="test_image"><img src="images/testimonials2.jpg" alt=""></div>
								<div class="test_name">Shivani</div>
								<div class="test_title">client</div>
							</div>
						</div>

					</div>

				</div>
			</div>
		</div>
	</div>
    
    <!-- Testimonials Area end -->

	<!-- Newsletter -->

	<div class="newsletter">
		<div class="newsletter_content">
			<div class="newsletter_image" style="background-image:url(images/newsletter.jpg)"></div>
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="section_title_container text-center">
							<div class="section_subtitle">only the best</div>
							<div class="section_title">Developers</div>
						</div>
					</div>
				</div>
				<div class="row newsletter_container">
					<div class="col-lg-6 offset-lg-1">
						<div class="newsletter_text"> <a style="text-align: center" href="contact.php" class="newsletter_button" >Find more about us</a> </div>
					</div>
				</div>
			</div>
		</div>
	</div>

    <!-- Newsletter Area end -->

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