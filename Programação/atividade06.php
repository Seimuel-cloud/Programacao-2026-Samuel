<?php 
    class Conta{
        public $numeroConta;
        public $titular;
        public $saldo;
        public $taxaJuros;

        public function Depositar($valor){
            echo "Depósito de R$ $valor <br>";
        }
        public function Sacar($valor){
            echo "Saque de R$ $valor <br>";
        }
    }
    $ContaI= new Conta();

    $ContaI->numeroConta="12345";
    $ContaI->titular="João";
    $ContaI->saldo="1000.00";
    $ContaI->taxaJuros="0.05";

    echo "A conta tem o número " . $ContaI->numeroConta."<br>";
    echo "A conta tem o titular <b>" . $ContaI->titular." </b><br>";
    echo "A conta tem o saldo R$" . $ContaI->saldo."<br>";
    echo "A conta tem a taxa de juros " . $ContaI->taxaJuros . " <br>";
    $ContaI->Depositar(500.00);
    echo "Saldo atual de R$ " . ($ContaI->saldo + 500.00) . " <br><br>";


    $ContaII= new Conta();

    $ContaII->numeroConta="61548";
    $ContaII->titular="Maria";
    $ContaII->saldo="1500.00";
    $ContaII->taxaJuros="0.03";

    echo "A conta tem o número " . $ContaII->numeroConta."<br>";
    echo "A conta tem o titular <b>" . $ContaII->titular." </b><br>";
    echo "A conta tem o saldo R$" . $ContaII->saldo."<br>";
    echo "A conta tem a taxa de juros " . $ContaII->taxaJuros . "<br>";
    $ContaII->Sacar(200.00);
    echo "Saldo atual de R$ " . ($ContaII->saldo - 200.00) . " <br><br>";
?>