<h1>Cinema</h1>

<?php

spl_autoload_register(function ($class_name ) {
    require_once  'Classes/'. $class_name . '.php';
});

    // Personne

$personne1 = new Personne ("Dicaprio", "Leonardo", "Masculin", "11-11-1974");
$personne2 = new Personne ("Scott", "Ridley", "Masculin", "30-11-1937" );

    // Realisateur

$real1 = new Realisateur ("Dicaprio", "Leonardo", "Masculin", "11-11-1974");
$real2 = new Realisateur ("Scott", "Ridley", "Masculin", "30-11-1937");

    // Genre

$genre1 = new Genre ("Documentaire");
$genre2 = new Genre ("science fiction");
$genre3 = new Genre ("Action");
$genre4 = new Genre ("Commedie");

    // Film

$film1 = new Film ("Avant le déluge","21-10-2016", 96, $real1, $genre1);
$film2 = new Film ("Blade runner", "15-06-1982", 117, $real2, $genre2 );
$film3 = new Film ("Prométhéus", "11-04-2012", 124, $real2, $genre2);

    // Role

$role1 = new Role ("Ellen Ripley");

    // Acteur

$actrice1 = new Acteur ("Weaver", "Sigourney", "Feminin", "08-10-1949" );

    // Casting

$casting1 = new Casting ($film3, $role1, $actrice1);




echo $real1."</br>";
echo $film1->getRealisateur()."</br>";
echo $film1->getGenre()."</br>";

echo $genre2->ListFilmGenre();


echo $role1->afficherFilm();

