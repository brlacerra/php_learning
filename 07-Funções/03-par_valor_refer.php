<?php

$a = 10;

//sem o &, passagem de parametro por valor
// retorna 60 10
//com o &, passagem de valor por referência
//retorna 60 60
function trocaValor(&$x){
    $x += 50;

    return $x;

}

echo trocaValor($a);
echo "<br>";
echo $a;


?>