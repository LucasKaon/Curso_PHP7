<?php

	$conn = new PDO("mysql:dbname=db_php7;host=localhost","root","");
	//PDO ("banco que queremos conectar:db;host",usuario,senha)

	$query = $conn->prepare("SELECT * FROM usuario");

	$query->execute();

	$resultado = $query->fetchAll(PDO::FETCH_ASSOC);

	foreach ($resultado as $row) {
		
			foreach ($row as $key => $value) {
				echo "<strong>".$key." : </strong> ".$value."<br>";
			}

			echo "<hr><br>";

	}

	var_dump($resultado);
?>