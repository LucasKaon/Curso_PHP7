<?php

	class Usuario {

		private $idusuario;
		private $camplogin;
		private $campsenha;
		private $dtcadastro;

		//GET
		public function getIdusuario(){
			return $this->idusuario;
		}
		public function getCamplogin(){
			return $this->camplogin;
		}
		public function getCampsenha(){
			return $this->campsenha;
		}
		public function getDtcadastro(){
			return $this->dtcadastro;
		}

		//SET
		public function setIdusuario($value){
			$this->idusuario = $value;
		}
		public function setCamplogin($value){
			$this->camplogin = $value;
		}
		public function setCampsenha($value){
			$this->campsenha = $value;
		}
		public function setDtcadastro($value){
			$this->dtcadastro = $value;
		}

		public function loadById($id){

			$sql = new Sql();

			$resultado = $sql->select("SELECT * FROM usuario WHERE idusuario = :ID", array(

				":ID"=>$id

			));

			if (count($resultado)>0) {
				
				$this->setData($resultado[0]);

			}

		}

		public static function getList(){

			$sql = new Sql();

			return $sql->select("SELECT * FROM usuario");

		}

		public static function search($login){

			$sql = new Sql();

			return $sql->select("SELECT * FROM usuario WHERE camplogin LIKE :SEARCH ORDER BY camplogin", array(
				':SEARCH'=>"%".$login."%"
			));

		}

		public function login($login, $senha){

			$sql = new Sql();

			$resultado = $sql->select("SELECT * FROM usuario WHERE camplogin = :LOGIN AND campsenha = :PASSWORD", array(

				":LOGIN"=>$login,
				":PASSWORD"=>$senha

			));

			if (count($resultado)>0) {
				

				$this->setData($resultado[0]);

			} else {

				throw new Exception("Login e/ou senha inválidos", 1);
				

			}


		}

		public function setData($data){

			$this->setIdusuario($data['idusuario']);
			$this->setCamplogin($data['camplogin']);
			$this->setCampsenha($data['campsenha']);
			$this->setDtcadastro(new DateTime($data['dtcadastro']));


		}

		public function insert(){

			$sql = new Sql();

			$resultado = $sql->select("CALL sp_usuarios_insert(:LOGIN, :PASSWORD)", array(
				':LOGIN'=>$this->getCamplogin(),
				':PASSWORD'=>$this->getCampsenha()

			));

			if(count($resultado) > 0){
				$this->setData($resultado[0]);
			}

		}

		public function update($login, $password){

			$this->setCamplogin($login);
			$this->setCampsenha($password);

			$sql = new Sql();

			$sql->query("UPDATE usuario SET camplogin = :LOGIN, campsenha = :PASSWORD WHERE idusuario = :ID",array(

				':LOGIN'=>$this->getCamplogin(),
				':PASSWORD'=>$this->getCampsenha(),
				':ID'=>$this->getIdusuario()

			));
		}

		public function delete(){

			$sql = new Sql();

			$sql->query("DELETE from usuario WHERE idusuario = :ID",array(

				':ID'=>$this->getIdusuario()
			));

			$this->setIdusuario(0);
			$this->setCamplogin("");
			$this->setCampsenha("");
			$this->setDtcadastro(new DateTime());

		}

		public function __construct($login = "", $password = ""){

			$this->setCamplogin($login);
			$this->setCampsenha($password);

		}

		public function __toString(){

			return json_encode(array(

				"idusuario"=>$this->getIdusuario(),
				"camplogin"=>$this->getCamplogin(),
				"campsenha"=>$this->getCampsenha(),
				"dtcadastro"=>$this->getDtcadastro()->format("d/m/Y H:i:s")

			));


		}




	}

?>