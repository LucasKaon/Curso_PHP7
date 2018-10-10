<?php
	
	/////////////////////////////////////////	SIMPLES
	
	$nome = "Lucas";
	$site = 'www.google.com.br';

	$ano = 1994;
	$salario = 6080.80;
	$bloqueado = false;

	/////////////////////////////////////////	COMPOSTO

	$frutas = array("abacaxi","laranja", "manga");

	//echo var_dump($frutas);
	//echo $frutas[2];

	$nascimento = new DateTime();

	var_dump($nascimento);

	/////////////////////////////////////////	ESPECIAL

	echo "<br><br>";

	//$arquivo = fopen("exemplo_02.php", "r");

	//var_dump($arquivo);

	$nulo = null;

?>