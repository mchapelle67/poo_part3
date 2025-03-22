<?php

class CompteBancaire {
    private string $_libelle;
    private float $_solde = 0;
    private string $_devise;
    private Titulaire $_titulaire;

    public function __construct(string $libelle, float $solde, string $devise, Titulaire $titulaire){
        $this->_libelle = $libelle;
        $this->_solde = $solde;
        $this->_devise = $devise;
        $this->_titulaire = $titulaire;
        $titulaire->ajouterCompteBancaire($this);
    }

// GETTER + SETTER

    public function getLibelle(): string {
        return $this->_libelle;
    }
    public function getSolde(): float {
        return $this->_solde;
    }
    public function getDevise(): string {
        return $this->_devise;
    }
    public function getTitulaire(): Titulaire {
        return $this->_titulaire;
    }


    public function setLibelle(string $libelle) {
        return $this->_libelle = $libelle;
    }
    public function setSolde(string $solde) {
        return $this->_solde = $solde;
    }
    public function setDevise(string $devise) {
        return $this->_devise = $devise;
    }
    public function setTitulaire(Titulaire $titulaire) {
        return $this->_titulaire= $titulaire;  
    }
   
// FONCTIONS ET METHODES MAGIQUES

    public function __toString(){
        return $this->getLibelle()." appartenant à ".$this->getTitulaire(). ":<br>";
    }

    public function virement(float $montant, string $type) {
        if ($type === "debit") {
            $this->_solde -= $montant;
                echo "<br>".$this->__toString()."Vous avez êtez débité d'un montant de $montant ".$this->getDevise().".<br>Solde restant: ".$this->getSolde()." ".$this->getDevise()."<br>";
        } elseif ($type === "credit") {
            $this->_solde += $montant;
            echo "<br>".$this->__toString()."Vous avez êtez crédité d'un montant de $montant ".$this->getDevise().".<br>Solde restant: ".$this->getSolde()." ".$this->getDevise()."<br>";

        }
    }
}
