<?php

  /**
   *  This acts as the handler for the game as a whole
   */

   include('NumberGenerator.class.php');
   include('Dice.class.php');

  class Game
  {

    private $guesses = array();

    public function saveGuess($number)
    {
      $this->guesses[] = $number;
    }

    public function listGuesses()
    {

      $lengthOfArray = count($this->guesses);

      #for ($i=0; $i < $lengthOfArray; $i++) {
      # echo  $this->guesses[$i];
      #}

        var_dump($lengthOfArray);
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
      $dice->throwDice();
      $correctAnswer = $dice->getFaceValue();

      for ($i=0; $i<=2; $i++) {

        # $nextGuess = $NumberGenerator->makeAGuess();
        $nextGuess = $this->guessHandler();

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
