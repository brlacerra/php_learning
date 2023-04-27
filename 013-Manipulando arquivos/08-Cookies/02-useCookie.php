<?php

if(isset($_COOKIE["NOME_DO_COOKIE"])){
    
    $array = json_decode($_COOKIE["NOME_DO_COOKIE"], true);
    echo $array["empresa"];
}

?>