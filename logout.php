<?php
	session_start();
	if($_SESSION['loggedin']==true)
	{
		session_destroy(); 
		header("location:login.php?msg=Successfully Logged out");
	}
	header("location:login.php");
?>