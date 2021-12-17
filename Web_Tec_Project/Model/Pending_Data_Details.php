<?php

	session_start();

	error_reporting(0);
	$_SESSION['username'];
	$_SESSION['random'];

	require_once "connection.php";
						
	require_once '../Controller/Top_Header.php';
	require '../Controller/Menu_Header.php';

$sql2 = "SELECT * FROM start_program_data WHERE program_id = ?";
				$stmt2 = $conn->prepare($sql2);
				$stmt2->bind_param('s', $program_id);

				$program_id = $_GET['id'];
		
				$stmt2->execute();
				$result2 = $stmt2->get_result();
		
				if ($result2->num_rows > 0){
					while($row2 = $result2->fetch_assoc()){
						$pngoname = $row2["NGO_Name"];
						$pProgramname = $row2["Program_Name"];
						$pProgramtype = $row2["Program_Type"];
						$Prequiredamount = $row2["Required_Amount"];
						$prequiredvolunteer = $row2["Required_Volunteer"];
						$pstartdate = $row2["Start_Date"];
						$pcloseddate = $row2["Closed_Date"];
						$pstarttime = $row2["Start_Time"];
						$pclosedtime = $row2["Closed_Time"];
						$pbankaccountnumber = $row2["Bank_Account_Number"];
						$pProgrammotives = $row2["Program_Motives"];
						$pProgramdescription = $row2["Program_Description"];
						$pbkashnumber = $row2["Bkash_Number"];

						require_once '../View/Panding_Program_View.php';
					}
				}
	$conn->close();
?>