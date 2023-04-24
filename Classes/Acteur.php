<?php

class Acteur {

    // Argument
        private array $_castings;

    // Constructeur 

    public function __construct(){
        $this->_castings = [];
    }

    // Getter et Setter

    public function getCastings() {
        return $this->_contrats;
    }

    public function setCastings($castings)  {
        return $this->_castings = $castings;
    }

    // Ajouter Casting

    public function addCasting(Casting $castings) {
        $this->_castings[] = $castings;
    }



}