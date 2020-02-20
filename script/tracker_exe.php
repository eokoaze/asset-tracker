<?php
session_start();
include '../includes/dbconn.php';
	
	$method = $_SERVER['REQUEST_METHOD'];
	if(strtolower($method) == "post") {
		if( ($_POST['key'] !== "") ) {
			$key = $_POST['key'];
			$sql = "SELECT * FROM asset_tracker.pc_tracker WHERE pcNo='$key' OR staffID='$key'";
            $result = mysqli_query($conn,$sql);
            $count = 1; 
            echo'
				<table align="center" class="table table-striped well well-sm">
					<thead>
						<tr>
							<th>S/N</th> <th>PC NO.</th> <th>STAFF ID</th> <th>DATE OUT</th> <th> DATE IN</th>                        
						</tr>
                    </thead>
                    <tbody>';
            while($row = mysqli_fetch_assoc($result)){                                   
                echo '                
                    <tr>
                        <td>'.$count++.'</td>
                        <td>'.$row['pcNo'].'</td>							
                        <td>'. $row['staffID'].'</td>
                        <td>'. $row['checkOut'].'</td>													
                        <td>'. $row['checkIn'].'</td>                    
                    </tr>';                
            }
            echo '</tbody> </table> ';
        }
    }
			
?>