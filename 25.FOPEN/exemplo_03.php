<?php

	require_once("config.php");

	$sql = new Sql();

	$tabelas = $sql->select("SHOW TABLES");

	//cabeçalhos
	$header = array();

	foreach ($tabelas[0] as $key => $value) {
		array_push($header, $key);
	}

	$file = fopen("tabelas_phpmyadmin.csv", "w+");

	fwrite($file,implode(",", $header)."\r\n");

	foreach ($tabelas as $row) {
		
		fwrite($file, implode(",",$row)."\r\n");
	}

	fclose($file);


?>
