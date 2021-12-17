<?php
	error_reporting(0);

	require_once "../Controller/Registration_Action.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>NGO's Registrasion Form</title>
	<link rel="stylesheet" href="css/reg.css">
	<script src="js/login.js"></script>
	<script src="js/Registrasion_validation.js"></script>
</head>

<body>

	<div class="wrapper">
		<div class="container">
			<h1>NGO'S Registrasion Form</h1>
			<?php
			if (empty($errors)) {
				
			}
			else {
				foreach ($errors as $message) {
					echo "<div class='error'>";
					echo $message;
					echo '</div>';
				}
			}

			if(empty($success)){
				
			}
			else {
				foreach ($success as $message) {
					echo "<div class='succ'>";
					echo $message;
					echo '</div>';
				}
			}

			?>

			<form class="form" id="RegForm" name="RegForm" method="POST" action="" onsubmit="return valide()">
				<label for="ngousername">Username : </label>
				<input id="ngousername" class="ngousername" name="ngousername" type="text" placeholder="User Name" autocomplete="off" <?php echo $ngousername; ?>/>
				<label for="ngopassword ">Password : </label>
				<input id="ngopassword" class="ngopassword" name="ngopassword" type="password" placeholder="Password" <?php echo $ngopassword; ?> />
				<small></small>
				<label for="confirmpassword">Confirm Password : </label>
				<input id="confirmpassword" class="confirmpassword" name="confirmpassword" type="password" placeholder="Confirm Password" <?php echo $confirmpassword; ?> />
				<small></small>
				<label for="ngoname">NGO Name : </label>
				<input id="ngoname" class="ngoname" name="ngoname" type="text" placeholder="NGO Name" <?php echo $ngoname; ?> />
				<label for="ngoownername">NGO Owner Name : </label>
				<input id="ngoownername" class="ngoownername" name="ngoownername" type="text" placeholder="NGO Owner Name" <?php echo $ngoownername; ?> />
				<label for="presentaddress">Present Address : </label>
				<input id="presentaddress" class="presentaddress" name="presentaddress" type="text" placeholder="Present Address" <?php echo $presentaddress; ?> />
				<label for="permanentaddress">Permanent Address : </label>
				<input id="permanentaddress" class="permanentaddress" name="permanentaddress" type="text" placeholder="Permanent Address" <?php echo $permanentaddress; ?> />
				<label for="emailaddress">Email Address : </label>
				<input id="emailaddress" class="emailaddress" name="emailaddress" type="email" placeholder="Email Address" <?php echo $emailaddress; ?> />
				<small></small>
				<label for="ngoweblink">NGO'S Web Link : </label>
				<input id="ngoweblink" class="ngoweblink" name="ngoweblink" type="link"  placeholder="NGO'S Web Link" <?php echo $ngoweblink; ?> />
				<label for="typeofngo">Type Of NGO : </label>
				<select class="typeofngo" name="typeofngo" <?php echo $typeofngo; ?> >

					<option>Charitable</option>
					<option>Participatory</option>
					<option>Service</option>
					<option>Empowering</option>

				</select>

				<!-- <label for="image">Profile image: </label>
				<input id="image" class="image" name="image" type="file" <?php echo $image; ?> /> -->

				<button type="submit" value="account">Created An Account</button>
				<button type="submit" class="reset" value="reset">Reset</button>

				<p> Already have an account? <a href="NGO_Login_Page.php">Login!</a></P>
			</form>
		</div>

		<ul class="bg-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
</body>

</html>