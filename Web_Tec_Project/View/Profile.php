<?php
	session_start();

	$_SESSION['username'];
				
    require_once "../Model/connection.php";

	require_once "../Model/Profile_Data.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <title>NGO's Profile</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
	<?php
	error_reporting(0);
		require_once '../Controller/Top_Header.php';
		require '../Controller/Menu_Header.php';

	?>
		<form action="" method="POST" id="form">
		<div id="profile">
			<br>
			<table class="table table-bordered table-hover">
					<tr align="center">
						<td colspan="6" class="active" style="background-color: steelblue;"><h2>My Profile</h2></td>
					</tr>
					<tr>
						<td style="font-weight: bold;" id="space">User Name</td>
						<td id="space">
							<label> <span> <?php echo $_SESSION['username']; ?></span></label>
							<span class="formerror" id="error"><?php echo $ngoownernameErrMsg; ?> </span>
						</td>
					</tr>
					<tr>
						<td style="font-weight: bold;" id="space">NGO's Owner Name</td>
						<td id="space">
						<label><span> <?php echo $NGO_Owner_Name; ?></span></label>
							<span class="formerror" id="error"><?php echo $ngoownernameErrMsg; ?> </span>
						</td>
					</tr>
						<tr>
						<td style="font-weight: bold;" id="space">NGO's Name</td>
						<td>
						<label><span><?php echo $NGO_Name; ?></span></label>
							<span class="formerror" id="error2"><?php echo $ngonameErrMsg; ?> </span>
						</td>
					</tr>
					<tr>
						<td style="font-weight: bold;" id="space">NGO's Type</td>
						<td id="space">
						<label><span> <?php echo $Type_Of_NGO; ?></span></label>
							<span class="formerror" id="error"><?php echo $ngoownernameErrMsg; ?> </span>
						</td>
					</tr>
					<tr>
						<td style="font-weight: bold;" id="space">Email Address</td>
						<td id="space">
						<label><span> <?php echo $Email_Address; ?></span></label>
							<span class="formerror" id="error"><?php echo $ngoownernameErrMsg; ?> </span>
						</td>
					</tr>
					<tr>
						<td style="font-weight: bold;" id="space">Present Address</td>
						<td id="space">
						<label><span> <?php echo $Present_Address; ?></span></label>
							<span class="formerror" id="error"><?php echo $ngoownernameErrMsg; ?> </span>
						</td>
					</tr>
					<tr>
						<td style="font-weight: bold;" id="space">Permanent Address</td>
						<td id="space">
						<label><span> <?php echo $Permanent_Address; ?></span></label>
							<span class="formerror" id="error"><?php echo $ngoownernameErrMsg; ?> </span>
						</td>
					</tr>
					<tr>
						<td style="font-weight: bold;" id="space">NGOs Web Link</td>
						<td id="space">
							<label></label><span> <?php echo "<a target = '_blank' href= $NGOs_Web_Link>$NGOs_Web_Link</a>";?></span></label>
							<span class="formerror" id="error"><?php echo $ngoownernameErrMsg; ?> </span>
						</td>
					</tr>
				</tr>
			</table>
		</div>
		</form>
	<hr>
	<br>
	<?php
		
		include '../Controller/Footer.php';
		
	?>
</body>
</html>