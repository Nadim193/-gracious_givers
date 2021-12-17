<?php

	session_start();

	$uname = $_SESSION['username'];
				
    require_once "../Model/connection.php";

	require_once "../Model/Profile_Data.php";

	require_once "../Controller/Edit_Profile_Action.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <title>Edit Profile Page</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/Box.css">
</head>
<body>
	<?php
		require_once '../Controller/Top_Header.php';
		require '../Controller/Menu_Header.php';

	?>
	<form action="" method="POST" id="form">
	<table class="table table-bordered table-hover">
    		<tr align="center">
    			<td colspan="6" class="active" style="background-color: steelblue;"><h2>Edit Your Profile</h2></td>
				<b><span class="succ" id="succ"> </span></b>
				<br>
    		</tr>
    		<tr>
    			<td style="font-weight: bold;">Change Your NGO's Owner Name</td>
    			<td>
    				<input class="form-control" id="NGO_Owner_Name" type="text" name="NGO_Owner_Name" value="<?php echo $NGO_Owner_Name; ?>">
					<b><span class="formerror" id="error"><?php echo $ngoownernameErrMsg; ?> </span></b>
    			</td>
    		</tr>
    			<tr>
    			<td style="font-weight: bold;">Change Your NGO's Name</td>
    			<td>
    				<input class="form-control" type="text" id="NGO_Name" name="NGO_Name" value="<?php echo $NGO_Name; ?>">
					<b><span class="formerror" id="error2"><?php echo $ngonameErrMsg; ?> </span></b>
				</td>
    		</tr>
    			<tr>
    			<td style="font-weight: bold;">Change Your NGO's Type</td>
    			<td>
    				<select class="form-control" id="Type_Of_NGO" name="Type_Of_NGO">
					<b><span class="formerror" id="error3"><?php echo $typeofngoErrMsg; ?> </span></b>
    					<option><?php echo $Type_Of_NGO;?></option>

  							<option>Charitable</option>
  							<option>Participatory</option>
  							<option>Service</option>
  							<option>Empowering</option>

    				</select>
    			</td>
    		</tr>
    		<tr>
    			<td style="font-weight: bold;">Change Your Email Address</td>
    			 <td>
    				<input class="form-control" type="email" id="Email_Address" name="Email_Address"  value="<?php echo $Email_Address; ?>">
					<b><span class="formerror" id="error4"><?php echo $emailErrMsg; ?> </span></b>
    			</td>
    		</tr>
    		<tr>
    			<td style="font-weight: bold;">Change Your Present Address</td>
    			<td>
    				<input class="form-control input-md" type="text" id="Present_Address" name="Present_Address"  value="<?php echo $Present_Address; ?>">
					<b><span class="formerror" id="error5"></span></b>
    			</td>
    		</tr>
			<tr>
    			<td style="font-weight: bold;">Change Your Permanent Address</td>
    			<td>
    				<input class="form-control input-md" type="text" id="Permanent_Address" name="Permanent_Address"  value="<?php echo $Permanent_Address; ?>">
					<b><span class="formerror" id="error6"></span></b>
    			</td>
    		</tr>
			<tr>
    			<td style="font-weight: bold;">Change Your NGOs Web Link</td>
    			<td>
    				<input class="form-control input-md" type="link" id="NGOs_Web_Link" name="NGOs_Web_Link"  value="<?php echo $NGOs_Web_Link; ?>">
					<b><span class="formerror" id="error7"> </span></b>
    			</td>
    		</tr>
			<tr align="center">
  			<td colspan="6">
  				<input type="submit" class="btn btn-info" name="update" style="width:250px;" value="Update">
  			</td>
  		</tr>
	</table>
	</form>
	<hr>
	<br>
	<?php
		
		include '../Controller/Footer.php';
		
	?>
</body>
<script src="js/Edit_Profile_Valid.js"></script>
</html>