<?php

	require_once("config.php");

	// $usuarios = $sql->select("SELECT * FROM usuario");
	// echo json_encode($usuarios);

	//Carrega apenas um usuário
	// $root = new Usuario();
	// $root->loadbyId(4);
	// echo $root;


	//Carrega uma lista de usuarios 
	//$lista = Usuario::getList();

	//Lista com SEARCH
	// $search = Usuario::search("local");
	// echo json_encode($search);

	//Carrega um usuário usando o login e a senha
	// $usuario = new Usuario();
	// $usuario->login("Kaon","1793753951");
	// echo $usuario;

	//Criando novo usuario - INSERT
	// $aluno = new Usuario("jason", "encode");
	// $aluno->insert();
	// echo $aluno;

	//UPDATE
	// $usuario = new Usuario();
	// $usuario->loadbyId(4);
	// echo $usuario;
	// $usuario->update("professor", "!@##$%");
	// echo "<br>".$usuario;

	//DELETE
	$usuario = new Usuario();
	$usuario->loadbyId(4);
	$usuario->delete();
	echo $usuario;
?>