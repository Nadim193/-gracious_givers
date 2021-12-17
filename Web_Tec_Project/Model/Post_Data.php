<?php

	session_start();

	error_reporting(0);
	$uname = $_SESSION['username'];

	// require_once 'connection.php';

		$sql2 = "SELECT * FROM admin_post_data WHERE Username = ?";
				$stmt2 = $conn->prepare($sql2);
				$stmt2->bind_param('s', $Username);

				$Username = $uname;

				$stmt2->execute();
				$result2 = $stmt2->get_result();
		
				if ($result2->num_rows > 0){
					while($raw = $result2->fetch_assoc()){
						$Pusername = $raw['Admin_Username'];
						$Program_Name = $raw['Program_Name'];
						$Program_Type = $raw['Program_Type'];
						$Start_Time = $raw['Start_Time'];
						$End_Time = $raw['End_Time'];
						$Required_Volunteer = $raw['Required_Volunteer'];
						$Required_Amount = $raw['Required_Amount'];
						$Phone_Number = $raw['Phone_Number'];
						$Post = $raw['Post'];
						$Data = $raw['Data'];

						require '../View/Post.php';
						
					}
				}
				//$conn->close();

?>