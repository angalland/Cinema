<h1>Cinema</h1>

<?php

spl_autoload_register(function ($class_name ) {
    require_once  'Classes/'. $class_name . '.php';
});

    // Personne

/*$personne1 = new Personne ("Dicaprio", "Leonardo", "Masculin", "11-11-1974");
$personne2 = new Personne ("Scott", "Ridley", "Masculin", "30-11-1937" );
$personne3 = new Personne ("Burton", "Tim", "Masculin", "25-08-1958");
$personne4 = new Personne ("Schumacher", "Joel", "Masculin", "29-08-1939");
$personne5 = new Personne ("Nolan", "Christopher", "Masculin", "30-07-1970");*/

    // Realisateur

$real1 = new Realisateur ("Dicaprio", "Leonardo", "Masculin", "11-11-1974");
$real2 = new Realisateur ("Scott", "Ridley", "Masculin", "30-11-1937");
$real3 = new Realisateur ("Burton", "Tim", "Masculin", "25-08-1958");
$real4 = new Realisateur ("Schumacher", "Joel", "Masculin", "29-08-1939");
$real5 = new Realisateur ("Nolan", "Christopher", "Masculin", "30-07-1970");

    // Genre

$genre1 = new Genre ("Documentaire");
$genre2 = new Genre ("science fiction");
$genre3 = new Genre ("Action");
$genre4 = new Genre ("Commedie");
$genre5 = new Genre ("fantastique");

    // Film

$film1 = new Film ("Avant le déluge","21-10-2016", 96, $real1, $genre1);
$film2 = new Film ("Blade runner", "15-06-1982", 117, $real2, $genre2 );
$film3 = new Film ("Prométhéus", "11-04-2012", 124, $real2, $genre2);
$film4 = new Film ("Alien", "12-09-1979", 127, $real2, $genre2);

    // Film Batman

$filmBatman1 = new Film ("Batman", "13-09-1989", 126, $real3, $genre5 );
$filmBatman2 = new Film ("Batman : Le Defi", "15-07-1992", 126, $real3, $genre5 );
$filmBatman3 = new Film ("Batman Forever", "19-07-1995", 121, $real4, $genre5 );
$filmBatman5 = new Film ("Batman et Robin", "20-06-1997", 125, $real4, $genre5);
$filmBatman6 = new Film ("Batman Begins", "15-06-2005", 140, $real5, $genre5 );
$filmBatman7 = new Film("The Dark Knight : Le chevalier noir", "13-08-2008", 152, $real5, $genre5 );
$filmBatman8 = new Film ("The Dark Knight rises", "25-02-2012", 164, $real5, $genre5 );


    // Role

$role1 = new Role ("Ellen Ripley" );
$role2 = new Role ("Batman");

    // Acteur

$actrice1 = new Acteur ("Weaver", "Sigourney", "Feminin", "08-10-1949" );
$actrice2 = new Acteur ("Marceau", "Sophie", "Feminin", "03-03-1965");

    // Acteur batman

$acteur1 = new Acteur ("Keaton", "Michael", "Masculin", "05-09-1951");
$acteur2 = new Acteur ("Kilmer", "Val", "Masculin", "31-12-1959");
$acteur3 = new Acteur ("Clooney", "George", "Masculin", "06-05-1961" );
$acteur4 = new Acteur ("Bale", "christian", "Masculin", "30-01-1974");



    // Casting

$casting1 = new Casting ($film3, $role1, $actrice1);
$casting2 = new Casting ($film4, $role1, $actrice2);

    // Casting Batman

$castings3 = new Casting ($filmBatman1, $role2, $acteur1);
$castings4 = new Casting ($filmBatman2, $role2, $acteur1);
$castings5 = new Casting ($filmBatman3, $role2, $acteur2);
$castings6 = new Casting ($filmBatman5, $role2, $acteur3);
$castings7 = new Casting ($filmBatman6, $role2, $acteur4);
$castings8 = new Casting ($filmBatman7, $role2, $acteur4);
$castings9 = new Casting ($filmBatman8, $role2, $acteur4);





echo $real1."</br>";
echo $film1->getRealisateur()."</br>";
echo $film1->getGenre()."</br>";

echo $genre2->ListFilmGenre();


echo $role1->afficherFilm();
echo $role1->afficherActeur();

echo $role2->afficherActeur();


