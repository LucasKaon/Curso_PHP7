<?php

	//poderia utilizar o require_once ou include_once, porém também posso utilizar o autoload

	function __autoload($nomeClasse){
		require_once("$nomeClasse.php");
		var_dump($nomeClasse);
	}

	$carro = new DelRey();

	echo "<br><br>";

	$carro->acelerar(80);

?>