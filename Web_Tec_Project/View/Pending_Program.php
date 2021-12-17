<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<title>Pending Program Page</title>
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

		require_once "../Model/connection.php";

		require_once "../Model/Pending_Data.php";

	?>
	<script>
	$(document).ready(function(){
		$("#pending").click(function(){
			$("#profile").animate({
				height: 'toggle'
			});
		});
	});
</script>
	<hr>
	<br>
	<?php
		
		include '../Controller/Footer.php';
		
	?>
</body>

</html>