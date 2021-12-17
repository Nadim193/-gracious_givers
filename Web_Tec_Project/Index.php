<?php
		$_SESSION['username'];
		require_once 'Controller/Top_Header.php';
		require 'Controller/Menu_Header.php';
	?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery/2.1.4/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
		var trigger = $('.navbar-inverse ul li a'),
			container = $('#content');

		trigger.on('click', function(){
			var $this = $(this)
			target = $this.data('target');

			container.load(target + '.php');

			return false;
		});
	});
	</script>
</head>
<body>
	<div id="content"><?php require 'View/NGO_Welcome_Page.php'; ?> </div>
</body>
<?php 
	require 'Controller/Footer.php';
?> 
</html>