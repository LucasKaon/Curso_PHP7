<?php

	if ($_SERVER["REQUEST_METHOD"] === "POST") {
		
		//para arquivo
		$file_upload = $_FILES["file_upload"];

		if ($file["error"]) {

			throw new Exception("Houve um erro: ", $file["error"]);
			
		}

		$dirUploads = "uploads";

		if (!is_dir($dirUploads)) {
			
			mkdir($dirUploads);

		}

		//o if é para saber se o upload realmente aconteceu
		if(move_uploaded_file($file["tmp_name"], $dirUploads.DIRECTORY_SEPARATOR.$file["name"])){

			echo "Upload realizado com sucesso.";

		} else {
			throw new Exception("Não foi possível realizar o upload no momento.");
		}

	}

?>
	
<form method="POST" enctype="multipart/form-part">

	<input type="file" name="file_upload">

	<button type="submit">Enviar</button>

</form>