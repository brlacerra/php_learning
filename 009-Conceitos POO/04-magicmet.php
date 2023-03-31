<?php

class Endereco {
    private $logradouro;
    private $numero;
    private $bairro;
    private $cidade;

    public function __construct($a, $b, $c, $d){
        $this->logradouro = $a;
        $this->numero = $b;
        $this->bairro = $c;
        $this->cidade = $d;
    }

    public function __destruct(){
        var_dump("DESTRUIR");
    }

    public function __toString(){
        return $this->logradouro.", ".$this->numero.", ".$this->bairro.", ".$this->cidade;
    }
}

$meuEndereco = new Endereco("Alameda do Jacarandás", "113","Bairro Jardim Zenith", "Monte Carmelo");

var_dump($meuEndereco);
echo "<br>";
echo($meuEndereco);
echo "<br>";
unset($meuEndereco);
?>