<?php
	error_reporting(0);
	require_once '../Controller/Forget_Password_Action.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Forget Password Page</title>
	<link rel="stylesheet" href="../View/css/forget_password.css">
</head>
<body>

	<?php
		require_once '../Controller/Verify_Header.php';
	?>

	<div id="change_password">
		<form action="" id="form" method="POST" name="myForm">
			<div id="password">
			<b><span class="succ"><?php foreach ($success as $message) {echo $message;}?> </span></b>
			<br>
				<label>New Password : </label>
					<input type="password" id="pass" name="password" placeholder="New Password"  <?php echo $password; ?> >
					<b><span class="formerror" id="error"><?php echo $passwordErrMsg; ?> </span></b>
				<br>
			</div>
			<div id="confirmpassword">
				<label>Re-type New : </label>
					<input type="password" id="cpass" name="confirmpassword" placeholder="Confirm Password"  <?php echo $confirmpassword; ?> >
					<b><span class="formerror" id="error2"><?php echo $confirmpasswordErrMsg; ?> </span></b>
				<br>
			</div>
			<input type="submit" value="Save Change"></input>
		</form>
		<a class="fcc-btn" href="../View/NGO_Login_Page.php">Go to home</a>
	</div>
</body>
<script src="js/Forget_Password_Valid.js"></script>
</html>