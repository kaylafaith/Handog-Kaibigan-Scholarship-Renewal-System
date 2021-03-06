<?php
include 'create_user.php';
?>

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
		<link rel="icon" type="image/png" href="images/favicon.jpg">
		
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
		<style type="text/css">
	body{
        color: #999;
        background: #e2e2e2;
    }
    .form-header{
        margin: -30px -30px 20px;
        padding: 30px 30px 10px;
        text-align: center;
        background: #00cb82;
        border-bottom: 1px solid #eee;
        color: #fff;
        margin-top: 10px;
        border-radius: 10px;
    }
   
    .form-header h2{
        font-size: 34px;
        font-weight: bold;
        margin: 0 0 10px;
        font-family: 'Pacifico', sans-serif;
    }
    .signup-form{
        width: 500px;
        margin: 0 auto; 
        padding: 30px 0;   
        border-radius: 10px; 
    }
    .group{
    	margin: -30px -30px 20px;
        color: #999;
        border-radius: 3px;
        margin-bottom: 15px;
        background: #f0f0f0;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
        font-family: sans-serif;
    	font-size: 20px;
    	color: black;
    
    }
    .signup-form .form-group{
        margin-bottom: 20px;
    }       
    .signup-form label{
        font-weight: normal;
        color: black;
        font-weight: bold;
        font-size: 13px;
    }
    .signup-form input[type="checkbox"]{
        margin-top: 2px;
        color: black;
    }
    .signup-form .btn{        
        font-size: 16px;
        font-weight: bold;
        background: #00cb82;
        border: none;
        min-width: 200px;
    }
    .signup-form .btn:hover, .signup-form .btn:focus{
        background: #00b073 !important;
        outline: none;
    }
    .signup-form a{
        color: #00cb82;     
    }
    .signup-form a:hover{
        text-decoration: underline;
    }
    table{
    	margin-left: 20%;
    }
    .back{
    	background: #00cb82;
    }
    .modal-title{
    	text-align: center;
    }
    .modal-dialog{
    	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
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
								<a href="home4admin.php"><img src="images/hk.jpg" alt="#"></a>
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
											<li><a href="home4admin.php"><i class="fa fa-home"></i>Home</a></li>
											<li><a href="message4admin1.php"><i class="fa fa-clone"></i>Messages</a></li>
											<li class="active"><a href="signup.php"><i class="fa fa-clone"></i>Profile</a></li>
											<li><a href="contact.html"><i class="fa fa-clone"></i>List of Scholars</a> </li>
											<li><a href="log1.php"><i class="fa fa-clone"></i>Log Out</a> </li>
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
		
		<!-- Breadcrumb -->
		<div class="breadcrumbs overlay" style="background-image:url('images/torch.jpg')">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-12">
						<h2>Administrator's Profile</h2>
					</div>
					<div class="col-lg-6 col-md-6 col-12">
						<ul class="bread-list">
							<li><a href="home4admin.php">Home<i class="fa fa-angle-right"></i></a></li>
							<li class="active"><a href="#">Profile<i class="fa fa-angle-right"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!--/ End Breadcrumb -->
		<!-- Content -->
		<div class="signup-form">
			<div class="form-header">
	            <h2>Administrators</h2>
        	</div>
        	<div class="group">
				
				<?php
				$conn = mysqli_connect("localhost", "root", "", "db_hkrenewal");
				// Check connection
				if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
				}
				$sql = "SELECT first_name, last_name FROM tbl_admin";
				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
				// output data of each row
					$x = 1; 
				while($row = $result->fetch_assoc()) {
					echo '<span style="font-weight:bold;"> Admin </span>',$x," ","<br>";
					echo  $row["first_name"]. " ". $row["last_name"]. " ". "<br><hr>";
				$x++;
				}

				echo "</table>";
				} else { echo "0 results"; }
				$conn->close();
				?>

		</div style="display: inline-block;">
		<div>
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#users_modal"> + Create User</button>
		<button type="button" class="btn btn-danger">Delete Admin</button>
		</div>
			<!-- MODAL BOX -->
			<div class="modal fade" role="dialog" id="users_modal">
				<div class="modal-dialog">
					<div class="modal-content"> 
						<!-- HEADER -->
						<div class="modal-header" style="background: #00cb82;">
					            <h2 class="modal-title" style="font-family: sans-serif;color: white;">+ Create User</h2>
					             
					             <button type="button" class="close" data-dismiss="modal">&times;</button>
						  </div>
						<!-- END OF HEADER -->

						<!-- BODY -->
						<p style="padding: 5px;color: black;" align="center">Fill out this form to add admin users</p>
						<div class="modal-body">
							<form action="create_user.php" method="post">
					        <div class="form-group">
					            <label>Employee ID</label>
					            <input style="border-color: gray;" type="text" class="form-control" name="username" required="required">
					        </div>
					        <div class="form-group">
					            <label>First Name</label>
					            <input style="border-color: gray;" type="text" class="form-control" name="first_name" required="required">
					        </div>
					        <div class="form-group">
					            <label>Last Name</label>
					            <input style="border-color: gray;" type="text" class="form-control" name="last_name" required="required">
					        </div>
					        <div class="form-group">
					            <label>Password</label>
					            <input style="border-color: gray;" type="password" class="form-control" name="password" required="required">
					        </div>
					        <div class="form-group">
					            <button type="submit" class="btn btn-primary btn-block btn-lg" name="submit" >Add User</button>
					        </div> 
					    </form> 
						</div>

						<!-- END OF BODY -->
					</div>
    </div>
	</div>
	</div>


			<!-- Footer Bottom -->
			<div class="footer-bottom">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<!-- Copyright -->
							<div class="copyright">
								<p>?? Copyright PHINMA University of Pangasinan 2020.</p>
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