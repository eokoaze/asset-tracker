<?php 
session_start();
include "includes/dbconn.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Jumia Asset Tracker || login</title>
	<meta charset="utf-8">
	<meta name="viewpoint" width="width-content initial-scale:1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="navbar navbar-default navbar-fixed-top" role="navigation" id="nav1"><!--nav section-->
		<div class="container container-fluid"><!--Logo-->
			<div class="col-sm-6 pull-left">
				<a href="index.php" class="logo">
					<h2><b>Checkout System</b></h2>
				</a>
			</div>
			<div class="col-sm-6 pull-right">
				<br>					
			
			</div>

		</div> <!--end logo-->
		<div id="nav">
			
		</div><!--end-nav-->
	</div><!--end of nav section-->

	<div class="container" style="margin-top:100px;"><!--Start Page Body-->
		<div class="col-sm-4">	</div>

		<div class="col-sm-4"> <!--Log in Form-->
			<form role="form" method="POST" action="" class="well well-sm" autocomplete="off"> 
				<div class="form-group">
					<label>Security ID</label>
					<input type="text" class="form-control" name="id" id="id" required>
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" class="form-control" name="pword" required>
				</div>
				<div class="form-group">
					<a href="log_in.php" class="btn btn-link pull-right"><b>Admin</b></a>
				</div>				
				<div class="form-group">
					<button class="btn btn-primary" name="login">Log In</button>
				</div>				
			</form>
		</div><!--End of Log-In Form-->

		<div class="col-sm-4">	</div>
	</div><!--End Page Body-->

	<?php
		if(isset($_POST['login']))
		{
			if(isset($_POST['id']) && isset($_POST['pword']))
			{
				$id =  mysqli_real_escape_string($conn,$_POST['id']);
				$password = md5(mysqli_real_escape_string($conn,$_POST['pword']));

				$sql = "SELECT * FROM security_guard WHERE staffID='$id'AND password='$password'";
				$search = mysqli_query($conn,$sql);				
				$user = mysqli_num_rows($search);
				if($user === 1)
				{    
					$data = mysql_fetch_assoc($search);           
                  //create session                                                                                
                  $_SESSION['sesid'] = $id;
				  $_SESSION['sespword'] = $password;
				  $_SESSION['name'] = $data['name'];                      
                  //End create Session
					header('location:search.php');
				}
				else
				{
					echo '<script>alert("USER NOT FOUND!!!");</script>';
				}
			}
		}
	?>

		<script type="text/javascript" src="js/jquery-3.1.1.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
</body>
</html>