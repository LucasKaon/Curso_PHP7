<?php

	class Animal {

		public function falar(){

			return "Som(".get_class($this).")";

		}

		public function mover(){

			return "Andar(".get_class($this).")";

		}

	}

	class Cachorro extends Animal{

		public function falar (){

			return "Latir (".get_class($this).")";

		}

	}

	class Passaro extends Animal{


		public function falar(){
			return "Cantar";
		}

		public function mover(){
			return "Voar e ".parent::mover();
		}

	}

	$cachorro = new Cachorro();

	echo $cachorro->falar();
	echo "<br><br>";
	echo $cachorro->mover();

	echo "<hr><hr>";

	$canario = new Passaro();

	echo $canario->falar();
	echo "<br><br>";
	echo $canario->mover();

?>