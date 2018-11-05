<?php

	$file = fopen("teste.txt","w+");

	fclose($file);

	unlink("teste.txt");
	//$file é a variável resource 

	echo "Arquivo removido com sucesso!";

?>