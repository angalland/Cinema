<?php

class Casting {

    // Argument

    private Film $_film;
    private Role $_role;
    private Acteur $_acteur;
    private DateTime $_dateTournage;
    private int $_dureeTournage;

    // Constructeur

    public function __construct(Film $film, Role $role, Acteur $acteur, string $dateTournage, int $dureeTournage) {
        $this->_film = $film;
        $this->_role = $role;
        $this->_acteur = $acteur;
        $this->_dateTournage = new DateTime($dateTournage);
        $this->_dureeTournage = $dureeTournage;
        $this->_film->addCasting($this);
        $this->_role->addCasting($this);
        $this->_acteur->addCasting($this);
    }

    // Getter et Setter 

    public function getFilm() : Film {
        return $this->_film;
    }

    public function setFilm($film) : Film {
        return $this->_film = $film;
    }

    public function getRole() : Role {
        return $this->_role;
    }

    public function setRole($role) : Role {
        return $this->_role = $role;
    }

    public function getActeur() : Acteur {
        return $this->_acteur;
    }

    public function setActeur($acteur) : Acteur {
        return $this->_acteur = $acteur;
    }

    public function getDateTournage() {
        return $this->_dateTournage;
    }

    public function setDateTournage($dateTournage) {
        return $this->_dateTournage = $dateTournage;
    }

    public function getDureeTournage() : int {
        return $this->_dureeTournage;
    }

    public function setDureeTournage($dureeTournage) : int {
        return $this->_dureeTournage = $dureeTournage;
    }

  
}