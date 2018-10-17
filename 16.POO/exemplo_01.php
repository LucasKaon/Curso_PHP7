<?php

	class Pessoa{

		public $nome;	//Atributo

		public function falar(){	//Método

			return "O meu nome é: ".$this->nome;

		}

	}

	//criando a pessoa

	$pessoa = new Pessoa;
	$pessoa->nome = "Lucas A";

	echo $pessoa->falar();

?>