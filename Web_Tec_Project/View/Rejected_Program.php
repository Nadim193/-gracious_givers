<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Rejected Program Page</title>
</head>
<body>
	<?php
		session_start();
		require_once '../Controller/Top_Header.php';
		require '../Controller/Menu_Header.php';
	?>
	<br>
	<br>
	<?php
		error_reporting(0);
		$_SESSION['username'];
		$_SESSION['random'];

		require_once "../Model/connection.php";

		require_once "../Model/Rejected_data.php";
	?>
	<hr>
	<br>
	<?php
		
		include '../Controller/Footer.php';
		
	?>
</body>
</html>