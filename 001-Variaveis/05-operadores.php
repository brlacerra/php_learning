<?php

//Operador de atribuição
    echo "<h1>Operadores de Atribuição</h1>";
    $nome = "Bruno";
    $valorTotal = 0;
    //Operador de concatenação
    echo $nome . " more content";
    echo "<br>";

    //Operador composto
    $nome .= " Informáticas";
    echo $nome;
    echo "<br>";

    //Operação em cima de uma variável
    $valorTotal += 100;
    $valorTotal += 50;
    echo $valorTotal;
    echo "<br>";

    $valorTotal -= 10;
    echo $valorTotal;
    echo "<br>";

    $valorTotal *= .9;
    echo $valorTotal;
    echo "<br>";
    echo "<br>";
    echo "<br>";

//Operadores aritméticos
    echo "<h1>Operadores Aritméticos</h1>";
    $x =10;
    $y =2;
    $z =3;

    echo $x+$y;
    echo "<br>";

    echo $x-$y;
    echo "<br>";

    echo $x*$y;
    echo "<br>";

    echo $x/$y;
    echo "<br>";

    echo $x%$z;
    echo "<br>";

    echo $x**$y;

//Operadores de comparação
    echo "<h1>Operadores de Comparação</h1>";
    $a = 30;
    $b = 20;

    var_dump($a>$b);
    echo "<br>";

    var_dump($a<$b);
    echo "<br>";
    
    var_dump($a==$b);
    echo "<br>";

    $a = 30;
    $b = 30.0;

    var_dump($a===$b);
    echo "<br>";

    var_dump($a!=$b);
    echo "<br>";

    var_dump($a!==$b);


?>
