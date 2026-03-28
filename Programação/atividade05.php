<?php 
    class Retangulo{
        public $comprimento;
        public $largura;

        public function calcularArea($comprimento, $largura) {
            echo "O retângulo tem a área " . ($comprimento * $largura);
        }
        public function calcularPerimetro($comprimento, $largura) {
            echo "O retângulo tem o perímetro " . (2 * ($comprimento + $largura));
        }
    }
    $RetanguloI= new Retangulo();

    $RetanguloI->comprimento="10";
    $RetanguloI->largura="5";

    echo "O retângulo tem o comprimento " . $RetanguloI->comprimento."<br>";
    echo "O retângulo tem a largura " . $RetanguloI->largura." <br>";
    $RetanguloI->calcularArea($RetanguloI->comprimento, $RetanguloI->largura);
    echo "<br>";
    $RetanguloI->calcularPerimetro($RetanguloI->comprimento, $RetanguloI->largura);
    echo "<br><br>";

    $RetanguloII= new Retangulo();

    $RetanguloII->comprimento="8";
    $RetanguloII->largura="4";
    $RetanguloII->area=($RetanguloII->comprimento * $RetanguloII->largura);
    $RetanguloII->perimetro= (2 * ($RetanguloII->comprimento + $RetanguloII->largura));

    echo "O retângulo tem o comprimento " . $RetanguloII->comprimento."<br>";
    echo "O retângulo tem a largura " . $RetanguloII->largura." <br>";
    $RetanguloII->calcularArea($RetanguloII->comprimento, $RetanguloII->largura);
    echo "<br>";
    $RetanguloII->calcularPerimetro($RetanguloII->comprimento, $RetanguloII->largura);
    echo "<br><br>";
?>