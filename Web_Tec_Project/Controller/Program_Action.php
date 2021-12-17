<?php
	session_start();

	$_SESSION['username'];
				
	$programname = "";
	$programtype = "";
	$motives = "";
	$description = "";
	$requiredamount = "";
	$requiredvolunteer = "";
	$bankaccountnumber = "";
	$bkashnumber = "";
	$startdate = "";
	$starttime = "";
	$closeddate = "";
	$closedtime = "";

	$programtypeErrMsg = "";
	$programnameErrMsg = "";
	$bankaccountnumberErrMsg = "";
	$bkashnumberErrMsg = "";
	$requiredamountErrMsg = "";
	$requiredvolunteerErrMsg = "";
	$startdateErrMsg = "";
	$starttimeErrMsg = "";
	$closeddateErrMsg = "";
	$closedtimeErrMsg = "";
	$motivesErrMsg = "";
	$descriptionErrMsg = "";

		if ($_SERVER['REQUEST_METHOD'] === "POST") {

			if(empty($_POST['programname'])){
				$programnameErrMsg = "<b style='color:Red;'>*Program Name is required.</b>";
			}
			else if (!preg_match ("/^[a-z A-z ]*$/", $_POST['programname']) ) {
				$programnameErrMsg = "<b style='color:Red;'>Program name allowed only alphabets and whitespace.</b>";
			}
			else{
				$programname = $_POST['programname'];
			}
			
			if(empty($_POST['programtype'])){
				$programtypeErrMsg = "<b style='color:Red;'>*Program Type is required.</b>";
			}
			else if (!preg_match ("/^[a-z A-z ]*$/", $_POST['programtype']) ) {  
				$programtypeErrMsg = "<b style='color:Red;'>Program type allowed only alphabets and whitespace.</b>";
			}
			else{
				$programtype = $_POST['programtype'];
			}

			if(strlen($_POST['bankaccountnumber']<8) && strlen($_POST['bankaccountnumber']>12)){
				$bankaccountnumberErrMsg = "<b style='color:Red;'>Bank Account Number Should Be Contain 8 to 12 number.</b>";
			}
			else{
				$bankaccountnumber = $_POST['bankaccountnumber'];
			}

			if(empty($_POST['bkashnumber'])){
				$bkashnumberErrMsg = "<b style='color:Red;'>*Bkash Number is required.</b>";
			}
			if(strlen($_POST['bkashnumber']<11) && strlen($_POST['bkashnumber']>11)){
				$bkashnumberErrMsg = "<b style='color:Red;'>Bkash Number Should Be Contain 11 number.</b>";
			}
			else{
				$bkashnumber = $_POST['bkashnumber'];
			}

			if(empty($_POST['requiredamount'])){
				$requiredamountErrMsg = "<b style='color:Red;'>*Amount is required.</b>";
			}
			else{
				$requiredamount = $_POST['requiredamount'];
			}

			if(empty($_POST['requiredvolunteer'])){
				$requiredvolunteerErrMsg = "<b style='color:Red;'>*Volunteer is required.</b>";
			}
			else{
				$requiredvolunteer = $_POST['requiredvolunteer'];
			}

			if(empty($_POST['startdate'])){
				$startdateErrMsg = "<b style='color:Red;'>*Start Date is required.</b>";
			}
			else{
				$startdate = $_POST['startdate'];
			}

			if(empty($_POST['starttime'])){
				$starttimeErrMsg = "<b style='color:Red;'>*Start Time is required.</b>";
			}
			else{
				$starttime = $_POST['starttime'];
			}

			if(empty($_POST['closeddate'])){
				$closeddateErrMsg = "<b style='color:Red;'>*Closed Date is required.</b>";
			}
			else{
				$closeddate = $_POST['closeddate'];
			}

			if(empty($_POST['closedtime'])){
				$closedtimeErrMsg = "<b style='color:Red;'>*Closed Time is required.</b>";
			}
			else{
				$closedtime = $_POST['closedtime'];
			}

			if(empty($_POST['motives'])){
				$motivesErrMsg = "<b style='color:Red;'>*Program Motives is required.</b>";
			}
			else{
				$motives = $_POST['motives'];
			}
			
			if(empty($_POST['description'])){
				$descriptionErrMsg = "<b style='color:Red;'>*Program Description is required.</b>";
			}
			else{
				$description = $_POST['description'];
			}
			
			 if(empty($bkashnumber) || empty($requiredvolunteer) ||
			 		empty($requiredamount) || empty($description) || empty($motives) || empty($programtype) || empty($programname)
			 		||empty($startdate) || empty($starttime) || empty($closeddate) || empty($closedtime)){
			 }
			else{
				require_once "../Model/connection.php";

				require_once "../Model/Ngoname_Data.php";

				if($bkashnumberErrMsg ==='' && $bankaccountnumberErrMsg ==='' && $programnameErrMsg ==='' && $programtypeErrMsg ===''){
					$pstatus = "pending";
					$randid = rand();
					$post = "";
					
					require_once "../Model/Program_Data.php";
				}
				else{
					
				}
			}
		}
	else{
		
	}
?>