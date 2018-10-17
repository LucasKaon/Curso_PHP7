<?php

	//Com a utilização de classes, possui mais recursos, e fica mais simples

	$dt = new DateTime();

	$periodo = new DateInterval("P15D");

		echo $dt->format("d/m/Y H:i:s");

	$dt->add($periodo);

	echo "<br><br>";
	
	echo $dt->format("d/m/Y H:i:s");


?>