<?php

$conexao = new PDO("mysql:host=localhost;dbname=db_php7", "root", "");

$stmt = $conexao->prepare("INSERT INTO usuario (camplogin,campsenha) VALUES (:LOGIN, :PASSWORD)");

$login = "Pedro";
$password = "******";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD",$password);

$stmt->execute();

echo "Entered in the database.";

?>