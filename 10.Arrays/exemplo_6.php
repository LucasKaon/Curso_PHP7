<?php

	$animais = array("cachorro","gato","porco","vaca","cavalo","elefante","rinoceronte","papagaio");

	// foreach ($animais as $key => $value) {
	// 	echo "Posição: ".$key."<br>Animal: ".$value."<hr>";
	// }

	echo json_encode($animais);

    echo "<br><br>";

	print_r($animais);	

?>