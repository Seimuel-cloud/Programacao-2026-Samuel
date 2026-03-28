<?php 
    class Circulo{
        public $raio;

        public function calcularArea($raio) {
            echo "O círculo tem a área " . (pi() * pow($raio, 2));
        }
        public function calcularPerimetro($raio) {
            echo "O círculo tem o perímetro " . (2 * pi() * $raio);
        }
    }
    $CirculoI= new Circulo();

    $CirculoI->raio="5";

    echo "O círculo tem o raio " . $CirculoI->raio."<br>";
    $CirculoI->calcularArea($CirculoI->raio);
    echo "<br>";
    $CirculoI->calcularPerimetro($CirculoI->raio);
    echo "<br><br>";

?>