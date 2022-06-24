<?php

    namespace App;

    class Lumieres {

        public function marche() {
            echo "Lumières du Home cinéma allumées <br>";
        }

        public function attenuer(int $luminosite) {
            echo "Lumières du Home cinéma attenuées à $luminosite% <br>";
        } 
        
    }

?>