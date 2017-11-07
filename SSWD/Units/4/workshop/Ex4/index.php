<?php

  /**
   *  This is a simple dice game.
   */


  include('Game.class.php');

  $game = new Game();
  $game->play();
  $game->listGuesses();

?>
