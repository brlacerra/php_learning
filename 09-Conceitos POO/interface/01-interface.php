<?php

interface Veiculo{

    public function acelerar($velocidade);
    public function frear($velocidade);
    public function trocarMarcha($marcha);

}

class Civic implements Veiculo{

    public function acelerar($velocidade){

        echo "O veículo acelerou até ". $velocidade . "km/h<br>";
    }
    public function frear($velocidade){

        echo "O veículo frenou até ". $velocidade . "km/h<br>";

    }
    public function trocarMarcha($marcha){

        echo "O veículo trocou para ". $marcha . "° marcha";

    }

}

$carro = new Civic();
$carro->acelerar(150);
$carro->frear(80);
$carro->trocarMarcha(4);
echo "<br>";



?>