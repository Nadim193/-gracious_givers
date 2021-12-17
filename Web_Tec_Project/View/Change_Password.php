<?php
	require_once "../Controller/Change_Password_Action.php";
	require_once "../Model/Change_Password_Data.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Change Password</title>
	<link rel="stylesheet" href="css/Box.css">
</head>
<body>
	<?php
		require_once '../Controller/Top_Header.php';
		require '../Controller/Menu_Header.php';
	?>
	<div id="change_password">
		<form action="" method="POST" id="form">
			
				<b><span class="succ"><?php echo $success; ?> </span></b>
				<br>
				<label>Old Password :</label> <input type="password" id="oldpassword" name="oldpassword" placeholder="Old Password"  <?php echo $oldpassword; ?> >
				<b><span class="formerror" id="error"><?php echo $oldpasswordErrMsg; ?> </span></b>
				<br>
				<label> New Password : </label> <input type="password" id="newpassword" name="newpassword" placeholder="New Password"  <?php echo $newpassword; ?> >
				<b><span class="formerror" id="error2"><?php echo $newpasswordErrMsg; ?> </span></b>
				<br>
				<label> Re-type New : </label> <input type="password" id="retypenew" name="retypenew" placeholder="Confirm Password"  <?php echo $retypenew; ?> >
				<b><span class="formerror" id="error3"><?php echo $retypenewErrMsg; ?> </span></b>
				<br>
			<input type="submit" value="Save Change"></input>
		</form>
	</div>
	<hr>
	<br>
	<?php
		
		include '../Controller/Footer.php';
		
	?>
</body>
<script src="js/Change_Password_Valid.js"></script>
</html>