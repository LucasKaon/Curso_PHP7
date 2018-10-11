<?php

$salario = 1350.80;
$salario_Minimo = 954.00;
$salario_Medio = 1500;

if ($salario < $salario_Minimo) {
	echo "Acima do Salario Minimo<br><br>";
} 
	else if($salario < $salario_Medio)
	{
		echo "Salario abaixo do salario medio.<br><br>";
	}
	else
	{
		echo "Salario acima da media.<br><br>";
	}



	echo ($salario == $salario_Minimo) ? "<br><br>Salario é igual ao salário minimo" : "<br><br>Salario é diferente do salario minimo";

	echo ($salario_Medio > $salario_Minimo) ? "<br><p>Salario medio do trabalhador é maior do que o salario minimo</p>" : "<p>Salario medio do trabalhador é menor que o salario minimo.</p>"
?>