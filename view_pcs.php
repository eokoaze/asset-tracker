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
	<title>PCs || Checkout System</title>
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
				
				<h4 class="text-center" style="color:whitesmoke; background-color:grey;"><b>PCs</b></h4><br>

					<?php
						$query_table = mysqli_query($conn,"SELECT * FROM asset_tracker.pc ORDER BY pcName");
						echo'<table align="center" class="table table-striped well well-sm">';
						echo"<tr>";
						echo"<td><strong>No</strong></td>
						<td><strong>PcNo</strong></td>
                        <td><strong>PC NAME</strong></td>
                        <td><strong>SERIAL NO</strong></td>
                        <td><strong>SPECIFICATION</strong></td>
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
							<td><?php echo $row['pcNo']; ?></td>							
							<td><?php echo $row['pcName']; ?></td>
                            <td><?php echo $row['serialNo']; ?></td>
                            <td><?php echo $row['specification']; ?></td>
                            <td><?php echo $row['dateAdded']; ?></td>													
							<td> <?php 
									echo '<button name="del" class="btn btn-danger">Delete</button>';									
								 ?>
							</td>
							<input type='hidden' name='txt_del' value='<?php echo $row['id'];?>'></strong>
							</tr></form>

                            <?php 
                            }

								if(isset($_POST['del']))
							{
								$id = $_POST['txt_del'];							
							 
								$query_table = mysqli_query($conn,"DELETE FROM asset_tracker.pc WHERE id='$id'");
								if($query_table)
								{
									echo "<script>alert('Item Deleted Successfully!');</script>";
									echo "<script>window.location.href='view_pcs.php';</script>";
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