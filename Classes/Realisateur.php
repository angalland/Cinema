<?php

class Realisateur extends Personne {

    // argument

     private array $_film;

    // constructeur

    public function __construct(){
        $this->_film = [];
        parent::__construct($nom, $prenom, $duree, $dateNaissance);
    }

    // ajouter film
    public function addFilm(Film $film){
        $this->_film[] = $film;
    }
}

