<?php

$connect = new PDO("mysql:host=localhost;dbname=dbphp8", "root", "");


$stmt = $connect->prepare("UPDATE tb_usuario SET des_login = :LOGIN, des_senha = :PASSWORD 
WHERE id_usuario = :ID");

$login = "Amarildo Arlindo Santos";
$password = "1489624189DFAEDFdfes";
$id = 4;

$stmt->bindParam(":LOGIN",$login);
$stmt->bindParam(":PASSWORD",$password);
$stmt->bindParam("ID", $id);

$stmt->execute();

echo "Alterado com Sucesso!";


?>