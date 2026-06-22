<?php
    class Funcionario {
        public string $nome;
        public float $salario;

        public function __construct(string $nome, float $salario) {
            $this->nome = $nome;
            $this->salario = $salario;
        }

        public function calcularBonus(): float {
            return $this->salario * 0.10;
        }
    }

    class Gerente extends Funcionario {
    }

    class Desenvolvedor extends Funcionario {
    }

    $gerente = new Gerente("João", 20000.00);
    $desenvolvedor = new Desenvolvedor("Maria", 8000.00);

    echo "Nome: " . $gerente->nome . "<br>";
    echo "Cargo: Gerente<br>";
    echo "Bônus: " . $gerente->calcularBonus() . "<br><br>";

    echo "Nome: " . $desenvolvedor->nome . "<br>";
    echo "Cargo: Desenvolvedor<br>";
    echo "Bônus: " . $desenvolvedor->calcularBonus() . "<br>";
?>