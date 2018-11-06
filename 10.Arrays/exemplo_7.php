<?php

	$animais = array(

		"felinos" => array("Tigre","Leão","Lince","Onça","Guepardo","Gato-de-palla","Suçuarana"),
		"caninos" => array("Cachorro","Lobo","Coiote","Chacal","Mabeco","Dingo","Raposa")

	);

	// print_r($animais);

	// var_dump($animais);

	// echo json_encode($animais);

	$header = array();
	$data = array();

	foreach ($animais as $key => $value) {
		
		array_push($header, $key);

	}

	//recuperando o cabeçalho de um array
	echo json_encode($header);

?>