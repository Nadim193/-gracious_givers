<?php

	session_start();

	error_reporting(0);
	$_SESSION['username'];

	require_once "connection.php";

$sql2 = "SELECT * FROM select_volunteer_data WHERE Program_id = ?";
				$stmt2 = $conn->prepare($sql2);
				$stmt2->bind_param('s', $Program_id);

				$Program_id = $_GET['id'];
		
				$stmt2->execute();
				$result2 = $stmt2->get_result();
		
				if ($result2->num_rows > 0){
					while($row2 = $result2->fetch_assoc()){

						$vusername = $row2["User_Name"];
						$vemailaddress = $row2["Email_Address"];
						$vphonenumber = $row2["Phone_Number"];

						require '../View/Volunteer_Details_View.php';
					}
				}
	$conn->close();


?>