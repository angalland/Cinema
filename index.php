<h1>Cinema</h1>

<?php

spl_autoload_register(function ($class_name ) {
    require_once  'Classes/'. $class_name . '.php';
});

require_once 'creation Classe.php';



echo $role2->afficherActeur();

echo $filmStarWars1->afficherActeur();

echo $genre2->ListFilmGenre();

echo $acteur4->afficherFilmographie();

echo $real2->afficherFilmographie();

echo $filmStarWars1->afficherRole();

echo $role2->afficherFilm();







