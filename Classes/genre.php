<?php

class Genre {

    // argument

    private string $_genre;
    private array $_films;

    // constructeur 

    public function __construct(string $genre){
        $this->_genre = $genre;
        $this->_films = [];
    }

    // getter et setter 

    public function getFilms() : string {
        return $this->_films;
    }

    public function setFilms($films) : string {
        return $this->_films = $films;
    }

    // toString 

    public function __toString() : string {
        return $this->_genre;
    }

    // ajouter Film

    public function addFilm(Film $films){
        $this->_films[] = $films."</br>";
    }

    // liste des films par genre 

    public function ListFilmGenre() {
        $result = "Les films ayant pour genre <strong>$this</strong> sont :</br>";
        foreach ($this->_films as $film){
            $result .= $film." ";
        }
        return $result;
    }
}