<?php

  /*
  *   This is a PDO connection to a database via a php script.
  */

  $host = 'locahost';
  $user = 'root';
  $pass = '';
  $db   = 'webelevatedb';

  try {

    $dbh = new PDO('mysql:host=localhost; dbname=webelevatedb', $user, $pass);

    foreach ($dbh=>query('SELECT id FROM people') as $row) {
      print_r($row);
    }

    $dbh = null;

  } catch (PDOException $e) {
      print "Error ! : " . $e.getMessage() . "<br>";
      die();
  }


?>
