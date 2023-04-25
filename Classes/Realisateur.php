<?php

class Realisateur extends Personne {

    // argument

    private array $_films;



    // constructeur

    public function __construct($nom, $prenom, $genre, $dateNaissance){
    parent::__construct($nom, $prenom, $genre, $dateNaissance);
    $this->_films = [];
    }

    // getter et setter 

    public function getFilms(){
        return $this->_films;
    }

    public function setFilms($films){
        return $this->_films = $films;
    }

    // toString 

    public function __toString(){
        return $this->_prenom." ".$this->_nom;
    }

    // ajouter Film

    public function addFilm(Film $films){
    $this->_films[] = $films."</br>";
    }

    // afficher filmographie

    public function afficherFilmographie () {
        $result = "$this a tourné les films suivant :</br>";
        foreach ($this->_films as $film){
            $result .= $film->getTitre()."</br>";
        }
        return $result;
    }

}

