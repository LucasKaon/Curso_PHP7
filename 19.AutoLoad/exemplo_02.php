<?php
	
	function incluirClasses($nomeClasse){
		if(file_exists($nomeClasse.".php")===true){
		require_once($nomeClasse.".php");
		}
	}

	spl_autoload_register("incluirClasses") ;
							//stand php library
							//conjunto de funções que são usadas para solucionar lacunas
							//funções da spl

	spl_autoload_register(function($nomeClasse){

		if (file_exists("Abstratas".DIRECTORY_SEPARATOR.$nomeClasse.".php")) {
			require_once("Abstratas".DIRECTORY_SEPARATOR.$nomeClasse.".php"); 
		}

	});

	$carro = new DelRey();

	echo "<br><br>";

	$carro->acelerar(80);

?>