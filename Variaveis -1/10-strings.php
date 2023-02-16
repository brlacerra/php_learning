<?php

$nome = "Bruno";
$nome2 = 'Lacerra';

var_dump($nome, $nome2);
echo "<br>";

//interpolação de variáveis (apresenta o valor) ""
echo "Meu nome é $nome $nome2";
echo "<br>";

//sem interpolação de variáveis (apresenta o nome da var) ''
echo 'Meu nome é $nome $nome2';
echo "<br>";
echo "<br>";
echo "<br>";

//Uppercase ou lowercase, primeira letra
$nomeCompleto = strtoupper($nome) . " " . strtoupper($nome2);
echo $nomeCompleto;
echo "<br>";

$nomeCompleto = strtolower($nome) . " " . strtolower($nome2);
echo $nomeCompleto;
echo "<br>";

$nomeCompleto = ucwords($nomeCompleto);
echo $nomeCompleto;
echo "<br>";

$nomeCompleto = strtolower($nomeCompleto);
$nomeCompleto = ucfirst($nomeCompleto);
echo $nomeCompleto;
echo "<br>";

//Troca informações
$empresa = "Hcode";
$empresa = str_replace("o", "0", $empresa);
$empresa = str_replace("e", "3", $empresa);
echo $empresa;


?>