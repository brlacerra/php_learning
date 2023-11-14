<?php

if(isset($_COOKIE["NOME_DO_COOKIE"])){
    
    $array = json_decode($_COOKIE["NOME_DO_COOKIE"], true);
    echo $array["nome"];
    echo "<br>";
    echo $array["idade"];
    echo "<br>";
    echo $array["dispositivo"];
    echo "<br>";
    echo $array["data_acesso"];
    echo "<br>";
    echo $array["localizacao"];
}

?>