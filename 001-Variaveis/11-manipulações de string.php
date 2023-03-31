<?php


$frase = "A repetição é mãe da retenção.";
$palavra = "mãe";
//Busca palavra em frase (posição);
$q = strpos($frase, $palavra);
var_dump($q);
echo "<br>";

//Retira parte da frase dada uma condição
//"Antes de x palavra, pegue todo o texto
//anterior a ela"
$text = substr($frase, 0, $q);
var_dump($text);
echo "<br>";


$text = substr($frase, $q+strlen($palavra));
var_dump($text);



?>