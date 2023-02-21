<?php

$pessoas = array();

array_push($pessoas, array('nome' => 'João', 'idade' => 25));
array_push($pessoas, array('nome' => 'Glaucio', 'idade' => 35));

// print_r($pessoas);

echo json_encode($pessoas);

?>