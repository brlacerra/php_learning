<?php

$connect = new PDO("mysql:host=localhost;dbname=dbphp8", "root", "");


$stmt = $connect->prepare("DELETE FROM tb_usuario WHERE id_usuario = :ID");

$id = 3;
$stmt->bindParam("ID", $id);

$stmt->execute();

echo "Deletado com Sucesso o usuário de id:".$id;


?>