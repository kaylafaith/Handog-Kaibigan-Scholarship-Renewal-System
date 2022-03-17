<?php

$username = filter_input(INPUT_POST, 'username');
$first_name = filter_input(INPUT_POST, 'first_name');
$last_name = filter_input(INPUT_POST, 'last_name');

if (!empty($username))
{
if (!empty($first_name))
{
if (!empty($last_name))
{
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "db_hkrenewal";
	// Create connection


	$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
	if (mysqli_connect_error()){
	die('Connect Error ('. mysqli_connect_errno() .') '
	. mysqli_connect_error());
	}
	else{
	
	$sql = "INSERT INTO tbl_admin (employee_id,first_name, last_name, password)
	VALUES ('$username','$first_name','$last_name', '$last_name')";

		if ($conn->query($sql)){
		header("Location: signup.php");
		echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
		}
		else{
		$message = "Error";
		echo "<script type='text/javascript'>alert('$message');</script>". $sql ."
		header('Location: signup.php');
		". $conn->error;
		}
		$conn->close();

	}
}

else{
		$message = "Password should not be empty";
		echo "<script type='text/javascript'>alert('$message');</script>";
die();
}
}
else{
$message = "Username should not be empty";
echo "<script type='text/javascript'>alert('$message');</script>";
die();
}
}


?>
