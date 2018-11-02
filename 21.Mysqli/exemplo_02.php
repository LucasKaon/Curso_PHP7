<?php

	$conn = new mysqli("localhost","root","","db_php7");	
	//classe nativa -> mysqli('servidor','usuario', 'senha', 'database')

	if ($conn->connect_error) {
		echo "Error ".$conn->connect_errno.": ".$conn->connect_error;
	}

	$resultado = $conn->query("SELECT * FROM usuario ORDER BY CAMPLOGIN");

	$data = array(); //guardar meus dados aqui

	while ($row = $resultado->fetch_array(MYSQLI_ASSOC)) //verificando se existem informações no cursor
	{
		array_push($data, $row); //adicione novo item no array 'data'
	}

	echo json_encode($data);


?>