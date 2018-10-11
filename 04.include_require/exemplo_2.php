<?php

		//include "exemplo_1.php";
		require_once "exemplo_1.php";
		require_once "exemplo_1.php";

		/*
			INCLUDE # REQUIRE
			REQUIRE -> Obriga que o arquivo exista e esteja funcionando corretamente.
					   Caso não funcione ele para a execução do código. ERRO FATAL.

			INCLUDE -> Tenta funcionar mesmo que o arquivo não exista ou tenha algum tipo de problema.
					   Possui mais recursos. Include path.
					   INCLUDE PATH -> Uma pasta em que podemos configurar um conjunto de "classes úteis".
		
			
		*/

	$soma = somar(10, 20);
	$subtrair = subtrair(20, 30);
	$multiplicar = multiplicar(10, 15);
	$dividir = dividir(5000, 1000);
	
	//echo $soma."<br";
	//echo $subtrair."<br";
	//echo $multiplicar."<br";
	echo $dividir."<br";

?>