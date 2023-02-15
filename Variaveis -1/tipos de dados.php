<?php
    echo "Tipos de dados:";
    echo "<br>";

    //string
    $nome = "Bruno";
    
    //número
    $ano = "2004";
    $salario = "5500.99";

    //boleano
    $bloqueado = false;

    //array
    $frutas = array("abacaxi", "laranja", "manga", "melancia");
        // echo $frutas[2];

    //objeto
    $data = new DateTime();
        // var_dump($data);

    //resource
    $arquivo = fopen("tipos de dados.php", "r");
        // var_dump($arquivo);

    // nulo
    $nulo = NULL;
        // $nulo = NULL != $nulo = ""
?>