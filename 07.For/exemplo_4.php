<?php

	function diaSemana($diaDaSemana){
		
		$diaSemana = $diaDaSemana;

	switch ($diaSemana) {
		case 0:
				echo "Domingo<br><br>";
			break;
		
		case 1:
				echo "Segunda - Feira<br><br>";
			break;

		case 2:
				echo "Terça - Feira<br><br>";
			break;

		case 3:
				echo "Quarta - Feira<br><br>";
			break;

		case 4:
				echo "Quinta - Feira<br><br>";
			break;

		case 5:
				echo "Sexta - Feira<br><br>";
			break;

		case 6:
				echo "Sábado<br><br>";
			break;

		default:
			echo "Data inválida.";
			break;
	}
}

	

?>