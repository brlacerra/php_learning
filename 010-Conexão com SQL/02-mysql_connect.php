<?php

$connect = new mysqli("localhost", "root", "", "dbphp8");

if($connect->connect_error){

    echo "Error ".$connect_error;

}

$stmt = $connect->prepare("INSERT INTO tb_usuario (des_login, des_senha) VALUES(?,?)");
$stmt->bind_param("ss", $login, $pass);

$login = "Bruno Lacerra";
$pass = "123456789Br";

$stmt->execute();



?>