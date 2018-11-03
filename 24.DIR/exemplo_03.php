<?php

	//visualizar o que tem dentro do diretório

	$images = scandir("images");

	$data = array();

	foreach ($images as $img) {
		if (!in_array($img, array(".",".."))) {
			//in_array(o alvo, as opcoes)
			
			$filename = "images" . DIRECTORY_SEPARATOR . $img;

			$info = pathinfo($filename);
			$info["size"] = filesize($filename);
			$info["modified"] = date("d/m/Y H:i:s", filemtime($filename));
			$info["adress"] = "http://127.0.0.1/Curso_PHP7/24.DIR/".str_replace("\\", "/",$filename);

			array_push($data, $info);
		}
	}

	echo json_encode($data);

?>