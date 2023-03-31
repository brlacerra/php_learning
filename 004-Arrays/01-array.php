<?php

$frutas = array("Laranja", "Abacaxi", "Melancia");
//Exibe o array; todo o array inicia em 0
print_r($frutas);

echo "<br>";

//Array bidimensional
$carros[0][0] = "Honda";
$carros[0][1] = "Civic";
$carros[0][2] = "Fit";
$carros[0][3] = "City";

$carros[1][0] = "Ford";
$carros[1][1] = "Fiesta";
$carros[1][2] = "Focus";
$carros[1][3] = "Fusion";

//Trazer um array específico
echo $carros[0][3];
echo "<br>";

//Trazer o último dessa posição
echo end($carros[1]);
echo "<br>";

$pessoas = array();

array_push($pessoas, array('nome' => 'João', 'idade' => 25));
array_push($pessoas, array('nome' => 'Glaucio', 'idade' => 35));

print_r($pessoas);
echo "<br>";
print_r($pessoas[0]['nome']);

?>