<?php

$connect = new mysqli("localhost", "root", "", "dbphp8");

if($connect->connect_error){

    echo "Error ".$connect_error;

}

$result = $connect->query("SELECT * FROM tb_usuario");

$data = array();

while($row = $result->fetch_assoc()){

    array_push($data, $row);

}

echo json_encode($data);


?>