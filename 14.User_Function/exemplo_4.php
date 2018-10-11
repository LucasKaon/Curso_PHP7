<?php

	function ola(){

		$argumentos = func_get_args();	//recupera e coloca em uma array todos os parametros colados dentro dessa função

		return $argumentos;
	}

	ola("Bom dia!" , "Tudo bem com você");

	var_dump(ola("Bom dia!" , "Tudo bem com você"));
	
?>