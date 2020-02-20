<?php
session_start();

include '../includes/dbconn.php';
	
	$method = $_SERVER['REQUEST_METHOD'];
	if(strtolower($method) == "post") {
		if( ($_POST['pcNo'] !== "") AND ($_POST['pcName'] !== "") AND ($_POST['serialNo'] !== "") AND ($_POST['spec'] !== "") )	{	
			
            $pcNo = $_POST['pcNo'];
            $pcName = $_POST['pcName'];
            $serialNo = $_POST['serialNo'];
            $spec = $_POST['spec'];


            //check if id already exist
            $query = "SELECT * FROM asset_tracker.pc WHERE pcNo='$pcNo'";
            $check = mysqli_query($conn,$query);
            
            //save data to db
            if(mysqli_num_rows($check) == 0) {
                $sql = "INSERT INTO asset_tracker.pc (pcNo,pcName,serialNo,specification,dateAdded) VALUES ('$pcNo','$pcName','$serialNo','$spec',NOW())";
                $save = mysqli_query($conn,$sql);
                if ($save) {
                    echo "success";
                }
                else {
                    echo "Failed, Contact Developer!". mysqli_error($conn);
                }
            }
            else {
                echo "user";
            }            			
		}		
	}
?>