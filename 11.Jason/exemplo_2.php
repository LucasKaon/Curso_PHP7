<?php

	$json = '[{"nome":"Joao","idade":22},{"nome":"Lucas","idade":24}]';

	$decode = json_decode($json , true);

	var_dump($decode);
	echo "<br><br><br>";
	var_dump($json);
?>