<?php

	$suaIdade = 20;
	
	$idade = 12;
	$maior = 18;
	$idoso = 65;

if ($suaIdade < $idade ) {
	echo "Crianca";
} 
	else if($suaIdade < $maior)
		{
			echo "Adolescente";
		} 
	else if($suaIdade < $idoso) 
		{
			echo "Adulto";
		} 
	else
		{
			echo "Idoso";
		}

		echo "<br><br>";

		echo ($suaIdade < $maior) ? "Menor de idade":"Maior de idade";
?>