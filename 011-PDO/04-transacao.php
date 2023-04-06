<?php

$connect = new PDO("mysql:host=localhost;dbname=dbphp8", "root", "");

$connect->beginTransaction();

$stmt = $connect->prepare("DELETE FROM tb_usuario WHERE id_usuario = ?");

$id = 2;

$stmt->execute(array($id));

// $connect->rollBack();
$connect->commit();

echo "Deletado com Sucesso o usuário de id:".$id;


?>