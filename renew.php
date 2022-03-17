<!doctype html>
<html lang="en">
<head>
	<title></title>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	
	<style type="text/css">

		p{
			text-align: justify;

		}
		.logo{
			width: 100%;
			height: auto;

		}
		a{
			color:#1b2107;
		}
		h5{
			text-align: center;
			background: #2F5F3A;
			color: white;
			padding: 10px;
			font-family: serif;
		}
		h3{
			text-align: center;
			background: #2F5F3A;
			color: white;
			padding: 10px;
			font-family: serif;
			height: auto;
		}
		h1{
			padding: 10px;
			color: #2F5F3A;
			font-family: serif;
			text-align: center;
			margin-top: 30px;
			font-weight: bold;
		}
		h6{
			
			text-align: left;
			color: #2F5F3A;
			padding: 10px;
			font-family: serif;
			font-weight: bold;
			display: inline-block;
		}
		h4{
			text-align: left;
			color: #2F5F3A;
			padding: 10px;
			font-family: serif;
			font-weight: bold;
		}
		body{
			background:url('upang.jpg');
			background-repeat: no-repeat;
			background-position: center center;
			background-attachment: fixed;
			background-size: cover;
		}
		.nav{
			padding: 10px;
			margin-top: 20px;
		}
		.image{
			width: 100%;
			height: 80%;
			margin-top: 10px;
		}
		.col-sm-5{
			height: 60%;
			border: 3px solid #2F5F3A;
			padding: 10px;
		}
		.file{
			width: auto;
		}
		.file1{
			width: 80%;
		}
		
		.nav .current{
			background-color: #99C285;
			}

		 th, td {
 			 border-style: solid;
 			 border-width: thick;
 			
		}
		ul {
		  list-style-type: none;
		  margin: 0;
		  padding: 0;
		  overflow: hidden;
		  background-color: #2F5F3A;
		}

		li {
		  float: left;
		}

		li a {
		  display: block;
		  color: black;
		  text-align: center;
		  padding: 8px 20px;
		  text-decoration: none;
		  color: white;
		}

		li a:hover {
		  background-color: #99C285;
		}
		.nav{
			padding: 10px;
			margin-top: 10px;
		}
	</style>
</head>

<body>
	<div class="container-fluid">
		<header class="row">
			<div class="container-fluid" align="right">
				<h6> Student Name</h6>
				<a href="log.php"><button>Log-out</button></a>
			</div>
		</header>
		<img src="header.jpg" class="logo">
		<div class="row">
			<div class="col-sm-12">
			<div class="nav justify-content-center">
		<nav>
			
			<ul>
			<li><a class="current">Home</a></li>
			<li><a href="studmessage.php">Message</a></li>
			<li><a href="studprofile.php">Profile</a></li>
			</ul>
		</nav>
	</div>
			</div>
		</div>
		
	<div class="container">
		<section class="jumbotron p-3">
			<h4><u>Requirements</u></h4>
			<h4> - copy of registration fee receipt</h4>
			<h4> - copy of COM</h4>
			<h4> - DTR with complete duty hours and signature of the teacher/the head department</h4>
		</section>
		<section class="file jumbotron p-3" align="center">
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
         
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
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
         <input type="submit"/>
      </form>
      
		</section>
	</div>
		<footer> 
			<h5>PHINMA UPang &copy; 2020</h5>
		</footer>
	</div>
</body>

</html>