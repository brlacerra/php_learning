<?php

$nome = "Bruno";
$sobrenome = "Lacerra";
$nomeCompleto = $nome ." ". $sobrenome;
$anoNascimento = 2004;

//Concatenação
echo "Seu nome é " . "<strong>" . $nomeCompleto . "</strong>" . 
" e você nasceu em " . $anoNascimento;

// Para a execução do código
exit;

echo "<br>";

// Tipo de dado, tamanho e seu respectivo valor;
var_dump($nomeCompleto);
echo "<br>";
var_dump($anoNascimento);
echo "<br>";

//Apaga a variável da memória
unset($nomeCompleto);

//Se a variável existir, ele executa a função
if(isset($nomeCompleto)){
    echo $nomeCompleto;
}
echo "<br>";

?>