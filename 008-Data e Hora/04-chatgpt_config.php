<?php
// Obtém a data e hora atual
$dataHoraPedido = date("Y-m-d H:i:s");

// Calcula a data provável de entrega adicionando 30 dias à data atual
$dataEntrega = date("Y-m-d", strtotime("+30 days"));

// Imprime as datas
echo "Data e hora do pedido: " . $dataHoraPedido . "<br>";
echo "Data provável de entrega: " . $dataEntrega;
?>