<!DOCTYPE html>
<html class="no-js" lang="zxx">
    <head>
		<!-- Meta Tags -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="keywords" content="Site keywords here">
		<meta name="description" content="">
		<meta name='copyright' content=''>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Title -->
		<title>Handog Kaibigan Scholarship</title>
		
		<!-- Favicon -->
		<link rel="icon" type="image/png" href="images/favicon.png">
		
		<!-- Web Font -->
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- Font Awesome CSS -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- Nice Select CSS -->
        <link rel="stylesheet" href="css/niceselect.css">
		<!-- Fancy Box CSS -->
        <link rel="stylesheet" href="css/jquery.fancybox.min.css">
		<!-- Fancy Box CSS -->
        <link rel="stylesheet" href="css/cube-portfolio.min.css">
		<!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="css/owl.carousel.min.css">
		<!-- Animate CSS -->
        <link rel="stylesheet" href="css/animate.min.css">
		<!-- Slick Nav CSS -->
        <link rel="stylesheet" href="css/slicknav.min.css">
        <!-- Magnific Popup -->
		<link rel="stylesheet" href="css/magnific-popup.css">
		
		<!-- Eduland Stylesheet -->
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="css/responsive.css">
		
		<!-- Eduland Colors -->
		<link rel="stylesheet" href="css/colors/color1.css">
		<style type="text/css">
		.testbox{

			justify-content: center;
			align-items: center;
		    height: inherit;
		    padding: 3px;
		}
      form {
      width: 100%;
      padding: 20px;
      background: #ADBBB2;
      box-shadow: 0 2px 5px #ccc; 
      }
      h5{
      	font-family: sans-serif;
      	text-align: center;
      	color: #235D3A;
      	font-weight: bold;
      	text-shadow:  2px 2px #CBA901;
      	padding: 10px;
      }
      .form-control{
			width: 100%;
			padding: 5px;
			display: block;
		}
		.vacant{
			width: 50%;
			height: 50%;
		}
		   textarea {
      width: calc(100% - 6px);
      }
      button {
      width: 150px;
      padding: 10px;
      border: none;
      -webkit-border-radius: 5px; 
      -moz-border-radius: 5px; 
      border-radius: 5px; 
      background-color: #095484;
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      }
      button:hover {
      background-color: #0666a3;
      }
      @media (min-width: 568px) {
      .title-block {
      display: flex;
      justify-content: space-between;
      }
      h4{
      	color: red;
      }
		</style>
    </head>
    <body>
    	<!--- PHP CODE --->
    	<?php

    	?>


		<!--- END PHP CODE --->
		<!-- Header -->
		<header class="header">
			<!-- Header Inner -->
			<div class="header-inner overlay">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-3 col-12">
							<!-- Logo -->
							<div class="logo">
								<a href="home4stud.php"><img src="images/hk.jpg" alt="#"></a>
							</div>
							<!--/ End Logo -->
							<div class="mobile-menu"></div>
						</div>
						<div class="col-lg-9 col-md-9 col-12">
							<div class="menu-bar">
								<nav class="navbar navbar-default">
									<div class="navbar-collapse">
										<!-- Main Menu -->
										<ul id="nav" class="nav menu navbar-nav">
											<li class="active"><a href="home4stud.php"><i class="fa fa-home"></i>Home</a></li>
											<li><a href="message4stud.php"><i class="fa fa-clone"></i>Messages</a>
											<li><a href="teachers.html"><i class="fa fa-clone"></i>Profile</a></li>
											</li>
											<li><a href="log1.php"><i class="fa fa-clone"></i>Log-Out</a></li>
										</ul>
										<!-- End Main Menu -->
									</div> 
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Header Inner -->
		</header>
		<!--/ End Header -->
		
		<!-- Slider Area -->
		<section class="home-slider">
			<div class="slider-active">
				<!-- Single Slider -->
				<div class="single-slider overlay">
					<div class="slider-image" style="background-image:url('images/upang.jpg')"></div>
					<div class="container">
						<div class="row">
							<div class="col-lg-7 col-md-10 col-12">
								<!-- Slider Content -->
								<div class="slider-content">
									<h1 class="slider-title"><span>PHINMA University of Pangasinan</span>HK Scholarship Renewal System</h1>
									<!-- Button -->
									<div class="button">
										<a href="form1.php" class="btn white">Fill Up Form to Renew</a>
									</div>
									<!--/ End Button -->
								</div>
								<!--/ End Slider Content -->
							</div>
						</div>
					</div>
				</div>
				<!--/ End Single Slider -->
			</div>
		</section>
		<!--/ End Slider Area -->

		<!-- form -->
		<div class="container-fluid">
		<section class="p-3">
			<?php
			echo "<h5>CENTER FOR STUDENT DEVELOPMENT AND LEADERSHIP</h5>";
			?>
				<section class="testbox p-3">
					<p class="text-danger">*Fill up all the forms below.Put N/A if not applicable</p>
					  <form action="includes/formhk.php" method="POST" "enctype="multipart/form-data">
					  	<div class="form-group" style="display: inline-block;"> 
				 		<select name="deeepartment">
				 			<option value="">Assigned Department</option>
				 			<option value="College Of Law">College Of Law</option>
				 			<option value="Finance Office">Finance Office</option>
				 			<option value="Library">Library</option>
				 			<option value="Registrar">Registrar</option>
				 			<option value="CSDL Office">CSDL Office</option>
				 			<option value="CAS Office">CAS Office</option>
				 			<option value="Union Office">Union Office</option>
				 		</select>
				 	</div>
				 	
				 	<div class="form-group">
				 		<label for="student number"><h6>Student Number</h6></label>
				 		<input type="text" name="StudentNumber"class="form-control"required>
				 	</div>
				 	<div class="form-group"> 
				 		<label for="student name"><h6>Student Name </h6></label>
				 		<input type="text" name="StudentName"class="form-control"required>
				 	</div>
				 	<div class="form-group" style="display: inline-block;">
				 		<?php
				 			echo "<h6>Course</h6>";
				 		?>
				 		<select name="course">
				 			<option>Grade 11(HUMSS)</option>
				 			<option>Grade 11(STEM)</option>
				 			<option>Grade 11(ABM)</option>
				 			<option>Grade 12(HUMSS)</option>
				 			<option>Grade 12(STEM)</option>
				 			<option>Grade 12(ABM</option>
				 			<option>BSIT</option>
				 			<option>BMLS</option>
				 			<option>BSPharma</option>
				 			<option>BSN</option>
				 			<option>BSCE</option>
				 			<option>BSME</option>
				 			<option>BSEE</option>
				 			<option>BSECE</option>
				 			<option>BSBA (Finance)</option>
				 			<option>BSBA (Marketing)</option>
				 			<option>BSA</option>
				 			<option>BSTM</option>
				 			<option>BSHM</option>
				 		</select>
				 	</div>
				 	<div class="form-group" style="display: inline-block;">
				 		<?php
				 			echo "<h6>Year Level</h6>";
				 		?>
				 		<select name="YearLevel">
				 			<option>Grade 11</option>
				 			<option>Grade 12</option>
				 			<option>1st Year</option>
				 			<option>2nd Year</option>
				 			<option>3rd Year</option>
				 			<option>4th Year</option>
				 			<option>5th Year</option>
				 		</select>
				 	</div>
				 	<div class="row"> 
				 	<div class="form-group col-sm-6" style="display: inline-block;">
				 		<label for="contact number"><h6>Contact Number</h6></label>
				 		<input type="text" name="ContactNumber"class="form-control"required>
				 	</div>	
				 	<div class="form-group col-sm-6" style="display: inline-block;">
				 		<label for="email address"><h6>Email Address</h6></label>
				 		<input type="text" name="EmailAddress"class="form-control"required>
				 	</div>
				 	</div>	
				 	<div class="form-group"> 
				 		<?php
				 		echo "<h6> Vacant Time</h6>";
				 		?>
				 		  <textarea name="VacantTime" rows="5"></textarea>
				 	</div>
				 	<div class="p-3">
				 	<div class="form-group">
				 		<input type="checkbox" name="HKSpecial" value="HK special" > HK with Special Assignment<br>
				 		<label for="Remark"><h6>Remarks</h6></label>
				 		 <input type="text" name="Remarksss" class="form-control">
				 	</div>
				 	<br>
				 		<h6> HK Facilitator</h6>
				 		<div class="form-group" style="display: inline-block;"> 
				 		<select name="HKFacilitator">
				 			<option>Grade 11</option>
				 			<option>Grade 12</option>
				 			<option>College</option>
				 			<option>N/A</option>
				 		</select>
				 	</div>
				 	<div class="form-group">
				 	<label for="Department"><h6>Department/Office</h6></label>
				 		 <input type="text" name="department" class="form-control" required>
				    </div>
				    <hr>

				    <h6><u>Upload the following requirements</u></h6><br>
					<div>
						<h6> - copy of registration fee receipt</h6>
						<h6> - copy of endorsement from the assigned department</h6>
						<h6> - copy of COM</h6>
						<h6> - DTR with complete duty hours and signature of the teacher/the head department</h6><br>
					</div>
					<div>
							<?php
						   if(isset($_FILES['image'])){
						      $errors= array();
						      $file_name = $_FILES['image']['name'];
						      $file_size =$_FILES['image']['size'];
						      $file_tmp =$_FILES['image']['tmp_name'];
						      $file_type=$_FILES['image']['type'];
						      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
						      
						      $expensions= array("jpeg","jpg","png");
						      
						      if(in_array($file_ext,$expensions)=== false){
						         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
						      }
						         
						      if($file_size > 5242880){
						         $errors[]='File size must be less than 5 MB';
						      }
						      
						      if(empty($errors)==true){
						         move_uploaded_file($file_tmp,"images/".$file_name);
						         echo "Success";
						      }else{
						         print_r($errors);
						      }
						   }
						?>
					         <input class="file1" type="file" name="image" multiple="multiple" />
					</div>


				    <div class="btn-block" align="right">
         				 <button name="submit" type="submit" href="/">Submit</button>
        			</div>
				 </form>	
					</section>
				</section>
			</div>

		
			<!-- Footer Bottom -->
			<div class="footer-bottom">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<!-- Copyright -->
							<div class="copyright">
								<p>© Copyright PHINMA University of Pangasinan 2020.</p>
							</div>
							<!--/ End Copyright -->
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>
		<!-- Jquery JS-->
        <script src="js/jquery.min.js"></script>
        <script src="js/jquery-migrate.min.js"></script>
		<!-- Colors JS-->
        <script src="js/colors.js"></script>
		<!-- Popper JS-->
        <script src="js/popper.min.js"></script>
		<!-- Bootstrap JS-->
        <script src="js/bootstrap.min.js"></script>
		<!-- Owl Carousel JS-->
        <script src="js/owl.carousel.min.js"></script>
		<!-- Jquery Steller JS -->
		<script src="js/jquery.stellar.min.js"></script>
		<!-- Final Countdown JS -->
		<script src="js/finalcountdown.min.js"></script>
		<!-- Fancy Box JS-->
		<script src="js/facnybox.min.js"></script>
		<!-- Magnific Popup JS-->
		<script src="js/jquery.magnific-popup.min.js"></script>
		<!-- Circle Progress JS -->
		<script src="js/circle-progress.min.js"></script>
		<!-- Nice Select JS -->
		<script src="js/niceselect.js"></script>
		<!-- Jquery Steller JS-->
        <script src="js/jquery.stellar.min.js"></script>
		<!-- Jquery Steller JS-->
        <script src="js/cube-portfolio.min.js"></script>
		<!-- Slick Nav JS-->
        <script src="js/slicknav.min.js"></script>
		<!-- Easing JS-->
        <script src="js/easing.min.js"></script>
		<!-- Waypoints JS-->
        <script src="js/waypoints.min.js"></script>
		<!-- Counter Up JS -->
		<script src="js/jquery.counterup.min.js"></script>
		<!-- Scroll Up JS-->
        <script src="js/jquery.scrollUp.min.js"></script>
		<!-- Gmaps JS-->
		<script src="js/gmaps.min.js"></script>
		<!-- Main JS-->
        <script src="js/main.js"></script>
    </body>
</html>