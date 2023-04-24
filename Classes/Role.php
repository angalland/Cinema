<?php

class Role {

    // Argument

    private string $_role;
    private array $castings;


    // Constructeur

    public function __construct(string $role) {

        $this->_role = $role;
        $this->_castings = [];
    }

    // Getter et Setter

    public function getRole() : string {
        return $this->_role;
    }

    public function setRole($role) : string {
        return $this->_role = $role;
    }

    public function getCastings() {
        return $this->_castings;
    }

    public function setCastings($castings)  {
        return $this->_castings = $castings;
    }

    // toString

    public function __toString() : string {
        return $this->_role;
    }

    // Ajouter Casting

    public function addCasting(Casting $castings) {
            $this->_castings[] = $castings;
    }

    // afficher acteur

    public function afficherActeur() {
        $result = "<h2> Acteur de $this</h2>";
        foreach ($this->_castings as $casting) {
            $result .= $casting->getActeur()."</br>";
        }

        return $result;
    }

    // afficher film

    public function afficherFilm() {
        $result = "<h2> Film ayant pour rôle $this</h2>";
        foreach ($this->_castings as $casting) {
            $result .= $casting->getFilm()."</br>";
        }
        return $result;
    }
            


}
