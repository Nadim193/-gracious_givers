<?php
	$sql = "INSERT INTO ngo_data (NGO_Name, User_Name, Ngo_Password, NGO_Owner_Name, Type_Of_NGO, Email_Address, Present_Address, Permanent_Address, NGOs_Web_Link, Profile_Picture) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

	$stmt = $conn->prepare($sql);
	$stmt->bind_param('ssssssssss', $NGO_Name, $User_Name, $Ngo_Password, $NGO_Owner_Name, $Type_Of_NGO, $Email_Address, $Present_Address, $Permanent_Address, $NGOs_Web_Link, $Profile_Picture);
	$NGO_Name = $ngoname;
	$User_Name = $ngousername;
	$Ngo_Password = $confirmpassword;
	$NGO_Owner_Name = $ngoownername;
	$Type_Of_NGO = $typeofngo;
	$Email_Address = $emailaddress;
	$Present_Address = $presentaddress;
	$Permanent_Address = $permanentaddress;
	$NGOs_Web_Link = $ngoweblink;
	$Profile_Picture = $image;

	if ($stmt->execute()) {
		$success[] = "Account Created Succssfully";
	} else {
		$errors[] = "Something is wrong.Try again";
	}
?>