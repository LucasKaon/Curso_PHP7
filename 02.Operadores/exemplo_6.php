<?php

	$a = null;

	$b = null;

	$c = 50;

	echo $a ?? $b ?? $c;	
	//Me mostre o '$a', se ele não existir, mostre o '$b', se ele também não existir, mostre o '$c';

?>