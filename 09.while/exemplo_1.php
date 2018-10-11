<?php  

	//WHILE = FAÇA ENQUANTO - OBS: MUITO UTILIZADO PARA PEGAR REGISTROS EM BANCO DE DADOS

	// DO WHILE = EXECUTA PELO MENOS UMA VEZ

	$condição = true;

	while ($condição) {
		
		$numero = rand(1,10);

		echo "Número sorteado: "."$numero"."<br>";

		if ($numero === 3) {
			echo "<br><hr>TRÊS!!<hr><br>";
			$condição = false;	
		}

		

	}


?>