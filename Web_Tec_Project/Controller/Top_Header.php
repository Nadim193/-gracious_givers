<?php
	$uname = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="../View/css/Menu.css">
	<link rel="stylesheet" href="../View/css/Logo.css">
	<script src="../View/js/Menu.js"></script>
</head>
<body>
	<nav>
			<nav class="full">
				<div class="logo">
					<div>
						<img src="../View/assets/logo.gif" alt="Project logo"> </img>
					</div>
				</div>
				<div>
					<p>Welcome, <?php echo $uname; ?> </p>
				</div>
			</nav>
	</nav>
</body>
</html>