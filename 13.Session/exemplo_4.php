<?php

	require_once("config.php");

	session_regenerate_id() ;//gera novamente um ID de sessão

	echo session_id();

?>