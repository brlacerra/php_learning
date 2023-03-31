<?php

class Pessoa{
    public $nome;

    public function falar(){
        
        return "O meu nome é " . $this->nome;

    }
}

$bruno = new Pessoa;
$bruno->nome = "Bruno Lacerra";
echo $bruno->falar();

?>