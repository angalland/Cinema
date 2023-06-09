<?php

class Acteur extends Personne {

    // Argument

        private array $_castings;

    // Constructeur 

    public function __construct($nom, $prenom, $genre, $dateNaissance){
        parent::__construct($nom, $prenom, $genre, $dateNaissance); // fait appelle au constructeur hérité de Personne
        $this->_castings = []; // transforme la class Casting en tableau

    }

    // Getter et Setter

    public function getCastings() {
        return $this->_castings;
    }

    public function setCastings($castings)  {
        return $this->_castings = $castings;
    }

    // ToString

    public function __toString() : string {
        return $this->_prenom ." ".$this->_nom;
    }

    // Ajouter Casting

    public function addCasting(Casting $castings) {
        $this->_castings[] = $castings; // permet de d'ajouter les castings instancié dans un tableau
    }

    // afficher role

    public function afficherRole() { // affiche les différents rôles joué par l'acteur
        $result = "<h2> Les rôle de $this</h2>";
        foreach ($this->_castings as $casting) {
            $result .= $casting->getRole()."</br>";
        }
            return $result;
    }

    // afficher filmographie 

    public function afficherFilmographie () { // affiche les différent films joué par l'acteur
        $result = "<strong>$this</strong> a joué dans les films suivant :</br>";
        foreach ($this->_castings as $casting){
            $result .= $casting->getFilm()."</br>";
        }
        return $result."</br>";
    }
}