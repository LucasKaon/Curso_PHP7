<?php

	//$ts = strtotime("2001-09-11");

	$ts = strtotime("+2 week +5 hours");

	echo date("l ,d/m/Y", $ts);
?>