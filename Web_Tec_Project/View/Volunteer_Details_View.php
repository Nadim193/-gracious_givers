<?php
	error_reporting(0);
	session_start();

	$_SESSION['username'];
				
    require_once "../Model/connection.php";

	require_once "../Model/Volunteer_Data_Details.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="../View/css/forget_password.css">
</head>
<style>
	td#space{
		padding: 10px;
		font-size: 14px;
		width: 1000px;
	}
	div#profile{
		margin-top: 20px;
	}
</style>
<body>
		<form action="" method="POST" id="form">
		<div id="profile">
			<br>
			<table class="table table-bordered table-hover">
					<tr align="center">
						<td colspan="6" class="active"><h2>Volunteer Details</h2></td>
					</tr>
					<tr>
						<td style="font-weight: bold;" id="space">Volunteer User Name</td>
						<td id="space">
							<label> <span> <?php echo $vusername ?></span></label>
							<span class="formerror" id="error"><?php echo $ngoownernameErrMsg; ?> </span>
						</td>
					</tr>
					<tr>
						<td style="font-weight: bold;" id="space">Email Address</td>
						<td id="space">
						<label><span> <?php echo $vemailaddress ?></span></label>
							<span class="formerror" id="error"><?php echo $ngoownernameErrMsg; ?> </span>
						</td>
					</tr>
						<tr>
						<td style="font-weight: bold;" id="space">Phone Number</td>
						<td>
						<label><span><?php echo $vphonenumber ?></span></label>
							<span class="formerror" id="error2"><?php echo $ngonameErrMsg; ?> </span>
						</td>
					</tr>
				</tr>
			</table>
		</div>
		<?php
			require_once '../Model/Volunteer_Data_Details.php';
		?>
		</form>
	<hr>
	<br>
</body>
</html>