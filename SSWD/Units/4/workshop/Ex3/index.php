<?php

  /**
   *  This is a simple dice class
   *  It has a single face value between 1 and 6.
   */

    include('NumberGenerator.class.php');
    include('Dice.class.php');
    include('Game.class.php');

    $dice = new Dice();
    $NumberGenerator = new NumberGenerator();

    $guess1 = $_GET['guess1'];
    $guess2 = $_GET['guess2'];
    $guess3 = $_GET['guess3'];

    print "Welcome  <br>";

    $dice -> throwDice();

    switch ($dice -> getFaceValue()) {
      case $guess1:
        echo "1 correct !";
        break;

      case $guess2:
        echo "2 correct !";
        break;

      case $guess3:
        echo "3 correct !";
        break;

      default:
        echo "No sorry, the correct one is : " + $dice -> getFaceValue();
        break;
    }//switch


?>
