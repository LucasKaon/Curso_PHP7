<?php  


	class Pessoa{

		private $nome;
		private $sexo;
		private $altura;

		public function getNome(){

			return $this->nome;

		}

		public function getSexo(){

			return $this->sexo;

		}

		public function getAltura(){

			return $this->altura;

		}

		public function setNome($nome){

			$this->nome = $nome;

		}

		public function setSexo($sexo){

			$this->sexo = $sexo;

		}

		public function setAltura($altura){

			$this->altura = $altura;

		}


		public function __construct($name, $genero, $altura){

			$this->nome = $name;
			$this->sexo = $genero;
			$this->altura = $altura;

		}

		public function __toString(){

			return "Nome: ".$this->nome."<br>Sexo: ".$this->sexo."<br>Altura: ".$this->altura." m <br><br>";

		}



	} /*end Class */

		/*	PESSOA 1	*/
	
	$pessoa_1 = new Pessoa("Lucas A", "Masculino", "1.86");
	
	echo $pessoa_1->getNome()."<br><br>";

	$pessoa_1->setNome("Kaon");

	/*$pessoa_1->setSexo("Masculino");
	$pessoa_1->setAltura("1.86");*/

	
	echo $pessoa_1;

	/*	PESSOA 2	*/

	$pessoa_2 = new Pessoa("Marry A", "Feminino", "1.68");
	
	echo $pessoa_2->getNome()."<br><br>";

	$pessoa_2->setNome("Mazy");

	/*$pessoa_1->setSexo("Masculino");
	$pessoa_1->setAltura("1.86");*/

	
	echo $pessoa_2;

?>