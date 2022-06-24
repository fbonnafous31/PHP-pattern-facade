<?php

    namespace App;

    class FacadeHomeCinema {

        public \App\Amplificateur   $amplificateur; 
        public \App\Tuner           $tuner;
        public \App\LecteurDVD      $dvd;
        public \App\LecteurCd       $cd;
        public \App\Projecteur      $projecteur;
        public \App\Lumieres        $lumieres;
        public \App\Ecran           $ecran;
        public \App\MachineAPopCorn $machineAPopcorn; 

        public function __construct( 
            \App\Amplificateur      $amplificateur,
            \App\Tuner              $tuner,
            \App\LecteurDVD         $dvd,
            \App\LecteurCD          $cd,
            \App\Projecteur         $projecteur,
            \App\Lumieres           $lumieres,
            \App\Ecran              $ecran,
            \App\MachineAPopcorn    $machineAPopcorn
        ) {
            $this->amplificateur    = $amplificateur; 
            $this->tuner            = $tuner;
            $this->dvd              = $dvd;
            $this->cd               = $cd;
            $this->projecteur       = $projecteur;
            $this->lumieres         = $lumieres;
            $this->ecran            = $ecran;
            $this->machineAPopcorn  = $machineAPopcorn; 
        }

        public function regarderFilm (string $film, string $dvd) {
            echo "Vous allez regarder un bon film ... <br>";
            $this->machineAPopcorn->marche();
            $this->machineAPopcorn->eclater();
            $this->lumieres->attenuer(10);
            $this->ecran->baisser();
            $this->projecteur->marche();
            $this->projecteur->modeGrandEcran();
            $this->amplificateur->marche();
            $this->amplificateur->setDvd($dvd);
            $this->amplificateur->setSurround();
            $this->amplificateur->setVolume(5);
            $this->dvd->marche();
            $this->dvd->jouer($film);
        }

        public function arreterFilm(string $film) {
            echo "C'est la fin du film ... <br>";
            $this->machineAPopcorn->arret();
            $this->lumieres->marche();
            $this->ecran->monter();
            $this->projecteur->arret();
            $this->amplificateur->arret();
            $this->dvd->stop($film);
            $this->dvd->ejecter();
            $this->dvd->arret();
        }

    }

?>