
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
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
		<style type="text/css">
			/*.file{
			width: auto;
		}*/
			.file1{
				width: 90%;
			}
		.back{
			background: #727C7F;
			margin-top: 10px;
			margin-bottom: 10px;
			border-radius: 10px;
		}
		h4{
			font-family: sans-serif;
			color: white;
			padding: 10px;
		}
		.back1{
			background: #727C7F;
			padding: 10px;
		}
		.image{
			width: 100%;
			height: 80%;
			margin-top: 10px;
		}
		h2{
			font-family: sans-serif;
			text-shadow: 2px 2px #73C088;
			padding: 10px;
			text-align: center;
			color:#235D3A;
		}
		</style>
    </head>
    <body>
	
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
											<li class="active"><a href="home.php"><i class="fa fa-home"></i>Home</a></li>
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
										<a href="form1.php" class="btn white">Fill Up Form</a>
										<a href="courses.html" class="btn white primary">Renew Now</a>
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
		<div class="container-fluid">
			<h2>Renew Now</h2>
		<section class="back p-3">
			<h4><u>Requirements</u></h4>
			<h4> - copy of registration fee receipt</h4>
			<h4> - copy of endorsement from the assigned department</h4>
			<h4> - copy of COM</h4>
			<h4> - DTR with complete duty hours and signature of the teacher/the head department</h4>
		</section>
		<section class="back p-3" align="center">
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
      
      <form action="" method="POST" enctype="multipart/form-data">
         <input class="file1" type="file" name="image" multiple="multiple" />
         <input class="back1" type="submit"/>
      </form>
      
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
			<!--/ End Footer Bottom -->
		</footer>
		<!--/ End Footer -->
		
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