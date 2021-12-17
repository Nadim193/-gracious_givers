<?php
	$sql = "INSERT INTO start_program_data (program_id, User_name, NGO_Name, Program_Name, Program_Type, Required_Amount, Required_Volunteer, Start_Date, Closed_Date, Start_Time, Closed_Time, Bkash_Number, Bank_Account_Number, Program_Motives, Program_Description, Status) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

	$stmt = $conn->prepare($sql);
	$stmt->bind_param('issssdssssssssss', $program_id, $User_name, $NGO_Name, $Program_Name, $Program_Type, $Required_Amount, $Required_Volunteer, $Start_Date, $Closed_Date, $Start_Time, $Closed_Time, $Bkash_Number, $Bank_Account_Number, $Program_Motives, $Program_Description, $Status);

	$program_id = $randid;
	$User_name = $_SESSION['username'];
	$NGO_Name = $ngoname;
	$Program_Name = $programname;
	$Program_Type = $programtype;
	$Required_Amount = $requiredamount;
	$Required_Volunteer = $requiredvolunteer;
	$Start_Date = $startdate;
	$Closed_Date = $closeddate;
	$Start_Time = $starttime;
	$Closed_Time = $closedtime;
	$Bkash_Number = $bkashnumber;
	$Bank_Account_Number = $bankaccountnumber;
	$Program_Motives = $motives;
	$Program_Description = $description;
	$Status = $pstatus;

	if ($stmt->execute()) {
		$error = "<center>Congratulations Your Program Was Started.</center><br> <center>Please wait for admin to accepted your program. See more details go to. <a href='../View/Pending_Program.php'>pending program </a>option</center>";
	}
	else {
		$error = "<center>Something Is Missing. Try TO Start A New Program Again.</center>";
	}

	$data = array(
			'error' => $error
	);

	echo json_encode($data);

	$conn->close();
?>