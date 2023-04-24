<?php

class Film {

    // Argument

    private string $_titre;
    private DateTime $_dateSortie;
    private int $_duree;
    private array $_castings;
    private Realisateur $_realisateur;
    private Genre $_genre;

    // Constructeur

    public function __construct(string $titre, string $dateSortie, int $duree, Realisateur $realisateur, Genre $genre) {
        $this->_titre = $titre;
        $this->_dateSortie = new DateTime ($dateSortie);
        $this->_duree = $duree;
        $this->_castings =[];
        $this->_realisateur = $realisateur;
        $this->_realisateur->addFilm($this);
        $this->_genre = $genre;
        $this->_genre->addFilm($this);

    }

    // Getter et Setter

    public function getTitre() : string {
        return $this->_titre;
    }

    public function setTitre($titre) : string {
        return $this->_titre = $titre;
    }

    public function getDateSortie() : DateTime {
        return $this->_dateSortie;
    }

    public function setDateSortie($dateSortie) : DateTime {
        return $this->_dateSortie = $dateSortie;
    }
    
    public function getDuree() : int {
        return $this->_duree;
    }

    public function setDuree($duree) : int {
        return $this->_duree = $duree;
    }

    public function getCastings() {
        return $this->_castings;
    }

    public function setCastings($castings)  {
        return $this->_castings = $castings;
    }

    public function getRealisateur() {
        return $this->_realisateur;
    }

    public function setRealisateur($realisateur)  {
        return $this->_realisateur = $realisateur;
    }

    public function getGenre() {
        return $this->_genre;
    }

    public function setGenre($genre)  {
        return $this->_genre = $genre;
    }

    // toString 

    public function __toString() : string {
        return $this->_titre;
    } 

    // Ajouter Casting

    public function addCasting(Casting $castings) {
        $this->_castings[] = $castings;
    }


    // afficher role

    public function afficherRole() {
        $result = "<h2> Rôle de $this</h2>";
        foreach ($this->_castings as $casting) {
            $result .= $casting->getRole()."</br>";
        }

        return $result;
    }

    // afficher acteur

    public function afficherActeur() {
        $result = "<h2> Acteur de $this</h2>";
        foreach ($this->_castings as $casting) {
            $result .= $casting->getActeur()."</br>";
        }

        return $result;
    }

}



