<h1>Cinema</h1>

<?php

spl_autoload_register(function ($class_name ) {
    require  'Classes/'. $class_name . '.php';
});

$real1 = new Personne ("Nolan", "Christopher", "masculin", "30-07-1970" );
$batmanBegins = new Film ("Batman begins", "15-06-2005", 140, $real1 );
$theDarkNight = new Film ("The dark night", "13-08-2008", 152, $real1);
$interstellar = new Film ("Interstellar", "05-11-2014", 169, $real1);

$alfred = new Role ("Alfred");
$batman = new Role ("Batman / bruce wayne");
$proffesseurBrand = new Role ("professeur Brand");


$michaelCaine = new Acteur ("Caine", "michael");
$christianBale = new Acteur("Bale", "christian");
$michaelKeaton = new Acteur("Michael", "Keaton");



$casting1 = new Casting ($batmanBegins, $alfred, $michaelCaine,"01-03-2004", 5);
$casting2 = new Casting ($theDarkNight, $alfred, $michaelCaine, "15-04-2006", 4);
$casting3 = new Casting ($interstellar, $proffesseurBrand, $michaelCaine, "01-01-2013", 6);
$casting4 = new Casting ($batmanBegins, $batman, $christianBale, "01-03-2004", 5);
$casting5 = new Casting ($theDarkNight, $batman, $michaelKeaton, "15-04-2006", 4);

echo $batmanBegins->afficherRole();
echo "</br>";
echo $batman->afficherActeur();
echo "</br>";
echo $batmanBegins->afficherActeur();
echo "</br>";
echo $batman->afficherFilm();
echo "</br>";
echo $michaelCaine->afficherFilm();
echo "</br>";
echo $michaelCaine->afficherRole();

