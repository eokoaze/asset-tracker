<?php
session_start();

include '../includes/dbconn.php';
	
	$method = $_SERVER['REQUEST_METHOD'];
	if(strtolower($method) == "post") {
		if( ($_POST['pc'] !== "") AND ($_POST['staff'] !== "") ) {	
			
            $pcNo = $_POST['pc'];
            $staffID = $_POST['staff'];

            //check if assignment already exist
            $query = "SELECT * FROM asset_tracker.pc_assignment WHERE pcNo='$pcNo'";
            $check = mysqli_query($conn,$query);            
            if(mysqli_num_rows($check) == 0) {

                //save data to db
                $sql = "INSERT INTO asset_tracker.pc_assignment (pcNo,staffID,dateAssigned) VALUES ('$pcNo','$staffID',NOW())";
                $save = mysqli_query($conn,$sql);
                if ($save) {
                    echo "success";
                }
                else {
                    echo "Failed, Contact Developer!". mysqli_error($conn);
                }
            }
            else {
                echo "exist";
            }            			
		}		
	}
?>