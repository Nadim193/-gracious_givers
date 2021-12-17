<?php
	error_reporting(0);

	require_once "../Controller/Program_Action.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Program Start Page</title>
	<link rel="stylesheet" href="css/start_program.css">
</head>
<body>
	<?php
		require_once '../Controller/Top_Header.php';
		require '../Controller/Menu_Header.php';
	?>
	<div id="container">
		<form action="" method="POST" id="form">
		<div id="container1">
				<b><span class="succ" id="succ"></span></b>
					<br>
				<div class="col-75">
				<label>Program Name :</label>
				<input type="text" id="pname" name="programname" placeholder="Program Name" <?php echo $programname; ?> >
				<b><span id="error" class="formerror" id="succ"><?php echo $programnameErrMsg; ?></span></b>
				<br>
				</div>
				<div class="col-75">
				<label>Program Type :</label> <input type="text" id="ptype" name="programtype" placeholder="Program Type" <?php echo $programtype; ?>>
				<b><span id="error2" class="formerror"><?php echo $programtypeErrMsg; ?> </span></b>
				<br>
				</div>
				<div class="col-75">
				<label style="width: 100%;">Motives :</label> <?php echo $motives; ?>
				<span><?php echo $motivesErrMsg; ?> </span>
				<textarea id="motives" name="motives" rows="3" cols="202" >  </textarea>
				</div>
				<div class="col-75">
				<label style="width: 100%;"> Description :</label> <?php echo $description; ?>
				<span><?php echo $descriptionErrMsg; ?> </span>
				<textarea id="description" name="description" rows="3" cols="202"> </textarea>
				</div>
	</div>
	<br>
	<div id="container2">
				<label>Required Amount :</label>
					<input type="number" id="ramount" name="requiredamount" placeholder="Required Amount" <?php echo $requiredamount; ?>>
						<b><span id="error3" class="formerror"><?php echo $requiredamountErrMsg; ?></span></b>
						<br><br>
				<label>Required Volunteer :</label>
					<input type="number" id="rvolunteer" name="requiredvolunteer" placeholder="Required Volunteer" <?php echo $requiredvolunteer; ?>>
						<b><span id="error4" class="formerror"><?php echo $requiredvolunteerErrMsg; ?></span></b>
						<br><br>
				<label> Program Start Date : </label>
					<input type="date" id="sdate" name="startdate" placeholder="Select Date" <?php echo $startdate; ?>>
						<b><span id="error5" class="formerror"><?php echo $startdateErrMsg; ?></span></b>
						<br><br>
				<label> Program Start Time : </label>
					<input type="time" id="stime" name="starttime" placeholder="Start Time" <?php echo $starttime; ?>>
						<b><span id="error6" class="formerror"><?php echo $starttimeErrMsg; ?></span></b>
						<br><br>
				<label>Program Closed Date : </label>
					<input type="date" id="cdate" name="closeddate" placeholder="Select Date" <?php echo $closeddate; ?>>
						<b><span id="error7" class="formerror"><?php echo $closeddateErrMsg; ?></span></b>
						<br><br>
				<label>Program Closed Time : </label>
					<input type="time" id="ctime" name="closedtime" placeholder="Start Time" <?php echo $closedtime; ?>>
						<b><span id="error8" class="formerror"><?php echo $closedtimeErrMsg; ?></span></b>
						<br>
	</div>
	<br>
	<div id="container3">
				<label> Bank Account Number :</label>
					<input type="number" id="banumber" name="bankaccountnumber" placeholder="Bank Account Number" <?php echo $bankaccountnumber; ?>>
						<b><span id="error9" class="formerror"><?php echo $bankaccountnumberErrMsg; ?> </span></b>
						<br><br>
				<label>Bkash Number :</label>
					<input type="number" id="bnumber" name="bkashnumber" placeholder="Bkash Number" <?php echo $bkashnumber; ?>>
						<b><span id="error10" class="formerror"><?php echo $bkashnumberErrMsg; ?> </span></b>
				<input type="submit" name="Start" value="Start Program">
	</div>
		</form>
	</div>

	<?php
		echo "<br>";
		echo "<hr>";
		echo "<br>";
		include '../Controller/Footer.php';
	?>
</body>

<script src="js/Program_Valid.js"></script>

</html>