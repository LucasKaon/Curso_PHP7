<?php

	class Carro{	// - Início Classe -

		private $modelo;
		private $motor;
		private $ano;


		public function getModelo(){

			return $this->modelo;

		}

		public function setModelo($modelo){

			$this->modelo = $modelo;
			
		}

		public function getMotor():float{

			return $this->motor;

		}

		public function setMotor($motor){

			$this->motor = $motor;

		}

		public function getAno():int{

			return $this->ano;

		}

		public function setAno($ano){

			$this->ano = $ano;
			
		}

		public function exibir(){

			return array(
				"modelo"=>$this->getModelo(),
				"motor"=>$this->getMotor(),
				"ano"=>$this->getAno()
			);

		}

	}	// - Fim Classe -

	$carro1 = new Carro();
	
	$carro1->setModelo("Gol GT");
	$carro1->setMotor(1.6);
	$carro1->setAno(2017);

	var_dump($carro1->exibir());
	echo "<hr>";

	//exibir array é com print_r

	print_r($carro1->exibir());




?>