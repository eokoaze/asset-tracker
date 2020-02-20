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
	<title>Staffs || Checkout System</title>
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
			<div><!--Section left-->
				
				<h4 class="text-center" style="color:whitesmoke; background-color:grey;"><b>STAFFs</b></h4><br>

					<?php
						$query_table = mysqli_query($conn,"SELECT * FROM asset_tracker.staff ORDER BY fName");
						echo'<table align="center" class="table table-striped well well-sm">';
						echo"<tr>";
						echo"<td><strong>No</strong></td>
						<td><strong>STAFF ID</strong></td>
						<td><strong>FIRSTNAME</strong></td>
						<td><strong>LASTNAME</strong></td>
                        <td><strong>EMAIL</strong></td>
                        <td><strong>DEPARTMENT</strong></td>
                        <td><strong>DATE ADDED</strong></td>
						<td><strong>ACTION</strong></td>
						</tr>";
				?>
						<?php 
							$count = 1;
							while($row = mysqli_fetch_assoc($query_table)){
						?>
							<tr><form method="POST">
							<td><?php echo $count++; ?></td>
							<td><?php echo $row['staffID']; ?></td>							
							<td><?php echo $row['fName']; ?></td>
							<td><?php echo $row['lName']; ?></td>
							<td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['department']; ?></td>
                            <td><?php echo $row['dateAdded']; ?></td>													
							<td> <?php 
									echo '<button name="del" class="btn btn-danger">Delete</button>';									
								 ?>
							</td>
							<input type='hidden' name='txt_del' value='<?php echo $row['id'];?>'></strong>
							</tr></form>

							<?php }

								if(isset($_POST['del']))
							{
								$id = $_POST['txt_del'];							
							 
								$query_table = mysqli_query($conn,"DELETE FROM asset_tracker.staff WHERE id='$id'");
								if($query_table)
								{
									echo "<script>alert('Item Deleted Successfully!');</script>";
									echo "<script>window.location.href='view_staffs.php';</script>";
								}
							}

							 ?>
							</tr>
							</table>								

			</div><!--End left-->

		</div><!--End of Page Content-->

		<?php include "includes/footer.php"; ?>
	</div><!--end Page Wrapper-->



<script type="text/javascript" src="js/jquery-3.1.1.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/ajax.js"></script>
</body>
</html>