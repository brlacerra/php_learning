<?php

class Usuario{

    private $id_usuario;
    private $des_login;
    private $des_senha;
    private $dt_cadastro;

    public function getIdUsuario(){
        return $this->id_usuario;
    }
    public function setIdUsuario($value){
        $this->id_usuario = $value;
    }

    public function getDesLogin(){
        return $this->des_login;
    }
    public function setDesLogin($value){
        $this->des_login = $value;
    }

    public function getDesSenha(){
        return $this->des_senha;
    }
    public function setDesSenha($value){
        $this->des_senha = $value;
    }

    public function getDtCadastro(){
        return $this->dt_cadastro;
    }
    public function setDtCadastro($value){
        $this->dt_cadastro = $value;
    }
    

    public function loadById($id){
        $sql = new Sql();
        $result = $sql->select("SELECT * FROM tb_usuario WHERE id_usuario = :ID", array(
            ":ID"=>$id
        ));
        if(isset($result[0])){
            $this->setData($result[0]);
        }

    }


    public static function getList(){
        $sql = new Sql();
        return $sql->select("SELECT * FROM tb_usuario ORDER BY id_usuario DESC");
    }


    public static function search($login){
        $sql = new Sql();
        return $sql->select("SELECT * FROM tb_usuario WHERE des_login LIKE :SEARCH ORDER BY id_usuario DESC", array(
            'SEARCH'=>"%".$login."%"
        ));
    }

    public function login($login, $password){
        $sql = new Sql();
        $result = $sql->select("SELECT * FROM tb_usuario WHERE 
        des_login = :LOGIN AND des_senha = :PASSWORD", array(
            ":LOGIN"=>$login,
            ":PASSWORD"=>$password
        ));

        if(isset($result[0])){
            $this->setData($result[0]);
        } else {
            throw new Exception("Login ou senha inválidos");
        }
    }

    public function setData($data){
        $this->setIdUsuario($data['id_usuario']);
        $this->setDesLogin($data['des_login']);
        $this->setDesSenha($data['des_senha']);
        $this->setDtCadastro(new DateTime($data['dt_cadastro']));
    }

    public function insert(){
        $sql = new Sql();
        $result = $sql->select("CALL sp_usuarios_insert(:LOGIN, :PASSWORD)", array(
            ':LOGIN'=>$this->getDesLogin(),
            ':PASSWORD'=>$this->getDesSenha()
        ));
        if(isset($result)){
            $this->setData($result[0]);
        }
    }

    public function update($login, $password){

        $this->setDesLogin($login);
        $this->setDesSenha($password);
        $sql = new Sql();
        $sql->ExecQuery("UPDATE tb_usuario SET des_login = :LOGIN, des_senha = :PASSWORD WHERE id_usuario = :ID", array(
            ':LOGIN'=>$this->getDesLogin(),
            ':PASSWORD'=>$this->getDesSenha(),
            ':ID'=>$this->getIdUsuario()
        ));

    }

    public function delete(){
        $sql = new Sql();
        $sql->ExecQuery("DELETE FROM tb_usuario WHERE id_usuario = :ID", array(
            ':ID'=>$this->getIdUsuario()
        ));

    }

    public function __construct($login = "", $password = ""){
        $this->setDesLogin($login);
        $this->setDesSenha($password);
    }

    public function __toString(){
        return json_encode(array(
            "id_usuario"=>$this->getIdUsuario(),
            "des_login"=>$this->getDesLogin(),
            "des_senha"=>$this->getDesSenha(),
            "dt_cadastro"=>$this->getDtCadastro()->format(DateTimeInterface::RFC850)
        )
        );
    }
    

}

?>