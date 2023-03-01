<?php

    echo date("d/m/Y H:i:s ");

    echo "<br>";
    echo "<br>";


    $tsweek = strtotime("+1 week +2 hours +2 minutes +10 seconds");
    echo date("d/m/Y H:i:s ", $tsweek) . "é uma semana e duas horas, 2 minutos
    e 10 segundos depois de 
    ". date("F l d/m/Y H:i:s");

    echo "<br>";
    echo "<br>";

    $ts = strtotime("2013/01/27 02:30");
    echo date("F l d/m/Y H:i:s", $ts). 
    " is like a ". $ts;

    echo "<br>";
    echo "<br>";

    $pedido = strtotime("now");
    $frete = 42;
    $chegada = strtotime("+$frete days");

    echo "O pedido foi realizado dia ".date("d/m H:i:s", $pedido). " e chegará dia " . 
    date("d/m", $chegada);
?>