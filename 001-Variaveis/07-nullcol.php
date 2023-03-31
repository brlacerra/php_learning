<?php

$a = 10;
$b = 11;
$c = 12;

echo $a ?? $b ?? $c;
echo "<br>";

$a = NULL;

echo $a ?? $b ?? $c;
echo "<br>";

$b = NULL;

echo $a ?? $b ?? $c;
echo "<br>"

?>