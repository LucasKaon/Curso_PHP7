<?php  

/*		//		VARIÁVEIS GLOBAIS 		//*/


		//GET

//http://127.0.0.1/Curso_PHP7/Variáveis/exemplo_04.php?a=123
// '?' -> separa o link da variavel.
// toda informação vinda de um GET ou POST é uma string

		//$variavel1 = (int)$_GET['a'];
		//$variavel2 = (int)$_GET['b'];

//http://127.0.0.1/Curso_PHP7/Variáveis/exemplo_04.php?a=123&b=456

		/*var_dump($variavel1, $variavel2);
		echo "<br>".$variavel1." ".$variavel2;*/


		//IP DO USUÁRIO

$ip = $_SERVER["REMOTE_ADDR"];
$informacao = $_SERVER["SCRIPT_NAME"];

		//echo $ip;
	




?>