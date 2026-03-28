<?php

    class Triângulo{
        public $base;
        public $altura;
        public $ladoI;
        public $ladoII;
        public $ladoIII;

        public function calcularArea($base, $altura) {
            echo "Área " . ($base * $altura) / 2;
        }
        public function tipoTriangulo($ladoI, $ladoII, $ladoIII) {
            if ($ladoI == $ladoII && $ladoII == $ladoIII) {
                echo "Tipo equilátero";
            } elseif ($ladoI == $ladoII or $ladoII == $ladoIII or $ladoI == $ladoIII) {
                echo "Tipo isósceles";
            } else {
                echo "Tipo escaleno";
            }
        }
    }

    $TriânguloI = new Triângulo();
    
    $TriânguloI->base = 5;
    $TriânguloI->altura = 5;
    $TriânguloI->ladoI = 5;
    $TriânguloI->ladoII = 5;
    $TriânguloI->ladoIII = 5;

    echo "Base $TriânguloI->base <br>";
    echo "Altura $TriânguloI->altura <br>";
    $TriânguloI->calcularArea($TriânguloI->base, $TriânguloI->altura);
    echo "<br>";
    $TriânguloI->tipoTriangulo($TriânguloI->ladoI, $TriânguloI->ladoII, $TriânguloI->ladoIII);
    echo "<br><br>";
    
    $TriânguloII = new Triângulo();

    $TriânguloII->base = 8;
    $TriânguloII->altura = 5;
    $TriânguloII->ladoI = 8;
    $TriânguloII->ladoII = 5;
    $TriânguloII->ladoIII = 5;

    echo "Base $TriânguloII->base <br>";
    echo "Altura $TriânguloII->altura <br>";
    $TriânguloII->calcularArea($TriânguloII->base, $TriânguloII->altura);
    echo "<br>";
    $TriânguloII->tipoTriangulo($TriânguloII->ladoI, $TriânguloII->ladoII, $TriânguloII->ladoIII);
    echo "<br><br>";

    $TriânguloIII = new Triângulo();

    $TriânguloIII->base = 3;
    $TriânguloIII->altura = 7;
    $TriânguloIII->ladoI = 3;
    $TriânguloIII->ladoII = 6;
    $TriânguloIII->ladoIII = 7;

    echo "Base $TriânguloIII->base <br>";
    echo "Altura $TriânguloIII->altura <br>";
    $TriânguloIII->calcularArea($TriânguloIII->base, $TriânguloIII->altura);
    echo "<br>";
    $TriânguloIII->tipoTriangulo($TriânguloIII->ladoI, $TriânguloIII->ladoII, $TriânguloIII->ladoIII);
    echo "<br><br>";

    ?>