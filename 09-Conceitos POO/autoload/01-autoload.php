<?php

//Apenas se estiverem no mesmo diretório
spl_autoload_register(function($class){ 
    // var_dump($class);
    require_once($class.".php"); 
});

// require_once("DelRey.php");

$carro = new DelRey();
$carro->acelerar(80);
?>