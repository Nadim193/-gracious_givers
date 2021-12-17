<?php
	error_reporting(0);

	session_start();

	$uname = $_SESSION['username'];

	require_once '../Model/connection.php';

	require_once '../Model/Post_Data.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<style>
	div#post{
		padding: auto;
		background-color: #FFFFFF;
		border-color: steelblue;
		border-radius: 5px;
		text-align: justify;
		border-style: solid;
		margin: 30px 0px 25px 15px;
	}
	div#title{
		padding: 9px;
		background-color: steelblue;
		border-radius: 2px;
		text-align: justify;
	}
	div#contain{
		padding: 8px;
		background-color: #FFFFFF;
		text-align: justify;
	}
</style>

<body>
	<div id="post">
		<div id="title">
			<label id="admin">By <?php echo $Pusername; ?></label>
			<br>
			<label id="date">On, <?php echo $Data; ?></label>
		</div>
		<div id="contain">
		<table class="table table-bordered table-hover">
			<tr>
				<td style="font-weight: bold;" id="space">Program Name</td>
				<td id="space1">
					<label> <span> <?php echo $Program_Name; ?></span></label>
					<span class="formerror" id="error"><?php echo $ngoownernameErrMsg; ?> </span>
				</td>
			</tr>
			<tr>
				<td style="font-weight: bold;" id="space">Program_Type</td>
				<td id="space1">
					<label> <span> <?php echo $Program_Type; ?></span></label>
					<span class="formerror" id="error"><?php echo $ngoownernameErrMsg; ?> </span>
				</td>
			</tr>
			<tr>
				<td style="font-weight: bold;" id="space">Program Start Time</td>
				<td id="space1">
					<label> <span> <?php echo $Start_Time; ?></span></label>
					<span class="formerror" id="error"><?php echo $ngoownernameErrMsg; ?> </span>
				</td>
			</tr>
			<tr>
				<td style="font-weight: bold;" id="space">Program End Time</td>
				<td id="space1">
					<label> <span> <?php echo $End_Time; ?></span></label>
					<span class="formerror" id="error"><?php echo $ngoownernameErrMsg; ?> </span>
				</td>
			</tr>
			<tr>
				<td style="font-weight: bold;" id="space">Required Volunteer</td>
				<td id="space1">
					<label> <span> <?php echo $Required_Volunteer; ?></span></label>
					<span class="formerror" id="error"><?php echo $ngoownernameErrMsg; ?> </span>
				</td>
			</tr>
			<tr>
				<td style="font-weight: bold;" id="space">Required Amount</td>
				<td id="space1">
					<label> <span> <?php echo $Required_Amount; ?></span></label>
					<span class="formerror" id="error"><?php echo $ngoownernameErrMsg; ?> </span>
				</td>
			</tr>
			<tr>
				<td style="font-weight: bold;" id="space">Bkash Number</td>
				<td id="space1">
					<label> <span> <?php echo $Phone_Number; ?></span></label>
					<span class="formerror" id="error"><?php echo $ngoownernameErrMsg; ?> </span>
				</td>
			</tr>
			<tr>
				<td style="font-weight: bold;" id="space">Comment</td>
				<td id="space1">
					<label> <span> <?php echo $Post; ?></span></label>
					<span class="formerror" id="error"><?php echo $ngoownernameErrMsg; ?> </span>
				</td>
			</tr>
		</table>
		</div>
	</div>
</body>
</html>