<?php
session_start();

include '../includes/dbconn.php';
	
	$method = $_SERVER['REQUEST_METHOD'];
	if(strtolower($method) == "post")
	{
		if( ($_POST['id'] !== "") AND ($_POST['name'] !== "") AND ($_POST['pword'] !== "") AND ($_POST['c_pword'] !== "") )	{	
			if ($_POST['pword'] === $_POST['c_pword'])	{
				$id = $_POST['id'];
				$name = $_POST['name'];
				$password = md5($_POST['pword']);

                //check if id already exist
                $query = "SELECT * FROM asset_tracker.security_guard WHERE staffID='$id'";
                $check = mysqli_query($conn,$query);
                
                if(mysqli_num_rows($check) == 0)
                {
                    $sql = "INSERT INTO asset_tracker.security_guard (staffID,Name,password,dateAdded) VALUES ('$id','$name','$password',NOW())";
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
			else
			{
				echo "password";
			}
			
		}
		
	}
?>