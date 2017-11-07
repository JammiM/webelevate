<?php

  /**
   *  This is a simple dice class
   *  It has a single face value between 1 and 6
   *  It also randomly selects a number between 1 and 6
   */

  class Dice
  {

    private $faceValue;
    private const NUMBER_OF_SIDES = 6;

    # Simply sets the face value to a number between 1 and 6.
    public function throwDice()
    {
      $this->faceValue = rand(1, self::NUMBER_OF_SIDES);
    }

    # Just returns the face value of the Dice.
    public function getFaceValue()
    {
      return $this->faceValue;
    }

  }//Dice

?>
