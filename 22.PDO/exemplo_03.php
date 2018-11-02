<?php

$conexao = new PDO("mysql:host=localhost;dbname=db_php7", "root", "");

$stmt = $conexao->prepare("UPDATE usuario SET camplogin = :LOGIN, campsenha = :PASSWORD WHERE idusuario = :IDUSUARIO" );

$login = "Harrison";
$password = "******";
$idusuario = 1;

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD",$password);
$stmt->bindParam(":IDUSUARIO",$idusuario);

$stmt->execute();

echo "Update Successfully.";

?>