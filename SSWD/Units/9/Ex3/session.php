<?php  

	session_start();




	$test =123;
	$_SESSION['v1'] = $test;
	echo $_SESSION['v1'];

	$name = $_POST["name"];




?>