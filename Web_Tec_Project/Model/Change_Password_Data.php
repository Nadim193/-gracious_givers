<?php

    require_once "connection.php";
	
	$sql1 = "SELECT Ngo_Password FROM ngo_data WHERE Ngo_Password = ?";

	$stmt1 = $conn->prepare($sql1);
	$stmt1->bind_param('s', $Ngo_Password);
	$Ngo_Password = $oldpassword;
	
	$stmt1->execute();
	$result = $stmt1->get_result();

	if ($result->num_rows > 0) {

		while($row = $result->fetch_assoc()) {

			if(mysqli_num_rows($result) === 1){

					$sql = "UPDATE ngo_data SET Ngo_Password = ? WHERE User_Name = ?";
	
					$stmt = $conn->prepare($sql);
					$stmt->bind_param('ss', $Ngo_Password, $User_Name);
					$Ngo_Password = $retypenew;
					$User_Name = $uname;
					if ($stmt->execute()) {
						$success = "Password Change Successfull.";
					}
					else {
						$success = "Failed to Change Password.";
					}

				// 	$data = array(
				// 		'success' => $success
				// );
			
				// echo json_encode($data);
			}
			else{
				
			}
		}
	}
	$conn->close();
?>