<?php

$connect = new PDO("sqlsrv:Database=dbphp8;server=localhost\SQLEXPRESS;ConnectionPooling=0", "sa", "123");

$stmt = $connect->prepare("SELECT * FROM tb_usuario ORDER BY id_usuario ASC");

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