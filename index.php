<?php

    require_once ('libraries/autoload.php'); 

    echo "Test du fonctionnement du Home cinéma <br><br>";

    $amplificateur      = new \App\Amplificateur;
    $tuner              = new \App\Tuner;
    $dvd                = new \App\LecteurDVD;
    $cd                 = new \App\LecteurCD;
    $projecteur         = new \App\Projecteur;
    $lumieres           = new \App\Lumieres;
    $ecran              = new \App\Ecran;
    $machineAPopcorn    = new \App\MachineAPopcorn;

    $homeCinema  = new App\FacadeHomeCinema($amplificateur, $tuner, $dvd, $cd, $projecteur, $lumieres, $ecran, $machineAPopcorn);
    $homeCinema->regarderFilm("Titanic", "Lecteur de DVD de salon");
    echo "<br><br>";
    $homeCinema->arreterFilm("Titanic");

?>