<?php

	$arr = array(
		'Carro',
		'Moto',
		'Caminhao',
		'Trator',
		'Aviao'
	);


	foreach ($arr as $key => $value) {

		if ($key == 3) {
			echo "<br>Fim do código.";
			break;
		}

		echo $value."<hr>";
	}

?>