<?php

    class Pessoa{

        public $nome = "Rasmus Lerdorf";
        protected $idade = 48;
        private $senha = "123456";

        public function verDados(){

            echo $this->nome . "<br>";
            echo $this->idade . "<br>";
            echo $this->senha . "<br>";

        }

    }

    class Programador extends Pessoa{
        public function verDados(){

            //Retorna de qual classe o objeto está sendo instanciado
            echo get_class($this)."<br>";
            
            echo $this->nome . "<br>";
            echo $this->idade . "<br>";

            // Não reconhece a variável por ser private
            // echo $this->senha . "<br>";

        }


    }


    $objeto = new Programador();
    $objeto->verDados();

    

?>