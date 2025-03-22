<?php

class Titulaire {
    private string $_nom;
    private string $_prenom;
    private DateTime $_dateDeNaissance;
    private string $_ville;
    private array $_compteBancaire;

    public function __construct(string $nom, string $prenom, string $dateDeNaissance, string $ville){
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_dateDeNaissance = new DateTime($dateDeNaissance);
        $this->_ville = $ville;
        $this->_compteBancaire = [];
    }

// GETTER + SETTER

    public function getNom(): string {
        return $this->_nom;
    }
    public function getPrenom(): string {
        return $this->_prenom;
    }
    public function getDateDeNaissance(): DateTime {
        return $this->_dateDeNaissance;
    }
    public function getVille(): string {
        return $this->_ville;
    }


    public function setNom(string $nom){
        $this->nom = $nom;
            return $nom;
    }
    public function setPrenom(string $prenom){
        return $this->_prenom = $prenom; 
    }
    public function setDateDeNaissance(DateTime $dateDeNaissance){
        return $this->_dateDeNaissance = $dateDeNaissance;
    }
    public function setVille($ville): string {
        return $this->_ville = $ville;
    }

// FONCTIONS ET METHODES MAGIQUES 

    public function __toString() {
        return $this->getNom()." ".$this->getPrenom();
    }

    public function age(){
        $age = "";
            $dateNaissance = $this->_dateDeNaissance;
            $aujourdhui = new DateTime();
            $resultat = $aujourdhui->diff($dateNaissance);
           
        return $resultat->y;
    }

    public function ajouterCompteBancaire(CompteBancaire $compteBancaire){
        $this->_compteBancaire[] = $compteBancaire;
    }
    
    public function afficherCompteBancaire() {
        $resultat = "";
        foreach ($this->_compteBancaire as $compteBancaire) {
            $resultat .=  $compteBancaire->getLibelle().": ".$compteBancaire->getSolde()." ".$compteBancaire->getDevise()."<br>";
        }
        return $resultat;
    }
    
    public function afficherInformations(){
        return $this->__toString().", né(e) le ".$this->getDateDeNaissance()->format('Y-m-d')." (".$this->age()." ans) domiciliant à ".$this->getVille().".<br>
        Comptes actifs:<br> ".$this->afficherCompteBancaire()."<br>";
    }

}
