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
					.contact-area{
						padding-left: 50px;
						background: #f9f9ff;
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
							
				
			<!-- Start Contact Area -->
			<section class="contact-area  section-gap">
				<!-- <div class="overlay overlay-bg"></div> -->
				<div class="container-fluid">
				<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">FEEL FREE TO CONTACT US</h1>
								<!-- <p>Who are in extremely love with eco friendly system.</p> -->
							</div>
						</div>
					</div>
				<div class="row">
				<div class="col-lg-2 col-md-2"></div>
				
				<div class="col-lg-4 col-md-6">
				<form action="https://api.formbucket.com/f/c2K3QTQ" method="post">
					<div class="form-group">
					<label for="name">Name</label>
					<input class="form-control" id="name" type="text" name="Name">
					</div>
					<div class="form-group">
					<label for="email">Email</label>
					<input class="form-control" id="email" type="email" name="Email">
					</div>
					<div class="form-group">
					<label for="email">Mobile</label>
					<input type="number" class="form-control" id="mobile"  name="Mobile">
					</div>
					<div class="form-group">
					<label for="message">Message</label>
					<textarea class="form-control" id="message" name="Message"></textarea>
					</div>
					<input class="btn btn-success" type="submit" value="Submit" />
					</div>

					<!-- <div class="col-lg-4 col-md-4 col-sm-4">
					<h3>Address</h>
							<h2>Turning ideas</h2>
							
							<p>No: 826/78</p>
							<p>Anna Nagar</p>
							<p>Chennai - 600078</p>
					</div> -->

					<div class="col-lg-4 col-md-6">
					<div class="mapouter"><div class="gmap_canvas"><iframe width="500" height="400" id="gmap_canvas" src="https://maps.google.com/maps?q=Gandhi%20Nagar%20Main%20Rd%20Palavakkam%20Tamil%20Nadu%20600041&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>Google Maps Generator by <a href="https://www.embedgooglemap.net">embedgooglemap.net</a></div><style>.mapouter{position:relative;text-align:right;height:403px;width:600px;}</style></div>
					</div>
				
				
				</form>
				</div>
				</div>
				</div>	
			</section>
			<!-- End Contact Area -->
					

			<!-- start footer Area -->		
			<footer class="footer-area section-gap-footer">
			<?php
				include('footer.php');
				?>
			</footer>	
			<!-- End footer Area -->	
		</body>
	</html>



