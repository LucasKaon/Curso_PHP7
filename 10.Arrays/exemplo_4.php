<form>
	
	<input type="text" name="nome">
	<input type="number" name="idade">
	<input type="submit" value="Ok">

</form>


<?php

	if (isset($_GET)) 
	{
		
			$nome = $_GET['nome'];
			$idade = $_GET['idade'];
		
			$pessoas = array();
			
		array_push($pessoas, array(
				'nome' => $nome,
				'idade' => $idade));

				print_r($pessoas);

	}

?>