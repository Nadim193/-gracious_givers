<?php
	session_start();

	$ststus_Check3 = "completed";

	$sql3 = "SELECT * FROM start_program_data WHERE User_name = ? AND Status = ?";
			$stmt3 = $conn->prepare($sql3);
			$stmt3->bind_param('ss', $User_name, $Status);

			$User_name = $uname;
			$Status = $ststus_Check3;
	
			$stmt3->execute();
			$result3 = $stmt3->get_result();

			$comrow = $result3 ->num_rows;
?>