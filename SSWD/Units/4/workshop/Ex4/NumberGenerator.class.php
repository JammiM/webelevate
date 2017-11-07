<?php

  /**
   *  Simply selects a random number between 1 and 6
   */

  class NumberGenerator
  {

    # Returns a random number between 1 and 6
    function makeAGuess()
    {
      return rand(1,6);
    }

  }//NumberGenerator

?>
