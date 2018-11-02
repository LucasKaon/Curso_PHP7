<?php

	$conn = new mysqli("localhost","root","","db_php7");	
	//classe nativa -> mysqli('servidor','usuario', 'senha', 'database')

	if ($conn->connect_error) {
		echo "Error ".$conn->connect_errno.": ".$conn->connect_error;
	}

	$query = $conn->prepare("INSERT INTO usuario (CAMPLOGIN, CAMPSENHA) VALUES (?, ?)"); 

	$query->bind_param("ss", $login, $pass);
	//bind_param("tipo_do_arquivo(string, boolean, double)","CAMPLOGIN","CAMPSENHA")
	//bind_param se conecta ao ponto de interrogação da query

	$login = "local2";
	$pass = "local2";

	if($query->execute()){
		echo "Cadastro realizado.";
	} else {
		echo "Não foi possível realizar o cadastro no banco de dados<br>Contate o Administrator do Sistema";
	}

	//realizar consulta

?>