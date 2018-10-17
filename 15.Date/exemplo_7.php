<?php

	setlocale(LC_ALL, "pt_BR", "pt_BR.UTF-8", "portugues");

	$d = 9;	//dia
	$m = 9;	//mes
	$Y = 1994;	//ano

	//$periodo = new DateInterval("P15D9") ;

	$ts = strtotime($d."-".$m."-".$Y);

	$dt = strftime("O mês é: %B, o dia é %A , hoje é o %j º mês do ano!<br> %d/%m/%Y", $ts);

	echo $dt;

	echo "<br><hr><br>";

	//$dt->add($periodo);

	//echo "Dia do parto: ".$dt;

	

?>