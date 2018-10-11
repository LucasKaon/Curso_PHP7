<form>
	
	<input type="text" name="nome">
	<input type="date" name="data">
	<input type="submit" name="cadastro" value="Cadastrar">

</form>


<?php

if (isset($_GET))
{
		/*como não foi declarado nada no formulário, o padrão é GET*/

		foreach ($_GET as $index => $value) 
		{
			echo "Nome do campo: ".$index."<br>";
			echo "Valor do campo : ".$value."<br>";
			echo "<hr>";
		}

}

?>