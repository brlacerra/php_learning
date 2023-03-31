<?php

namespace Admin;

class Cadastro extends \Cadastro{

    private $cargo;
    
    public function getCargo(){
        return $this->cargo;
    }
    public function setCargo($cargo){
        $this->cargo = $cargo;
    }

    public function __toString(){

        return json_encode(array(
            "nome"=>$this->getNome(),
            "email"=>$this->getEmail(),
            "senha"=>$this->getSenha(),
            "cargo"=>$this->getCargo()
        ));

    }

}

?>