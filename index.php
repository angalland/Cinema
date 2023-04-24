<h1>Cinema</h1>

<?php

spl_autoload_register(function ($class_name ) {
    require  'Classes/'. $class_name . '.php';
});

$batman = new Film ("Batman begins", "15-06-2005", 140 );

echo $batman->getDuree()."</br>";
echo $batman."</br>";

$james_bond = new Role ("James bond");

echo $james_bond."</br>";