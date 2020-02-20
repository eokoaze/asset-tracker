<?php 
include "includes/dbconn.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Add NeW PC || Chechout System</title>
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

		<div id="add_pc_data" class="col-sm-5"> <!--Sign Up Form-->
			<h3 class="text-center" style="color:whitesmoke; background-color:grey;"><b>Add New PC</b></h3>
			<form id="add_pc" role="form" method="POST" action="" class="well well-sm" autocomplete="off"> 
				<div class="form-group">
					<label>PC Number</label>
					<input type="text" class="form-control" name="pcNo" id="pcNo" placeholder="Example: JUMLOS001 " required>
				</div>
				<div class="form-group">
					<label>PC Name</label>
					<input type="text" class="form-control" name="pcName" id="pcName" placeholder="Example: Dell Latitude D600" required>
				</div>
                <div class="form-group">
					<label>Serial Number</label>
					<input type="text" class="form-control" name="serialNo" id="serialNo" placeholder="0000000000000" required>
				</div>
				<div class="form-group">
					<label>Specifications</label>
                    <textarea class="form-control" name="spec" id="spec" required>
                    </textarea>
				</div>				
				<div class="form-group">
					<button class="btn btn-primary" name="sign_up">Add PC</button>
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