<?php 


	class Fruit {

		public $name;
		public $clean;
		protected $washed;

		public function Fruit($fruitName) {
			$this->name = $fruitName;
			$this->clean = false;
			$this->washed = 0;
		}

		public function wash() {
			$this->clean = true;
			$this->washed++;
		}

		public function printWashedValue()
		{
			echo "<br>This " . get_called_class() ." was washed ". $this->washed . " times.";
		}
	}


	class Cherry extends Fruit {

		public $hasStone;
		public $makesPies;

		public function Cherry ($cherryType) {
			$this->name = $cherryType . ' cherry';
			$this->hasStone = true;
			$this->makesPies = true;
		}

	}



	class Apple extends Fruit
	{
		public $colour;

		public function Apple($appleType)
		{
			$this->name = $appleType . " apple";
		}
	}







	$apple = new Apple('Red');
	$snack = new Cherry('wild');

	$snack->wash();

	if ($snack->clean) {
		echo 'You get a nice clean ' . $snack->name . ' for lunch';
	}
	else {
		echo 'You get a ' . $snack->name . ' for lunch, but you should really wash it first!';
	}






	$snack->wash();
	$snack->printWashedValue();
	$apple->wash();
	$apple->printWashedValue();



?>