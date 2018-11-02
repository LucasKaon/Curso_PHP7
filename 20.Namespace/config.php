<?php

	//O Namespace permite organizar as pastas dentro de um diretório de uma forma organizada

	spl_autoload_register (function($nameClasse){

		var_dump($nameClasse);

		$dirClass = "class" ;//determinando qual a pasta em que ele vai procurar o diretório de classes
		$filename /*filepath*/ = "$dirClass" . DIRECTORY_SEPARATOR . $nameClasse.".php";

		if (file_exists($filename)) {
			
			require_once($filename);

		}

	});

?>