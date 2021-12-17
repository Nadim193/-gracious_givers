<?php
	$ngoname = "";
	$ngoownername = "";
	$ngopassword = "";
	$ngousername = "";
	$typeofngo = "";
	$emailaddress = "";
	$confirmpassword = "";
	$ngoweblink = "";
	$presentaddress = "";
	$permanentaddress = "";
	
	$ngonameErrMsg = "";
	$ngoownernameErrMsg = "";
	$emailErrMsg = "";
	$usernameErrMsg = "";
	$passwordErrMsg = "";
	$confirmpasswordErrMsg = "";
	$ngoownernameErrMsg = "";
	$typeofngoErrMsg = "";
	
	if ($_SERVER['REQUEST_METHOD'] === "POST") {
	
		$ngoweblink = $_POST['ngoweblink'];
		$presentaddress = $_POST['presentaddress'];
		$permanentaddress = $_POST['permanentaddress'];
	
		if (empty($_POST['ngoname'])) {
			$ngonameErrMsg = "*NGO Name is Required";
			$errors[] = $ngonameErrMsg;
		} else if (!preg_match("/^[a-z A-z ]*$/", $_POST['ngoname'])) {
			$ngonameErrMsg = "Only alphabets and whitespace are allowed.";
			$errors[] = $ngonameErrMsg;
		} else {
			$ngoname = $_POST['ngoname'];
		}
	
		if (empty($_POST['ngoownername'])) {
			$ngoownernameErrMsg = "*NGO Owner Name is Required";
			$errors[] = $ngoownernameErrMsg;
		} else if (!preg_match("/^[a-z A-z ]*$/", $_POST['ngoownername'])) {
			$ngoownernameErrMsg = "Only alphabets and whitespace are allowed.";
			$errors[] = $ngoownernameErrMsg;
		} else {
			$ngoownername = $_POST['ngoownername'];
		}
	
		if (empty($_POST['emailaddress'])) {
			$emailErrMsg = "*Email Address is Required";
			$errors[] = $emailErrMsg;
		} else if (!filter_var($_POST['emailaddress'], FILTER_VALIDATE_EMAIL)) {
			$emailErrMsg = "Invalid email format. Email like : example@example.com";
			$errors[] = $emailErrMsg;
		} else {
			$emailaddress = $_POST['emailaddress'];
		}
	
		if (empty($_POST['ngousername'])) {
			$usernameErrMsg = "*User Name is Required";
			$errors[] = $usernameErrMsg;
		} else if (!preg_match("/^[a-zA-z0-9]*$/", $_POST['ngousername'])) {
			$usernameErrMsg = "Alphabets and Numbers combination are allowed.";
			$errors[] = $usernameErrMsg;
		} else {
			$ngousername = $_POST['ngousername'];
		}
	
		$number = preg_match('@[0-9]@', $_POST['ngopassword']);
		$uppercase = preg_match('@[A-Z]@', $_POST['ngopassword']);
		$lowercase = preg_match('@[a-z]@', $_POST['ngopassword']);
		$specialChars = preg_match('@[^\w]@', $_POST['ngopassword']);
	
		if (empty($_POST['ngopassword'])) {
			$passwordErrMsg = "*Password is Required";
			$errors[] = $passwordErrMsg;
		} else if (strlen($_POST['ngopassword']) < 8 || !$number || !$uppercase || !$lowercase || !$specialChars) {
			$passwordErrMsg = "Password must be at least 8 characters in length and must contain at least one number, one upper case letter, one lower case letter and one special character.";
			$errors[] = $passwordErrMsg;
		} else {
			$ngopassword = $_POST['ngopassword'];
		}
	
		if (empty($_POST['confirmpassword'])) {
			$confirmpasswordErrMsg = "*Confirm Password is Required";
			$errors[] = $confirmpasswordErrMsg;
		} else if ($_POST['ngopassword'] != $_POST['confirmpassword']) {
			$confirmpasswordErrMsg = "Enter Same Password.";
			$errors[] = $confirmpasswordErrMsg;
		} else {
			$confirmpassword = $_POST['confirmpassword'];
		}
	
		if (isset($_REQUEST['typeofngo']) && $_REQUEST['typeofngo'] === '0') {
			$typeofngoErrMsg = "Select Your NGO Type.";
			$errors[] = $typeofngoErrMsg;
		} else {
			$typeofngo = $_POST['typeofngo'];
		}

		// $image = $_FILES['image']['name'];
		// $tempname = $_FILES["image"]["tmp_name"];    
        // $folder = "image/".$image;
	
			if ($ngonameErrMsg === '' && $emailErrMsg === '' && $usernameErrMsg === '' && $passwordErrMsg === '' && $confirmpasswordErrMsg === '' && $ngoownernameErrMsg === '' && $typeofngoErrMsg === '') {
	
				require_once "../Model/connection.php";
	
				require_once "../Model/Registrasion_Data.php";
	
				$conn->close();
			} 
			else {
				
			}
	} else {
	}
?>