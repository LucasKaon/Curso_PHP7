<?php

	//verificao se a pasta já existe
	if (!is_dir("arquivos")) {
		mkdir("arquivos");
	}
	
	//foreach percorre pasta arquivos
	foreach (scandir("arquivos") as $key => $value) {
		if (!in_array($key, array(".",".."))) {
			
			unlink("arquivos/".$value);

		}
	}
?>