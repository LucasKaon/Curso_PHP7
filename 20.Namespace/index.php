<?php

	require_once("config.php");

	use Cliente\Cadastro;

	$cad = new Cadastro();

	$cad->setNome("Lucas");
	$cad->setEmail("lucas@email.com.br");
	$cad->setSenha("123456");


	echo $cad ;
	echo "<br><br>";
	// var_dump($cad);
	$cad->registrarVenda();

?>