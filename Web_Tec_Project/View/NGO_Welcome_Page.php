<?php
	session_start();
	error_reporting(0);

	if(count($_SESSION) === 0){
	 	header("Location: ../Controller/Logout.php");
	}
	require_once '../Model/connection.php';
?>

<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>NGO Welcome Page</title>
	<script src="https://kit.fontawesome.com/a54d2cbf95.js"></script>

	<link rel="stylesheet" href="css/Box.css">
</head>
<body>
	<?php
		require_once '../Controller/Top_Header.php';
		require '../Controller/Menu_Header.php';

		require_once '../Model/Total_Pending_Data.php';
		require_once '../Model/Total_Accepted_Data.php';
		require_once '../Model/Total_Completed_Data.php';
		require_once '../Model/Total_Rejected_Data.php';

	?>
	<div id="box">
			<div id="pending">
				<div id="total">
				<b>TOATL PENDING PROGRAM</b><br>
				<b><?php echo $penrow; ?></b>
				</div>
			</div>
			<div id="accepted">
				<div id="total2">
				<b>TOATL ACCEPTED PROGRAM</b><br>
				<b><?php echo $accrow; ?></b>
				</div>
			</div>
			<div id="completed">
				<div id="total3">
				<b>TOATL COMPLETED PROGRAM</b><br>
				<b><?php echo $comrow; ?></b>
				</div>
			</div>
			<div id="rejected">
				<div id="total4">
				<b>TOATL REJECTED PROGRAM</b><br>
				<b><?php echo $rejrow; ?></b>
				</div>
			</div >
	</div>
	<div id="line">
		<hr>
	</div>
	<div id="lable">
		<label id="text" style="font-size: 18px; text-align: center;">RESENT POST BY ADMIN</label>
	</div>
	<a href="#" class="to-top">
    	<i class="fas fa-chevron-up"></i>
 	</a>
	<div id="commend">
		<div id="commend1">
			<?php
				require_once '../Model/Post_Data.php';

				$conn->close();
			?>
		</div>
	</div>

	<?Php
		require_once '../Controller/Footer.php';
	?>
</body>
<script src="../View/js/Back_To_Top.js"></script>
</html>