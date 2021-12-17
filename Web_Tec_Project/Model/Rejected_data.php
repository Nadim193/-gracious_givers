<?php

				$ststus_Check = "rejected";
	
				$sql2 = "SELECT * FROM start_program_data WHERE User_name = ? AND Status = ?";
				$stmt2 = $conn->prepare($sql2);
				$stmt2->bind_param('ss', $User_name, $Status);
				$User_name = $_SESSION['username'];
				$Status = $ststus_Check;
		
				$stmt2->execute();
				$result2 = $stmt2->get_result();
		
				if ($result2->num_rows > 0){
					$j = 1; 
					while($row2 = $result2->fetch_assoc()){
						$id = $row2["program_id"];
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

						require '../View/List_Of_Rejected_Program.php';
						$j++;
					}
				}
				else{
					echo '<label style="text-align: center;">No Data Found.</label>';
				}
	$conn->close();
?>