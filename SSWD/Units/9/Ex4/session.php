<?php

	/**
	 * 	Displays the held cookie from the form 
	 */

	session_start();


	$test =123;
	$_SESSION['v1'] = $test;
	echo $_SESSION['v1'];

	echo "Cookie is : " . $_COOKIE['myAge'];
	setcookie('myAge', $test);
	setcookie('myAge', $test, time()+3600*24);

?>
