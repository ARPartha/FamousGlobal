<!DOCTYPE html>
<html lang="en">
<head>
  <?php
	  include 'header.php';
      ?>
       <style>
                 table.dataTable thead .sorting:after,
                table.dataTable thead .sorting:before,
                table.dataTable thead .sorting_asc:after,
                table.dataTable thead .sorting_asc:before,
                table.dataTable thead .sorting_asc_disabled:after,
                table.dataTable thead .sorting_asc_disabled:before,
                table.dataTable thead .sorting_desc:after,
                table.dataTable thead .sorting_desc:before,
                table.dataTable thead .sorting_desc_disabled:after,
                table.dataTable thead .sorting_desc_disabled:before {
                bottom: .5em;
                }
             </style>
           <!-- table css -->

     <!-- //<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>        
         <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
         <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap.min.js"></script>    
  </head>
  <body>
  <div class="bg-top navbar-light">
		<?php
  			include 'container.php';
		?>

			  </div>

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
			   include 'navbar.php';
			   ?>
	      </div>
	    </div>
	  </nav>
	<!-- END nav -->
	
 <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">STUDY ABOARD</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Study aboard <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

 <section class="ftco-section">
			<div class="container-fluid px-4">
				<div class="row">
           
		<div style="width:100%; height:100%  ; text-align: center;"> <h2 style="color: green" ><strong>UG Requirements</strong></h2></div>
 <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Countries</th>						
                <th>Canada</th>
                <th>New Zealand</th>
                <th>Australia</th>
                <th>UK</th>
                <th>Singapore</th>
                <th>Ireland</th>
                <th>USA</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Can a student go after 10th?</td>							
                <td>No</td>
                <td>No</td>
                <td>Yes</td>
                <td>Yes</td>
                <td>Yes</td>
                <td>No</td>
                <td>No</td>
            </tr>
            <tr>
                <td>Course Duration</td>
                <td>2 years – Diploma ; 4years – Degree</td>
                <td>2 years – Diploma ; 3 years – Degree</td>
                <td>3-4 years (Engineering is 4 years and rest are 3 years)</td>
                <td>3 years but some colleges offer fast track degree of BBA in 2years</td>
                <td>3 years but some colleges offer fast track degree of BBA in 2years</td>
                <td>3-4 years</td>
                <td>4 years</td>
            </tr>
            <tr>
                <td>IELTS Requirement</td>
                <td>6.0 (5.5 in each)</td>
                <td>6.0 (5.5)</td>
                <td>6.0 (5.5)</td>
                <td>6.0 (5.5)</td>
                <td>If a letter shows medium of instruction was english then IELTS not required</td>
                <td>5.5(5.0 in each)</td>
                <td>70 (TOEFL)</td>
            </tr>
            <tr>
                <td>IELTS waiver</td>
                <td>No</td>
                <td>Yes only if the student has studied from an English speaking country. Not for the </td>
                <td>No</td>
                <td>Yes</td>
                <td>Yes</td>
                <td>No</td>
                <td>Yes</td>
            </tr>
            <tr>
                <td>Is National Institute of Open Learning recognized? Time Studies Acceptable?</td>
                <td>Only few colleges accept.</td>
                <td>Yes</td>
                <td>Yes</td>
                <td>Yes</td>
                <td>Yes</td>
                <td>Yes</td>
                <td>No</td>
            </tr>
            <tr>
            <td>Is Pre-Sessional recommended for low IELTS?</td>
                <td>No</td>
                <td>No</td>
                <td>Yes</td>
                <td>Yes</td>
                <td>Yes</td>
                <td>No</td>
                <td>No</td>
            </tr>
            <tr>
                <td>Is SAT exam required?</td>
                <td>Majority of universities do not need SAT</td>
                <td>No</td>
                <td>No</td>
                <td>No</td>
                <td>No. Except SMU.</td>
                <td>No</td>
                <td>Yes</td>
            </tr>
            <tr>
                <td>Living expense</td>
                <td>5-6 lakhs p.a</td>
                <td>7-8 lakhs p.a</td>
                <td>12-13 lakhs p.a</td>
                <td>10-12 lakhs p.a</td>
                <td>8-10 lakhs p.a</td>
                <td>5-6 lakhs</td>
                <td>8-10 lakhs</td>
            </tr>
            <tr>
                <td>Minimum %</td>
                <td>50%</td>
                <td>45-50%</td>
                <td>60-75%</td>
                <td>50%</td>
                <td>60%</td>
                <td>50%</td>
                <td>60%</td>
            </tr>
            <tr>
                <td>Part Time work</td>
                <td>20 hrs per week (during studies) ; 40 hrs per week (during vacations)</td>
                <td>20 hrs per week (during studies) ; 40 hrs per week (during vacations)</td>
                <td>40 hrs per fortnight (during studies) ; 40 hrs per week (during vacations)</td>
                <td>20 hrs per week (during studies) ; 40 hrs per week (during vacations)</td>
                <td>Not Allowed in Pvt but Govt Unis allow 16 hours per week</td>
                <td>20 hrs per week (during studies) ; 40 hrs per week (during vacations)</td>
                <td>20 hrs per week (on- campus)</td>
            </tr>
      
        </tbody>
        
    </table>
	
				</div>
			</div>
		</section>
 
		<!-- footer -->
			
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