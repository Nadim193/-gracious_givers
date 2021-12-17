<?php
	session_start();

	error_reporting(0);

	$uname = $_SESSION['username'];
	$pass = $_SESSION['password'];
	
	$oldpassword = "";
    $retypenew = "";
	$newpassword = "";
	$retypenewErrMsg = '';
	$newpasswordErrMsg = '';
	$oldpasswordErrMsg = '';

	if ($_SERVER['REQUEST_METHOD'] === "POST"){
			$number = preg_match('@[0-9]@', $_POST['newpassword']);
			$uppercase = preg_match('@[A-Z]@', $_POST['newpassword']);
			$lowercase = preg_match('@[a-z]@', $_POST['newpassword']);
			$specialChars = preg_match('@[^\w]@', $_POST['newpassword']);
			
			if(empty($_POST['newpassword'])){
				$newpasswordErrMsg = "*Enter Password.";
			}
			else if(strlen($_POST['newpassword']) < 8 || !$number || !$uppercase || !$lowercase || !$specialChars) {
				$newpasswordErrMsg = "Password must be at least 8 characters in length and must contain at least one number,
									one upper case letter, one lower case letter and one special character.";
			}
			else{
				$newpassword = $_POST['newpassword'];
			}
	
			if(empty($_POST['retypenew'])){
				$retypenewErrMsg = "*Enter Confirm Password";
			}
			else if($_POST['newpassword'] != $_POST['retypenew']){
				$retypenewErrMsg = "*Enter Same Password.";
			}
			else{
				$retypenew = $_POST['retypenew'];
			}

			if(empty($_POST['oldpassword'])){
				$oldpasswordErrMsg = "*Enter Old Password";
			}
			else if($pass !== $_POST['oldpassword']){
				$oldpasswordErrMsg = "*Old Password Incorrect.";
			}
			else{
				$oldpassword = $_POST['oldpassword'];
			}
			if($retypenewErrMsg === '' && $newpasswordErrMsg === '' && $oldpasswordErrMsg === ''){

				require_once '../Model/connection.php';

				require_once '../Model/Change_Password_Data.php';
			}
		}
?>