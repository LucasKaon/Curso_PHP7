<?php

	require_once("config.php");

	echo "<br><br>";
	echo "Caminho: ".session_save_path();
	echo "<br><br>";
	echo session_name();
	echo "<br><br>";
	echo session_status();

?>