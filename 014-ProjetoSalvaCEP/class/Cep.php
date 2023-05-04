<?php

class Cep{

    private $id_cep;
    private $cep;
    private $logradouro;
    private $complemento;
    private $bairro;
    private $localidade;
    private $uf;
    private $ibge;
    private $gia;
    private $ddd;
    private $siafi;

    public function getIdCep(){
        return $this->id_cep;
    }
    public function setIdCep($value){
        $this->id_cep = $value;
    }

    public function getCep(){
        return $this->cep;
    }
    public function setCep($value){
        $this->cep = $value;
    }

    public function getLogradouro(){
        return $this->logradouro;
    }
    public function setLogradouro($value){
        $this->logradouro = $value;
    }

    public function getComplemento(){
        return $this->complemento;
    }
    public function setComplemento($value){
        $this->complemento = $value;
    }

    public function getBairro(){
        return $this->bairro;
    }
    public function setBairro($value){
        $this->bairro = $value;
    }

    public function getLocalidade(){
        return $this->localidade;
    }
    public function setLocalidade($value){
        $this->localidade = $value;
    }

    public function getUf(){
        return $this->uf;
    }
    public function setUf($value){
        $this->uf = $value;
    }

    public function getIBGE(){
        return $this->ibge;
    }
    public function setIBGE($value){
        $this->ibge = $value;
    }

    public function getGia(){
        return $this->gia;
    }
    public function setGia($value){
        $this->gia = $value;
    }

    public function getDDD(){
        return $this->ddd;
    }
    public function setDDD($value){
        $this->ddd = $value;
    }

    public function getSiafi(){
        return $this->siafi;
    }
    public function setSiafi($value){
        $this->siafi = $value;
    }

    public function setData($data){
        $this->setIdCep($data['id_cep']);
        $this->setCep($data['cep']);
        $this->setLogradouro($data['logradouro']);
        $this->setComplemento($data['complemento']);
        $this->setBairro($data['bairro']);
        $this->setLocalidade($data['localidade']);
        $this->setUf($data['uf']);
        $this->setIBGE($data['ibge']);
        $this->setGia($data['gia']);
        $this->setDDD($data['ddd']);
        $this->setSiafi($data['siafi']);
    }

    public function __construct($cep, $logradouro, $complemento, $bairro, $localidade, $uf, $ibge, $gia, $ddd, $siafi){
        $this->setCep($cep);
        $this->setLogradouro($logradouro);
        $this->setComplemento($complemento);
        $this->setBairro($bairro);
        $this->setLocalidade($localidade);
        $this->setUf($uf);
        $this->setIBGE($ibge);
        $this->setGia($gia);
        $this->setDDD($ddd);
        $this->setSiafi($siafi);
    }
    public function insertCEP(){
        $sql = new Sql();

        $results = $sql->select("CALL sp_cep_insert(
        :cep, :logradouro, :complemento, :bairro,
        :localidade, :uf, :ibge, :gia,
        :ddd, :siafi)", array(
            ":cep"=>$this->getCep(),
            ":logradouro"=>$this->getLogradouro(),
            ":complemento"=>$this->getComplemento(),
            ":bairro"=>$this->getBairro(),
            ":localidade"=>$this->getLocalidade(),
            ":uf"=>$this->getUf(),
            ":ibge"=>$this->getIBGE(),
            ":gia"=>$this->getGia(),
            ":ddd"=>$this->getDDD(),
            ":siafi"=>$this->getSiafi()
        ));
        if(isset($restults)){
            $this->setData($results[0]);
        }

    }
    
}


?>