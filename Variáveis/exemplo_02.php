<?php  

	$nome = "Lucas";
	$sobrenome = "A";

	$nomeCompleto = $nome . " ". $sobrenome ."<br>";

	echo $nomeCompleto;

	unset($nomeCompleto);

	if (isset($nomeCompleto)) {
		echo $nomeCompleto;
	}
?>