<?php

	/*function ola($texto){
		return "Hello ".$texto."!<br>";
	}*/

	function ola($texto, $periodo = "Bom Dia"){
		return "Hello ".$texto."! ".$periodo."<br>";
	}

	/*function ola($texto = "mundo"){
		return "Hello ".$texto."!<br>";
	}*/

	echo ola("World!","Boa Tarde");
	echo ola("Lucas!");
	echo ola("Marília!", "");

?>