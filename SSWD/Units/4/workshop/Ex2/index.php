<?php

  /**
   *  This is a simple dice class
   *  It has a single face value between 1 and 6
   *
   */

    include('NumberGenerator.class.php');
    include('Dice.class.php');



    $dice = new Dice();
    $NumberGenerator = new NumberGenerator();

    var_dump($NumberGenerator);
    var_dump($dice);

?>
