<?php  

	session_start();




	setcookie('name', $test);
	# setcookie('name', $test, time()+3600*24);
	$test =123;
	$_SESSION['v1'] = $test;
	echo $_SESSION['v1'];

	$name = $_POST["name"];


	$_COOKIE['name'];

?>