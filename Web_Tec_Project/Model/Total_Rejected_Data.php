<?php
	session_start();

	$ststus_Check6 = "rejected";

	$sql6 = "SELECT * FROM start_program_data WHERE User_name = ? AND Status = ?";
			$stmt6 = $conn->prepare($sql6);
			$stmt6->bind_param('ss', $User_name, $Status);

			$User_name = $uname;
			$Status = $ststus_Check6;
	
			$stmt6->execute();
			$result6 = $stmt6->get_result();

			$rejrow = $result6 ->num_rows;
?>