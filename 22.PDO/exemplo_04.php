<?php

$conexao = new PDO("mysql:host=localhost;dbname=db_php7", "root", "");

$stmt = $conexao->prepare("DELETE from usuario WHERE idusuario = :IDUSUARIO" );

$idusuario = 2;

$stmt->bindParam(":IDUSUARIO",$idusuario);

$stmt->execute();

echo "Row Delete.";

?>