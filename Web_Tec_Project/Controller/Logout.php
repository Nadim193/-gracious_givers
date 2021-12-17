<?php
	session_start();
	session_unset();
	session_destroy();
	header("Location: ../View/NGO_Login_Page.php");
?>