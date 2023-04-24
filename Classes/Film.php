<?php

class Film {

    // Argument

    private string $_titre;
    // private string $_synopis;
    // private string $_genre;
    private DateTime $_dateSortie;
    private int $_duree;

    // Constructeur

    public function __construct(string $titre, string $dateSortie, int $duree ) {
        $this->_titre = $titre;
        $this->_dateSortie = new DateTime ($dateSortie);
        $this->_duree = $duree;
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

    // toString 

    public function __toString() : string {
        return $this->_titre;
    }


}