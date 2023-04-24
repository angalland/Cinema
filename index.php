<h1>Cinema</h1>

<?php

spl_autoload_register(function ($class_name ) {
    require_once  'Classes/'. $class_name . '.php';
});

$personne1 = new Personne ("Dicaprio", "Leonardo", "Masculin", "11-11-1974");
$personne2 = new Personne ("Scott", "Ridley", "Masculin", "30-11-1937" );

$real1 = new Realisateur ("Dicaprio", "Leonardo", "Masculin", "11-11-1974");
$real2 = new Realisateur ("Scott", "Ridley", "Masculin", "30-11-1937");

$genre1 = new Genre ("Documentaire");
$genre2 = new Genre ("science fiction");
$genre3 = new Genre ("Action");
$genre4 = new Genre ("Commedie");

$film1 = new Film ("Avant le déluge","21-10-2016", 96, $real1, $genre1);
$film2 = new Film ("Blade runner", "15-06-1982", 117, $real2, $genre2 );
$film3 = new Film ("Prométhéus", "11-04-2012", 124, $real2, $genre2);


echo $real1."</br>";
echo $film1->getRealisateur()."</br>";
echo $film1->getGenre()."</br>";

echo $genre2->ListFilmGenre();


