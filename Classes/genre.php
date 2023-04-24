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

    public function getFilms(){
        return $this->_films;
    }

    public function setFilms($films){
        return $this->_films = $films;
    }

    // toString 

    public function __toString(){
        return $this->_genre;
    }

    // ajouter Film

    public function addFilm(Film $films){
        $this->_films[] = $films."</br>";
    }

    // liste des films par genre 

    public function ListFilmGenre() {
        foreach ($this->_films as $film){
            $result = $film." ";
        }
        $result .= " ".$this;
        return $result;
    }
}