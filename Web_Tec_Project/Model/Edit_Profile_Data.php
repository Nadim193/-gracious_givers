<?Php
	session_start();

	$uname = $_SESSION['username'];

	$sql = "UPDATE ngo_data SET NGO_Name = ?, NGO_Owner_Name = ?, Type_Of_NGO = ?, Email_Address = ?, Present_Address = ?, Permanent_Address = ?, NGOs_Web_Link = ? WHERE User_Name  = ?";

	$stmt = $conn->prepare($sql);
	$stmt->bind_param('ssssssss', $NGO_Name, $NGO_Owner_Name, $Type_Of_NGO, $Email_Address, $Present_Address, $Permanent_Address, $NGOs_Web_Link, $User_Name);
	$NGO_Name = $eNGO_Name;
	$NGO_Owner_Name = $eNGO_Owner_Name;
	$Type_Of_NGO = $eType_Of_NGO;
	$Email_Address = $eEmail_Address;
	$Present_Address = $ePresent_Address;
	$Permanent_Address = $ePermanent_Address;
	$NGOs_Web_Link = $eNGOs_Web_Link;
	$User_Name = $uname;

	if ($stmt->execute()) {
		$error .= "Change successful";
	}
	else {
		$error = "Something is wrong.Try again";
	}

	$data = array(
		'error' => $error
	);

	echo json_encode($data);

	$conn->close();
?>