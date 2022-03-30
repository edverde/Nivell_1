<?php
class Account{
    
    //atributs
    private $numcompte;
    private $nom;
    private $cognom;
    private $saldo;

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
        $resultat= "Operacio reallitzada, has ingresat $amount euros.<br><strong>Saldo total: </strong>".$this->saldo."$.<br>";
        return $resultat;
    }
    function withdraw($amount){
        $this->saldo -=$amount;
        if($this->saldo<0){
            $resultat = 'No hi ha suficient saldo.<br>';
        }else{
            $resultat = "Operacio reallitzada, has retirat $amount euros.<br><strong>Saldo total: </strong>".$this->saldo."$.<br>";
        }
        return $resultat;
    }
}

?>