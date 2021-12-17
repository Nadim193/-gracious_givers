<?php
	error_reporting(0);
	session_start();
	$randomnumber = $_SESSION['random'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Volunteer Details Page</title>
</head>
<body>
	<?php
		require_once '../Controller/Top_Header.php';
		require_once '../Controller/Menu_Header.php';
		require_once '../Model/Volunteer_Data_Details.php';
	?>
	<hr>
	<br>
	<?php
		
		include '../Controller/Footer.php';
		
	?>
</body>
</html>