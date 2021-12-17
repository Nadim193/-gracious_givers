<?php
	error_reporting(0);
	session_start();
	require_once '../Model/connection.php';
	require_once '../Model/Verify_Data.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Verify User</title>
	<link rel="stylesheet" href="css/verify.css">

</head>
<body>
	<?php
		require_once '../Controller/Verify_Header.php';
	?>
	<div id="verify">
		<form action="" method="POST" name="myForm" onsubmit="return validateForm()">
				<h3>Enter your User Name To Verity Your Account.</h3>
				<div id="username">
					<label>User Name :</label>
						<input type="textarea" name="username" id="username" placeholder="User Name"<?php echo $_POST['username']??""; ?> >
						<b><span class="formerror"> <?php foreach ($error as $message) {echo $message;} ?> </span></b>
						<br>
				</div>
				<input type="submit" name="Verify" value="Verify" style="width: 15%;">
		</form>
	</div>
	<form action="NGO_Login_Page.php" method="POST">
	<input type="submit" name="Go TO Home" value="Go TO Home" style="width: 15%;">
	</form>
</body>
<script src="js/Username_Valid.js">
</script>
</html>