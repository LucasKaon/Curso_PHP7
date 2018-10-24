<?php

	class Documento{

			private $numero;

			public function getNumero(){

			return $this->numero; 

			}

			public function setNumero($n){

				$this->numero = $n;

			}

	}

	class CPF extends Documento {

		public function validar() : bool{

			$numeroCPF = $this->getNumero();

			//validação do cpf

			return true;

		}

	}

	$doc = new CPF();

	$doc->setNumero('701.050.231-59');

	var_dump($doc->validar());

	echo "<br>";

	echo $doc->getNumero();

?>