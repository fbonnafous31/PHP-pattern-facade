<?php

    namespace App;

    class Amplificateur {
        
        public function marche() {
            echo "Magnifique amplificateur en marche <br>";
        }

        public function setDvd(string $dvd) {
            echo "Magnifique Amplificateur positionné sur le lecteur DVD $dvd <br>";
        }

        public function setSurround() {
            echo "Magnifique amplificateur réglé sur le surround (5 enceintes, 1 caisson de basses) <br>";
        }

        public function setVolume(int $volume) {
            echo "Magnifique amplificateur volume réglé sur $volume <br>";
        }

        public function arret() {
            echo "Magnifique amplificateur éteint <br>";
        }

    }

?>