<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Electro - HTML Ecommerce Template</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

		<!-- Slick -->
		<link type="text/css" rel="stylesheet" href="css/slick.css"/>
		<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

		<!-- nouislider -->
		<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="css/style.css"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
<style>
	 .View-Product-btn {

		position: relative;
  border: 2px solid transparent;
  height: 40px;
  padding: 0 30px;
  background-color: #ef233c;
  color: #FFF;
  text-transform: uppercase;
  font-weight: 700;
  border-radius: 40px;
  -webkit-transition: 0.2s all;
  transition: 0.2s all;


}
.View-Product-btn>i  {
  position: absolute;
  left: 0;
  top: 0;
  width: 40px;
  height: 40px;
  line-height: 38px;
  color: #D10024;
  opacity: 0;
  visibility: hidden;
}


.View-Product-btn:hover  {
  background-color: #FFF;
  color: #D10024;
  border-color: #D10024;
  padding: 0px 30px 0px 50px;
}

.View-Product-btn:hover>i {
  opacity: 1;
  visibility: visible;
}
.newsletter-btn {
  border-radius: 40px 40px 40px 40px;
}
</style>
    </head>
	<body>
		<!-- HEADER -->
		<header>
			<!-- TOP HEADER -->
			<div id="top-header">
				<div class="container">
					<ul class="header-links pull-left">
						<li><a href="#"><i class="fa fa-phone"></i> +962-77-777-7777</a></li>
						<li><a href="#"><i class="fa fa-envelope-o"></i> email@gmail.com</a></li>
						<li><a href="#"><i class="fa fa-map-marker"></i> Jordan </a></li>
					</ul>
					<ul class="header-links pull-right">
						<!-- <li><a href="#"><i class="fa fa-dollar"></i> USD</a></li> -->
						
						<?php if (!isset($_SESSION['type'])) { ?>
							<li><a href="#"><i class="fa fa-user-o"></i> Register </a></li>
						<li><a href="#"><i class="fa fa-user-o"></i> Login </a></li>

						<?php } else{?>
							<li><a href="#"><i class="fa fa-user-o"></i> My Account</a></li>
							<li><a href="#"><i class="fa fa-user-o"></i>Logout</a></li>
							<?php } ?>

					</ul>
				</div>
			</div>
			<!-- /TOP HEADER -->

			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3">
							<div class="header-logo">
								<a href="#" class="logo">
									<img src="./img/logo.png" alt="">
								</a>
							</div>
						</div>
						<!-- /LOGO -->

						<!-- SEARCH BAR -->
						<div class="col-md-6">
							<div class="header-search">
								<form>
									<button class="input-select">
									All Categories
									</button>
									<input class="input" placeholder="Search here">
									<button class="search-btn">Search</button>
								</form>
							</div>
						</div>
						<!-- /SEARCH BAR -->

						<!-- ACCOUNT -->
						<div class="col-md-3 clearfix">
							<div class="header-ctn">
							

								<!-- Cart -->
								<div class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
										<i class="fa fa-shopping-cart"></i>
										<span>Your Cart</span>
										<div class="qty">3</div>
									</a>
									<div class="cart-dropdown">
										<div class="cart-list">
											<div class="product-widget">
												<div class="product-img">
													<img src="./img/product01.png" alt="">
												</div>
												<div class="product-body">
													<h3 class="product-name"><a href="#">product name goes here</a></h3>
													<h4 class="product-price"><span class="qty">1x</span>$980.00</h4>
												</div>
												<button class="delete"><i class="fa fa-close"></i></button>
											</div>

											<div class="product-widget">
												<div class="product-img">
													<img src="./img/product02.png" alt="">
												</div>
												<div class="product-body">
													<h3 class="product-name"><a href="#">product name goes here</a></h3>
													<h4 class="product-price"><span class="qty">3x</span>$980.00</h4>
												</div>
												<button class="delete"><i class="fa fa-close"></i></button>
											</div>
										</div>
										<div class="cart-summary">
											<small>3 Item(s) selected</small>
											<h5>SUBTOTAL: $2940.00</h5>
										</div>
										<div class="cart-btns">
											<a href="#">View Cart</a>
											<a href="#">Checkout  <i class="fa fa-arrow-circle-right"></i></a>
										</div>
									</div>
								</div>
								<!-- /Cart -->

								<!-- Menu Toogle -->
								<div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
									</a>
								</div>
								<!-- /Menu Toogle -->
							</div>
						</div>
						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
		<!-- /HEADER -->

		<!-- NAVIGATION -->
		<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<ul class="main-nav nav navbar-nav">
						<li ><a href="#">Home</a></li>
						<li><a href="#">About Us</a></li>
						<li class="active"><a href="#">Categories</a></li>
						<li><a href="#">Laptops</a></li>
						<li><a href="#">PCs</a></li>
						<li><a href="#">Monitor</a></li>
						<li><a href="#">Bags</a></li>
						<li><a href="#">Accessories</a></li>
					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
		<!-- /NAVIGATION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="./img/shop01.png" alt="">
							</div>
							<div class="shop-body">
								<h3>Laptop<br>Collection</h3>
								<a href="#" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->
 <!-- shop -->
<div class="col-md-4 col-xs-6">
	<div class="shop">
		<div class="shop-img">
			<img src="https://pisces.bbystatic.com/image2/BestBuy_US/Gallery/learn-BuyingGuide_DER-76255.jpg;maxHeight=312;maxWidth=459" alt="">
		</div>
		<div class="shop-body">
			<h3>PCs<br>Collection</h3>
			<a href="#" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
		</div>
	</div>
</div>
<!-- /shop -->
<!-- shop -->
<div class="col-md-4 col-xs-6">
	<div class="shop">
		<div class="shop-img">
			<img src="data:image/jpeg;base64,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" alt="">
		</div>
		<div class="shop-body">
			<h3>Monitor<br>Collection</h3>
			<a href="#" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
		</div>
	</div>
</div>
<!-- /shop -->
					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="./img/shop03.png" alt="">
							</div>
							<div class="shop-body">
								<h3>Accessories<br>Collection</h3>
								<a href="#" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="https://media.istockphoto.com/photos/laptop-in-a-bag-picture-id182157353?k=20&m=182157353&s=612x612&w=0&h=rjzpYA2zToQpZxPsjYuHlTpE1eIW8wZJ3rGNwl4vAE0=" alt="">
							</div>
							<div class="shop-body">
								<h3>Bags<br>Collection</h3>
								<a href="#" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->
					
</DIV>
</DIV>

		<!-- NEWSLETTER -->
		<div id="newsletter" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="newsletter">
							<p>If you have any  <strong>Question or Comment</strong></p>
							<form>
								<!-- <input class="input" type="email" placeholder="Enter Your Email"> -->
								<button class="newsletter-btn"><i class="fa fa-envelope"></i> Contact Us</button>
							</form>
							<ul class="newsletter-follow">
								<li>
									<a href="#"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-instagram"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-pinterest"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /NEWSLETTER -->

		<!-- FOOTER -->
		<footer id="footer">
			<!-- top footer -->
			<div class="section">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-4 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">About Us</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.</p>
								<ul class="footer-links">
									<li><a href="#"><i class="fa fa-map-marker"></i>Jordan</a></li>
									<li><a href="#"><i class="fa fa-phone"></i>+962-77-777-7777</a></li>
									<li><a href="#"><i class="fa fa-envelope-o"></i>email@egmail.com</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-4 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Categories</h3>
								<ul class="footer-links">
									<li><a href="#">Laptops</a></li>
									<li><a href="#">PCs</a></li>
									<li><a href="#">Monitor</a></li>
									<li><a href="#">Bags</a></li>
									<li><a href="#">Accessories</a></li>
								</ul>
							</div>
						</div>

						<div class="clearfix visible-xs"></div>

						<div class="col-md-4 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Information</h3>
								<ul class="footer-links">
									<li><a href="#">About Us</a></li>
									<li><a href="#">Contact Us</a></li>
								</ul>
							</div>
							<div class="footer">
								<h3 class="footer-title">Service</h3>
								<ul class="footer-links">
									<li><a href="#">My Account</a></li>
									<li><a href="#">View Cart</a></li>
						</div>

					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /top footer -->
		</footer>
		<!-- /FOOTER -->

		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>

	</body>
</html>
