<?php

    namespace App;

    class LecteurDVD {
        
        public function marche() {
            echo "Super lecteur DVD en marche <br>";
        }

        public function jouer(string $film) {
            echo "Super lecteur DVD joue $film <br>";
        }

        public function ejecter() {
            echo "Super lecteur DVD éjecion <br>";
        }

        public function stop(string $film) {
            echo "Super lecteur DVD arrêté sur $film<br>";
        }

        public function arret() {
            echo "Super lecteur DVD arrêté <br>";
        }

    }

?>