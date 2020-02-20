<?php 
include "includes/dbconn.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>hospitalng.com || retrieve password</title>
	<meta charset="utf-8">
	<meta name="viewpoint" width="width-content initial-scale:1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<?php include "includes/header.php"; ?>
	<div class="container" style="margin-top:100px;"><!--Start Page Body-->
		<div class="col-sm-3">	</div>

		<div class="col-sm-6"> <!--Main Form-->
			<form id="ret_pword" method="POST" action="" class="well well-sm" autocomplete="off"> 
				<div class="form-group">
					<label>enter username or email address</label>
					<input type="text" class="form-control" name="key" id="key" required>
				</div>
				
				<div class="form-group">
					<button class="btn btn-primary" name="login">Submit</button>
				</div>
				<div class="form-group error" id="result">
				<b><em>
					
				</em></b>
				</div>
			</form>

		</div><!--End of main Form-->

		<div class="col-sm-3">	</div>
	</div><!--End Page Body-->

	<?php
		if(isset($_POST['login']))
		{
			if(isset($_POST['uname']) && isset($_POST['pword']))
			{
				$username = $_POST['uname'];
				$password = $_POST['pword'];


				$sql = "SELECT * FROM user WHERE username='$username'AND password='$password'";
				$search = mysqli_query($conn,$sql);				
				if(mysqli_num_rows($search) !== 0)
				{
					header('location:menu.php');
				}
				else
				{
					echo"
						<script>
						alert('Username/Password Incorrect!');
						window.location.href='log_in.php';
						</script>;
					";
				}
			}
		}
	?>

		<script type="text/javascript" src="js/jquery-3.1.1.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
		<script type="text/javascript" src="js/ajax.js"></script>
</body>
</html>