<?php 
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$database = "ngo_database";

	$conn = new mysqli($hostname, $username, $password, $database);

	if ($conn->connect_error) {
		die("Failed to Connect: " . $conn->connect_error);
	}
?>