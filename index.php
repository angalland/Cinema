<h1>Cinema</h1>

<?php

spl_autoload_register(function ($class_name ) {
    require_once  'Classes/'. $class_name . '.php';
});

$personne1 = new Personne ("Dicaprio", "Leonardo", "Masculin", "11-11-1974");

$real1 = new Realisateur ("Dicaprio", "Leonardo", "Masculin", "11-11-1974");

$genre1 = new Genre ("Documentaire");
$genre2 = new Genre ("science fiction");
$genre3 = new Genre ("Action");
$genre4 = new Genre ("Commedie");

$film1 = new Film ("Avant le déluge","21-10-2016", 96, $real1, $genre1);
$film2 = new Film ("")

echo $personne1;
echo $real1."</br>";
echo $film1->getRealisateur()."</br>";
echo $film1->getGenre()."</br>";


