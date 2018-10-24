<?php

	interface Veiculo{	//só declara o que eu preciso em uma classe

		public function acelerar ($velocidade);
		public function freiar ($velocidade);
		public function trocarMarcha($marcha);

	}

	abstract class Carro implements Veiculo{	//ninguem pode instanciar diretamento o carro, necessita informar o tipo de carro

		public function acelerar ($velocidade){
			echo "Acelerou até ".$velocidade." km/h";
		}
		public function freiar ($velocidade){
			echo "Veículo frenou até ".$velocidade." km/h";
		}
		public function trocarMarcha($marcha){
			echo "Veiculo está na marcha: ".$marcha;
		}
	}

	class DelRey extends Carro{

		public function empurrar(){

		}

	}

	//$carro = new carro();
	$carro = new DelRey();

	$carro->acelerar(150);

?>