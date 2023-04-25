<?php

class Acteur extends Personne {

    // Argument
        private array $_castings;


    // Constructeur 

    public function __construct($nom, $prenom, $genre, $dateNaissance){
        parent::__construct($nom, $prenom, $genre, $dateNaissance);
        $this->_castings = [];

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
        return $this->_prenom ." ".$this->_nom;
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

    // afficher filmographie 

    public



}