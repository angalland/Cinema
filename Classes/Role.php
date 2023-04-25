<?php

class Role {

    // Argument

    private string $_role;
    private array $_castings;


    // Constructeur

    public function __construct(string $role) {

        $this->_role = $role;
        $this->_castings = []; // transforme la class Casting en tableau
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
            $this->_castings[] = $castings; // permet d'ajouter les castings réalisé dans un tableau
    }



    // afficher acteur

    public function afficherActeur() { // affiche les différents roles joué par l'acteur
        $result = "Voici les acteurs qui ont joué le role de <strong>$this</strong> :</br>";
        $tmp = array(); // permet de supprimer les doublons
        foreach ($this->_castings as $casting) {
        if (!in_array("".$casting->getActeur(), $tmp)) { // permet de supprimer les doublons
            $result .= $casting->getActeur()."</br>";
            array_push($tmp, "".$casting->getActeur());
        }}

        return $result."</br>";
    }
    
    // afficher film

    public function afficherFilm() { //affiche les différents films joué par l'acteur
        $result = "Film ayant pour rôle <strong>$this</strong> : </br>";
        foreach ($this->_castings as $casting) {
            $result .= $casting->getFilm()."</br>";
        }
        return $result."</br>";
    }
            


}
