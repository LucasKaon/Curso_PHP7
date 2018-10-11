<?php

	////////////////	FOR		/////////////////////////		
	

	/*for ($i=0; $i <= 10; $i++) { 
		echo $i. " ";
	}*/

	for ($i=0; $i <= 100; $i+=5) { 

		if ($i >= 20 && $i <= 50) continue;	// recomeça o laço de repetição
		
		if ($i > 80) {
			break;							//pausa o laço de repetição
		}

		echo $i. " ";


	}

	

?>