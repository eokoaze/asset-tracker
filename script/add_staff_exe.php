<?php
session_start();

include '../includes/dbconn.php';
	
	$method = $_SERVER['REQUEST_METHOD'];
	if(strtolower($method) == "post") {
		if( ($_POST['id'] !== "") AND ($_POST['email'] !== "") AND ($_POST['fname'] !== "") AND ($_POST['lname'] !== "") AND ($_POST['department'] !== "") )	{	
			
            $id = $_POST['id'];
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $email = $_POST['email'];
            $department = $_POST['department'];


            //validate email
            if (!filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                echo "email";
            }
            else{

                //check if id already exist
                $query = "SELECT * FROM asset_tracker.staff WHERE staffID='$id'";
                $check = mysqli_query($conn,$query);
                
                //save data to db
                if(mysqli_num_rows($check) == 0) {
                    $sql = "INSERT INTO asset_tracker.staff (staffID,fName,lName,email,department,dateAdded) VALUES ('$id','$fname','$lname','$email','$department',NOW())";
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
	}
?>