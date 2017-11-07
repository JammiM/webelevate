<?php

  /*
  *   This is a connection to a database via a php script.
  */

  $host = "127.0.0.1";
  $user = "root";
  $pass = "";
  $db   = "webelevatedb";


  # The connection to the db
  $myConnection = mysqli_connect($host, $user, $pass, $db) or die("Some error occurred during connection " . mysqli_error($myConnection));

  # The type of query
  $myQuery = "SELECT id FROM people" or die("Error..." . mysqli_error($myConnection));

  # Executes the query
  $result = $myConnection->query($myQuery);

  # Prints out each name in the returned array
  while ($row = mysqli_fetch_array($result)) {
    echo $row["id"] . "<br>";
  }

?>
