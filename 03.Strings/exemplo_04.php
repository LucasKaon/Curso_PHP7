<?php

	$frase = "É loucura ter sempre os mesmos hábitos e esperar resultados diferentes.";

	$q = strpos($frase, "esperar");

	$palavra = "esperar";

	$texto = substr($frase, 0 , $q);

	$texto2 = substr($frase, $q);

	$texto3 = substr($frase, $q + strlen($palavra), strlen($frase));

	echo $texto;

	echo "<br>";

	echo $texto2;

	echo "<br>";

	echo $texto3;

	echo "<br>";

	var_dump($q);

	//http://php.net/manual/pt_BR/ref.strings.php

?>