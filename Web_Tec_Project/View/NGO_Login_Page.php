<?php
	error_reporting(0);

	require_once "../Controller/Login_Action.php";
	
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>NGO'S Login Page</title>
	<link rel="stylesheet" href="css/login.css">
	<script src="js/login.js"></script>
</head>

<body>	
	<div class="wrapper">
		<div class="container">
		<?php 
		 
		if(empty($errors)){
			
		}
		else{
			foreach ($errors as $message) {
				echo "<div class='error'>";
				echo $message;
				echo '</div>';

			}
		}
		
		?>
			<h1>Welcome To Login Page</h1>

			<form class="form" method="POST" id="form">
				<input type="text" id="username" placeholder="Username" name="username" value="<?php echo isset($_COOKIE['username']) ? $_COOKIE['username'] : "" ?>">
				<input type="password" id="password" placeholder="Password" name ="password" >
				<!-- <p><input type="checkbox" name="rememberme"></p> -->
				<a href="../View/Username_Verification.php"> Forget Password!</a>
				<br><br>
				<button type="submit" value="Login">Login</button>
				<br>
			</form>
			<b><p style="font-weight: bold! important;">OR</p></b>
			<form action="NGO_Registrasion_Page.php">
				<button style="color: white; background-color: darkslategray;" type="submit">Registration</button>
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
<script src="js/Login_Page_Valid.js"></script>
</html>