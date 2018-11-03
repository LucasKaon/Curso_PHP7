<?php

	//visualizar o que tem dentro do diretório

	$images = scandir("images");

	//me retorna um array

	var_dump($images);
	foreach ($images as $key => $value) {
		echo $value."<br>";
	}

	echo "<hr>";

	foreach ($images as $img) {
		if (in_array($img, array(".",".."))) {
			//in_array(o alvo, as opcoes)
			
			$filename = "images" . DIRECTORY_SEPARATOR . $img;

			$info = pathinfo($filename);

			var_dump($info);
		}
	}

?>