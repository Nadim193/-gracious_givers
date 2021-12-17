<?php
	session_start();
				$_SESSION['username'];
				require_once '../Model/connection.php';

				$sql = "UPDATE ngo_data SET Ngo_Password = ? WHERE User_Name = ?";

				$stmt = $conn->prepare($sql);
				$stmt->bind_param('ss', $Ngo_Password, $User_Name);
				$Ngo_Password = $confirmpassword;
				$User_Name = $_SESSION['username'];
				if ($stmt->execute()) {

					$success[] = "Data update successful";
				}
				else {
					$success[] = "Failed to update data";
				}
				$conn->close();
?>