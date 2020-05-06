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
	  <nav class="navbar navbar-expand-lg navbar-dark bg-dark " id="ftco-navbar">
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
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/RussiaF.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Russia</h1>
             <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="countries.php">Destination <i class="ion-ios-arrow-forward"></i></a></span> <span>RUSSIA<i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

		
		<section class="ftco-section">
			<div class="container">
				<div class="row">
          <div class="col-lg-12 ftco-animate">
            <h2 class="mb-3" style="color: blue">ABOUT RUSSIA</h2>
            <p>Russia is the world’s largest nation. It shares the border with European and Asian countries as 
               well as the Pacific and the Arctic oceans. Its landscape ranges from tundra and forests to subtropical
               beaches. It is famous for Moscow’s Bolshoi and St. Petersburg’s Mariinsky ballet companies.
                </p>
            <p>
              <img src="images/russia.jpg" class="img-fluid">
            </p>
            <p>St. Petersburg was founded by Russian leader Peter the Great, has the baroque Winter Palace. 
                Which now houses part of the State Hermitage Museum’s art collection? The Russian economy ranks as the 
                12th largest by nominal GDP and 6th largest by purchasing power parity in 2015.
                Russia’s extensive mineral and energy resources are the largest in the world, 
                making it one of the leading producers of oil and natural gas globally.
                </p>
              
            <br>
            
                <h2 style="color:blue">QUICK FACTS</h2>
            <spam> <strong>•CAPITAL:</strong> &nbsp;MOSCOW</spam> <br>
            <spam> <strong>•POPULATION:</strong> &nbsp;14.43  MILLION</spam> <br>
            <spam> <strong>•CURRENCY:</strong> &nbsp;RUSSIAN RUBLE</spam> <br>
            <spam> <strong>•LANGUAGE:</strong> &nbsp;RUSSIAN</spam> <br>
            <spam> <strong>•RELIGION:</strong> &nbsp;CHRISTIANITY</spam> <br>
            <spam> <strong>•DIALING CODE:</strong> &nbsp;+7</spam> <br>    
            <spam> <strong>•SUMMER TEMP:</strong> &nbsp;23°C</spam> <br>
            <spam> <strong>•WINTER TEMP:</strong> &nbsp;-9°C</spam> <br>    
            <br>
            
             <h2 style="color:blue">Explore Russia</h2>
            <strong style="color: orange">STUDY FACTS</strong>
            <p>
                •	The Russian medical degrees have topped WHO and UN agency ranking. <br>
                •	Over 30 Russian Medical Universities are in World Ranking. <br> 
                •	International students enjoy up to 50% subsidy in fees at state universities. It is even cheaper than studying in India.<br>
                •	No IELTS / TOEFL is required as entry criteria.<br>
                •	More than 1, 70,000 students including international students from over 80 countries study in various medical universities in Russia. <br>
           
            <h2 style="color:blue">INTERESTING FACTS</h2>
            <p>
                •	Russia has the highest literacy rate of 99.5% in the world.<br>
                •	Russia is the largest country in the world – and is approximately 1.8 times the size of the US.<br>
                •	Russia shares a border with 14 countries no other country has as many borders.<br>
                •	The lowest point in Russia is the Caspian Sea – at 28 meters below sea level.<br>
                •	The Trans- Siberian Railroad connects Moscow to the Russia Far East. It’s the longest railway line in the world.<br>
            </p>
        </div>
            </div>
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