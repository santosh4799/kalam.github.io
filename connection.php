<?php
	$con=mysqli_connect("localhost","root","","academy");
	if (!$con) {
		echo "<script>alert('Database not connected....!!');</script>";
	}
?>