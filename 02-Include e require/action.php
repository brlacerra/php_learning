<?php

//require obriga que o arquivo exista
//e esteja funcionando corretamente

//include tenta funcionar mesmo que o
//arquivo não exista ou apresente erros
//possui mais funcionalidades

// include "funcaoSoma.php";

var_dump("OK");
require_once "funcaoSoma.php";

$resultado = somar(10, 20);

echo $resultado;

?>