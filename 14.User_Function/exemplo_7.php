<?php

	function soma(int ...$valores){

		return array_sum($valores);

	}

	echo soma(2, 2, 6, 8 ,9);
	echo "<br>";
	echo soma(5, 40, 1);
	echo "<br>";
	echo soma(10, 10);
	echo "<br>";
	echo var_dump(soma(2, 5));

?>