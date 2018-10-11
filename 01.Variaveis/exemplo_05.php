<?php

	/*	//		ESCOPO DE VARIÁVEIS		//	*/

	//. Até onde esta variável será enxergada!
	// ESCOPO LOCAL # ESCOPO GLOBAL

	$nome = "Lucas";

	function teste(){

		global $nome;
		echo $nome . "<br>";

	}

	function teste2(){
		
		echo $nome;

	}

	teste();
	teste2();

?>