<?php
include ("includes/dbconn.php");
session_start();
if(isset($_SESSION['sesemail']) && isset($_SESSION['sespword'])){
	
}else{
header('location:includes/log_out.php');	
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin || Checkout System</title>
	<meta charset="utf-8">
	<meta name="viewpoint" width="width-content initial-scale:1-0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="contianer"><!--Page Wrapper-->
		
		<?php include "includes/header_user.php"; ?>

		<div class="container" style="margin-top:125px;"><!--Page Contents-->			
			<div class="col-sm-9" style="color:whitesmoke;"><!--Section left-->
				
				<h1 class="text-center" style="background-color:grey;"><b>HI ADMIN!</b></h1><br>

			</div><!--End left-->
			<div class="col-sm-3 well well-sm"><!--Section Center-->
				<h3><b>Notifications</b></h3>

				<ul class="">
					
				</ul>

			</div><!--End center-->

		</div><!--End of Page Content-->

		<?php include "includes/footer.php"; ?>
	</div><!--end Page Wrapper-->



<script type="text/javascript" src="js/jquery-3.1.1.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>