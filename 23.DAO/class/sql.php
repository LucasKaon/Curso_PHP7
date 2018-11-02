<?php
	

	//SQL extendida da classe PDO
	class Sql extends PDO{

		private $conexao;

		public function __construct(){
			$this->conexao = new PDO("mysql:host=localhost;dbname=db_php7", "root", "");
		}

		private function setParams($statment, $parameters = array()){

			foreach ($parameters as $key => $value) {

				$this->setParam($key, $value);
			}


		}

		private function setParam($statment, $key, $value){
			$statment->bindParam($key, $value);
		}

		public function query($rawQuery, $params){

			$stmt = $this->conexao->prepare($rawQuery);

			$this->setParams($stmt, $params);

			$stmt->execute();

			return $stmt;

		}


		public function select($rawQuery, $params = array()):array
		{

			$stmt = $this->query($rawQuery, $params);

			return $stmt->fetchAll(PDO::FETCH_ASSOC);

		}

	}

?>