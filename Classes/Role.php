<?php

class Role {

    // Argument

    private string $_role;


    // Constructeur

    public function __construct(string $role) {

        $this->_role = $role;
    }

    // Getter et Setter

    public function getRole() : string {
        return $this->_role;
    }

    public function setRole($role) : string {
        return $this->_role = $role;
    }

    // toString

    public function __toString() : string {
        return $this->_role;
    }




}