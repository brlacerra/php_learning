<?php

namespace Cliente;

class Cadastro extends \Cadastro {

    public function registrarVenda(){
        echo "Foi registrada uma venda para o cliente ". $this->getNome();
    }

    public function __toString(){

        return json_encode(array(
            "nome"=>$this->getNome(),
            "email"=>$this->getEmail(),
            "senha"=>$this->getSenha()
        ));

    }
}

?>