<?php
	$confirmpassword = "";
	$password = "";
	$confirmpasswordErrMsg = '';
	$passwordErrMsg = '';

	if ($_SERVER['REQUEST_METHOD'] === "POST"){
			$number = preg_match('@[0-9]@', $_POST['password']);
			$uppercase = preg_match('@[A-Z]@', $_POST['password']);
			$lowercase = preg_match('@[a-z]@', $_POST['password']);
			$specialChars = preg_match('@[^\w]@', $_POST['password']);
			
			if(empty($_POST['password'])){
				$passwordErrMsg = "*Enter Password.";
			}
			else if(strlen( $_POST['password']) < 8 || !$number || !$uppercase || !$lowercase || !$specialChars) {
				$passwordErrMsg = "*Password must be at least 8 characters in length and must contain at least one number,
									one upper case letter, one lower case letter and one special character.";
			}
			else{
				$password = $_POST['password'];
			}
	
			if(empty($_POST['confirmpassword'])){
				$confirmpasswordErrMsg = "*Enter Confirm Password.";
			}
			else if($_POST['password'] != $_POST['confirmpassword']){
				$confirmpasswordErrMsg = "*Enter Same Password.";
			}
			else{
				$confirmpassword = $_POST['confirmpassword'];
			}

			if($confirmpasswordErrMsg === '' && $passwordErrMsg === ''){

				require_once '../Model/connection.php';

				require_once '../Model/Forget_Password_Data.php';
			}
	}
?>