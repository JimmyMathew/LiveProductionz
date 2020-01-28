	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="codepixer">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Live Productionz</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">					
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/main.css">
			<!--
			Scripts
			============================================= -->
			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
			<script src="js/owl.carousel.min.js"></script>			
			<script src="js/jquery.sticky.js"></script>
			<script src="js/jquery.nice-select.min.js"></script>			
			<script src="js/parallax.min.js"></script>		
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>	

			<style>
				#home{
				padding-bottom: 130px;
				}
				.section-gap-clients {
   				padding: 150px 0;
				}
				.section-gap-footer {
					padding: 0px 0;
					}
				.footer-area {
					padding-top: 0px;
					}
			</style>
		</head>
		<body>

				<?php
				include('header.php');
				?>


			<!-- start banner Area -->
			<section banner-area relative id="home">	
	
				<?php
				include('slider.php');
				?>
			</section>
			<!-- End banner Area -->				

			<!-- Start home-aboutus Area -->
			<section class="home-aboutus-area" id="about">
				<?php
				include('about.php');
				?>
			</section>
			<!-- End home-aboutus Area -->

			<!-- Start video-sec Area -->
			<section class="video-sec-area section-gap" id="videos">
		
				<?php
				include('video.php');
				?>
			</section>
			<!-- End video-sec Area -->


			<!-- Start Team  Area -->
			<section class="spekers-area pb-100" id="team">
			<?php
				include('team.php');
				?>
			</section>
			<!-- End Team Area -->
				
			<!-- Start Portfolio Area -->
			<section class="price-area section-gap" id="portfolio">
			<?php
				include('portfolio.php');
				?>
			</section>
			<!-- End price Area -->
					
			<!-- Start brand Area -->
			<section class="brand-area section-gap-clients" id="clients">
			<?php
				include('clients.php');
				?>
			</section>
			<!-- End brand Area -->	
							
				
			<!-- Start callaction Area -->
			<!-- <section class="callaction-area relative section-gap">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-10">
							<h1 class="text-white">Huge Transaction in last Week</h1>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
							</p>
							<a class="callaction-btn" href="#">Become a Member</a>							
						</div>
					</div>
				</div>	
			</section> -->
			<!-- End callaction Area -->
					

			<!-- start footer Area -->		
			<footer class="footer-area section-gap-footer">
			<?php
				include('footer.php');
				?>
			</footer>	
			<!-- End footer Area -->	
		</body>
	</html>



