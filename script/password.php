<?php
session_start();

include '../includes/dbconn.php';
	
	$method = $_SERVER['REQUEST_METHOD'];
	if(strtolower($method) == "post")
	{
		if( ($_POST['key'] !== "") )
		{
			$key = strtolower($_POST['key']);
			$query = mysqli_query($conn,"SELECT * FROM user WHERE LOWER(email)='$key' OR LOWER(username)='$key'");

			if (mysqli_num_rows($query) === 1)
			{
				$row = mysqli_fetch_array($query);
				$password = $row['password'];
				$email = $row['email'];

				//send mail to the user
	 			//the mssg
	 			$msg = "Hi User,\n You requested for password retrieval\n Your password is: <b>".$password."</b>.";
	 			 //headers
				$headers = "MIME-Version: 1.0" . "\r\n";
				$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
				$headers .= 'From: <noreply@hospitalng.com>' . "\r\n";
				// send email
				mail($email,"Password Reterieval",$msg);

				echo "success";
			}
			else
			{
				echo "<b>User not found!</b>";
			}			
			 
		}
		
	}
?>