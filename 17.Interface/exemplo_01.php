<?php

	interface Veiculo{

		public function acelerar ($velocidade);
		public function freiar ($velocidade);
		public function trocarMarcha($marcha);

	}

	class Carro implements Veiculo{

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

	$carro = new Carro();	//definindo que para que a classe exista eu preciso declarar o que está previsto na interface.

	$carro->trocarMarcha(3);

?>