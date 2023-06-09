<?php

class Film {

    // Argument

    private string $_titre;
    private DateTime $_dateSortie;
    private int $_duree;
    private Realisateur $_realisateur;
    private Genre $_genre;
    private string $_synopsis;
    private array $_castings;

    // Constructeur

    public function __construct(string $titre, string $dateSortie, int $duree, Realisateur $realisateur, Genre $genre, string $synopsis) {
        $this->_titre = $titre;
        $this->_dateSortie = new DateTime ($dateSortie);
        $this->_duree = $duree;
        $this->_realisateur = $realisateur;
        $this->_realisateur->addFilm($this); // ajoute dans la class realisateur le film instancié
        $this->_genre = $genre;
        $this->_genre->addFilm($this); // ajoute dans la class genre le film instancié
        $this->_synopsis = $synopsis;
        $this->_castings =[]; // fait appelle a la classe Casting et la transforme en array

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

    public function getSynopsis() : string {
        return $this->_synopsis;
    }

    public function setSynopsis($synopsis)  {
        return $this->_synopsis = $synopsis;
    }

    // toString 

    public function __toString() : string {
        return $this->_titre;
    } 

    // Ajouter Casting

    public function addCasting(Casting $castings) {
        $this->_castings[] = $castings; // permet d'importer la classe casting en la transformant en array
    }


    // afficher role

    public function afficherRole() { // affiche les rôle du films selectionné
        $result = "Rôle de <strong>$this</strong></br>";
        foreach ($this->_castings as $casting) {
            $result .= $casting->getRole()."</br>";
        }

        return $result."</br>";
    }

    // afficher acteur

    public function afficherActeur() { // affiche les acteurs du films selectionné
        $result = "Acteur de <strong>$this</strong> :</br>";
        foreach ($this->_castings as $casting) {
            $result .= $casting->getActeur()."</br>";
        }

        return $result."</br>";
    }

}



