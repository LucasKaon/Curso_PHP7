<?php

	////////////// JSON  //////////////


		$pessoas = array();

		array_push($pessoas, array(
			'nome' => 'Joao',
			'idade' => 22

		));

		array_push($pessoas, array(
			'nome' => 'Lucas',
			'idade' => 24

		));

		echo json_encode($pessoas);
		echo "<br><br><hr><hr><br><br>";
		print_r($pessoas);

?>