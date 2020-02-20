<?php 
include "includes/dbconn.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>PC Assignment || Chechout System</title>
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

		<div id="assign_pc_data" class="col-sm-5"> <!--Sign Up Form-->
			<h3 class="text-center" style="color:whitesmoke; background-color:grey;"><b>Assign PC to Staff</b></h3>
			<form id="assign_pc" role="form" method="POST" action="" class="well well-sm" autocomplete="off"> 
				<div class="form-group">
					<label>PC Details</label>
					<select class="form-control" name="pc" id="pc">
                    <option value = "">Select PC</option>'
                        <?php
                            $query = "SELECT pcNo,pcName FROM asset_tracker.pc";
                            $res = mysqli_query($conn,$query);
                            
                            while (($row = mysqli_fetch_assoc($res)) != null) {
                                $id = $row['pcNo'];
                                $name = $row['pcName'];
                                echo '<option value = "'.$id.'" >'.$id.':'.$name.'</option>';
                            }
                        ?>
                    </select>
				</div>
				<div class="form-group">
					<label>Staff Details</label>
                    <select class="form-control" name="staff" id="staff">
                    <option value = "">Select Staff</option>'
                        <?php
                            $query = "SELECT staffID,lName FROM asset_tracker.staff";
                            $res = mysqli_query($conn,$query);
                            
                            while (($row = mysqli_fetch_assoc($res)) != null) {
                                $id = $row['staffID'];
                                $name = $row['lName'];
                                echo '<option value = "'.$id.'" >'.$id.':'.$name.'</option>';
                            }
                        ?>
                    </select>
				</div>
                				
				<div class="form-group">
					<button class="btn btn-primary" name="sign_up">Assign PC to Staff</button>
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