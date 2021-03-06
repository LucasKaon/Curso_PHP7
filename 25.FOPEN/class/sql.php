<?php
	

	//SQL extendida da classe PDO
	class Sql extends PDO{

		private $conexao;

		public function __construct(){
			$this->conexao = new PDO("mysql:host=localhost;dbname=phpmyadmin", "root", "");
		}

		private function setParams($statement, $parameters = array()){

			foreach ($parameters as $key => $value) {

				$this->setParam($statement, $key, $value);
			}


		}

		private function setParam($statement, $key, $value){
			$statement->bindParam($key, $value);
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