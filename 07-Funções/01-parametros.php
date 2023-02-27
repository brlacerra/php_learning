<?php

function ola($texto, $periodo = "Bom dia"){
    return "Olá $texto! $periodo!<br>";
}

echo ola("Mundo");
echo ola("Bruno", "Boa noite");
echo ola("João", "Boa tarde");
echo ola("José", "");

?>