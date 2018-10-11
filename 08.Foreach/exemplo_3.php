<form>
	
	<input type="date" name="data">
	<input type="time" name="hora_chegada">
	<input type="time" name="hora_intervalo">
	<input type="time" name="hora_saída">
	<br><br>
	<input type="submit" value="OK">


</form>

<?php

if (isset($_GET)) {
	
	foreach ($_GET as $campo => $value) {
		echo $campo . ": ".$value;
		echo "<br><br><hr>";
	}

}


?>
