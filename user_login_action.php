<?php
	include('connection.php');
	session_start();
	$email=$_POST['a1'];
	$pass=$_POST['a2'];
	$query="SELECT * FROM login_details WHERE email='$email' && password='$pass'";
	$result=mysqli_query($con,$query);
	$row=mysqli_num_rows($result);
	if ($row>0) {
		$_SESSION['uname']=$email;
		echo "login successfully";
	}
	else{
		echo "Email or password are incorrect....!!";
	}
?>