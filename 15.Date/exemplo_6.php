<?php

	//$dt = Date("e");	//identificação do fuso horário

	//$dt = Date("d/m/Y h:i:s A");

	$ts = strtotime("25-12-2018");

	$dt = Date("M z t", $ts);

	echo $dt;

?>