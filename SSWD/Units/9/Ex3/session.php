<?php

	/**
	 * 	Retains the data via sessions
	 */

	session_start();

	$test = 123;
	$_SESSION['v1'] = $test;
	echo $_SESSION['v1'];

	$age = $_POST["myAge"];


?>
