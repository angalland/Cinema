<?php

class Realisateur extends Personne {

    // argument

    private array $_films;

    // constructeur

    public function __construct($nom, $prenom, $genre, $dateNaissance){
    parent::__construct($nom, $prenom, $genre, $dateNaissance); // fait appele au constructeur de la classe hérité
    $this->_films = []; // fait appelle a la classe film et la transforme en tableau
    }

    // getter et setter 

    public function getFilms() {
        return $this->_films;
    }

    public function setFilms($films) {
        return $this->_films = $films;
    }

    // toString 

    public function __toString() : string {
        return $this->_prenom." ".$this->_nom;
    }

    // ajouter Film

    public function addFilm(Film $films) {
    $this->_films[] = $films."</br>"; // permet d'ajouter les films réalisé dans un tableau
    }

    // afficher filmographie

    public function afficherFilmographie () { // affiche la filmographie du réalisateur
        $result = "<strong>$this</strong> a tourné les films suivant :</br>";
        foreach ($this->_films as $film){
            $result .= $film;
        }
        return $result."</br>";
    }

}

