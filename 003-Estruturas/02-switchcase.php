<?php

$diaSemana = date("w");


switch ($diaSemana){
    case 0:
        echo "Hoje é domingo";
    break;

    case 1:
        echo "Hoje é segunda";
    break;

    case 02:
        echo "Hoje é terça";
    break;

    case 03:
        echo "Hoje é quarta";
    break;

    case 04:
        echo "Hoje é quinta";
    break;

    case 05:
        echo "Hoje é sexta";
    break;

    case 06:
        echo "Hoje é sabado";
    break;

    default:
        echo "Data inválida";
    break;
}

?>