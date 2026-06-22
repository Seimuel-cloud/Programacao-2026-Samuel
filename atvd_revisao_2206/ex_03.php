<?php
    class Funcionario {
        protected string $nome;
        protected float $salario;
        protected string $cargo;

        public function __construct(string $nome, float $salario, string $cargo = "Funcionário") {
            $this->nome = $nome;
            $this->salario = $salario;
            $this->cargo = $cargo;
        }

        public function calcularBonus(): float {
            return $this->salario * 0.10;
        }

        public function exibirDados(): void {
            echo "Funcionario: {$this->nome} ({$this->cargo})<br>";
            echo "Bônus: " . $this->calcularBonus() . "<br>";
            echo "-----------------------------<br>";
        }
    }

    class Gerente extends Funcionario {
        public function __construct(string $nome, float $salario) {
            parent::__construct($nome, $salario, "Gerente");
        }

        public function calcularBonus(): float {
            return $this->salario * 0.20;
        }
    }

    class Desenvolvedor extends Funcionario {
        public function __construct(string $nome, float $salario) {
            parent::__construct($nome, $salario, "Desenvolvedor");
        }

        public function calcularBonus(): float {
            return $this->salario * 0.15;
        }
    }

    $funcionarios = [
        new Gerente("João", 10000.00),
        new Desenvolvedor("Maria", 8000.00)
    ];

    foreach ($funcionarios as $funcionario) {
        $funcionario->exibirDados();
    }
?>