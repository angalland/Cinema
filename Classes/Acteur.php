<?php

class Acteur {

    // Argument
        private array $_castings;
        private string $_nom;
        private string $_prenom;

    // Constructeur 

    public function __construct(string $nom, string $prenom){
        $this->_castings = [];
        $this->_nom = $nom;
        $this->_prenom = $prenom;
    }

    // Getter et Setter

    public function getCastings() {
        return $this->_contrats;
    }

    public function setCastings($castings)  {
        return $this->_castings = $castings;
    }

    // ToString

    public function __toString() {
        return $this->_nom ." ".$this->_prenom;
    }

    // Ajouter Casting

    public function addCasting(Casting $castings) {
        $this->_castings[] = $castings;
    }



}