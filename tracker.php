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
	<title>PC Tracker || Checkout System</title>
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
			<div class=""><!--Section left-->
				
				<h4 class="text-center" style="color:whitesmoke; background-color:grey;"><b>TRACKER</b></h4><br>
				<div>
					<div class="col-sm-2"> </div>

					<form id="track" class="col-sm-8" autocomplete="off">
								<div class="form-group col-sm-10">
									<input name="key" type="text" class="form-control search search-textbx" placeholder="Enter PC NO. or StaffID to see Check Out history">
								</div>
								<button type="submit" class="btn btn-primary search" name="search">Search</button>
                                <div class=" " id="result"> </div><!--End result-->
					</form>
					
					

		      	<div class="col-sm-2"> </div>
			</div><!--End left-->

		</div><!--End of Page Content-->

		
	</div><!--end Page Wrapper-->



<script type="text/javascript" src="js/jquery-3.1.1.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/ajax.js"></script>
</body>
</html>