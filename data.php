<?php 
	include('connection.php');
	session_start();
	$email=$_SESSION['uname'];
	if (!isset($email)) {
		header('location:login.php');
	}

	$query="SELECT * FROM login_details WHERE email='$email'";
	$result=mysqli_query($con,$query);
	if (mysqli_num_rows($result)>0) {
		while ($row=mysqli_fetch_assoc($result)) {
			$fname=$row['first_name'];
			$lname=$row['last_name'];
			$email=$row['email'];
			$phone=$row['phone'];
			$gender=$row['gender'];
			
		}
	}
   $query="SELECT * FROM address_details WHERE email='$email'";
	$result=mysqli_query($con,$query);
	if (mysqli_num_rows($result)>0) {
		while ($row=mysqli_fetch_assoc($result)) {
			
			$full_address=$row['full_address'];
			$state=$row['state'];
			$city=$row['city'];
			$postal_code=$row['postal_code'];
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>User Information</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style.css">
  <style type="text/css">
  	
  </style>
</head>
<body>

	<div class="container col-lg-10 m-auto">
		<div class="content">
			<div class="row">
				<div class="col-md-12">
					<a href="logout.php" class="logout ml-auto"><i class="fa fa-sign-out"></i> sign out</a>
				</div>
				<div class="col-lg-6 col-md-6 col-12 col-sm-12">
					<div class="info">
						<table class="table">
							<tr>
								<th colspan="2" class="text-center">User Details</th>
							</tr>
							<tr>
								<td>User Name</td>
								<td><?php echo $fname." ".$lname; ?></td>
							</tr>
							<tr>
								<td>Email Address</td>
								<td><?php echo $email; ?></td>
							</tr>
							<tr>
								<td>Phone</td>
								<td><?php echo $phone; ?></td>
							</tr>
							<tr>
								<td>Gender</td>
								<td><?php echo $gender; ?></td>
							</tr>
						</table>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-12 col-sm-12">
					<div class="info">
						<table class="table">
							<tr>
								<th colspan="2" class="text-center">User Address Details</th>
							</tr>
							<tr>
								<td>Address</td>
								<td><?php echo $full_address; ?></td>
							</tr>
							<tr>
								<td>State</td>
								<td><?php echo $state; ?></td>
							</tr>
							<tr>
								<td>City</td>
								<td><?php echo $city; ?></td>
							</tr>
							<tr>
								<td>Postal Code</td>
								<td><?php echo $postal_code; ?></td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
