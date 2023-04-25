<?php

class Role {

    // Argument

    private string $_role;
    private array $_castings;


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
        $result = "Voici les acteurs qui ont joué le role de <strong>$this</strong> :</br>";
        $tmp = array(); // permet de supprimer les doublons
        foreach ($this->_castings as $casting) {
        if (!in_array("".$casting->getActeur(), $tmp)) {
            $result .= $casting->getActeur()."</br>";
            array_push($tmp, "".$casting->getActeur());
        }}

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
