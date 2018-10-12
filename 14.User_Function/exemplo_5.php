<?php

	$a = 10;

	function trocaValor(&$a){			//passagem de valor POR REFERÊNCIA!!

		$a += 50;

		return $a;

	}

	echo trocaValor($a);	

	echo "<br>";

	echo $a;

	echo "<br>";
	
	echo trocaValor($a)	;
?>