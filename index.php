<h1>Cinema</h1>

<?php

spl_autoload_register(function ($class_name ) {
    require_once  'Classes/'. $class_name . '.php';
});

require_once 'creation Classe.php';


echo $role1->afficherActeur();
echo "</br>";
echo $role2->afficherActeur();
echo "</br>";
echo $filmStarWars1->afficherActeur();
echo "</br>";
echo $genre2->ListFilmGenre();
echo "</br>";
echo $acteur4->afficherFilmographie();
echo "</br>";
echo $real2->afficherFilmographie();








