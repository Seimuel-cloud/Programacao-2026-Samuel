<?php
    class Funcionario{
        private $nome;
        private $idade;
        private $salario;

        public function setNome($nome){
            if ($nome !== "") {
                $this->nome = $nome;
            } else {
                echo "Erro: Nome vazio!<br>";
            }
        }

        public function getNome(){
            return $this->nome;
        }

        public function setSalario($valor){
            if ($valor > 0) {
                $this->salario = $valor;
            } else {
                echo "Erro: Salário inicial deve ser maior que zero!<br>";
            }
        }

        public function getSalario(){
            return $this->salario;
        }
        
        public function aumentarSalario($valorAumento){
            if ($valorAumento > 0) {
                $this->salario = $this->salario + $valorAumento;
                echo "Sucesso: Aumento de R$ $valorAumento aplicado!<br>";
            } else {
                echo "Erro: O aumento deve ser um valor positivo! Tentativa: $valorAumento<br>";
            }
        }
}
    $func = new Funcionario();
    $func->setNome("Carlos");
    $func->setSalario(3000); // Salário inicial

    echo "Salário Atual: R$ " . $func->getSalario() . "<br>";
    echo "----------------------------<br>";

    echo "<b>Tentando aumento de R$ 500:</b><br>";
    $func->aumentarSalario(500);
    echo "Novo Salário: R$ " . $func->getSalario() . "<br><br>";

    echo "<b>Tentando aumento de R$ -200 (redução):</b><br>";
    $func->aumentarSalario(-200); 
    echo "Salário permanece: R$ " . $func->getSalario() . "<br><br>";

    echo "<b>Tentando aumento de R$ 0:</b><br>";
    $func->aumentarSalario(0);
    echo "Salário final: R$ " . $func->getSalario() . "<br>";
?>