<?php

	$meses = array(
		"Janeiro", "Fevereiro", "Março",
		"Abril", "Maio", "Junho",
		"Julho", "Agosto", "Setembro",
		"Outubro", "Novembro", "Dezembro"
	);

		//foreach = para cada ocorrencia, faça determinada coisa.
	/*foreach ($meses as $mes) {
		echo "O mês é : ".$mes."<br>";
	}*/

	foreach ($meses as $index => $mes) {
		echo "Index: ".$index."<br>";
		echo "O mês é : ".$mes."<br><br>";
	}

?>
