<?php

	$name = 'images';

	//Verificando se um arquivo existe
	//criando diretório
	if(!is_dir($name)){

		mkdir($name);
	
		echo "Diretório ".$name." criado com sucesso.";
	} else{

		echo "Diretório ".$name." já existe.";

	}

	//removendo diretório
	/*if(is_dir($name)){

		rmdir($name);
	
		echo "Diretório ".$name." excluido com sucesso.";
	} else{

		echo "Diretório ".$name." não existe.";

	}*/
?>