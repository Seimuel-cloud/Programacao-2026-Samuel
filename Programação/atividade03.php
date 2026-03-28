<?php 
    class Carro{
        public $marca;
        public $modelo;
        public $ano;
        public $cor; 
        public $velocidadeMaxima;

        public function acelerar(){
            echo " O carro está acelerando <br>";
        }
        public function frear(){
            echo " O carro está freando";
        }
    }
    $CarroI= new Carro();

    $CarroI->marca="Toyota";
    $CarroI->modelo="Corolla";
    $CarroI->ano="2020";
    $CarroI->cor="Prata";
    $CarroI->velocidadeMaxima="200 km/h";

    echo "O carro tem a marca " . $CarroI->marca."<br>";
    echo "O carro tem o modelo " . $CarroI->modelo." <br>";
    echo "O carro tem o ano " . $CarroI->ano."<br>";
    echo "O carro tem a cor " . $CarroI->cor . " <br>";
    echo "O carro tem a velocidade máxima " . $CarroI->velocidadeMaxima . " <br>";
    $CarroI->acelerar();
    $CarroI->frear();
    echo "<br><br>";

    $CarroII= new Carro();

    $CarroII->marca="Honda";
    $CarroII->modelo="Civic";
    $CarroII->ano="2021";
    $CarroII->cor="Branca";
    $CarroII->velocidadeMaxima="220 km/h";

    echo "O carro tem a marca " . $CarroII->marca."<br>";
    echo "O carro tem o modelo " . $CarroII->modelo." <br>";
    echo "O carro tem o ano " . $CarroII->ano."<br>";
    echo "O carro tem a cor " . $CarroII->cor . " <br>";
    echo "O carro tem a velocidade máxima " . $CarroII->velocidadeMaxima . " <br>";
    $CarroII->acelerar();
    $CarroII->frear();
?>