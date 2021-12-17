<?php
	if($_SERVER['REQUEST_METHOD'] === "POST"){
		$username = $_POST['username'];
		if(empty($username)){
			echo "Please Enter Your Username";
			echo "<hr>";
		}
		else{

			$sql = "SELECT User_Name FROM ngo_data where User_Name = ? ";

			$stmt = $conn->prepare($sql);
			$stmt->bind_param('s', $User_Name);
			$User_Name = $username;

			$stmt->execute();
			$result = $stmt->get_result();

			if ($result->num_rows > 0) {

				while($row = $result->fetch_assoc()) {
					$verify = true;
				}
			}
			else{
				$error[] = "Incorrect Username. Try new one.";
			}
			if($verify){
				session_start();
				$_SESSION['username'] = $username;
				header("Location: ../View/Forget_Password.php");
			}
		}
	}
?>