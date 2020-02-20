<?php 
include "includes/dbconn.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Add Gaurd || Chechout System</title>
	<meta charset="utf-8">
	<meta name="viewpoint" width="width-content initial-scale:1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<?php include "includes/header_user.php"; ?>
	<div class="container" style="margin-top:100px;"><!--Start Page Body-->
	
		<div class="col-sm-7">	</div>

		<div id="add_guard_data" class="col-sm-5"> <!--Sign Up Form-->
			<h3 class="text-center" style="color:whitesmoke; background-color:grey;"><b>Add Security Guard</b></h3>
			<form id="add_guard" role="form" method="POST" action="" class="well well-sm" autocomplete="off"> 
				<div class="form-group">
					<label>Staff ID</label>
					<input type="text" class="form-control" name="id" id="id" required>
				</div>
				<div class="form-group">
					<label>Fullname</label>
					<input type="text" class="form-control" name="name" id="name" required>
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" class="form-control" name="pword" id="pword" required>
				</div>
				<div class="form-group">
					<label>Confirm Password</label>
					<input type="password" class="form-control" name="c_pword" id="c_pword" required>
				</div>
				<div class="form-group">
					<button class="btn btn-primary" name="sign_up">Add Guard</button>
				</div>
				<div class="form-group ">
					<label id="result" class="error"></label>
				</div>
			</form>

		</div><!--End of Sign Up Form-->

	</div><!--End Page Body-->

	<script type="text/javascript" src="js/jquery-3.1.1.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/ajax.js"></script>

</body>
</html>