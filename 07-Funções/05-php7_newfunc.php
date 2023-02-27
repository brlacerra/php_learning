<?php

function soma(float ...$valores):float{
    return array_sum($valores);
}

echo var_dump(soma(2, 2));
echo "<br>";
echo soma(25, 33);
echo "<br>";
echo soma(2.5, 2.2);
echo "<br>";

?>