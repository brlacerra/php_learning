<?php

abstract class Animal{
    public function falar(){

        return "Som";

    }
    public function mover(){

        return "Anda";

    }
}

class Cachorro extends Animal{
    public function falar(){

        return "Latido";

    }
}

class Gato extends Animal{
    public function falar(){
        
        return "Miar";

    }
}

class Passaro extends Animal{
    public function falar(){
        
        return "Piar";

    }
    
    public function mover(){
        return "Voa e ". parent::mover();
    }

}

$pluto = new Cachorro();
echo $pluto->falar()."<br>";
echo $pluto->mover()."<br>";

echo "<br><br>";

$garfield = new Gato();
echo $garfield->falar()."<br>";
echo $garfield->mover()."<br>";

echo "<br><br>";

$galo = new Passaro();
echo $galo->falar()."<br>";
echo $galo->mover()."<br>";

?>