<?php

  /**
   *  This acts as the handler for the game as a whole
   */

   include('NumberGenerator.class.php');
   include('Dice.class.php');

  class Game
  {

    public $guesses = array();

    public function saveGuess($number)
    {
      array_push($guesses,$number);
    }

    public function listGuesses()
    {
      return $guesses;
    }

    public function guessHandler()
    {
      $guess = new NumberGenerator();
      $currentGuess = $guess->makeAGuess();
      $this->saveGuess($currentGuess);
      return $currentGuess;
    }

    public function __construct()
    {
      # code...
    }

    public function play()
    {

      $dice = new Dice();
      $NumberGenerator = new NumberGenerator();

      print "Welcome  <br>";

      $dice->throwDice();
      $correctAnswer = $dice->getFaceValue();

      for ($i=0; $i<=2; $i++) {

        $nextGuess = $NumberGenerator->makeAGuess();

        if ($nextGuess == $correctAnswer) {
          echo "<br>Roll number " .($i+1). " was correct ! You rolled a " . $correctAnswer . "<br>";
          break;
        } else {
          echo "<br>The Dice rolled a : " . $correctAnswer . "<br>But your guess was : " . $nextGuess;
        }

      }//for

    }//play


  }





?>
