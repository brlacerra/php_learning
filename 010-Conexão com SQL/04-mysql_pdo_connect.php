<?php

$connect = new PDO("mysql:dbname=dbphp8;host=localhost", "root", "");

$stmt = $connect->prepare("SELECT * FROM tb_usuario ORDER BY id_usuario DESC");

$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

// foreach($results as $row){
//     foreach($row as $key => $value){
//         echo "<strong>".$key.": </strong>".$value."<br>";
//     }

//     echo "===================================================<br>";
// }

echo json_encode($results);



?>