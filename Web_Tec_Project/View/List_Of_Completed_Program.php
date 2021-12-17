<?php 
	require_once '../Model/Completed_Data.php';
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
		margin: 30px 0px 42px 11px;
    	margin-top: -9px;
	}
	div#title{
		padding: 9px;
		background-color: steelblue;
		border-radius: 2px;
		text-align: justify;
		text-align: center;
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
			<label>LIST OF COMPLETED PROGRAM</label>
		</div>
		<div id="contain">
			<?php
				echo "$j. <a href='../Model/Accepted_Data_Details.php?id=".$id."'>$pProgramname</a>";
			?>
		</div>
	</div>
</body>
</html>