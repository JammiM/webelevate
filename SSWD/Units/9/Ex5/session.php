<?php

	/**
	 *	Displays the held cookie and also implements a try-catch block
	 */

	session_start();

	$test =123;
	$_SESSION['v1'] = $test;
	echo $_SESSION['v1'];

	$myAge = $_POST["myAge"];

	setcookie('myAge', $test, time()+3600*24);
	echo "The cookie is " . $_COOKIE["myAge"] . "<br />";

	try {
		echo "tried cookie :" . $_COOKIE['myAge'];
	} catch (Exception $e) {
		echo "Message : ".$e->getMessage();
	}



?>
