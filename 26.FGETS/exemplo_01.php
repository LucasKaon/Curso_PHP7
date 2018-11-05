<?php

	//fgets lê linha por linha de um arquivo
	//fread você precisa determinar o quanto de bytes você quer ler de determinado arquivo

	$filename = "usuarios.csv";

	if (file_exists($filename)) {
		
		$file = fopen($filename, "r");
		//modo "r" é modo leitura
		//http://php.net/manual/pt_BR/function.fopen.php

		$headers = explode(",",fgets($file));
		//explode # implode

		// var_dump($headers);

		$data = array();

		while ($row = fgets($file)) {
			
			$rowData = ((explode(",",$row)));

			$linha = array();

			for($i=0;$i < count($headers); $i++){

				$linha[$headers[$i]] = $rowData[$i];

			}

			array_push($data, $linha);
		}

		fclose($file);

		echo json_encode($data);
	}



?>