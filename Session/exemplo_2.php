<?php

	require_once "config.php";

	session_unset($_SESSION['msg']);
	//	session_unset();	Apaga todos de uma vez só
	//	session_destroy();	

	if(isset($_SESSION['msg']))
	{
	echo $_SESSION['msg'];
	} else
	{
		echo "Hey guys!";
	}

?>