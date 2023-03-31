<?php

$pessoas = array();

array_push($pessoas, array('nome' => 'João', 'idade' => 25));
array_push($pessoas, array('nome' => 'Glaucio', 'idade' => 35));

// print_r($pessoas);

// Tranforma Array em json
echo json_encode($pessoas);

//Transforma json em Array
$json = '[{"nome":"Jo\u00e3o","idade":25},{"nome":"Glaucio","idade":35}]';
$data = json_decode($json, true);

var_dump($data);

?>