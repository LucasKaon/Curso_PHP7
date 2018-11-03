<?php

	require_once("config.php");

	$sql = new Sql();

	$usuario = $sql->select("SELECT * FROM usuario ORDER BY camplogin");

	//identificar os cabeçalhos
	$headers = array();

	foreach ($usuario[0] as $key => $value) {
	 	array_push($headers, ucfirst($key));
	 } 

	 $file = fopen("usuarios.csv","w+");

	 fwrite($file, implode(",", $headers )."\r\n");
	 //implode (o que vai dividir cada item, o array)

	 foreach ($usuario as $row) {
	 	$data = array();

	 	foreach ($row as $key => $value) {
	 		array_push($data, $value);
	 	} //end foreach de coluna

	 	fwrite($file, implode(",", $data )."\r\n");
	 }	//End foreach de linha

	 fclose($file);
?>