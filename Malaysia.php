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
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/MalaysiaF.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">MALAYSIA</h1>
             <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="countries.php">Destination <i class="ion-ios-arrow-forward"></i></a></span> <span>Malaysia<i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

		
		<section class="ftco-section">
			<div class="container">
				<div class="row">
          <div class="col-lg-12 ftco-animate">
            <h2 class="mb-3" style="color: blue">ABOUT MALAYSIA</h2>
            <p>Malaysia is a beautiful and diverse country with many highlights. The many different regions, 
                each with their own characteristic features, make this country the perfect destination for tourists. 
                However, Malaysia does not entirely depend on tourism. This country’s economy has been going strong for years. 
                A member of the Commonwealth of Nations, Malaysia has had one of the best economic records in Asia 
                since its independence its GDP growing at an average of 6.5% per annum for almost 50 years. 
                Malaysia has a newly industrialized market economy, ranked 4th largest in Southeast Asia and 
                38th largest in the world.
                </p>
            <p>
              <img src="images/Malaysia.jpg" class="img-fluid">
            </p>
            <p>Geographically, Malaysia is almost as diverse as its culture. 11 states and 2 federal territories 
                (Kuala Lumpur and Putrajaya) form Peninsular Malaysia 
                which is separated by the South China Sea from East Malaysia which includes the 2 states 
                (Sabah and Sarawak on the island of Borneo) and a third federal territory, the island of Labuan. 
                </p>
            <p>The country has developed itself enormously in the past 50 years and this is clearly noticeable when visiting it. 
                Especially in Malaysia’s capital, Kuala Lumpur, you will see many modern buildings, 
                a modern light rail transit system, many luxurious shopping malls and countless expensive cars on the roads.
            </p>     
            <br>
            
                <h2 style="color:blue">QUICK FACTS</h2>
            <spam> <strong>•CAPITAL:</strong> &nbsp;KUALA LUMPUR</spam> <br>
            <spam> <strong>•POPULATION:</strong> &nbsp;32.45  MILLION</spam> <br>
            <spam> <strong>•CURRENCY:</strong> &nbsp;RINGGIT</spam> <br>
            <spam> <strong>•LANGUAGE:</strong> &nbsp;MALAY</spam> <br>
            <spam> <strong>•RELIGION:</strong> &nbsp;CHRISTIANITY</spam> <br>
            <spam> <strong>•DIALING CODE:</strong> &nbsp;+60</spam> <br>    
            <spam> <strong>•SUMMER TEMP:</strong> &nbsp;33°C</spam> <br>
            <spam> <strong>•WINTER TEMP:</strong> &nbsp;22°C</spam> <br>    
            <br>
            
             <h2 style="color:blue">Explore Malaysia</h2>
            <strong style="color: orange">STUDY FACTS</strong>
            <p>
                •	Malaysia is also well known for being home to branch campuses of foreign institutions at affordable tuition rates. <br>
                •	12th most preferred education destination in the world among international students according to UNESCO (2014). <br> 
                •	Kuala Lumpur ranks #1 in QS Top Universities ‘Most Affordable Cities for Students in 2016′. <br>
                •	Malaysia provides affordable travel within the region for students with low-cost airlines like AirAsia, 
                    AirAsia X, Cebu Pacific, Malindo Air, Tiger Airways, Scoot, and Jetstar Asia.<br>
                •	A total of 27 Malaysian public and private universities were included in the ranking, out of which 22 rank within Asia’s top 300. <br>
            </p>
            <br>
            <h2 style="color:blue">INTERESTING FACTS</h2>
            <p>
                •	In Malaysia, it is generally considered rude to point at people or things with the index finger.
                    A bent index finger or thumb is used to point—or, rather, to knuckle—in the right direction.<br>
                •	Malaysia is one of 17 megadiverse countries on Earth. It is estimated that Malaysia contains 20% of the world’s animal species.<br>
                •	The biggest roundabout in the world is located in Malaysia. The Persiaran Sultan Salahuddin Abdul Aziz Shah in Putrajaya is 2.2 miles and has a diameter of 3.5km. <br>
                •	Some buildings in Malaysia do not have a fourth floor.
                    They are replaced by “3A” as the sound of four (sì) is similar to the sound of death in Chinese (sĭ).<br>
                •   Malaysia has a highway of 65,877 kms which exceeds the Earth’s circumference of 40,075 kms.
            </p>
            <br>
            <br>
           
           
         
 
         
          
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