<?php

	function ola (){	

		echo "Olá mundo!";
		echo "<br><br>";
	}		//subrotina - sem retorno

	function hello (){	

		return "Hello World!";
		echo "<br><br>";
	}		//rotina

	ola();
	//echo hello();

	$frase = hello();

	echo strlen($frase);	//verifica quantos caracteres possui

	echo "<br>";
	
	var_dump($frase);
?>