<?php

	////////////////	SWITCH CASE		/////////////////////////		
	
		// Já sei quando vou utilizar e como vou utilizar em cada situação

	
	//$diaDaSemana = date("w");
	$diaDaSemana = 8;

	//echo $diaDaSemana;

	switch ($diaDaSemana) {
		case 0:
				echo "Domingo";
			break;
		
		case 1:
				echo "Segunda - Feira";
			break;

		case 2:
				echo "Terça - Feira";
			break;

		case 3:
				echo "Quarta - Feira";
			break;

		case 4:
				echo "Quinta - Feira";
			break;

		case 5:
				echo "Sexta - Feira";
			break;

		case 6:
				echo "Sábado";
			break;

		default:
			echo "Data inválida.";
			break;
	}

	

?>