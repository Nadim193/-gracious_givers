<?php
	session_start();

	$_SESSION['username'];
				
    require_once "../Model/connection.php";

	require_once "../Model/Pending_Data_Details.php";
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
		<div id="profile">
			<br>
			<table class="table table-bordered table-hover">
					<tr align="center">
						<td colspan="6" class="active"><h2>Program Details</h2></td>
					</tr>
					<tr>
						<td style="font-weight: bold;" id="space">NGO Name</td>
						<td id="space">
							<label> <span> <?php echo $pngoname; ?></span></label>
							<span class="formerror" id="error"><?php echo $ngoownernameErrMsg; ?> </span>
						</td>
					</tr>
					<tr>
						<td style="font-weight: bold;" id="space">Program Name</td>
						<td id="space">
						<label><span> <?php echo $pProgramname; ?></span></label>
							<span class="formerror" id="error"><?php echo $ngoownernameErrMsg; ?> </span>
						</td>
					</tr>
						<tr>
						<td style="font-weight: bold;" id="space">NGO Type</td>
						<td>
						<label><span><?php echo $pProgramtype; ?></span></label>
							<span class="formerror" id="error2"><?php echo $ngonameErrMsg; ?> </span>
						</td>
					</tr>
					<tr>
						<td style="font-weight: bold;" id="space">Requird volunteer</td>
						<td id="space">
						<label><span> <?php echo $prequiredvolunteer; ?></span></label>
							<span class="formerror" id="error"><?php echo $ngoownernameErrMsg; ?> </span>
						</td>
					</tr>
					<tr>
						<td style="font-weight: bold;" id="space">Requird Amount</td>
						<td id="space">
						<label><span> <?php echo $Prequiredamount; ?></span></label>
							<span class="formerror" id="error"><?php echo $ngoownernameErrMsg; ?> </span>
						</td>
					</tr>
					<tr>
						<td style="font-weight: bold;" id="space">Program Start Date</td>
						<td id="space">
						<label><span> <?php echo $pstartdate; ?></span></label>
							<span class="formerror" id="error"><?php echo $ngoownernameErrMsg; ?> </span>
						</td>
					</tr>
					<tr>
						<td style="font-weight: bold;" id="space">Program Start Time</td>
						<td id="space">
						<label><span> <?php echo $pstarttime; ?></span></label>
							<span class="formerror" id="error"><?php echo $ngoownernameErrMsg; ?> </span>
						</td>
					</tr>
					<tr>
						<td style="font-weight: bold;" id="space">Program Colsed Date</td>
						<td id="space">
						<b><label></label><span> <?php echo $pcloseddate;?></span></label></b>
							<span class="formerror" id="error"><?php echo $ngoownernameErrMsg; ?> </span>
						</td>
					</tr>
					<tr>
						<td style="font-weight: bold;" id="space">Program Closed Time</td>
						<td id="space">
						<b><label></label><span> <?php echo $pclosedtime;?></span></label></b>
							<span class="formerror" id="error"><?php echo $ngoownernameErrMsg; ?> </span>
						</td>
					</tr>
					<tr>
						<td style="font-weight: bold;" id="space">Bank Account Number</td>
						<td id="space">
						<b><label></label><span> <?php echo $pbankaccountnumber;?></span></label></b>
							<span class="formerror" id="error"><?php echo $ngoownernameErrMsg; ?> </span>
						</td>
					</tr>
					<tr>
						<td style="font-weight: bold;" id="space">Bkash Number</td>
						<td id="space">
						<b><label></label><span> <?php echo $pbkashnumber;?></span></label></b>
							<span class="formerror" id="error"><?php echo $ngoownernameErrMsg; ?> </span>
						</td>
					</tr>
					<tr>
						<td style="font-weight: bold;" id="space">Program Motive</td>
						<td id="space">
						<b><label></label><span> <?php echo $pProgrammotives;?></span></label></b>
							<span class="formerror" id="error"><?php echo $ngoownernameErrMsg; ?> </span>
						</td>
					</tr>
					<tr>
						<td style="font-weight: bold;" id="space">Program Description</td>
						<td id="space">
						<b><b><label></label><span> <?php echo $pProgramdescription;?></span></label></b>
							<span class="formerror" id="error"><?php echo $ngoownernameErrMsg; ?> </span>
						</td>
					</tr>
				</tr>
			</table>
		</div>
	<hr>
	<br>
</body>
<?php
	require_once '../Controller/Footer.php';
?>
</html>