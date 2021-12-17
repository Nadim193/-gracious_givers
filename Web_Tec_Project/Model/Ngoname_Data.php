<?php
	$sql1 = "SELECT NGO_Name FROM ngo_data WHERE User_Name = ?";
	$stmt1 = $conn->prepare($sql1);
	$stmt1->bind_param('s', $User_Name);
	$User_Name = $_SESSION['username'];

	$stmt1->execute();
	$result = $stmt1->get_result();

	if ($result->num_rows > 0){

		while($row = $result->fetch_assoc()){
			$ngoname = $row["NGO_Name"];
		}
	}
?>