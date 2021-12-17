<?php
	$sql = "SELECT User_Name, Ngo_Password FROM ngo_data where User_Name = ? and Ngo_Password = ?";

	$stmt = $conn->prepare($sql);
	$stmt->bind_param('ss', $User_Name, $Ngo_Password);
	$User_Name = $username;
	$Ngo_Password = $password;

	$stmt->execute();
	$result = $stmt->get_result();

	if ($result->num_rows > 0) {

		while ($row = $result->fetch_assoc()) {
			$login = true;
		}
	}
?>