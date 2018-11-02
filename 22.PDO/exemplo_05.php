<?php

$conexao = new PDO("mysql:host=localhost;dbname=db_php7", "root", "");

$conexao->beginTransaction();

$stmt = $conexao->prepare("DELETE from usuario WHERE idusuario = :IDUSUARIO" );

$idusuario = 7;

$stmt->bindParam(":IDUSUARIO",$idusuario);

$stmt->execute();

//$conexao->rollback();
$conexao->commit();

echo "Row Delete.";

?>