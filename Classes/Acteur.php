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

    // afficher film

    public function afficherFilm() {
        $result = "<h2> Les films de $this</h2>";
        foreach ($this->_castings as $casting) {
            $result .= $casting->getFilm()."</br>";
        }

        return $result;
    }

    // afficher role

    public function afficherRole() {
        $result = "<h2> Les rôle de $this</h2>";
        foreach ($this->_castings as $casting) {
            $result .= $casting->getRole()."</br>";
        }

        return $result;
    }



}