<?php

class Personne {

    // argument 

    protected string $_nom;
    protected string $_prenom;
    protected string $_genre;
    protected DateTime $_dateNaissance;

  

    public function __construct ( string $nom, string $prenom, string $genre, string $dateNaissance){
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_genre = $genre;
        $this->_dateNaissance = new DateTime ($dateNaissance);

    }

    // Getter et Setter 

    public function getNom() : string {
        return $this->_nom;
    }

    public function setNom($nom) : string {
        return $this->_nom = $nom;
    }

    public function getPrenom() : string {
        return $this->_prenom;
    }

    public function setPrenom($prenom) : string {
        return $this->_prenom = $prenom;
    }

    public function getGenre() : string {
        return $this->_genre;
    }

    public function setGenre($genre) : string {
        return $this->_genre = $genre;
    }

    public function getDateNaissance() : DateTime {
        return $this->_dateNaissance;
    }

    public function setDateNaissance($dateNaissance) : DateTime {
        return $this->_dateNaissance = $dateNaissance;
    }

    // toString

    public function __toString() {
        return $this->_prenom." ".$this->_nom."</br>";
    }
}