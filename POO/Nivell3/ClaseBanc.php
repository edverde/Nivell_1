<?php
class Account{
    
    //atributs
    var $numcompte;
    var $nom;
    var $cognom;
    var $saldo;

    //constructor
    public function account($numcompte, $nom, $cognom, $saldo){
        $this->numcompte = $numcompte;
        $this->nom = $nom;
        $this->cognom = $cognom;
        $this->saldo = $saldo;
    }

    //getters
    function getNum(){
        return $this->numcompte;
    }
    function getNom(){
        return $this->nom;
    }
    function getCognom(){
        return $this->cognom;
    }
    function getSaldo(){
        return $this->saldo;
    }

    //setters
    function setNum($numcompte){
        $this->numcompte = $numcompte;
    }
    function setNom($nom){
        $this->nom = $nom;
    }
    function setCognom($cognom){
        $this->cognom = $cognom;
    }
    function setSaldo($saldo){
        $this->saldo = $saldo;
    }
    //mètodes
    function deposit($amount){
        $this->saldo +=$amount;
    }
    function withdraw($amount){
        $this->saldo -=$amount;
    }
}

?>