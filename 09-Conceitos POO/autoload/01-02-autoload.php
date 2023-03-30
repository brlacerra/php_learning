<?php

// spl_autoload_register("incluirClasses");
spl_autoload_register(function($classe){

    if(file_exists("abstratas". DIRECTORY_SEPARATOR .$classe.".php")===true){
        require_once("abstratas". DIRECTORY_SEPARATOR .$classe.".php");
    }

});

$carro = new DelRey();
$carro->acelerar(80);

?>