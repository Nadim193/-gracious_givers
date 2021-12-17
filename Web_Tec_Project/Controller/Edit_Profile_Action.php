<?php

	error_reporting(0);

	$eNGO_Name = "";
	$eNGO_Owner_Name = "";
	$eType_Of_NGO = "";
	$eEmail_Address = "";
	$eNGOs_Web_Link = "";
	$ePresent_Address = "";
	$ePermanent_Address = "";
	
	$ngonameErrMsg = "";
	$ngoownernameErrMsg = "";
	$emailErrMsg = "";
	$typeofngoErrMsg = "";
	
	if ($_SERVER['REQUEST_METHOD'] === "POST") {
	
		$eNGOs_Web_Link = $_POST['NGOs_Web_Link'];
		$ePresent_Address = $_POST['Present_Address'];
		$ePermanent_Address = $_POST['Permanent_Address'];
	
		if (empty($_POST['NGO_Name'])) {
			$ngonameErrMsg = "*NGO Name is Required";
			$errors[] = $ngonameErrMsg;
		} else if (!preg_match("/^[a-z A-z ]*$/", $_POST['NGO_Name'])) {
			$ngonameErrMsg = "Only alphabets and whitespace are allowed.";
			$errors[] = $ngonameErrMsg;
		} else {
			$eNGO_Name = $_POST['NGO_Name'];
		}
	
		if (empty($_POST['NGO_Owner_Name'])) {
			$ngoownernameErrMsg = "*NGO Owner Name is Required";
			$errors[] = $ngoownernameErrMsg;
		} else if (!preg_match("/^[a-z A-z ]*$/", $_POST['NGO_Owner_Name'])) {
			$ngoownernameErrMsg = "Only alphabets and whitespace are allowed.";
			$errors[] = $ngoownernameErrMsg;
		} else {
			$eNGO_Owner_Name = $_POST['NGO_Owner_Name'];
		}
	
		if (empty($_POST['Email_Address'])) {
			$emailErrMsg = "*Email Address is Required";
			$errors[] = $emailErrMsg;
		} else if (!filter_var($_POST['Email_Address'], FILTER_VALIDATE_EMAIL)) {
			$emailErrMsg = "Invalid email format. Email like : example@example.com";
			$errors[] = $emailErrMsg;
		} else {
			$eEmail_Address = $_POST['Email_Address'];
		}
	
		if (isset($_REQUEST['Type_Of_NGO']) && $_REQUEST['Type_Of_NGO'] === '0') {
			$typeofngoErrMsg = "Select Your NGO Type.";
			$errors[] = $typeofngoErrMsg;
		} else {
			$eType_Of_NGO = $_POST['Type_Of_NGO'];
		}
	
			if ($ngonameErrMsg === '' && $emailErrMsg === '' && $ngoownernameErrMsg === '' && $typeofngoErrMsg === '') {
	
				require_once "../Model/connection.php";
	
				require_once "../Model/Edit_Profile_Data.php";
			} 
			else {
				
			}
	} 
	else {
		
	}
?>