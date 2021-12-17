<?php
	$sql = "SELECT * FROM ngo_data WHERE User_Name = ?";
	$stmt = $conn->prepare($sql);
	$stmt->bind_param('s', $User_Name);
	$User_Name = $_SESSION['username'];

	$stmt->execute();
	$result = $stmt->get_result();

	if ($result->num_rows > 0){
		while($row = $result->fetch_assoc()){
			$NGO_Owner_Name = $row["NGO_Owner_Name"];
			$NGO_Name = $row["NGO_Name"];
			$Type_Of_NGO = $row["Type_Of_NGO"];
			$Email_Address = $row["Email_Address"];
			$Permanent_Address = $row["Permanent_Address"];
			$NGOs_Web_Link = $row["NGOs_Web_Link"];
			$Present_Address = $row["Present_Address"];
		}
	}
?>