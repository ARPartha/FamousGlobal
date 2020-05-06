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
	    <div class="container d-flex align-items-center px-4"style="width:100%">
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
    
    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image:url(images/Sydney.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-6 ftco-animate">
            <h1 class="mb-4">Australia</h1>
            <p> Sydney<br>Sydney, capital of New South Wales<br> and one of Australia's largest cities</p>
            <p><a href="Countries.php" class="btn btn-primary px-4 py-3 mt-3">Read Now</a></p>
          </div>
        </div>
        </div>
      </div>

      <div class="slider-item" style="background-image:url(images/canada.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-6 ftco-animate">
            <h1 class="mb-4">Canada </h1>
            <p> Toronto's CN Tower<br>On the shores of Lake Ontario in Canada's biggest city is the iconic CN Tower, one of Canada's most famous landmarks.</p>
            <p><a href="Countries.php" class="btn btn-primary px-4 py-3 mt-3">Case Study</a></p>
          </div>
        </div>
        </div>
      </div>
	  <div class="slider-item" style="background-image:url(images/COLLEGE-WALL.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-6 ftco-animate">
            <h1 class="mb-4">Choose only the best through our </h1>
            <p>Admission Guaranteed Program.</p>
            <p><a href="Study_aboard.php" class="btn btn-primary px-4 py-3 mt-3">Explore</a></p>
          </div>
        </div>
        </div>
      </div>
    </section>

    <section class="ftco-services ftco-no-pb">
			<div class="container-wrap">
				<div class="row no-gutters">
          <div class="col-md-3 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-primary">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-teacher"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Student Profile Analysis</h3>
                <p>Applying for overseas education involves a lot more than just filling out an application form. A student would not want to land up in a country or with a course not suited to his/her needs.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-darken">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-reading"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Career Counseling</h3>
                <p>When it comes to taking ownership for developing your career, learning from others is vitally important. That’s why mentoring and career conversations 
				   have such an important role to play.Which country to study in? Which course will result in better career?</p>
              </div>
            </div>    
          </div>
          <div class="col-md-3 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-primary">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-books"></span>
              </div>
              <div class="media-body p-2 mt-3">
			  
                <h3 class="heading">Course/University Selection &amp; Admission Assistance</h3>
                <p>With our one-to-one personalized counseling at a time convenient to you, you shall be able to determine which course and country is best suited as per your personal & financial strength & which universities you can do best at. </p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-darken">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-diploma"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Visa guidance</h3>
                <p>The parents and students are given clear cut idea & advice about the documentation required for the student visa, lodging the visa and co-coordinating the same.</p>
              </div>
            </div>      
          </div>
        </div>
			</div>
		</section>
		
		<section class="ftco-section ftco-no-pt ftc-no-pb">
			<div class="container">
				<div class="row d-flex">
					
					<div class="col-md-12 wrap-about py-5 pr-md-4 ftco-animate">
          	<h2 class="mb-4">Why Famous GLobal</h2>
						<p>To give a better and warmed service to the students for their bright future</p>
						<div class="row mt-5">
							<div class="col-lg-6">
								<div class="services-2 d-flex">
									<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-security"></span></div>
									<div class="text pl-3">
										<h3>Financial Aid & Scholarship</h3>
										<p>Our counselors keep updating scholarships as & when they become available. Ask us how to manage finances for overseas education. /p>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="services-2 d-flex">
									<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-reading"></span></div>
									<div class="text pl-3">
										<h3>Follow-up for Securing Admission</h3>
										<p>On uploading the applications our plenary counsellors see that the candidates procure admissions within no time and intimate the students on various stages in admission. </p>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="services-2 d-flex">
									<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-diploma"></span></div>
									<div class="text pl-3">
										<h3>Travel Assistance</h3>
										<p>While traveling abroad it is important to be prepared. It is essential to book well in advance and identify the most cost effective route. </p>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="services-2 d-flex">
									<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-education"></span></div>
									<div class="text pl-3">
										<h3>Pre-Departure Briefing</h3>
										<p>We organise pre-departure seminars for all of you and even your parents to dispel any doubts or fears before they actually fly to your preferred destination. </p>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="services-2 d-flex">
									<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-jigsaw"></span></div>
									<div class="text pl-3">
										<h3>Post-Arrival Assistance</h3>
										<p>Our relationship does not end once you fly away. It just starts all over again. Our counselors shall remain available round-the-clock to ensure that you face no difficulty at all during your entire stay.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="services-2 d-flex">
									<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-kids"></span></div>
									<div class="text pl-3">
										<h3>Career Counseling</h3>
										<p>These questions and concerns can be daunting at times and we at Famous totally understand this. We give emphasis to your priorities and guide you keeping your ambitions in mind. We are just a call away! </p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
				
		<section class="ftco-section bg-light">
			<div class="container">
				<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4"><span>COUNTRIES</span> WE CONSULT</h2>
            <p></p>
          </div>
        </div>
				<div class="row">
          <div class="col-md-6 col-lg-4 ftco-animate">
            <div class="blog-entry">
              <a href="Australia.php" class="block-20 d-flex align-items-end" style="background-image: url('images/sydney.jpg');">
								<div class="meta-date text-center p-2">
                </div>
              </a>
              <div class="text bg-white p-4">
                <h3 class="heading"><a href="Australia.php"><strong>Australia</strong></a></h3>
              </div>
            </div>
          </div>
		  <div class="col-md-6 col-lg-4 ftco-animate">
            <div class="blog-entry">
              <a href="Canada.php" class="block-20 d-flex align-items-end" style="background-image: url('images/canada.jpg');">
								<div class="meta-date text-center p-2">
                </div>
              </a>
              <div class="text bg-white p-4">
                <h3 class="heading"><a href="Canada.php"><strong>Canada</strong></a></h3>
              </div>
            </div>
          </div>
		  <div class="col-md-6 col-lg-4 ftco-animate">
            <div class="blog-entry">
              <a href="Russia.php" class="block-20 d-flex align-items-end" style="background-image: url('images/russia.jpg');">
								<div class="meta-date text-center p-2">
                </div>
              </a>
              <div class="text bg-white p-4">
                <h3 class="heading"><a href="Russia.php"><strong>Russia</strong></a></h3>
              </div>
            </div>
          </div>
		<div class="col-md-6 col-lg-4 ftco-animate">
            <div class="blog-entry">
              <a href="Malaysia.php" class="block-20 d-flex align-items-end" style="background-image: url('images/Malaysia.jpg');">
								<div class="meta-date text-center p-2">
                </div>
              </a>
              <div class="text bg-white p-4">
                <h3 class="heading"><a href="Malaysia.php"><strong>Malaysia</strong></a></h3>
              </div>
            </div>
          </div>
		  <div class="col-md-6 col-lg-4 ftco-animate">
            <div class="blog-entry">
              <a href="UK.php" class="block-20 d-flex align-items-end" style="background-image: url('images/UK.jpg');">
								<div class="meta-date text-center p-2">
                </div>
              </a>
              <div class="text bg-white p-4">
                <h3 class="heading"><a href="UK.php"><strong>UK</strong></a></h3>
              </div>
            </div>
          </div>
		  <div class="col-md-6 col-lg-4 ftco-animate">
            <div class="blog-entry">
              <a href="Germany.php" class="block-20 d-flex align-items-end" style="background-image: url('images/germany.jpg');">
								<div class="meta-date text-center p-2">
                </div>
              </a>
              <div class="text bg-white p-4">
                <h3 class="heading"><a href="Germany.php"><strong>Germany</strong></a></h3>
              </div>
            </div>
          </div>
		  <div class="col-md-6 col-lg-4 ftco-animate">
            <div class="blog-entry">
              <a href="Malta.php" class="block-20 d-flex align-items-end" style="background-image: url('images/malta.jpg');">
								<div class="meta-date text-center p-2">
                </div>
              </a>
              <div class="text bg-white p-4">
                <h3 class="heading"><a href="Malta.php"><strong>Malta</strong></a></h3>
              </div>
            </div>
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