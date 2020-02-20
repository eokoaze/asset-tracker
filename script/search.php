<?php
session_start();

include '../includes/dbconn.php';
	
	$method = $_SERVER['REQUEST_METHOD'];
	if(strtolower($method) == "post")
	{
		if( ($_POST['key'] !== "") )
		{
			$key = $_POST['key'];
			$sql = "SELECT * FROM asset_tracker.pc_assignment WHERE pcNo='$key'";
			$result = mysqli_query($conn,$sql);
			$data = mysqli_fetch_assoc($result);
			if($data)
			{               
				$pcNo = $data['pcNo'];
				$staffID = $data['staffID'];

				$query = mysqli_query($conn,"SELECT * FROM asset_tracker.staff WHERE staffID='$staffID'");
				$staff = mysqli_fetch_assoc($query);

				$query_pc = mysqli_query($conn,"SELECT * FROM asset_tracker.pc WHERE pcNo='$pcNo'");
				$pc = mysqli_fetch_assoc($query_pc);				
				//check if status in db is set to zero then assign appropriate value.
				$status = ($pc['currentStatus'] == 0) ? "None" : "Checked Out";
				
				if($status == "Checked Out"){
					$action = '<form method="post"> <button class="btn btn-success" name="checkIn">Check In</button> </form>';
					$_SESSION['pcNo'] = $pcNo;
					$_SESSION['staffID'] = $staffID;
				}else{
					$action = '<form method="post"><button class="btn btn-danger" name="checkOut">Check Out</button> </form>';
					$_SESSION['pcNo'] = $pcNo;
					$_SESSION['staffID'] = $staffID;
				}
				
				
				echo'
				<table align="center" class="table table-striped well well-sm">
					<thead>
						<tr>
							<th>StaffID</th> <th>Name</th> <th>Department</th> <th>Item No.</th> <th>Status</th> <th>Action</th>                        
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>													 
								'.$staffID.'
							</td>
							<td>													 
								'.$staff['fName']. " " .$staff['lName'].'
							</td>
							<td>													 
								'.$staff['department'].'
							</td>
							<td>													 
								'.$pcNo.'
							</td>
							<td>													 
								'.$status.'
							</td>
							<td>
								'.$action.'	
							</td>                                                                   
						</tr>
					</tbody>
                </table> ';
			}
			else
			{
				echo '
				<table align="center" class="table table-striped well well-sm">
				<thead>
					<tr>
						<th>^^^^^^^^^^^^^^^^^^</th>
						<th>ITEM NOT FOUND!</th>  
						<th>^^^^^^^^^^^^^^^^^^</th>               
					</tr>
				</thead>
				</table>
				';
			}
		}		
	}
?>