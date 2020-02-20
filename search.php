<?php 
    session_start();
    include "includes/dbconn.php"; 
?>

<!DOCTYPE html>
<html>
<head>
	<title>Jumia Asset Tracker || Search</title>
	<meta charset="utf-8">
	<meta name="viewpoint" width="width-content initial-scale:1-0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div><!--Page Wrapper-->
		
		<?php include "includes/header.php";?>

		<div class="container" style="margin-top:125px;"><!--Page Contents-->
				<div>
					<div class="col-sm-2"> </div>

					<form id="search" class="col-sm-8" autocomplete="off">
								<div class="form-group col-sm-10">
									<input name="key" type="text" class="form-control search search-textbx" placeholder="Enter Property ID">
								</div>
								<button type="submit" class="btn btn-primary search" name="search">Search</button>
					</form>
					
					<div class="" id="result"> </div><!--End result-->

		      	<div class="col-sm-2"> </div>			

		</div><!--End of Page Content-->

        <?php
            //Process Check Out
            if(isset($_POST['checkOut'])){
                $pcNo = $_SESSION['pcNo'];
                $staffID = $_SESSION['staffID'];
                $sql = "INSERT INTO pc_tracker (pcNo,staffID,checkOut) VALUES ('$pcNo','$staffID',NOW())";
                $save = mysqli_query($conn,$sql);
                if ($save){
                    mysqli_query($conn,"UPDATE pc SET currentStatus=1 WHERE pcNo='$pcNo'");
                    echo '<script>alert("ITEM CHECKED OUT!!!")</script>';                
                }
            }
            //Process Check In
            if(isset($_POST['checkIn'])){
                $pcNo = $_SESSION['pcNo'];
                $staffID = $_SESSION['staffID'];
				$sql = "UPDATE pc SET currentStatus=0 WHERE pcNo='$pcNo'";
				$save = mysqli_query($conn,$sql);
                if ($save){
                    mysqli_query($conn,"UPDATE pc_tracker SET checkIn=NOW() WHERE pcNo='$pcNo' AND checkIn=''");
                	echo '<script>alert("ITEM CHECKED BACK IN!!!")</script>';                
                }                               
            }		
	    ?>

	</div><!--end Page Wrapper-->
	
	<?php include "includes/footer.php"; ?>



<script type="text/javascript" src="js/jquery-3.1.1.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/ajax.js"></script>
</body>
</html>