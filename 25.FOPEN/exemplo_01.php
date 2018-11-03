<?php

	$file = fopen("log.txt", "a+");
	//fopen(filename, mode)		w+
	//caminho do arquivo / o que será feito
	//http://php.net/manual/pt_BR/function.fopen.php

	fwrite($file, date("Y-m-d H:i:s")."\r\n");
	//resource / dados que quero inserir no arquivo

	fclose($file);

	echo "Arquivo criado com sucesso.";
?>