<?php
   
//Gera uma pré definida (array super global), ela sempre será string
// mas você pode convertê-la pra outro valor
//Podem ser usadas em qualquer php, pois gerarão seus
// valores ativamente

   $nome = (int)$_GET["var"];
   // var_dump($nome);

   $ip = $_SERVER["SCRIPT_NAME"];
   echo $ip;
   
?>
