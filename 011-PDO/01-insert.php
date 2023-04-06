<?php

$connect = new PDO("mysql:host=localhost;dbname=dbphp8", "root", "");


$stmt = $connect->prepare("INSERT INTO tb_usuario(des_login, des_senha) VALUES(:LOGIN,:PASSWORD)");

$login = "Bruno MySql Lacerra";
$password = "123456789ASDFG";

$stmt->bindParam(":LOGIN",$login);
$stmt->bindParam(":PASSWORD",$password);

$stmt->execute();

echo "Inserido com Sucesso!";


?>