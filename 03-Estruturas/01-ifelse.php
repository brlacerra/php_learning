<?php

$qualASuaIdade= 30;

$idadeCrianca= 12;
$idadeMaior= 18;
$idadeMelhor= 65;

if ($qualASuaIdade<$idadeCrianca){

    echo "Você é uma criança";

}else if($qualASuaIdade < $idadeMaior){

    echo "Voce é adolescente";

}else if($qualASuaIdade < $idadeMelhor){

    echo "Você é adulto";

}else{

    echo "Você é idoso";
}

echo "<br>";

//Operador ternário
echo ($qualASuaIdade < $idadeMaior)? "Menor de idade":"Maior de idade";

?>