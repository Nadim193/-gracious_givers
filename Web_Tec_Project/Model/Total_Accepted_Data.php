<?php
	session_start();

	$ststus_Check4 = "accepted";

	$sql4 = "SELECT * FROM start_program_data WHERE User_name = ? AND Status = ?";
			$stmt4 = $conn->prepare($sql4);
			$stmt4->bind_param('ss', $User_name, $Status);

			$User_name = $uname;
			$Status = $ststus_Check4;
	
			$stmt4->execute();
			$result4 = $stmt4->get_result();

			$accrow = $result4 ->num_rows;
?>