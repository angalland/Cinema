<h1>Cinema</h1>

<?php

spl_autoload_register(function ($class_name ) {
    require_once  'Classes/'. $class_name . '.php';
});

$personne1 = new Personne ("Dicaprio", "Leonardo", "Masculin", "11-11-1974");
$real1 = new Realisateur ("Dicaprio", "Leonardo", "Masculin", "11-11-1974");
$film1 = new Film ("Avant le déluge","21-10-2016", 96, $real1);

echo $personne1;
echo $real1;
echo $film1->getRealisateur();


