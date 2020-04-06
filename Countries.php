<!DOCTYPE html>
<html lang="en">
<head>
  <?php
	  include 'header.php';
	  ?>
  </head>
  <body>
	  <div class="bg-top navbar-light">
	  <?php
  			include 'container.php';
		?>
	  <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="ftco-navbar">
	    <div class="container d-flex align-items-center px-4">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <form action="#" class="searchform order-lg-last">
          <div class="form-group d-flex">
            <input type="text" class="form-control pl-3" placeholder="Search">
            <button type="submit" placeholder="" class="form-control search"><span class="ion-ios-search"></span></button>
          </div>
        </form>
		<div class="collapse navbar-collapse" id="ftco-nav">
	          <?php
			   include 'navbar.php'
			   ?>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/all_country.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread" style="color: black">Destination</h1>
            <p class="breadcrumbs" style="color: black"><span class="mr-2"><a href="index.php"  style="color: black">Home <i class="ion-ios-arrow-forward"></i></a></span> <span  style="color: black">Countries<i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section bg-light">
			<div class="container-fluid px-4">
				<div class="row">
					<!-- Australia -->
					<div class="col-md-3 col-lg-4 ftco-animate">
					<a href="Australia.php">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(images/Australia.jpg);"></div>
							</div>
							<div class="text pt-3 text-center">
								<h3>Australia</h3>
						</div>
						</div>
					</a>
				</div>
				<!-- Canada -->
				<div class="col-md-3 col-lg-4 ftco-animate">
					<a href="Canada.php">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(images/canada_flag.jpg);"></div>
							</div>
							<div class="text pt-3 text-center">
								<h3>Canada</h3>
						</div>
						</div>
					</a>
				</div>
				 <!-- Germany -->
				 <div class="col-md-3 col-lg-4 ftco-animate">
					<a href="Germany.php">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(images/Germani.jpg);"></div>
							</div>
							<div class="text pt-3 text-center">
								<h3>Germany</h3>
						</div>
						</div>
					</a>
				</div>
				<!-- UK -->
				<div class="col-md-3 col-lg-4 ftco-animate">
					<a href="UK.php">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(images/UKF.jpg);"></div>
							</div>
							<div class="text pt-3 text-center">
								<h3>UK</h3>
						</div>
						</div>
					</a>
				</div>
				<!-- Malaysia  -->
				<div class="col-md-3 col-lg-4 ftco-animate">
					<a href="Malaysia.php">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(images/MalaysiaF.jpg);"></div>
							</div>
							<div class="text pt-3 text-center">
								<h3>Malaysia </h3>
						</div>
						</div>
					</a>
				</div>
				<!--  Russia-->
				<div class="col-md-3 col-lg-4 ftco-animate">
					<a href="Russia.php">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(images/RussiaF.jpg);"></div>
							</div>
							<div class="text pt-3 text-center">
								<h3>Russia </h3>
						</div>
						</div>
					</a>
				</div>
				<!-- MaltaF-->
				<div class="col-md-6 col-lg-6 ftco-animate">
					<a href="Malta.php">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(images/MaltaF.jpg);"></div>
							</div>
							<div class="text pt-3 text-center">
								<h3>Malta </h3>
						</div>
						</div>
					</a>
				</div>
				</div>
			</div>
			<div style="text-align: center " >
					<h4 ><a href="UG.php"  class="mydiv"><strong>Comapre Destination <i class='fas fa-angle-double-right'></i></strong></a></h4>
			</div>
		</section>

		<footer class="ftco-footer ftco-bg-dark ftco-section">
		<?php
		include 'footer.php'
		?>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>