

<?php
include "config.php";

if(isset($_POST['loginbutton'])){

    $username = mysqli_real_escape_string($con,$_POST['username']);
    $password = mysqli_real_escape_string($con,$_POST['password']);

    if ($username != "" && $password != ""){

        $sql_query = "select count(*) as cntUser from tbl_admin where employee_id='".$username."' and BINARY password='".$password."'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['username'] = $username;
            header('Location: home4admin.php');
        }else{
             $message = "Invalid username and password";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }

    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Handog Kaibigan Scholarship</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<style type="text/css">
	.login-form {
        width: 385px;
        margin: 30px auto;
        margin-top: 10%;
    }
    .login-form form {        
        margin-bottom: 15px;
        background: rgba(0, 0, 0, 0.5);
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
        border-radius: 10px;
    }
    .login-form h2 {
        margin: 0 0 15px;
        color: white;
    }
    .form-control, .login-btn {
        min-height: 38px;
        border-radius: 2px;
    }
    .input-group-addon .fa {
        font-size: 18px;
    }
    .login-btn {
        font-size: 15px;
        font-weight: bold;
    }
    .social-btn .btn {
        border: none;
        margin: 10px 3px 0;
        opacity: 1;
    }
    .social-btn .btn:hover {
        opacity: 0.9;
    }
    .social-btn .btn-primary {
        background: #507cc0;
    }
    .social-btn .btn-info {
        background :#235D3A;
    }
    .social-btn .btn-danger {
        background: #df4930;
    }
    .or-seperator {
        margin-top: 20px;
        text-align: center;
        border-top: 1px solid #ccc;
    }
    .or-seperator i {
        padding: 0 10px;
        background: #f7f7f7;
        position: relative;
        top: -11px;
        z-index: 1;
    }  
    body{
			background:url('uop.jpg');
			background-repeat: no-repeat;
			background-position: center center;
			background-attachment: fixed;
			background-size: cover;
		} 
    a{
        color: white;
    }
    .a:hover{
        color: white;
    }
    h2{
        text-shadow: 2px 2px #CBA901;
    }
</style>
</head>
<body>


<div class="login-form">
    <form action="" method="post">
        <h2 class="text-center">Sign in as ADMIN</h2> 
        <div class="form-group">
        	<div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control" name="username" placeholder="Username" id="username "required="required">				
            </div>
        </div>
		<div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                <input type="password" class="form-control" name="password" placeholder="Password" id="password" required="required">				
            </div>
        </div>        
        <div class="form-group">
            <button type="submit" class="btn btn-info login-btn btn-block" name="loginbutton">Sign in</button>
        </div>
        <div class="row">
         <div class="col-sm-6">
            <a class="a" href="log1.php" class="pull-left">Back</a>
        </div>
        <div class="col-sm-6 clearfix">
            <a class="a" href="#" class="pull-right">Forgot Password?</a>
        </div>
    </div>
    </form>    
</div>
</body>
</html>                         