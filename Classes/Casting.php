<?php

class Casting {

    // Argument

    private Film $_film;
    private Role $_role;
    private Acteur $_acteur;


    // Constructeur

    public function __construct(Film $film, Role $role, Acteur $acteur) {
        $this->_film = $film;
        $this->_role = $role;
        $this->_acteur = $acteur;
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

   

  
}