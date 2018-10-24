<?php

	class Pessoa{

		public $nome = 'Rasmus Lerdof';

		protected $idade = 48;

		private $senha = '123456';

		public function exibir(){

			echo "Nome: ". $this->nome."<br>";
			echo "Idade: ". $this->idade."<br>";
			echo "Senha: ". $this->senha."<br>";

		}


	}

	$pessoa1 = new Pessoa;

	echo "Nome: ". $pessoa1->nome."<br>";
	//echo "Idade: ". $pessoa1->idade."<br>";
	//echo "Senha: ". $pessoa1->senha."<br>";

	//privado -> nem mesmo os 'herdeiros' podem acessa-lo

	echo "<br><hr><br>";

	$pessoa1->exibir();

?>